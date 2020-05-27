<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="description" content="Inventar">
    <meta name="author" content="Martin Eide Bjørndal">
    <title>Ut</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css/style.css">
  </head>

  <body>
    <button class="back" onclick="window.location='../'">
      <img src="/src/icons/back.png">
    </button> <!-- Tilbake knapp -->

    <div class="container-fluid" id="utskjekkcontainer">
      <div class="row justify-content-center">
        <div class="col-mv-10 bg-light mt-5 rounded p-3">
          <h1 class="text-primary p-2">Innskjekk</h1>
          <hr>
          <div class="form-inline">
            <label for="search" class="font-weight-bold lead text-dark">Søk</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="search" id="search_text" class="form-control form-control-lg rounded-0 border-primary" placeholder="Søk...">
          </div>
          <hr>
          <?php
            include "../src/fn/init.php";
            $stmt=$conn->prepare("SELECT * FROM inventar");
            $stmt->execute();
            $result=$stmt->get_result();
          ?>
          <table class="table table-hover table-light table-striped" id="table_data">
            <thead>
              <tr>
                <th>#</th>
                <th>Navn</th>
                <th>Antall</th>
                <th>Tilgjengelig</th>
                <th>Plassering</th>
                <th>Vekt (kg)</th>
                <th>Størrelse x y z (cm)</th>
                <th>Kommentar</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["navn"]; ?></td>
                  <td><?php echo $row["antall"]; ?></td>
                  <td><?php echo $row["antall_tilgjengelig"]; ?></td>
                  <td><?php echo $row["plassering"]; ?></td>
                  <td><?php echo $row["vekt"]; ?></td>
                  <td><?php echo $row["størrelse"]; ?></td>
                  <td><?php echo $row["kommentar"]; ?></td>
                </tr>
              <?php } ?>
             </tbody>

           </table>

        </div>
      </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  </body>

</html>
