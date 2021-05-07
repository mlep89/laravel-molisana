<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $menu = [
        'Home',
        'Chi siamo',
        'Prodotti',
        'News',
    ]?>

    <div class="header">
        <img src="img/logo.png" alt="">
    </div>
    <div class="header_menu">
    <?php foreach ($menu as $products) {
    ?>
        <ul>
            <li class="title"><?php echo $products ?></li>
        </ul>
    <?php } ?>
    </div>
</body>
</html>