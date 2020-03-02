
<?php 

include "class.inc.php";

$message = "";

if(isset($_POST["serialized"])) {
  unserialize($_POST["serialized"]);
  $message = "Data was unserialized!!";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Unserialize Demo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://owasp.org/assets/images/logo.png" alt="" width="206" height="72">
        <h2>Unserialize Demo</h2>
        <p class="lead">Below is an example for php serialization and how to exploit it.</p>
      </div>

      <div class="row">
          <div class="col-md-12">
        <form method="post" action="/">
            <div class="form-group">
              <label for="exampleInputEmail1">Data to be unserialized</label>
              <textarea name="serialized" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              <small id="emailHelp" class="form-text text-muted">Don't try this in your own application.</small>
              <small id="emailHelp" class="form-text text-muted"><?php echo $message; ?></small>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 OWASP Cairo Chapter</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Site</a></li>
          <li class="list-inline-item"><a href="#">Twitter</a></li>
          <li class="list-inline-item"><a href="#">Facebook</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
