<?php

class Reservations extends Dbh {
    protected function setReservation($data) {
        $pdo = $this->connect();
    
        $stmt = $pdo->prepare("INSERT INTO reservations 
            (student_name, course_block, instructor_name, subject, email, reservation_date, time_start, time_end)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
        $stmt->execute([
            $data['student_name'],
            $data['course_block'],
            $data['professor_name'],
            $data['subject'],
            $data['email'], 
            $data['date_of_borrowing'],
            $data['start_time'],
            $data['end_time']
        ]);
    
        $reservationId = $pdo->lastInsertId();
    
        $equipStmt = $pdo->prepare("INSERT INTO reservation_equipments (reservation_id, equipment_id, quantity) VALUES (?, ?, ?)");
    
        foreach ($data['equipments'] as $item) {
            $equipStmt->execute([
                $reservationId,
                $item['equipment_id'],
                $item['quantity']
            ]);
        }
    }
    
}
