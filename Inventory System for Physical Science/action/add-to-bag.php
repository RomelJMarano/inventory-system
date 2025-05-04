<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['equipment_id']) && isset($_POST['equipment_name']) && isset($_POST['equipment_img'])) {
    $equipmentId = $_POST['equipment_id'];
    $equipmentName = $_POST['equipment_name'];
    $equipmentImg = $_POST['equipment_img'];

    if (isset($_SESSION['cart'][$equipmentId])) {
       
        $_SESSION['cart'][$equipmentId]['quantity']++;
    } else {

        $_SESSION['cart'][$equipmentId] = [
            'name' => $equipmentName,
            'img' => $equipmentImg,
            'quantity' => 1
        ];
        
    }

    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
}
?>
