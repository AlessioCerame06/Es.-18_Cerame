<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $film = array("Titanic", "Avatar", "Guerre Stellari", "I Pirati dei Caraibi", "Star Trek");
            echo "<select name='filmpreferito'>";
            $cont = 1;
            for ($i = 0; $i < count($film); $i++) {
                echo "<option value='f$cont'>$film[$i]</option>";
                $cont++;
            }
            echo"</select>";

        ?>
        
    </body>
</html>