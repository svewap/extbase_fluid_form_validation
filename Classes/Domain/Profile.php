<?php
namespace WapplerSystems\ExtbaseFluidFormValidation\Domain\Model;



class Profile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var string
     * @validate NotEmpty
     * @validate StringLength(minimum=2, maximum=50)
     */
    protected $firstname = "";


    /**
     * @var string
     * @validate NotEmpty
     * @validate StringLength(minimum=2, maximum=50)
     */
    protected $lastname = "";


    /**
     * @var string
     * @validate NotEmpty
     * @validate EmailAddress
     */
    protected $email = "";



    /**
     * @var string
     * @validate NotEmpty
     * @validate StringLength(minimum=8, maximum=22)
     */
    protected $password = "";


    /**
     * @var string
     * @validate NotEmpty
     * @validate StringLength(minimum=8, maximum=22)
     */
    protected $passwordConfirm = "";



    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPasswordConfirm(): string
    {
        return $this->passwordConfirm;
    }

    /**
     * @param string $passwordConfirm
     */
    public function setPasswordConfirm(string $passwordConfirm)
    {
        $this->passwordConfirm = $passwordConfirm;
    }





}