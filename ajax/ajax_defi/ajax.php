<?php

if (isset($_POST['email']) && $_POST['keypass']) {

  $email = htmlspecialchars($_POST['email']);
  $keypass = htmlspecialchars($_POST['keypass']);

  try {
    // Note: certains serveurs n'acceptent pas localhost
    $bdd = new PDO('mysql:host=localhost:3308;dbname=ajax_defi;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  } catch (Exception $e) {
    die('Erreur1 : ' . $e->getMessage());
  }
  $req = $bdd->prepare('SELECT * FROM user WHERE email = :email');
  $req->bindParam(':email', $email);
  $req->execute();
  $data = $req->fetchAll(PDO::FETCH_ASSOC);

  if (count($data) > 0) {
    // ici on peut ouvrir la session et définir les infos
    echo json_encode(array('success' => 1));
  } else {
    echo json_encode(array('success' => 0));
  }
} else {
  echo json_encode(array('success' => 0));
}
