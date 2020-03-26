<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=insertion_sql', 'adrien', 'adrien');
} catch (\Throwable $th) {
    die('error sql connection');
}


$firstname = htmlspecialchars($_POST['firstname']);
$name = htmlspecialchars($_POST['name']);
$password = htmlspecialchars($_POST['password']);

echo '<br/>'.'Bonjour '. $firstname.' '.$name.' '.' votre mot de pass est'.' '.$password;

$sql = "
INSERT INTO user(name, firstname, password) 
VALUES (?,?,?)
";
$stmt = $pdo->prepare($sql);
$stmt->execute([$firstname, $name, $password]);

?>
