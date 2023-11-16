<?php
    function verif(){
        echo 'présent';
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_POST['validate'])){verif();}?>
    <form action="" method="POST">
        <input type="text" name="nom">
        <input type="submit" name="validate" value="valider">
    </form>
</body>
</html>