<?php
/**
Data criação: 12/05/2017
ultima alteração: 18/05/2017
classe que cria pequenos cards a tela que são rotativos
Autor: Danel J. Santos
**/
class cardflip{
	public $addjsfile = 'run_prettify.js';
	public $addcss = '@import url(\'https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900\');.btn:hover,.btn:focus,.btn:active{outline: 0 !important;}.card-container {-webkit-perspective: 800px; -moz-perspective: 800px;-o-perspective: 800px;perspective: 800px;margin-bottom: 30px;}.card-container:not(.manual-flip):hover .card,.card-container.hover.manual-flip .card{-webkit-transform: rotateY( 180deg ); -moz-transform: rotateY( 180deg ); -o-transform: rotateY( 180deg );transform: rotateY( 180deg );}.card-container.static:hover .card,.card-container.static.hover .card {-webkit-transform: none;-moz-transform: none; -o-transform: none;transform: none;}.card { -webkit-transition: -webkit-transform .5s; -moz-transition: -moz-transform .5s; -o-transition: -o-transform .5s;transition: transform .5s; -webkit-transform-style: reserve-3d; -moz-transform-style: preserve-3d; -o-transform-style: preserve-3d;transform-style: preserve-3d;position: relative;}.front, .back {-webkit-backface-visibility: hidden;  -moz-backface-visibility: hidden; -o-backface-visibility: hidden;backface-visibility: hidden;position: absolute;    top: 0;left: 0;background-color: #FFF;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.14);}.front {z-index: 2;} .back {-webkit-transform: rotateY( 180deg );-moz-transform: rotateY( 180deg );-o-transform: rotateY( 180deg );transform: rotateY( 180deg );z-index: 3;}.back .btn-simple{position: absolute;    left: 0;bottom: 4px;}.card{background: none repeat scroll 0 0 #FFFFFF;border-radius: 4px;color: #444444;}.card-container, .front, .back {width: 100%;    height: 420px;border-radius: 4px;-webkit-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);-moz-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);}.card .cover{height: 105px;overflow: hidden;border-radius: 4px 4px 0 0;}.card .cover img{width: 100%;}.card .user{    border-radius: 50%;display: block;height: 120px;margin: -55px auto 0;overflow: hidden;width: 120px;}.card .user img{background: none repeat scroll 0 0 #FFFFFF;border: 4px solid #FFFFFF;width: 100%;}.card .content{background-color: rgba(0, 0, 0, 0);box-shadow: none;padding: 10px 20px 20px;}.card .content .main {min-height: 160px;}.card .back .content .main {height: 215px;}.card .name {font-family: \'Arima Madurai\', cursive;font-size: 22px;line-height: 8px;margin: 10px 0 0;text-align: center;text-transform: capitalize;}.card h5{margin: 5px 0;font-weight: 400;line-height: 20px;}.card .profession{color: #999999;text-align: center;margin-bottom: 20px;}.card .footer {border-top: 1px solid #EEEEEE;color: #999999;margin: 30px 0 0;padding: 10px 0 0;    text-align: center;}.card .footer .social-links{font-size: 18px;}.card .footer .social-links a{margin: 0 7px;}.card .footer .btn-simple{margin-top: -6px;}.card .header {padding: 15px 20px;height: 90px;}.card .motto{font-family: \'Arima Madurai\', cursive;border-bottom: 1px solid #EEEEEE;color: #999999;font-size: 14px;font-weight: 400;padding-bottom: 10px;text-align: center;}.card .stats-container{width: 100%;margin-top: 50px;}.card .stats{display: block;float: left;width: 33.333333%;text-align: center;}.card .stats:first-child{border-right: 1px solid #EEEEEE;}.card .stats:last-child{border-left: 1px solid #EEEEEE;}.card .stats h4{font-family: \'Arima Madurai\',cursive; font-weight: 300; margin-bottom: 5px;}.card .stats p{color: #777777;}.title{color: #506A85;text-align: center;font-weight: 300;font-size: 44px;margin-bottom: 90px;line-height: 90%;}.title small{    font-size: 17px;color: #999;text-transform: uppercase;margin: 0;}.space-30{height: 30px;display: block;}.space-50{height: 50px; display: block;}.space-200{height: 200px;display: block;}.white-board{background-color: #FFFFFF;min-height: 200px;padding: 60px 60px 20px;}.ct-heart{color: #F74933;}pre.prettyprint{background-color: #ffffff;border: 1px solid #999;margin-top: 20px;padding: 20px;text-align: left;}.atv, .str{color: #05AE0E;}.tag, .pln, .kwd{color: #3472F7;}.atn{color: #2C93FF;}.pln{color: #333;}.com{color: #999;}.btn-simple{opacity: .8;color: #666666;background-color: transparent;}.btn-simple:hover,.btn-simple:focus{background-color: transparent;box-shadow: none;opacity: 1;}.btn-simple i{    font-size: 16px;}.navbar-brand-logo{padding: 0;}.navbar-brand-logo .logo{border: 1px solid #333333;border-radius: 50%;float: left;overflow: hidden;    width: 60px;}.navbar .navbar-brand-logo .brand{color: #FFFFFF;float: left;font-size: 18px;font-weight: 400;line-height: 20px;margin-left: 10px;    margin-top: 10px;width: 60px;}.navbar-default .navbar-brand-logo .brand{color: #555;}@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {.front, .back{-ms-backface-visibility: visible;backface-visibility: visible;}.back {visibility: hidden;-ms-transition: all 0.2s cubic-bezier(.92,.01,.83,.67);}.front{z-index: 4;}.card-container:not(.manual-flip):hover .back, .card-container.manual-flip.hover .back{z-index: 5;visibility: visible;}}';
	public $addjsend = '$().ready(function(){$(\'[rel="tooltip"]\').tooltip();});function rotateCard(btn){var $card = $(btn).closest(\'.card-container\');        console.log($card);if($card.hasClass(\'hover\')){$card.removeClass(\'hover\');} else {$card.addClass(\'hover\');}};';
	public $imgfundo = 'http://www.playreplay.com.br/wp-content/uploads/ryu-cenario-playreplay-620x240.jpg';
	public $imgavatar = '';
	Public $nomeuser = "Daniels J.";
	public $profissa = "Programador";
	public $prefacio = "O difícil não é criar esse sistema, mas pessoas que acreditem nele...";
	public $textcostas = "Trabalhamos duro para conseguir esse nível...";
    public $carddescricao = "Tenho passado a vida achando que podia criar algo maravilhoso e poderia ter mais tempo pra a família e acho que consegui.";
    public $textorotacao = "Rotação Manual";
    public $textovoltar = " Voltar ";

	public function html(){
		$this->somacontent = '<!-- front panel --><div class="col-md-4 col-sm-6" style="margin-top:10px"><div class="card-container manual-flip"><div class="card"><div class="front"><div class="cover"><img src="'.$this->imgfundo.'"></div><div class="user"><img class="img-circle" src="'.$this->imgavatar.'"></div><div class="content"><div class="main"><h3 class="name">'.$this->nomeuser.'</h3><p class="profession">'.$this->profissa.'</p><p class="text-center">"'.$this->prefacio.'"</p></div><div class="footer"><button class="btn btn-simple" onclick="rotateCard(this)"><i class="fa fa-mail-forward"></i>'.$this->textorotacao.'</button></div></div></div><div class="back"><div class="header"><h5 class="motto">"'.$this->textcostas.'"</h5></div><div class="content"><div class="main"><h4 class="text-center">O que penso</h4><p class="text-center">"'.$this->carddescricao.'"</p><!-- sem uso ainda <div class="stats-container"><div class="stats"><h4>235</h4><p>Followers</p></div><div class="stats"><h4>114</h4><p>Following</p></div><div class="stats"><h4>35</h4><p>Projects</p></div></div> --></div></div><div class="footer"><button class="btn btn-simple" rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card"><i class="fa fa-reply"></i>'.$this->textovoltar.'</button><div class="social-links text-center"><!-- sem uso tambem <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw">face</i></a><a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw">google</i></a><a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw">twitetr</i></a></div></div></div> --> <!-- end back panel --></div> <!-- end card --></div> <!-- end card-container -->';
		return $this->somacontent;
	}
	public function render(){
		echo '<!-- front panel --><div class="col-md-4 col-sm-6" style="margin-top:10px"><div class="card-container manual-flip"><div class="card">					<div class="front"><div class="cover"><img src="'.$this->imgfundo.'"></div><div class="user"><img class="img-circle" src="'.$this->imgavatar.'"></div><div class="content"><div class="main"><h3 class="name">'.$this->nomeuser.'</h3><p class="profession">'.$this->profissa.'</p><p class="text-center">"'.$this->prefacio.'"</p></div><div class="footer"><button class="btn btn-simple" onclick="rotateCard(this)"><i class="fa fa-mail-forward"></i>'.$this->textorotacao.'</button></div></div></div><div class="back"><div class="header"><h5 class="motto">"'.$this->textcostas.'"</h5></div><div class="content"><div class="main"><h4 class="text-center">O que penso</h4><p class="text-center">"'.$this->carddescricao.'"</p><!-- sem uso ainda<div class="stats-container"><div class="stats"><h4>235</h4><p>Followers</p></div><div class="stats">								<h4>114</h4><p>Following</p></div><div class="stats"><h4>35</h4><p>Projects</p></div></div> --></div></div>					<div class="footer"><button class="btn btn-simple" rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card"><i class="fa fa-reply"></i>'.$this->textovoltar.'</button><div class="social-links text-center"><!-- sem uso tambem <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw">face</i></a><a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw">google</i></a><a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw">twitetr</i></a></div></div></div> --> <!-- end back panel --></div></div> <!-- end card -->	</div><!-- end card-container -->';
	}
}
?>