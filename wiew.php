<?php
$xml = simplexml_load_file("palaute.xml");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palautteet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <h1>Feedback</h1>
   
<body>
    <div class="container">

        <ul class="list-group">
        <a id="linkki1" href="main.html" class="btn btn-dark">Return to front page</a>
            <?php foreach ($xml->palaute as $palaute):?>
                <li class="list-group-item">
                    <h2><?php echo $palaute->nimi; ?> </h2>
                    <p><?php echo $palaute->sposti; ?></p>
                    <p><?php echo $palaute->teksti; ?></p>
                    <p><?php echo $palaute->aika; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>


</body>
</html>


