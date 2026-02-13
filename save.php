<?php
// Set headers for CORS and JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Get the raw POST data
$jsonData = file_get_contents('php://input');

// Validate if data is present
if (!$jsonData) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
    exit;
}

// Validate JSON
$data = json_decode($jsonData);
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid JSON']);
    exit;
}

// Save to config.json
if (file_put_contents('config.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
    echo json_encode(['status' => 'success', 'message' => 'Config updated successfully']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Failed to save config file. Check permissions.']);
}
?>
