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

        $filtered_hotels = $hotels;

        $filtered_hotels[] = [
            "nome" => "nuovo";
        ];

        if(isset($_GET["parking"])) && $_GET["parking"] === "1" {
           /*  $parking = $_GET["parking"];
            var_dump($parking); */
            $temp_hotels = [];

            foreach($filtered_hotels as $hotel) {
                if($hotel["parking"]) {
                    $temp_hotels[] = $hotel;
                }
            }
            $filtered_hotels = $temp_hotels;
        }

        if (isset($_GET["vote"]) && $_GET["vote"] != "" ) {
            $temp_hotels
        }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    


    <?php
         /*    foreach($hotels as $hotel) {
                var_dump($hotel);
                echo $hotel['name'];
            } */
    ?>

    <h2>La lista degli Hotels</h2>

    <form action="">
        <div class="d-flex align-items-end">
            <div>
                <label for="parking">Parcheggio</label>
                <select name="parking" id="parking" class="form-select">
                    <option value="">All</option>
                    <option value="1"></option>
                </select>
            </div>
            <div>
                <label for="voto">Voto</label>
                <input type="text">
            </div>
        </div>
    </form>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Dist. dal Centro</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hotels as $hotel) { ?>
        <tr>
            <td><?php echo $hotel["name"]; ?></td>
            <td><?php echo $hotel["description"]; ?></td>
            <td><?php echo $hotel["parking"]; ?></td>
            <td><?php echo $hotel["vote"]; ?></td>
            <td><?php echo $hotel["distance_to_center"]; ?></td>
        </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>