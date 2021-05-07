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
    $pastificio = [
        'Il pastificio',
        'Grano decorticato a pietra',
        'Il Molise c\'è',
        'Filiera integrata',
        '100 anni di pasta',
        'Sartoria della pasta',
        'Spaghetto Quadrato',
        'Le Persone'
    ]?>

    <?php 
    $collezione = [
        'Collezione da Chef',
        'Grandi Cucine',
        'Biologiche',
        'Quadrate'
    ]
    ?>
    <?php 
    $prodotti = [
        'Le Classiche',
        'Le Integrali',
        'Le Speciali',
        'Le Biologiche',
        'Le Gluten-free',
        'Le Semole',
        'Le Extra di Lusso'
    ]
    ?>
    <?php
    $news = [
        'e-commerce',
        'b2b',
        'comunicazione',
        'scarica i cataloghi',
        'rassegna stampa',
        'video',
        'contatti',
        'lavora con noi',
        'certificazioni',
        'privacy policy'
    ]
    ?>

    <?php
    $dati_societari = [
        'ragione sociale :' => ' Molisana spa',
        'sede legale :' => ' contrada colle dele api, 100/A - 86100 - campobasso (cb)',
        'pec :' => ' lamolisana@pec.it',
        'tel :' => ' +39 0874 4981',
        'fax :' => ' +39 0874 4981',
        'segnalazioni' => ' info@lamolisana.it',
        'commerciale' => ' commerciale@lamolisana.it',
        'export' => ' export@lamolisana.it'
    ]
    ?>

    <?php
    $contatti_finali = [
        'numero verde' => '800 10102',
        'wathapp' => '333 2288555'
    ]
    ?>

    <div class="footer">
        <div class="footer_container">
            <div class="col-1">
                <img src="img/logo.png" alt="">
            </div>
            <div class="col-2">
                <div>
                    <?php foreach ($pastificio as $paste) {?>
                        <ul>
                            <li><?php echo $paste ?></li>
                        </ul>
                    <?php } ?>
                </div>
                <div>
                    <?php foreach ($prodotti as $nomi) {?>
                        <ul>
                            <li><?php echo $nomi ?></li>
                        </ul>
                    <?php } ?>
                </div>
                </div>
                <div class="col-3">
                    <div>
                        <?php foreach ($collezione as $collezionabili) {?>
                            <ul>
                                <li><?php echo $collezionabili ?></li>
                            </ul>
                        <?php } ?>
                    </div>
                    <div>
                        <?php foreach ($news as $notizie) {?>
                            <ul>
                                <li><?php echo $notizie ?></li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <?php foreach ($dati_societari as $key => $dati) {?>
                            <ul>
                                <li class="uppercase"><?php echo $key . $dati?></li>
                            </ul>
                        <?php } ?>
                    </div>
                    <div>
                        <?php foreach ($contatti_finali as $key => $numeri) {?>
                            <ul>
                                <li><?php echo $key . $numeri?></li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>