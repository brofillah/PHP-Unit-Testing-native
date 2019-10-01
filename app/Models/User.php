<?php

namespace App\Models;

class User
{
   public $firstname, $lastname;

   public function setFirstName($firstname)
   {
      $this->firstname = trim($firstname);
   }

   public function getFirstName()
   {
      return $this->firstname;
   }

   public function setLastName($lastname)
   {
      return $this->lastname = trim($lastname);
   }

   public function getLastName()
   {
      return $this->lastname;
   }

   public function getFullName()
   {
      return "$this->firstname $this->lastname";
   }
}
