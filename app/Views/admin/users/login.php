
<!DOCTYPE html>
<html lang="en">
<head>
<title>Area Administrativa</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

</head>
<body class="p-5">
  <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-3 p-5 bg-light">
            <h1>Login</h1>
            <form action="<?= base_url('admin/validate-login')?>" id="formulario" method=POST name="formulario">
                <div class="form-group">
                  <label for="login">Username:</label>
                  <input type="text" name="login" class="form-control">
                </div>
                <div class="form-group">
                  <label for="pass">Password:</label>
                  <input type="password" name="pass" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        </div>
      </div>
  </div>
</body>
</html>
















