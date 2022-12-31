<?php
$frase = 'Hotel Rooms';
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>PHP Hotel</title>
</head>
<body>
    <h1 class="text-center"><?php echo $frase; ?></h1>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $hotels as $key ) { ?>
                <tr>
                    <td><?php echo $key['name']; ?></td>
                    <td><?php echo $key['description']; ?></td>
                    <td><?php echo $key['parking'] ? 'Si' : 'No'; ?></td>
                    <td><?php echo $key['vote']; ?></td>
                    <td><?php echo $key['distance_to_center']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- <?php foreach( $hotels as $key ) { ?>
            <li>
                <h3><?php echo $key['name']; ?></h3>
                <div><?php echo $key['description']; ?></div>
                <div>Parcheggio: <?php echo $key['parking'] ? 'Si' : 'No'; ?></div>
                <div>Voto: <?php echo $key['vote']; ?></div>
                <div>Distanza dal centro: <?php echo $key['distance_to_center']; ?>km</div>
            </li>
        <?php } ?> -->
    </div>
</body>
</html>