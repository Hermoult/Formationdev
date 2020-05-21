<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>
    <input type="text" id="email_verif" name="email">
    <input type="text" id="keypass_verif" name="keypass">
    <button id="ajaxbutton"> Envoyer </button>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>
    $("button").click(function() {
      var email = $("#email_verif").val();
      var keypass = $("#keypass_verif").val();
      $.ajax({
        // La ressource ciblée
        url: 'ajax.php',
        // Le type de la requête HTTP.
        type: 'POST',
        // La donnée a envoyer
        data: 'email=' + email + '&keypass=' + keypass,
        // en cas de succès code_html contient le json renvoyé
        success: function(response) {
          var jsonData = JSON.parse(response);

          // user is logged in successfully in the back-end
          // let's redirect
          if (jsonData.success == "1") {
            location.href = 'home.php';
          } else if (jsonData.success == "0") {
            alert('Identifiants invalides!');
          } else {
            alert('erreur du back-end');
          }
        },
        // en cas d'erreur
        error: function(resultat, statut, erreur) {},
        // lorsque tout le processus est traité
        complete: function(resultat, statut) {}
      });
    });
  </script>
</body>

</html>