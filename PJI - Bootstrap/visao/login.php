<!DOCTYPE html>
<html>
<head>
	<title>Logar</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <style>
  	 body{
    font-family: 'Montserrat', sans-serif;
    background:url("imagem/back_login.jpg"); 
    background-repeat: no-repeat;
    background-position: right;
    background-size:cover;
    background-attachment:fixed;
}

  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header">
				<center><h3 style="color: white">Login</h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">

				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<form>
						
						<div class="form-group">
							<label for="Prontuário" style="color: white">Prontuário:</label>
							<input class="form-control" type="text" id="Prontuário" name="pront"><br>
							<label for="senha"style="color: white">Senha:</label>
							<input type="password" class="form-control" id="senha" name="senha">
							<br>
							<center><button type="submit" class="btn btn-danger" value="Entrar"> Entrar
							</button>
						</div></center>
					</form>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">

				</div>
			</div>
		</div>


<div style="position:fixed; bottom:5%; left:3%;">
	<a href="index.php">
	<img src="imagem/logo.png"></a>
</div>




		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>