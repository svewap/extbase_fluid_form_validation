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





}