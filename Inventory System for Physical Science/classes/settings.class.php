<?php

class Settings extends Dbh {

    protected function checkUsernamePassword($old_username, $old_password) {

        $sql = "SELECT * FROM admin WHERE admin_username = ? OR admin_password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$old_username, $old_password]);
        $result = $stmt->fetch();

        if($result->rowCount() > 0) {

            return true;

        } else {

            return false;
            
        }
    
    }

    protected function updateAdminUsername($new_username, $old_username) {

    $sql = "UPDATE users SET admin_username =  ? WHERE admin_username = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$new_username, $old_username]);
    $result = $stmt->fetch();

    if($result->rowCount() > 0) {
        return true;
    } else {
        return false;
    }

    }

    protected function updateAdminPassword($new_password, $admin_username) {
        
    $sql = "UPDATE users SET admin_password = ? WHERE admin_username = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$new_password, $admin_username]);
    return $stmt->rowCount() > 0;

    }

}