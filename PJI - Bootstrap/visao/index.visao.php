<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>
	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="../text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
    a:link, a:visited{
     text-decoration:none;
     color:gray;
   }
   #mybtn{
    background-color:transparent;
    border:none;
    color:#9d9d9d;
    position:relative;
    bottom:1%;
   }
   a:hover{
     color:#CCC;
   }
   body{
    background-color:black;
    font-family: 'Montserrat', sans-serif;
  }
  #cont1{
   background-image: url('../imagem/back2.jpg');
   background-repeat: no-repeat;
   background-size:100%;
   padding-bottom: 8%;
   background-size: cover;
   margin-top:-2%;
   border:solid gray 1px;
   border-top: none;
   border-left:none;
   border-right: none;
 }
 p,h3{
  color:#f7f7f7;
  text-align:justify;
}
#cont2{
  background-color:white;
  color:black
}
.blackp{
  color:black;
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
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="Creators.php">Creators</a></li>
					<li><a href="#">Forum</a></li>
          <li><a href="#">Pesquisa</a></li>
          <li><a href="login.php">Logar</a></li>
          <li><!-- Button trigger modal --> 
            <button type="button" id="mybtn" data-toggle="modal" data-target="#myModal"> Restrições </button></li>



  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><strong>Contrato...</strong></h4>
        </div>
        <div class="modal-body">
          <!-- Acordos -->

          <div id="acordo">

            <div>

              <h3 class="blackp">Por que ?</h3>

              <strong>

              Temos o objetivo de indicar o site para pessoas que buscam ajuda, porém, não tem afoiteza para encarar um psicólogo frente a frente. Mas não é só para essas pessoas, sabemos que existem um gigante corpo social que se importa com a saúde mental e física alheia, então, faremos um fórum para autoajuda e não será apenas um que irá ajudar, serão vários, até que cliquem em um botão escrito “caso encerrado”.</strong>

              <h3 class="blackp">Para quem?</h3>

              <strong>

                Desenvolveremos o site para aquelas pessoas que querem ajuda em casos de depressões e derivados, concomitantemente aqueles que querem ajudar o próximo.

              </strong>

            </div>
            <br>
            <div>

              <h3 class="blackp">Contrato ...</h3>

              <strong>

                Para que desfrute deste recurso, pedimos ao usuário que respeitem as pessoas e não as façam se sentir mal. Você encontrará pessoas que estão sofrendo e que podem achar em <em>você</em> uma luz.
                Seja essa luz para elas e não as machuque, se você achar que não tem experiência o suficiente para ajudar, pode falar o que realmente sente.
                Se você sofre e tem medo de se abrir, saiba que ninguém terá acesso a qualquer informação pessoal sua, contanto que, a grosso modo, você não os dê. Caso algum sujeito desrespeitar essa regra será sujeito a banimento do IP da rede.

              </strong>

            </div>
          </div>

          <img src="../imagem/if help.png" alt="Logo" style="
          width: 20%;
          ">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Aceitar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
					
				</ul>
			</div>
		</div>
	</nav>

  <div id="cont1">	
   <div class="container-fluid">
    <div class="container">
     <img style="position:relative;left: 0" src="../imagem/logo.png">
     <div class="row">

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-top:5%; margin-left:-5%;">

       <p style="text-align: justify;">Este site tem como objetivo principal oferecer suporte às vitimas da depressão. Tanto por experiência própria, como por pesquisa, temos a noção da grandeza deste problema, e perante o mesmo, decidimos criar uma plataforma online para um chat de atendimento, tendo como fundamento a interação entre usuário e paciente (usuário). Para mais detalhes vá até <span id="c"> <a href="Creators.php">Creators</a></span></p>
     </div>
   </div>
 </div>
</div>
<div class="container-fluid">
  <div class="container">
   <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style=" margin-left:3%; margin-top:2%;">
     <p><button type="button" class="btn btn-success">Acesse nosso forum!</button></p>			
   </div>
 </div>
</div>
</div>
<br>
<br>
<br>
</div>
<div id="cont2">
  <div class="container">
    <div class="row">
     <div class="page-header"><h3 class="blackp">Depressão</h3></div>
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <p class="blackp">A depressão é considerada uma das principais causadoras de incapacitação, limita o funcionamento físico, pessoal e social. Praticamente ninguém recebe o devido tratamento e, às vezes, a forma que a sociedade identifica o problema não é correta, faz com que o paciente não consiga obter ajuda (PELUSO e BLAY, 2007) por achar que é um problema insignificante. Através de pesquisas percebe-se que, o problema da depressão não é algo recente.</p>
      <p class="blackp">Dando, ainda, um foco na faixa etária juvenil, podemos pelas estatísticas, perceber uma grande possibilidade de passar por esse quadro. O corpo na adolescência passa por mudanças e consequentemente acarretam a uma adaptação, social e psíquica, mas nem todos passam pelas mesmas situações ou conseguem passar por elas saudavelmente “não tendo mais uma representação de si mesmo, uma vez que sua nova imagem ainda se encontra em construção”(BIAZUS; RAMIRES, 2012 p. 84 grifo nosso.)</p>
    </div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <embed style="margin-left:2%;" src="../imagem/video.mp4" autoplay="true" fullscrren="true" height="220" width="560" />
     <center><h4 class="blackp">Gostou? Assita mais <a href="https://www.youtube.com/user/MOVAFILMES">aqui</a></h4></center>
    </body>
    </html>
    <div>
    </div>
  </div>
</div>
<br>
<br>
</div>
<div class="container">
  <div class="row">
    <div class="page-header">
      <h3>Transtornos Comuns</h3>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
      <h3>TOC</h3>
      <p>Sendo um dos transtornos imperceptíveis, não pode ser levado como piada. Como todo transtorno, não é algo tão fácil de ser superado, normalmente usam o método de medicamentos, que reduz entre 40 e 60% dos pacientes que utilizam. Outro método é a terapia cognitiva-comportamental, onde a mesma reduz os sintomas em 70% dos pacientes que a buscam. Há diversos tipos de casos na atualidade, os mais frequentes são o perfeccionismo, não ir em banheiro público, medo de bactérias e com isso acaba lavando a mão frequentemente. Na maioria das vezes, as pessoas desenvolvem este transtorno por causa da ansiedade ou o sentimento de culpa causando interferências nas rotinas daqueles que o tem.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
      <h3>Borderline</h3>
      <p>Transtorno de Personalidade Borderliner é um transtorno mental com uma instabilidade contínua de humor, na auto-imagem e seu funcionamento. Pessoas com esse transtorno tem angústia e medo de pequenos períodos sem as pessoas que ama, fazendo com que a pessoa se sinta sozinha. Ou seja, a pessoa cria uma dependência de outras pessoas para ter uma estabilidade emocional. </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
      <h3>Evitativo</h3>
      <p>Um nome um tanto quanto diferente, percebidos por pessoas com problema de insegurança e com muita timidez, pessoas que sofrem com esse transtorno costumam não ter informações de diagnósticos. Por conta disso, deixam de procurar ajuda correta e se contenta que é apenas um traço de sua personalidade.  O transtorno, afeta o seu relacionamento social e profissional. Com medo de receber críticas ou até mesmo atenção, ela acaba se isolando. Por conta disso, perdem as oportunidades de empregos, uma promoção,  mesmo que seja capaz de exercer tal função.</p>
    </div>
  </div>
</div>
<br>
<?php
include'rodape.php'

?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
