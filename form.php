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

$hotel_keys= array_keys($hotels[0]);
// var_dump($hotel_key);
// var_dump($hotels);

$checkbox_parking = isset($_GET['checkbox_parking']) ? $_GET['checkbox_parking'] : 'no';
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
                    <h1 class="text-center">Hotel</h1>

                    <form action="" method="GET">
                    <input type="checkbox" name="checkbox_parking">
                    <input type="submit" value="Filtra per hotel con parcheggio">
                    

                    </form>

            <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">description</th>
                                <th scope="col">parking</th>
                                <th scope="col">vote</th>
                                <th scope="col">distance to center<th>                       
                                             
                            </tr>
                        </thead>
                <tbody>
                                <?php 
                                if($checkbox_parking !== 'no'){
                                foreach ($hotels as $hotel) {
                                    if($hotel['parking'] === true){
                                        $hotel['parking'] = 'yes';
                                    ?>
                                    <tr>
                                        <td><?php echo $hotel['name'] ?></td>
                                        <td><?php echo $hotel['description'] ?></td>
                                        <td><?php  echo $hotel['parking'] ?></td>
                                        <td><?php echo $hotel['vote'] ?></td>
                                        <td><?php echo $hotel['distance_to_center'] ?></td>
                                    </tr>
                                <?php }}

                                } else {
                                   
                                    foreach ($hotels as $hotel) {
                                ?>
                                    <tr>
                                        <td><?php echo $hotel['name'] ?></td>
                                        <td><?php echo $hotel['description'] ?></td>
                                        <td><?php  echo $hotel['parking'] ?></td>
                                        <td><?php echo $hotel['vote'] ?></td>
                                        <td><?php echo $hotel['distance_to_center'] ?></td>
                                    </tr>
                                <?php

                                    }
                                }
                                
                                ?>

                </tbody>
              
            </table>


            <table class="table">
                        <thead>
                            <tr>
                                <?php foreach($hotel_keys as $hotel_key){
                                    // str_replace('_',' ',$hotel_key); 
                                 ?>
                                 
                                 <th scope="col"><?php echo  str_replace('_',' ',$hotel_key)?></th>
                                 <?php  
                                }?>
                                             
                            </tr>
                        </thead>
                <tbody>
                                <?php foreach ($hotels as $hotel) {
                                    if($hotel['parking'] === true){
                                        $hotel['parking'] = 'yes';
                                    } else{
                                        $hotel['parking'] = 'no';
                                    };

                                    ?>
                                    <tr>
                                        <td><?php echo $hotel['name'] ?></td>
                                        <td><?php echo $hotel['description'] ?></td>
                                        <td><?php echo $hotel['parking'] ?></td>
                                        <td><?php echo $hotel['vote'] ?></td>
                                        <td><?php echo $hotel['distance_to_center'] ?></td>
                                    </tr>
                                <?php } ?>
                </tbody>
              
            </table>

                </div>
            </div>
        </div>

    </section>



</body>

</html>