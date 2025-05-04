<?php

class EquipmentContr extends Equipment {

    public function addEquipment($name, $quantity, $category, $image, $error, $size, $tmpname) {

        if (!$this->checkFileError($error)) {
            throw new Exception("File Error!");
        }

        if (!$this->checkFileSize($size)) {
            throw new Exception("File Exceeded 2MB");
        }

        if (!$this->checkFileExtension($image)) { 
            throw new Exception("Only Image Files are accepted");
        }

        $newFilename = uniqid("equip_", true) . "." . pathinfo($image, PATHINFO_EXTENSION);
        $destination = "../assets/uploads/" . $newFilename;

        if (!move_uploaded_file($tmpname, $destination)) {
            throw new Exception("Failed to upload file.");
        }

        return $this->setEquipment($name, $quantity, $category, $newFilename);
    }

    private function checkFileError($error) {
        return $error === 0; 
    }

    private function checkFileSize($size) {
        return $size <= 2000000; 
    }

    private function checkFileExtension($image) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        return in_array($ext, $allowed);
    }
}
