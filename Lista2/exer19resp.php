<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $dias = (float) $_POST['dias'];

                $horas = $dias * 24;
                $minutos = $horas * 60;
                $segundos = $minutos * 60;

                echo "<p>Valor em dias: $dias</p>";
                echo "<p>Convertido em horas: $horas horas</p>";
                echo "<p>Convertido em minutos: $minutos minutos</p>";
                echo "<p>Convertido em segundos: $segundos segundos</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    
    ?>
</body>
</html>