<?php
    require 'models/apiInfermedica.php';
    $api = new apiInfermedica('d423892e','10676238d756762e2e7ce7bd3bd5f302');

    $info = $api->info();
    $diagnostis = $api->diagnostic(25);
    $parse = $api->parse();
    $symptome = $api->symptome(25);
    $sickName = [];
            foreach (json_decode($symptome) as $key => $sick) {
                $sickName[] = ["id" => $sick->id,"name" => $sick->name];
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
    <h1>What symptome do you have</h1>
    <form action="">
        <select name="" id="">
            <option value="null">
                ...
            </option>
        <?php foreach($sickName as $symp):?>
            <option value="<?= $symp["id"] ?>">
                <?= $symp["name"] ?>
            </option>
        <?php endforeach?>
        </select>
    </form>
    
    <?= $parse ?>
</body>
</html>