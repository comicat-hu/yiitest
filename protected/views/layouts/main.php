<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <h1>Layout main</h1>
    <?php echo $content; ?>

    <footer>-- comi test web --</footer>
</body>

</html>