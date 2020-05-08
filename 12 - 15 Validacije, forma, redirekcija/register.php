<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

  <?php 

    $passwordRepeatError = false;
    $emptyError = false;
    $bioLengthError = false;
    $emailError = false;

    $failedValidation = false;

    if($_SERVER["REQUEST_METHOD"] == "POST") {

      if(empty($_POST["email"]) || 
        empty($_POST["password"]) || 
        empty($_POST["passwordRepeat"]) || 
        empty($_POST["bio"])) {

        $emptyError = true;
        $failedValidation = true;

      } else {

        // validacije
        if($_POST["password"] != $_POST["passwordRepeat"]) {
          $passwordRepeatError = true;
        }

        if(strlen($_POST["bio"]) < 5) {
          $bioLengthError = true;
        } 

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          $emailError = true;
        }

        // utvrditi da nema gresaka i uraditi redirekciju
        if(!$passwordRepeatError && !$bioLengthError && !$emailError) {
          header("Location: login.php?reg=1");
        } else {
          $failedValidation = true;
        }

      } 

    }

  ?>

  <div class="container">

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
      <form method="POST" action="register.php" class="w-50">

        <h2>Register</h2>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input name="email" value="<?php if($failedValidation) echo($_POST['email']) ?>" class="form-control" type="text" placeholder="E-mail">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Password</label>
          <input name="password" class="form-control" type="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Password repeat</label>
          <input name="passwordRepeat" class="form-control" type="password" placeholder="Password repeat">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Bio</label>
          <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php if($failedValidation) echo($_POST['bio']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>

        <?php 

            if($passwordRepeatError == true) {
              echo "<div class='alert alert-danger mt-2' role='alert'>Lozinke se ne poklapaju!</div>";  
            }

            if($emptyError == true) {
              echo "<div class='alert alert-danger mt-2' role='alert'>Sva polja su obavezna!</div>";  
            }

            if($bioLengthError == true) {
              echo "<div class='alert alert-danger mt-2' role='alert'>Biografija mora imati makar 5 karaktera!</div>";
            }

            if($emailError == true) {
              echo "<div class='alert alert-danger mt-2' role='alert'>Email mora biti validan!</div>";  
            }

        ?>

      </form>
    </div>

  </div>

</body>
</html>