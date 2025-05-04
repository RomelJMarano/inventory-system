<?php

class loginContr extends Login {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    private function emptyInput() {
        return empty($this->username) || empty($this->password);
    }

    private function invalidUsername() {
        return !preg_match("/^[a-zA-Z0-9_]*$/", $this->username);
    }


    public function loginUser() {
        if ($this->emptyInput()) {
            throw new Exception("Empty fields are not allowed.");
        }

        if ($this->invalidUsername()) {
            throw new Exception("Invalid username format.");
        }

        return $this->getUser($this->username, $this->password);
    }
}
