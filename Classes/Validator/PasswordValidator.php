<?php
namespace WapplerSystems\ExtbaseFluidFormValidation\Validator;

class PasswordValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator
{
    /**
     * Object Manager
     *
     * @var \TYPO3\CMS\Extbase\Object\ObjectManager
     * @inject
     */
    protected $objectManager;

    /**
     * Is valid
     *
     * @param \WapplerSystems\ExtbaseFluidFormValidation\Domain\Model\Profile $profile
     * @return boolean
     */
    public function isValid($profile) {
        if ($profile->getPassword() !== $profile->getPasswordConfirm()) {
            $error = $this->objectManager->get(
                'TYPO3\CMS\Extbase\Validation\Error',
                'Password and password confirmation do not match.', 2343422434);
            $this->result->forProperty('password')->addError($error);
            return FALSE;
        }
        return TRUE;
    }

}