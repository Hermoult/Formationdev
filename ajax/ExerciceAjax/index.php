<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>EXERCICE IDENTIFICATION</title>
</head>

<body class="p-3">
    <input type="text" id="email_verif" name="email">
    <input type="text" id="keypass_verif" name="keypass">
    <button id="buttonSearch"> Rechercher </button>
    <button id="buttonCreate"> Créer </button>


    <script>
        $("#buttonSearch").click(function() {
            var email = $("#email_verif").val();
            var keypass = $("#keypass_verif").val();
            $.ajax({
                url: 'ajax.php',
                type: 'POST',
                data: 'email=' + email + '&keypass=' + keypass,
                success: function(response) {
                    var jsonData = JSON.parse(response);

                    if (jsonData.success == "1") {

                        location.href = 'home.php';
                    } else if (jsonData.success == "0") {
                        alert('Identifiants invalides!');
                    } else {
                        alert('erreur du back-end');
                    }
                },
            });
        });

        $("#buttonCreate").click(function() {
            var email = $("#email_verif").val();
            var keypass = $("#keypass_verif").val();
            $.ajax({
                url: 'create.php',
                type: 'POST',
                data: 'email=' + email + '&keypass=' + keypass,
                success: function(response) {
                    alert(response);
                },
            });
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>