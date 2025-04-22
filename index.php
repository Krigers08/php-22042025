<?php
$settings = ['Theme' => 'Dark', 'Font' => 'Arial']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
        body {
            background-color: <?php echo $settings['Theme']?>;
            font-family: <?php echo $settings['Font']; ?>;
        }
    </style>
</head>
<body>
<ul>
    <?php
foreach($settings as $key => $value){
    echo "<li> " . $key . " = " . $value;
}
    ?>
</ul>
</body>
</html>