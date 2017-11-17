 
<!DOCTYPE html>
<html>
<head>
	<title>marconeiva</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<style>
		*{margin: 0;padding: 0; }
		*{box-sizing: border-box;}
		/*slydeshow-container*/
		.slideshow-container{max-width: 1000px; position: relative; margin:auto;}
		/*.myslides{ display: none; }*/
		/*next e prev button*/
		.next,.prev { cursor: pointer; position: absolute; top: 50%;width: auto; margin-top: -22px;
		padding: 16px; color: white; font-weight: bold;font-size: 18px;transition: 0.6s ease; border-radius: 0 3px 3px 0; }

		/*next   position*/
		.next {right: 0; border-radius:  3px 0 0 3px;}
		/*prev houver*/
		.prev:hover, .next:hover {background-color: rgba(0 0 0 0.8);}
			/*caption text*/
			.text { color: #f2f2f2 ;font-size: 15px; padding:  8px 12px; position: absolute; bottom: 8px;width: 100%; text-align: center;  }
			/*numbertext*/
		.numbertext{ cursor:pointer;font-size: 12px; padding: 8px 12px; position: absolute; top:0 ;}
		/*dot bolinhas*/ 
		.dot {cursor:pointer; width: 15px ;height: 15px ; margin: 0 2px ; background-color: #bbb; border-radius: 50%; display: inline-block; transition: background-color 0.6s ease; }
		.active, .dot: hover{background-color: #717171;}
		/*fading animation*/
		.fade{-webkit-animation-name : fade ; -webkit-animation-duration: 1.5s; animation-name:fade; animation-duration: 1.5s;  }
		@-webkit-keyframes fade {from { opacity: .4} to{opacity: 1}}
		@keyframes fade{from{opacity: .4} to {opacity: 1}}
	</style>

</head>
<body style="background-color: yellow;">
	<nav>	
		<button>me aperte que eu gosto</button>
		<ul>
			<li><a href="pag1.php">pag1</a></li>
			<li><a href="pag2.php">pag2</a></li>
			<li><a href="pag3.php">pag3</a></li>
		</ul>
	</nav>
	<div>
		<h1>inicio</h1>
		<a href="#jump"> o pulo</a>
		<img src="g1.png" alt="goku pixel" >
		<p style="color: blue"> oi eu <hr /> sou o <a href="http://pt-br.dragonball.wikia.com/wiki/Goku"> goku </a> </p>
		<span>heman</span>
		<p style="font-size:300% ">todos os dias quando acordo, não tenho mais o tempo que passou</p>
		<p style="text-align:center;"><i>no centro estou</i></p>
		<p><sub>subzero</sub><sup>superman</sup></p>	
		<p style="border: 2px solid tomato;"><b>negrito</b></p>
		<pre style="font-family:arial;">    
			hoje nesta noite serena
			venho dizerte cantando
			que com os beijos de sua boca
			eu vou partir suspirando
		</pre>
		<p><abbr Title="nao vou dizer o  que é">MQAP</abbr></p>
		<!--  comentando no comentario -->
		<p style="background-color:rgba(0,0,20,0.5);">não faço ideia do que escrever</p>
		<p style="border: 2px solid blue; padding:30px 10px 5px 40px;"> e agora jose </p>
		<p style="margin: 60px;"> mariginal</p>
		<a href="pag1.php">pag</a>
		<br>
		<table>
			<tr>
				<th>marco</th>
				<th>jose</th>
			</tr>
			<tr>
				<td>0</td>
				<td>esquerda</td>
			</tr>
		</table>
	</div>
	<div style="background-color: grey;padding: 30px;">
		<h1>todos estamos aqui</h1>
		<p id="jump">pulo?</p>
	</div>
	<div>
		<table style="background-color: black; border-collapse: collapse;">
			<td>
				<th><a href="pag1.php" style="color: white;"></a> inicio </th>
				<th><a href="pag2.php" style="color:white;"></a> loja </th>
				<th><a href="pag3.php" style="color:white;"></a> novidades </th>
				<th>sobre</th>
				<th>contatos</th>
			</td>
		</table>
	</div>
	<div><p id="demo"></p>
		<script>
			var = document.getElementById("demo")
			= "hello JavaScript!";
		</script>
	</div>
	<div>
		<button type="button" onclick="myFunction()">
			clica em mim aeee
		</button>
		<p id="demons">demonstração</p>
		<script>
			functiById("demons").innerHTML= "hello JavaScript";}
		</script>
	</div>on myFunction(){document.getElement
	<div>
		<p id="dem">asd</p>
		<script>
			var elementoRaiz = document.documentElement
			function corPreta()
		</script>
		<button type="button" onclick="myFunct()">apague a luz
		</button>
	</div>
	<div>
		<img src="g2.png" usemap="#megaman" style="width:170; height:297;">
		<map name="megaman">
			<area shape="circle" coords="78,18,38" href="g3.jpg">
		</map>
		<pre style="background-image: url(g4.jpg);">
			estou na tela do mario word<br><br><br><br><br><br><br><br><br><br>
		</pre>
	</div>
	<div>
		<img src="ground.png"; alt="shedonw">
	</div>
	<div>
		<script>
			function mega(xx)
			{
				var transfor;

				if (xx == 0) 
				{ 
					transfor = "g2.png"

				}
				else
				{
					transfor = "g3.jpg"
				}
				document.getElementById('my_image').src=transfor;
			}

		</script>
		<img id="my_image" src="g2.png" width="170" heigth="296">
		<p>
			<button type="button" onclick="mega(1)">Clique para mudar</button>
			<button type="button" onclick="mega(0)">Cliqui para voltar</button>
		</p>
		<p> &lt;</p>
	</div>
	<div>
		<form action="pag1.php">
			<p>primeironome</p>
			<input type="text" name="primeironome" value="joses">
			<input type="submit" value="enviar">
			<input type="password" name="password">
			<input type="submit" value="é isso aii">
			</form>
		</div>

	<div> <!--Documentos-->
		<form action="pag1.php">
		<input type="checkbox" name= "valida1" value="opição 1">option one
		<input type="checkbox" name= "valida2" value="opção2">option two
		<input type="submit" name="enviar" value=" enviaar">
		<input type="color" name="selectioncolor" value="rgba(0,0,0,0)">
		</form>
	</div>

	<!-- ------------------------------------------- -->

<div class="slideshow-container">
	
		<div class="myslides fade">
		<div class="numbertext">1/3</div>
		<img src="g1.png" style="width:100% ">
		<div class="text">caption text </div>
		</div>
		
		<div class="myslides fade">
		<div class="numbertext">2/3</div>
		<img src="g2.png" style="width: 100%">
		<div class="text">caption text 2 </div>
		</div>
		
		<div class="myslides fade">
		<div class="numbertext">3/3</div>
		<img src="g3.jpg">
		<div class="text">caption text 3 </div>
		</div>

		<a class="prev" onclick="plusslydes(-1)">&#10094;</a>
		<a class="next" onclick="plusslydes(1)">&#10095;</a>
</div>

<div style="text-align: center;">
<span class="dot" onclick="correnteslide(1)"></span>
<span class="dot" onclick="correnteslide(2)"></span>
<span class="dot" onclick="correntslide(3)"></span>
</div>

<script>
	var slideindeindex=1;
	showslides(slideindeindex);

	function plusslydes(n){ showslides(slideindeindex += n);}
	function currentslide(n){ showslides(slideindeindex = n);}
	function showslide(n)
	{
		var i;
		var slides = document.getElementsByClassName("myslides");
		var dots = documents.getElementsByClassName("dot");
		if(n>slides.lenght){slideindeindex=1}
		if(n<1){slideindeindex= slides.lenght}
			for(i=0; i <dots.lenght;i++)
			{
					dots[i].ClassName = dots[i].ClassName.replace("active",""); 
			}
			slides[slideindeindex-1].style.display="block";
			dotos[slideindeindex-1].ClassName+= "active";
	}

</script>
	</body>
	</html>