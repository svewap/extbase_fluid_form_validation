<?php
namespace WapplerSystems\ExtbaseFluidFormValidation\Controller;



use WapplerSystems\ExtbaseFluidFormValidation\Domain\Model\Profile;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class ProfileController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {


    /**
     *
     * @param Profile $profile
     * @ignorevalidation $profile
     */
    public function formAction(Profile $profile = null)
    {

        if ($profile == NULL) $profile = new Profile();

        $this->view->assignMultiple(
            array(
                'profile' => $profile,
                'settings' => $this->settings,
            )
        );
    }

    /**
     * @param Profile $profile
     * @validate $profile WapplerSystems\ExtbaseFluidFormValidation\Validator\PasswordValidator
     */
    public function submitAction(Profile $profile)
    {
        /* irgendwas mit den Daten machen */



    }


    protected function getErrorFlashMessage()
    {
        return LocalizationUtility::translate('msg.formerror', 'extbase_fluid_form_validation');
    }


}