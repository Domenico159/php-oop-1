<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <?php
    require_once __DIR__ . '/movies.php';
    ?>

    <h1>Films</h1>
    <hr>

    <?php
    foreach ($films as $film) { ?>

        <h2> <?php echo $film->name ?> </h2>
        <h3> <?php echo $film->genre ?> </h3>
        <h3> <?php echo $film->year ?> </h3>
        <p> <?php echo $film->descriptions ?> </p>
        <h2> Prezzo : <?php echo $film->price ?> € </h2>
        <?php
        if ($film->age > 29) { ?>
            <h3>Hai uno sconto del <?php echo $film->discount; ?>%</h3>
        <?php } ?>
        <hr>

    <?php } ?>

</body>

</html>