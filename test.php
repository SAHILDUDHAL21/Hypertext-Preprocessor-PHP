<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$xmlFile = "Slip_05.xml";  // Ensure this file is in the same directory as this script

if (!file_exists($xmlFile)) {
    die("Error: XML file not found at expected location.");
}

$xmlContent = file_get_contents($xmlFile);
if (!$xmlContent) {
    die("Error: Unable to read XML file.");
}

echo "<h3>Raw XML Content:</h3><pre>";
echo htmlspecialchars($xmlContent);
echo "</pre>";
?>
