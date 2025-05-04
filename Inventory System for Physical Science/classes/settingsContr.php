<?php

class settingsContr extends Settings {


    public function modifyAuthChanges() {

        // if(isExistingInput($old_username, $old_password)) {
        //     // throw new Exception("Old username or password cant be used again!");
        // } 

        // if (emptyInputs($username, $password)) {

        // }

        
    }

    private function isExistingInput($old_username, $old_password) {
        if ($this->checkUsernamePassword($old_username, $old_password) === true) {
            return true;
        } else {
            return false;
        }
    }
    
    private function emptyInputs($username, $password) {
        return empty($username) || empty($password);
    }
    
    private function isValidUsername($username) {
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            return false;
        }   
        return true;
    }

    private function isPasswordStrong($password) {
        if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
            return false;
        }
        return true;
    }
    
    private function isSameUsername($old_username, $new_username) {
        return $old_username === $new_username;
    }
    
    private function isSamePassword($old_password, $new_password) {
        return $old_password === $new_password;
    }
    
    private function updateUsername($user_id, $new_username) {
        if ($this->isValidUsername($new_username)) {
            $this->updateAdminUsername($user_id, $new_username);
            return true;
        } else {
           return false;
        }
    }
    
    private function updatePassword($user_id, $new_password) {
        if ($this->isPasswordStrong($new_password)) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $this->updateAdminPassword($user_id, $hashed_password);
            return true;
        } else {
            return false;
        }
    }

}