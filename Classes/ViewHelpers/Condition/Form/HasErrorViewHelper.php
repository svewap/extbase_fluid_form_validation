<?php
namespace WapplerSystems\ExtbaseFluidFormValidation\ViewHelpers\Condition\Form;


/**
 * Class HasErrorViewHelper
 *
 * Hätte diese gerne mit AbstractConditionViewHelper realisiert, aber da gibt es wegen der static Methoden Probleme auf den controllerContext zurückzugreifen
 *
 * @package WapplerSystems\ExtbaseFluidFormValidation\ViewHelpers\Condition\Form
 */
class HasErrorViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{


    /**
     * @param string $for
     * @param string $then
     * @return string
     */
    public function render($for = '', $then = '')
    {

        $validationResults = $this->controllerContext->getRequest()->getOriginalRequestMappingResults();

        if ($validationResults !== null && $for !== '') {
            $validationResults = $validationResults->forProperty($for);
        }

        if ($validationResults->hasErrors()) {
            return $then;
        }
        return "";
    }


}