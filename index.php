<?php
//Nombre del monstruo
//Número de estrellas (nivel)
//Imagen
//Nombre
//Tipo de monstruo (guerrero, bestia, dragón)
//Ataque
//Defensa
//Tipo de carta (monstruo, mágica, trampa)

$lista_imagenes = ["craneo.jpg", "demonio.jpg", "dragondefuego.jpg", "ginzo.jpg", "gragonblanco.jpg", "kuriboh.jpg", "maga.jpg", "mago.jpg", "magodeltiempo.jpg"];
$cantidad_imagenes = count($lista_imagenes);
$indice_random_imagenes = rand(0, $cantidad_imagenes -1);

$lista_nombres = ["Cráneo Convocado", "Feral Imp", "Dragón de Fuego", "Ginzo", "Dragón Blanco de Ojos Azules", "Kuriboh", "Maga Oscura", "Mago Oscuro", "Mago del Tiempo"];
$cantidad_nombre = count($lista_nombres);
$indice_random_nombres = rand(0, $cantidad_nombre -1);

$nivel = rand(1, 12);

$lista_tipo_monstruo = ["Demonio", "Dragón", "Máquina", "Lanzador de Conjuros", "Bestia", "Guerrero", "Guerrero-Bestia", "Zombi", "Hada", "Pez"];
$cantidad_tipo_monstruo = count($lista_tipo_monstruo);
$indice_tipo_monstruo = rand(0, $cantidad_tipo_monstruo -1);

$defensa = rand(0, 50);
$defensa100 = $defensa * 100;

$ataque = rand(0, 50);
$ataque100 = $ataque * 100;

$lista_tipo_carta = ["Monstruo", "Trampa", "Mágica"];
$cantidad_tipo_carta = count($lista_tipo_carta);
$indice_random_tipo_carta = rand(0, $cantidad_tipo_carta -1);







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 vh-100" style="background-color: black;">
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center" style="background-color: #3E3C40;">
                <div class="d-flex align-items-center justify-content-center" style="width: 96%; height: 96%; background-color: #F48C06;">
                    <div style="width: 93%; height: 93%; background-color: #F48C06;">

                        <div class="my-2 fs-3 text" style="height: 10%; font-family:'Times New Roman', Times, serif;">
                            <div class="col-12 d-flex justify-content-center align-items-center" style="background-color: #F48C06; height: 100%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);"><?php echo $lista_nombres[$indice_random_nombres] ?></div>
                        </div>

                        <div class="my-2 fs-5 d-flex justify-content-end" style="height: 6%;">
                            <div class="text-white d-flex justify-content-center col-3" style="background-color: #D00000; height: 100%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); font-family:'Times New Roman', Times, serif;"><?php echo "Nivel:" . " " . $nivel ?></div>
                        </div>

                        <div class="my-2 fs-5 text-center" style="height: 60%;">
                            <img class="img-fluid" src="images/<?php echo $lista_imagenes[$indice_random_imagenes]; ?>" style="height: 100%;">
                        </div>

                        <div class="my-2 fs-5" style="height: 6%;">
                            <div class="col-10 d-flex justify-content-center" style="background-color: #F0DA6B; height: 100%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); font-family:'Times New Roman', Times, serif;"><?php echo "Tipo de Monstruo:" . " " . $lista_tipo_monstruo[$indice_tipo_monstruo] ?></div>
                        </div>

                        <div class="my-2 fs-5 d-flex justify-content-between" style="height: 6%;">
                            <div class="col-5 d-flex justify-content-center" style="background-color: #F0DA6B; height: 100%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); font-family:'Times New Roman', Times, serif;"><?php echo "Ataque:" . " " . $ataque100 ?></div>
                            <div class="col-5 d-flex justify-content-center" style="background-color: #F0DA6B; height: 100%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); font-family:'Times New Roman', Times, serif;"><?php echo "Defensa:" . " " . $defensa100 ?></div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-4" style="background-color: black;">
            </div>
        </div>
    </div>



</body>

</html>