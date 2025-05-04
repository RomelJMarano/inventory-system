<?php

session_start();

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST['equipmentName']) &&
    isset($_POST['equipmentQuantity']) &&
    isset($_POST['equipmentCategory']) &&
    isset($_FILES['equipmentImageFile'])) {

    $equipment_name = htmlspecialchars($_POST['equipmentName']);
    $equipment_quantity = htmlspecialchars($_POST['equipmentQuantity']);
    $equipment_category = htmlspecialchars($_POST['equipmentCategory']);
    $equipment_image = $_FILES['equipmentImageFile']['name'];
    $equipment_image_tmp_name = $_FILES['equipmentImageFile']['tmp_name'];
    $equipment_file_size = $_FILES['equipmentImageFile']['size'];
    $equipment_file_error = $_FILES['equipmentImageFile']['error'];

    require_once '../classes/dbh.class.php';
    require_once '../classes/equipment.class.php';
    require_once '../classes/equipmentContr.class.php';

    try {
        $equipment = new EquipmentContr();
        $equipment->addEquipment(
            $equipment_name,
            $equipment_quantity,
            $equipment_category,
            $equipment_image,        // ✅ fixed this
            $equipment_file_error,
            $equipment_file_size,
            $equipment_image_tmp_name
        );

        echo json_encode([
            'status' => 'success'
        ]);

    } catch (PDOException $e) {
        http_response_code(500); // optional but good
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }

}
