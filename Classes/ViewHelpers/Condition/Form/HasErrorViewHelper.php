<?php
namespace WapplerSystems\ExtbaseFluidFormValidation\ViewHelpers\Condition\Form;


use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * Class HasErrorViewHelper
 *
 * @package Zwo3\Klimatour\ViewHelpers\Form
 */
class HasErrorViewHelper extends AbstractViewHelper {

    public function initializeArguments()
    {
        $this->registerArgument('for', 'string', 'The property', true);
        $this->registerArgument('then', 'string', 'The class to add', true);
    }

    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return mixed
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $controllerContext = $renderingContext->getcontrollerContext();
        $validationResults = $controllerContext->getRequest()->getOriginalRequestMappingResults();
        $for = $arguments['for'];
        $then = $arguments['then'];

        if ($validationResults !== null && $for !== '') {
            $validationResults = $validationResults->forProperty($for);
        }
        if ($validationResults->hasErrors()) {
            return $then;
        }
        return "";
    }

}
