<?php

class Login {
      private $idb;
      private $email;
      private $password;
      private $typeUser;
      private $INSTANCE_LOGIN = null;

      public function __construct() { }

      public static function getInstanceLogin() {
        if (empty($INSTANCE_LOGIN)) { $INSTANCE_LOGIN = new Login(); }
        return $INSTANCE_LOGIN;
      }

      public function getPassword() { return $this->password; }
      public function setPassword($password) { $this->password = $password; }

      public function getEmail() { return $this->email; }
      public function setEmail($email) { $this->email = $email; }

      public function getId() { return $this->id; }
      public function setId($id) { return $this->id = $id; }

      public function getTypeUser() { return $this->typeUser; }
      public function setTypeUser($type) { $this->typeUser = $type; }
}
