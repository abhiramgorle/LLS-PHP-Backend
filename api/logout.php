<?php
session_start();
session_destroy(); // Destroy the session
echo json_encode(["success" => true, "message" => "Logged out successfully"]);
?>