<?php

namespace Tests\JenkinsSampleApp\Entity;

use \PHPUnit_Framework_TestCase;
use \DateTime;
use JenkinsSampleApp\Entity\Person;

/**
 *
 */
class JenkinsSampleApp_Entity_PersonTest extends PHPUnit_Framework_TestCase
{
    /**
     * Enter description here ...
     * @var JenkinsSampleApp_Entity_Person
     */
    protected $_person;
    
    /**
     * (non-PHPdoc)
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $this->_person = new Person();
    }

    /**
     * test that setter and getter return expected value
     */
    public function testSetter()
    {
        $expectedName = 'myName';
        $expectedMaidenname = 'myMaidenName';
        $expectedFirstname = 'myFirstName';
        $expectedBirthdate = new DateTime;
        
        $this->_person
            ->setName($expectedName)
            ->setFirstname($expectedFirstname)
            ->setMaidenname($expectedMaidenname)
            ->setBirthdate($expectedBirthdate);
            
        $this->assertEquals($expectedName, $this->_person->name);
        $this->assertEquals($expectedFirstname, $this->_person->firstname);
        $this->assertEquals($expectedMaidenname, $this->_person->maidenname);
        $this->assertEquals($expectedBirthdate, $this->_person->birthdate);
    }
}
