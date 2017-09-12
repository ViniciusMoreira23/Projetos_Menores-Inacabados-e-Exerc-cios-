


<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <title>Bio</title>
    <meta charset="utf-8" />
    <link href="controle.php">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="CSS/Manual.css" rel="stylesheet" />
    <link rel="stylesheet" href="Galeria/normalize.css">
    <link rel="stylesheet" href="Galeria/gallery.prefixed.css">
    <link rel="stylesheet" href="Galeria/gallery.theme.css">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<header>

    <div class="container">


        <div class="logo">
            <div id="lado1">
                <img src="img/ladoCE.png" />
            </div>
            <div id="lado2">
                <img src="img/ladoCD.png" /></div>
            <br><img src="img/icofolha.png" />
            <br>

            <div id="lado3">
                <img src="img/ladoBE.png" />
            </div>
            <div id="lado4">
                <img src="img/ladoBD.png" />
            </div>



        </div>
        <div id="titulo">
            <img src="img/titulo.png" />
        </div>
    </div>
    <div class="frame">

        <ul>
            <li>Bem vindo, ao nosso ambiente manual.</li>
            <li>Bem vindo, ao nosso ambiente manual.</li>

            <!--Bienvenido, en nuestro entorno manual.</li>-->
            <!--				<li> Welcome, to our manual environment.</li>-->

        </ul>
    </div>
</header>

<body>
    <main id="controle" style="background-image: url(img/placaFerro.jpg)">
        <div id="area">
            <div id="cntrlp1">
                <h1>Controles</h1>

                <form class="control-panel-frm" method="post" action="controle.php">
                    <h3>LEDs:</h3>
                    <input type='submit' class="s3d turnOn" name='submitOn' value='ON'>
                    <input type='submit' class="s3d switchoff" name='submitOff' value='OFF'>
                    <br>
                    <br>
                    <h3>Cooler:</h3>
                    <input type='submit' class="s3d turnOn" name='submitOn1' value='ON'>
                    <input type='submit' class="s3d switchoff" name='submitOff1' value='OFF'>
                    <br>
                    <br>
                    <h3>Regador 1:</h3>
                    <input type='submit' class="s3d turnOn" name='submitOn2' value='ON'>
                    <input type='submit' class="s3d switchoff" name='submitOff2' value='OFF'>
                    <br>
                    <br>
                    <h3>Regador 2:</h3>
                    <input type='submit' class="s3d turnOn" name='submitOn3' value='ON'>
                    <input type='submit' class="s3d switchoff" name='submitOff3' value='OFF'>


                    <br>
                    <br>


                </form>
            </div>
            <div id="cntrlp2">
                <h1>Valores</h1>

                <div class="valores">Iluminação:</div>
                <div class="valores">Temperatura:</div>
                <div class="valores">Unidade solo 1:</div>
                <div class="valores">Unidade solo 2:</div>
                <div class="valores">Regador solo 1:</div>
                <div class="valores">Regador solo 2:</div>
                <div class="valores">Cooler:</div>
                <div class="valores">Algo:</div>


            </div>
        </div>
        <div class="body">
            <a href="#" class="btn-2">Fim de Plantação</a>
            <a href="#" class="btn-2">Recarregar</a>
            <br>

        </div>
    </main>
</body>
</body>
<footer>
    <p></p>
</footer>

</html>


<?php
if (fopen ("COM2", "w+")){
    echo "abriu";
} 
else{
    echo error();
}

//$port = fopen ("COM1", "w+"); 
//   
//    
//        fwrite ($port, "aa");
//    
//fclose ($port);

// SPECIFY USB PORT TO USE

//$port = fopen("COM1", "w");
//
//
//	switch($_POST)
//	{
//		case isset($_POST['submitOn']):
//		  fwrite($port, 'aa')// Turn On LED 1
//			break;
//		case isset($_POST['submitOff']):
//		  fwrite($port, 'AA') // Turn Off LED 1
//			break;
//		case isset($_POST['submitOn1']):
//		  fwrite($port, 'b')// Turn On LED 2
//			break;
//		case isset($_POST['submitOff1']):
//		  fwrite($port, 'B')// Turn Off LED 1
//			break;
//		case isset($_POST['submitOn2']):
//		  fwrite($port, 'c')// Turn On LED 3
//			break;
//		case isset($_POST['submitOff2']):
//		  fwrite($port, 'C')// Turn Off LED 1
//			break;
//		case isset($_POST['submitOn3']):
//		  fwrite($port, 'd')// Turn On LED 4
//			break;
//		case isset($_POST['submitOff3']):
//			 fwrite($port, 'D')// Turn Off LED 1
//			break;
//	}

?>