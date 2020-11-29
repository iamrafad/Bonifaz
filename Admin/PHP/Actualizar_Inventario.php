<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bonifaz - Actualizar Inventario</title>
        <link rel="stylesheet" href="../CSS/Styles.css">
        <script src="../JavaScript/Scripts.js"></script>
        <link rel="icon" type="image/png" href="../Images/Logo.PNG">
    </head>

    <body>
        
        <style>
        
            li:last-of-type {margin-bottom: 3%}

        </style>
        
        <header>
            <h1>Elementos Actualizados:</h1>
        </header>
        <main>

            <?php
                $conexion = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conexion, "bonifaz");
                if (isset($_POST["actualizar"])) {
                    $cont = 0;
                    $Cantidad_Tapa_Fria = $_POST["Cantidad_Tapa_Fria"];
                    if (empty($_POST["Cantidad_Tapa_Fria"]) != 1) {
                        $cont ++;
                        $Nombre_Tapa_Fria = $_POST["Tapa_Fria"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Tapa_Fria WHERE Nombre = '$Nombre_Tapa_Fria'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Tapas Frías</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Tapa_Fria - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Tapa_Fria.</li></ul>";
                        }
                    }
                    $Cantidad_Tapa_Caliente = $_POST["Cantidad_Tapa_Caliente"];
                    if (empty($_POST["Cantidad_Tapa_Caliente"]) != 1) {
                        $cont ++;
                        $Nombre_Tapa_Caliente = $_POST["Tapa_Caliente"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Tapa_Caliente WHERE Nombre = '$Nombre_Tapa_Caliente'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Tapas Calientes</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Tapa_Caliente - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Tapa_Caliente.</li></ul>";
                        }
                    }
                    $Cantidad_Montadito = $_POST["Cantidad_Montadito"];
                    if (empty($_POST["Cantidad_Montadito"]) != 1) {
                        $cont ++;
                        $Nombre_Montadito = $_POST["Montadito"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Montadito WHERE Nombre = '$Nombre_Montadito'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Montaditos</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Montadito - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Montadito.</li></ul>";
                        }
                    }
                    $Cantidad_Pan_de_la_Casa = $_POST["Cantidad_Pan_de_la_Casa"];
                    if (empty($_POST["Cantidad_Pan_de_la_Casa"]) != 1) {
                        $cont ++;
                        $Nombre_Pan_de_la_Casa = $_POST["Pan_de_la_Casa"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Pan_de_la_Casa WHERE Nombre = '$Nombre_Pan_de_la_Casa'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Panes de la Casa</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Pan_de_la_Casa - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Pan_de_la_Casa.</li></ul>";
                        }
                    }
                    $Cantidad_Queso = $_POST["Cantidad_Queso"];
                    if (empty($_POST["Cantidad_Queso"]) != 1) {
                        $cont ++;
                        $Nombre_Queso = $_POST["Queso"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Queso WHERE Nombre = '$Nombre_Queso'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Quesos</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Queso - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Queso.</li></ul>";
                        }
                    }
                    $Cantidad_Postre = $_POST["Cantidad_Postre"];
                    if (empty($_POST["Cantidad_Postre"]) != 1) {
                        $cont ++;
                        $Nombre_Postre = $_POST["Postre"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Postre WHERE Nombre = '$Nombre_Postre'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Postres</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Postre - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Postre.</li></ul>";
                        }
                    }
                    $Cantidad_Bebida = $_POST["Cantidad_Bebida"];
                    if (empty($_POST["Cantidad_Bebida"]) != 1) {
                        $cont ++;
                        $Nombre_Bebida = $_POST["Bebida"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Bebida WHERE Nombre = '$Nombre_Bebida'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Bebidas</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Bebida - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Bebida.</li></ul>";
                        }
                    }
                    $Cantidad_Vino = $_POST["Cantidad_Vino"];
                    if (empty($_POST["Cantidad_Vino"]) != 1) {
                        $cont ++;
                        $Nombre_Vino = $_POST["Vino"];
                        $SQL = "UPDATE platos SET Cantidad = Cantidad + $Cantidad_Vino WHERE Nombre = '$Nombre_Vino'";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Vinos</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato</span>: $Nombre_Vino - <span style='font-weight: bold;text-decoration: underline;'>Cantidad</span>: $Cantidad_Vino.</li></ul>";
                        }
                    }
                    if ($cont == 0) {
                        echo "<h2 style='color:red;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>ERROR. No ha indicado ninguna cantidad para ningún plato.</h2>";
                    }
                }
            ?>

        </main>

    </body>

</html>