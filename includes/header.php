<?php
session_start();
require_once 'config/database.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevFolio - Portfólio Profissional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        html { scroll-behavior: smooth; }
        .section { padding: 60px 0; }
        .gradient-text {
            background: linear-gradient(45deg, #e77a77 0%, #54343f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .custom-gradient {
            background: linear-gradient(135deg, #e77a77 0%, #54343f 100%);
        }
        .hover-gradient:hover {
            background: linear-gradient(135deg, #54343f 0%, #e77a77 100%);
        }
    </style></head>
<body>