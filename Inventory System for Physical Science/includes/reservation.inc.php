<?php
session_start();

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid input"]);
    exit();
}

$_SESSION['reservation'] = [
    "student_name" => $data['student_name'],
    "course_block" => $data['course_block'],
    "professor_name" => $data['professor_name'],
    "subject" => $data['subject'],
    "email" => $data['email'],
    "date_of_borrowing" => $data['date_of_borrowing'],
    "start_time" => $data['start_time'],
    "end_time" => $data['end_time'],
    "equipments" => $data['equipments']
];

require_once '../classes/dbh.class.php';
require_once '../classes/reservations.class.php';
require_once '../classes/reservationsContr.class.php';

try {
    $reservation = new ReservationsContr();
    $reservation->addReservation($_SESSION['reservation']);
    echo json_encode(["status" => "success"]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
 

