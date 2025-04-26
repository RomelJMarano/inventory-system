<?php


class Login extends Dbh {

    protected function getUser($username, $password) {
        $sql = "SELECT * FROM admin WHERE admin_username = ?";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$username])) {
            throw new Exception("Statement execution failed.");
        }

        if ($stmt->rowCount() === 0) {
            throw new Exception("User not found");
        }

        $user = $stmt->fetch();

        if (!isset($user)) {
            throw new Exception("User not found.");
        }

            if (!isset($user['admin_password'])) {
            throw new Exception("Password is incorrect!");
        }

        $checkPassword = password_verify($password, $user['admin_password']);

        if (!$checkPassword) {
            throw new Exception("Password is incorrect.");
        }

        $_SESSION['loginUsername'] = $user['admin_username'];
        $_SESSION['userId'] = $user['admin_id'];
    }
}
