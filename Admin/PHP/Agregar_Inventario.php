<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bonifaz - Agregar Elemento/s Al Inventario</title>
        <link rel="stylesheet" href="../CSS/Styles.css">
        <script src="../JavaScript/Scripts.js"></script>
        <link rel="icon" type="image/png" href="../Images/Logo.PNG">
    </head>

    <body>
        
        <style>
        
            li:last-of-type {margin-bottom: 3%}

        </style>
        
        <header>
            <h1>Elementos Agregados:</h1>
        </header>
        <main>

            <?php
                $conexion = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conexion, "bonifaz");
                if (isset($_POST["agregar"])) {
                    $cont = 0;
                    $Tapa_Fria = $_POST["Tapa_Fria"];
                    if (empty($_POST["Tapa_Fria"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Tapa_Fria', 0, 'Tapas Frías', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Tapas Frías</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Tapa_Fria.</li></ul>";
                        }
                    }
                    $Tapa_Caliente = $_POST["Tapa_Caliente"];
                    if (empty($_POST["Tapa_Caliente"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Tapa_Caliente', 0, 'Tapas Calientes', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Tapas Calientes</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Tapa_Caliente.</li></ul>";
                        }
                    }
                    $Montadito = $_POST["Montadito"];
                    if (empty($_POST["Montadito"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Montadito', 0, 'Montaditos', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Montaditos</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Montadito.</li></ul>";
                        }
                    }
                    $Pan_de_la_Casa = $_POST["Pan_de_la_Casa"];
                    if (empty($_POST["Pan_de_la_Casa"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Pan_de_la_Casa', 0, 'Panes de la Casa', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Panes de la Casa</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Pan_de_la_Casa.</li></ul>";
                        }
                    }
                    $Queso = $_POST["Queso"];
                    if (empty($_POST["Queso"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Queso', 0, 'Quesos', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Quesos</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Queso.</li></ul>";
                        }
                    }
                    $Postre = $_POST["Postre"];
                    if (empty($_POST["Postre"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Postre', 0, 'Postres', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Postres</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Postre.</li></ul>";
                        }
                    }
                    $Bebida = $_POST["Bebida"];
                    if (empty($_POST["Bebida"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Bebida', 0, 'Bebidas', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Bebidas</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Bebida.</li></ul>";
                        }
                    }
                    $Vino = $_POST["Vino"];
                    if (empty($_POST["Vino"]) != 1) {
                        $cont ++;
                        $SQL = "INSERT INTO platos (ID, Nombre, Precio, Grupo, Cantidad) VALUES (null, '$Vino', 0, 'Vinos', 0)";
                        if (mysqli_query($conexion, $SQL)) {
                            echo "<h2 style='color:white;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>Vinos</h2>";
                            echo "<ul><li style='color: white;font-size: 150%;text-align: center;list-style: inside;'><span style='font-weight: bold;text-decoration: underline;'>Plato Insertado</span>: $Vino.</li></ul>";
                        }
                    }
                    if ($cont == 0) {
                        echo "<h2 style='color:red;font-size: 250%;text-align: center;margin-top: 3%;text-decoration: underline;margin-bottom: 3%';>ERROR. No ha indicado ningún plato para agregar.</h2>";
                    }
                }
            ?>

        </main>

    </body>

</html>