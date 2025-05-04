<?php
session_start();

if (isset($_POST['equipment_id'])) {
    $equipmentId = $_POST['equipment_id'];

    if (isset($_SESSION['cart'][$equipmentId])) {
        unset($_SESSION['cart'][$equipmentId]);
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Item not found in cart']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No item ID provided']);
}
?>
