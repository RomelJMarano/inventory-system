<?php

class Equipment extends Dbh {

    protected function setEquipment($name, $quantity, $category, $filename) {

        $sql = "INSERT INTO `equipments`(`equipment_name`, 
                                         `equipment_quantity`, 
                                         `equipment_category`, 
                                         `equipment_file_name`) 
                                        VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        if(!$stmt->execute([$name, $quantity, $category, $filename])) {
            return false;
        } else {
            return true;
        }

        $stmt = null;

    }


}
