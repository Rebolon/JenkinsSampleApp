<?php

namespace JenkinsSampleApp\Entity;

use JenkinsSampleApp\Entity\EntityAbstract;
use \DateTime;

/**
 * 
 */
class Person 
	extends EntityAbstract
{

    /**
     * Enter description here ...
     * @var string
     */
    protected $_name;
    
    /**
     * Enter description here ...
     * @var string
     */
    protected $_firstname;
    
    /**
     * Enter description here ...
     * @var string
     */
    protected $_maidenName;
    
    /**
     * Enter description here ...
     * @var DateTime
     */
    protected $_birthdate;

    /**
     * 
     * @param string $name
     * @return JenkinsSampleApp_Entity_Person
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * 
     * @param string $firstname
     * @return JenkinsSampleApp\Entity\Person
     */
    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
        return $this;
    }

    /**
     * 
     * @param string $maidenname
     * @return JenkinsSampleApp\Entity\Person
     */
    public function setMaidenname($maidenname)
    {
        $this->_maidenname = $maidenname;
        return $this;
    }

    /**
     * 
     * @param DateTime $birthdate
     * @return JenkinsSampleApp\Entity\Person
     */
    public function setBirthdate(DateTime $birthdate)
    {
        $this->_birthdate = $birthdate;
        return $this;
    }
}
