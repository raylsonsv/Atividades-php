<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
    }
    td{
        border: 1px solid black;
    }
    .purple{
        background-color: purple;
    }
    </style>
</head>
<body>
    <?php
    echo "<h1>Tabela de cores alternadas </h1>" ;
    echo "<table>" ;
    for ($i=0; $i < 10; $i++) {
        if ($i%2==0 ) {
            echo "<tr><td>$i</td><" ;
        }
   else {
   echo "<tr><td>$i</td></tr>";
    }
}
echo "</table>";
?>

</head>
<body>
    
</body>
</html>