<?php
if(!isset($_COOKIE['user']))
{
	include_once('contador.php');
}
setcookie('user', TRUE, time()+36000);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Banana</title>
<meta name="description" content="Site feito para você mostrar sua adoração por esta bela fruta."
<link rel="stylesheet" href="../estilo.css"/>
<style>
body {
	background-color:#FFFFD5;
	padding:10px;
	font-family:Tahoma, Geneva, sans-serif;
	color:#FC0;
	font-size:14px;
	text-align:center;
}
.direitos-autorais {
	border-top: solid 1px #CCC;
	width:250px;
	display:inline-block;
}
h3 {
	font-size:18px;
	color:#06F;
	font-weight:bold;
	margin:5px;
}
.rodape {
	font-size:12px;
	color:#333;
	margin-top:50px;
}
</style>
</head>


<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<p>
<div class="menu">
	<h1></h1>
    <h1></h1>
</div>
<font color="#EDDA29" size="+4" aria-atomic=""> Este site foi feito para você desfrutar dessa fruta!</font></p>

  <img src="banana.png" width="574" height="434" alt="O que é windows?">

  <p>
  Quantas bananas você quer?<br />
  <?php
  if(isset($_POST['nome']) and isset($_POST['numero']))
  {
	session_start();
	
	$_SESSION['nome'] = $_POST['nome'];
	echo '<h3>'.$_POST['nome'].' quer '.$_POST['numero'].' bananas.</h3><br>'; 
	
	$arquivo = "cont-form.txt";

	$handle = fopen($arquivo, 'r+');
	
	$data = fread($handle, 512);
	
	$contador = $data+1;
	
	fseek($handle, 0);
	
	fwrite($handle, $contador);
	
	fclose($handle);
	
	if($_POST['numero']>=10)
	 {
		echo '<img src="trio.jpg" width="250"/><br>'; 
	 }
	 if($_POST['numero']==0)
	 {
		echo '<img src="trio.jpg" width="250"/><br>'; 
	 }
	 if($_POST['numero']>=100)
	 {
		echo '<script src="script.js"></script>'; 
	 }
	 echo '<br><div class="fb-share-button" data-href="localhost" data-layout="button_count"></div><br><br>';
  }
  ?>
  <form method="post" action="">
  	<input type="text" name="nome" placeholder="Insira seu nome."/>
  	<input type="number" name="numero" placeholder="Insira o numero"/>
    <input type="submit" value="Salvar"/>
  </form>
  </p>
  <p> <div class="fb-comments" data-href="http://banana.zz.mu/" data-numposts="5" data-colorscheme="dark"></div></p>
  <p>
   Criado em 27 de abril de 2015.<br>
  <strong>Por Gustavo San Martins (Diretor artístico). <br>
        Sérgio Louro (Front-End/Designer ). <br>
        Jamir Peroba (Back-End e de ladinho vai também).</strong>
  </p>
  <div class="direitos-autorais">
  &reg;James Company Group Inc.<br>
Contato: nativox@live.com
  </div>
<div class="rodape">
Este site foi desenvolvido com a finalidade humorística. Todo conteúdo aqui reproduzido, foi elaborado pelos desenvolvedores ou pego através de sites de pesquisa. O mesmo não tem fins lucrativos.
</div>
<audio controls autoplay loop >
  <source src="mp3/macaco.mp3.mp3" type="audio/mp3">
</audio>
</body>
</html>