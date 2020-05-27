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
    <h1 id="titel">Ny Bruker</h1>

    <div class="nyinventarform">
        <p id="info">Bruk format: A-Za-z, max 15 bokstaver.<br> Pin må inneholde mellom 6 og 10 tall.</p>
        <form action="insert.php" method="post">
            <input type="text" name="fnavn" placeholder="*Fornavn" required pattern="[A-Za-z ]{1,15}"/><br><br>
            <input type="text" name="enavn" placeholder="*Etternavn" required pattern="[A-Za-z ]{1,15}"/><br><br>
            <input type="text" name="pin" placeholder="*Pin" required pattern="[0-9]{6, 20}"/><br><br>
            <input type="checkbox" id="er_admin" name="er_admin"/>
            <label for="er_admin">Admin</label>
            <br><br>
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