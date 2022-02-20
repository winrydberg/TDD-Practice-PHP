<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserModelTest extends TestCase
{

    public function testThatWeCanGetFirstName()
    {
        $user = new User();
        $user->setFirstName('Edwin');

        $this->assertEquals("Edwin", $user->getFirstName());
    }

    public function testThatWecanGetLastName()
    {
        $user = new User();
        $user->setLastName('Senunyeme');

        $this->assertEquals("Senunyeme", $user->getLastName());
    }

    public function testThatFullNameIsReturned()
    {
        $user = new User();
        $user->setFirstName('Edwin');
        $user->setLastName('Senunyeme');

        $this->assertEquals("Edwin Senunyeme", $user->getFullName());
    }

    public function testThatFirstNameLastNameAreTrimed()
    {
        $user = new User();
        $user->setFirstName('   Edwin  ');
        $user->setLastName('           Senunyeme ');

        $this->assertEquals("Edwin Senunyeme", $user->getFullName());
    }


    public function testEmailAddressCanBeSet()
    {
        $email = "'edwin@gmail.com";
        $user = new User();
        $user->setEmail($email);

        $this->assertEquals($user->getEmail(), $email);
    }


    public function testEmailvariablesContainCorrectValues()
    {
        $user = new User();
        $user->setFirstName('   Edwin  ');
        $user->setLastName('  Senunyeme ');
        $user->setEmail('edwin@gmail.com');

        $emailvariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailvariables);
        $this->assertArrayHasKey('email', $emailvariables);

        $this->assertEquals($emailvariables['full_name'], "Edwin Senunyeme");
        $this->assertEquals($emailvariables['email'], "edwin@gmail.com");
    }
}