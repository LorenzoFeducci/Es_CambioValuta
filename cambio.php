<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td{
            border: solid black 2px;
            
        }

        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php

        function converti($importo, $scelta, $cambio){
            if($scelta == "dollaro"){
                $calcolo = $importo * $cambio["dollaro"];
                return $calcolo;
            }else if($scelta == "yen"){
                $calcolo = $importo * $cambio["yen"];
                return $calcolo;
            }else if($scelta == "franchi"){
                $calcolo = $importo * $cambio["franchi"];
                return $calcolo;
            }else{
                $calcolo = $importo * $cambio["sterline"];
                return $calcolo;
            }
        }

        function aggiungi($calcoloImporto){
            if(date("l") == "Saturday" || date("l") == "Sunday"){
                $calcoloCommissioni = $calcoloImporto + ($calcoloImporto * 0.05);
                return $calcoloCommissioni;
            }else{
                $calcoloCommissioni = $calcoloImporto + ($calcoloImporto * 0.025);
                return $calcoloCommissioni;
            }
        }

        $importo = $_GET["importo"];
        $scelta = $_GET["scelta"];
        $cambio = array("dollaro" => "1.08", "yen" => "165.76", "franchi" => "0.94", "sterline" => "0.84");

        $calcoloImporto = converti($importo, $scelta, $cambio);
        $calcoloImportoCommissioni = aggiungi($calcoloImporto);

        echo "<table>";
            echo "<tr>";
                echo "<th>Data</th>";
                echo "<th>Giorno Settimana</th>";
                echo "<th>Importo euro</th>";
                echo "<th>Calcolo Importo senza commissioni</th>";
                echo "<th>Commissioni</th>";
                echo "<th>Calcolo Importo con commissioni</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . date("d-m-Y") . "</td>";
                echo "<td>" . date("l") . "</td>";
                echo "<td>$importo</td>";
                echo "<td>$calcoloImporto</td>";
                if(date("l") == "Saturday" || date("l") == "Sunday"){
                    echo "<td>5%</td>";
                }else{
                    echo "<td>2.5%</td>";
                }
                echo "<td>$calcoloImportoCommissioni</td>"; 
            echo "</tr>";
        echo "</table>";
        
    ?>
</body>
</html>