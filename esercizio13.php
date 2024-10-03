<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function generaUrlImmagine($altezza, $larghezza){
            return "https://picsum.photos/{$larghezza}/{$altezza}";
        }
        echo "<img src=".generaUrlImmagine(920, 1890).">";
    
    ?>
</body>
</html>