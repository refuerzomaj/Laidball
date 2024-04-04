<?php
// Read the transaction ID from the request body
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);

// Ensure that transactionId is present
if (!isset($data->transactionId)) {
    http_response_code(400);
    echo json_encode(array("error" => "Transaction ID not provided"));
    exit();
}

$transactionId = $data->transactionId;

// Perform database update operation
// Example using PDO (replace with your own database connection method)
try {
    $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('UPDATE transaction SET fee_status = 1 WHERE id = :transactionId');
    $stmt->bindParam(':transactionId', $transactionId);
    $stmt->execute();

    $response = array("message" => "Database updated successfully");
    echo json_encode($response);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(array("error" => "Database error: " . $e->getMessage()));
    exit();
}
?>
