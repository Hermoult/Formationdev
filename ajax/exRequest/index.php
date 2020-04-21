<!doctype html>
<html lang="en">

<head>
    <title>Exo Ajax</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<h2>L'objet XMLHttpRequest</h2>
        <button type="button" onclick=loadDoc()>Change Content</button>
    <div id="demo">
        
    </div>
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status ==200){
                    document.getElementById("demo").innerHTML =this.responseText;
                }
            };
            xhttp.open("GET", "ajaxInfo.txt",true);
            xhttp.send();
        }
    </script>
</body>
</html>