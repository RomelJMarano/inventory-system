<?php

class EquipmentContr extends Equipment {

    public function addEquipment($name, $quantity, $category, $image, $error, $size, $filename) {

        if (!$this->checkFileError($error)) {
            throw new Exception("File Error!");
        }

        if(!$this->checkFileSize($size)) {
            throw new Exception("File Exceeded to 2MB");
        }

        if(!$this->checkFileExtension($filename)) {
            throw new Exception("Only Images File are accepted");
        }

        return $this->setEquipment($name, $quantity, $category, $filename);

    }

    private function checkFileError($error) {
        return $error === 0; 
    }

    private function checkFileSize($size) {
        return $size <= 2000000; 
    }

    private function checkFileExtension($filename) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        return in_array($ext, $allowed);
    }
}
