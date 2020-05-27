<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <meta name="description" content="Inventar">
        <meta name="author" content="Martin Eide Bjørndal">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/src/css/style.css">
</head>
<body>
    <button class="back" onclick="window.location='../'">
      <img src="/src/icons/back.png">
    </button> <!-- Tilbake knapp -->
    <h1 id="titel">Ny inventar</h1>

    <div class="nyinventarform">
      <p id="info">Bruk format: a-z, max 15 bokstaver. Bare mellomrom på størrelse. <br>Vekt må inneholde , Størrelse og vekt oppgies uten enheter.</p>
      <form action="insert.php" method="post">

        <input type="text" name="navn" placeholder="*Navn" required pattern="[a-z ]{1,15}"/><br><br>
        <input type="text" name="antall" placeholder="*Antall" required pattern="[1-9]{1,5}"/><br><br>
        <input type="text" name="plassering" placeholder="*Plassering" required pattern="[a-z]{1,15}"/><br><br>
        <input type="text" name="vekt" placeholder="Vekt (kg)" pattern="[0-9]{0,15}[.,][0-9]{0,15}"/><br><br>
        <input type="text" name="størrelse" placeholder="Størrelse x y z (cm)" pattern="[0-9]{0,15}( )[0-9]{0,15}( )[0-9]{0,15}"/><br><br>
        <input type="text" name="kommentar" placeholder="Kommentar" pattern="[a-z,. ]{0,1024}"/><br><br>
        <input type="submit">

      </form>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</body>
</html>