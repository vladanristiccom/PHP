<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

  <?php 

    $showWelcomeMessage = false;

    if(isset($_GET["reg"])) {

      $showWelcomeMessage = true;

    }

  ?>

  <div class="container">

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
      <form class="w-50">
        <h2>Login</h2>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input class="form-control" type="text" placeholder="E-mail">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Password</label>
          <input class="form-control" type="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>

        <?php 

          if($showWelcomeMessage) {

            echo "<div class='alert alert-success mt-2' role='alert'>Uspešna registracija. Molimo Vas logujte se!</div>";  

          }

        ?>

      </form>
    </div>

  </div>

</body>
</html>