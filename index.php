<?php

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
// var_dump($hotels);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <section>
        <div class="container-md">
            <div class="row">
                <div class="col">

                    <table class="table">

                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">description</th>
                                <th scope="col">parking</th>
                                <th scope="col">vote</th>
                                <th scope="col">distance to center</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($hotels as $hotel) {
                                // var_dump($hotel);
                                foreach ($hotel as $key => $value) {
                                    var_dump($key, $value);
                                    ?>
                                    <tr>
                                        <!-- <td><?php echo $key ?></td> -->
                                        <td><?php echo $value ?></td>
                                    </tr>
                                    <?php
                                };
                            }
                            ?>
                        </tbody>
                    </table> 



                    <!-- <table class="table">

                        <thead>
                            <tr>
                            <?php
                            foreach ($hotels as $hotel) {
                                // var_dump($hotel);
                                foreach ($hotel as $key => $value) {
                                    // var_dump($key, $value);
                                    ?>
                                    <th scope="col"><?php echo $key ?></th>
                                    
                                    <?php
                                };
                            }
                            ?>
                            </tr>
                            <!-- <tr>
                                <th scope="col"><?php echo $key ?></th>
                                <th scope="col">description</th>
                                <th scope="col">parking</th>
                                <th scope="col">vote</th>
                                <th scope="col">distance to center</th>
                            </tr> -->
                        </thead>
                        <!-- <tbody>

                                    <tr>
                                        <!-- <td><?php echo $key ?></td> -->
                                        <td><?php echo $value ?></td>
                                    </tr>
                        </tbody> -->
                    </table> -->
                    
                </div>
            </div>
        </div>
        
    </section>
    
    
    
</body>

</html>