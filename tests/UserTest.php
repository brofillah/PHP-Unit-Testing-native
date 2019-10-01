<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
   public $user;
   public function setUp(): void //tdk mereturn data apapun
   {
      $this->user = new User();
   }
   // TDD (Test Driven Development)
   /** @test */
   public function get_first_username()
   {
      $this->user->setFirstName('bowo');
      $this->assertEquals($this->user->getFirstName(), 'bowo');
   }

   /** @test */
   public function get_last_name()
   {
      $this->user->setLastName('fajar');
      $this->assertEquals($this->user->getLastName(), 'fajar');
   }

   /** @test */
   public function firstname_and_lastname_trim()
   {
      $this->user->setFirstName('   bowo');
      $this->user->setLastName('fajar     ');
      $this->assertEquals($this->user->getFullName(), 'bowo fajar');
   }
}
