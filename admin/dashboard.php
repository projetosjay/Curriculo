<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once '../config/database.php';

// Lógica para gerenciar projetos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Adicionar/editar projeto
    $title = $_POST['title'];
    $description = $_POST['description'];
    $technologies = $_POST['technologies'];
    
    if (isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../images/projects/$image");
    }
    
    $stmt = $pdo->prepare("INSERT INTO projects (title, description, technologies, image) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $description, $technologies, $image]);
}
?>