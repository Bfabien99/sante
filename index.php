<?php
    require 'models/apiInfermedica.php';
    $api = new apiInfermedica('d423892e','10676238d756762e2e7ce7bd3bd5f302');

    $info = $api->info();
    $diagnostis = $api->diagnostic();
    $symptome = $api->symptome(25);
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
    <form action="">
        <select name="" id="">
        <?php foreach($symptome as $symp):?>
            <option value="<?= $symp ?>">
                <?= $symp ?>
            </option>
        <?php endforeach?>
        </select>
    </form>
    

    
</body>
</html>