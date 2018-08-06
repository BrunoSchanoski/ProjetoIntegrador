<!DOCTYPE html>
<html>
<head>
    <title>Creators</title>
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
   @import url('https://fonts.googleapis.com/css?family=Montserrat');
  body{
    font-family: 'Montserrat', sans-serif;
    background:url("imagem/back.png"); 
    background-repeat: no-repeat;
    background-position: right;
    background-size:500px;
    background-attachment:fixed;
}
p,h3{
    color:#f7f7f7;
    text-align:justify;
}
#criado{
    margin-top:-0.3%;
}
.blackp{
    color:black;
}
#cont1{
   background-color:black;
}
</style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Help IF</a>
            </div>
            <!-- menu -->
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="Creators.php">Creators</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Pesquisa</a></li>
                    <li><a href="login.php">Logar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
        <div class="container">
          <div id="criado" class="page-header">
            <img src="imagem/logo.png">
            <h3 class="blackp"><center>Criadores / Creators</center></h3>
            
        </div>
    </div>
    <div id="carousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="imagem/brunin.jpg" alt="Bruno Schanoski">
                <div class="carousel-caption">
                    Bruno Schanoski
                </div>
            </div>
            <div class="item">
                <img src="imagem/jhonley.jpg" alt="Jhonley Carriel">
                <div class="carousel-caption">
                    Jhonley Carriel
                </div>
            </div>
            <div class="item">
                <img src="imagem/raul.jpg" alt="Raul Rodrigues">
                <div class="carousel-caption">
                    Raul Rodrigues
                </div>
            </div>
        </div>
        <a href="#carousel" class="left carousel-control" data-slide="prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
        </a>
        <a href="#carousel" class="right carousel-control" data-slide="next">
            <i class="glyphicon glyphicon-chevron-right"></i>
        </a>
    </div>
</center>
<br>
<div id="cont1">
    <div class="container">
     <div class="page-header">
        <h3><center>Justificativas / Justification</center></h3>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <h3><strong>Objetivo</strong></h3>
            <p>Este trabalho tem como objetivo principal oferecer suporte às vitimas da depressão. Tanto por experiência própria, como por pesquisa, temos a noção da grandeza deste problema, e perante o mesmo, decidimos criar uma plataforma online para um chat de atendimento, tendo como fundamento a interação entre usuário e paciente(usuário), a seguir verá métodos de pesquisa e muitos autores no qual nos baseamos. </p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
         <h3><strong>Motivo</strong></h3>
         <p>"A depressão, especificamente, tem se mostrado mais evidente desde a década de 1970, quando aumentou o interesse no campo da investigação e no meio acadêmico e reconheceu-se a presença significativa desse distúrbio entre crianças e adolescentes."(NAKAMURA; SANTOS, 2006) Por isso, já que a juventude sofre mais com este problema, resolvemos criar o site para a ajuda desde o começo de sua adolescência e até mesmo o começo da vida adulta. </p>
     </div>
     <div class="clearfix visible-sm"></div>
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <h3><strong>Obejective</strong></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <h3><strong>Cause</strong></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
</div>
<br>
</div>
<?php
include 'rodape.php';
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>