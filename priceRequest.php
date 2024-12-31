<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "eat42";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_GET['id']); // Utiliser intval pour s'assurer que $id est un entier

$sql = "SELECT p_price FROM produits WHERE p_id = $id";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    // Récupérer les données de la ligne
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} 

$conn->close();

// Retourner les données au format JSON
echo json_encode($data);
?>