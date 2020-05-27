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

    <button class="ny_inventar" onclick="window.location='/admin/brukere/ny'">
      <img src="/src/icons/add.png">
    </button> <!-- Ny Bruker knapp -->

    <div class="container-fluid" id="utskjekkcontainer">
      <div class="row justify-content-center">
        <div class="col-mv-10 bg-light mt-5 rounded p-3">
          <h1 class="text-primary p-2">Brukere</h1>
          <hr>
          <div class="form-inline">
            <label for="search" class="font-weight-bold lead text-dark">Søk</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="search" id="search_text" class="form-control form-control-lg rounded-0 border-primary" placeholder="Søk...">
          </div>
          <hr>
          <?php
            include "../../src/fn/init.php";
            $stmt=$conn->prepare("SELECT * FROM brukere");
            $stmt->execute();
            $result=$stmt->get_result();
          ?>
          <table class="table table-hover table-light table-striped" id="table_data">
            <thead>
              <tr>
                <th>#</th>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Utskjekket</th>
                <th>Admin</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["fornavn"]; ?></td>
                  <td><?php echo $row["etternavn"]; ?></td>
                  <td><?php echo $row["utskjekket"]; ?></td>
                  <td><?php echo $row["is_admin"]; ?></td>
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
