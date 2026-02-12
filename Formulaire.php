<?php
// Identifiants prédéfinis
$login_ok = "admin";
$password_ok = "1234";

// Données saisies
$username = $_POST["username"];
$password = $_POST["password"];

if ($username === $login_ok && $password === $password_ok) {
    echo "<h2 style='color:green'>✅ Connexion réussie</h2>";
} else {
    echo "<h2 style='color:red'>❌ Identifiant ou mot de passe incorrect</h2>";
}