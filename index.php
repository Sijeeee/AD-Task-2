<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
    <link href="assets/css/styles.css" media= "all" rel="stylesheet">
</head>
<body>
    <h1>Car Inventory System</h1>
    
    <div class ="car-container">
    <?php
    require_once 'utils/carDisplay.utils.php';
    require_once 'utils/getCarData.utils.php';

    $cars = [
        1 => [
            "make" => "Toyota",
            "model" => "Camry",
            "year" => "2020",
            "type" => "Sedan"
        ],
        2 => [
            "make" => "Honda",
            "model" => "Civic",
            "year" => "2021",
            "type" => "Sedan"
        ],
        3 => [
            "make" => "Ford",
            "model" => "Focus",
            "year" => "2019",
            "type" => "Hatchback"
        ],
        4 => [
            "make" => "Honda",
            "model" => "NSX",
            "year" => "2000",
            "type" => "Sports"
        ],
        5 => [
            "make" => "Toyota",
            "model" => "Supra",
            "year" => "2020",
            "type" => "Sports"
        ],
        6 => [
            "make" => "Mclaren",
            "model" => "F1",
            "year" => "2000",
            "type" => "Super"
        ],
        7 => [
            "make" => "Nissan",
            "model" => "GTR",
            "year" => "2020",
            "type" => "Sports"
        ],
        8 => [
            "make" => "Mazda",
            "model" => "RX-7",
            "year" => "2010",
            "type" => "Sports"
        ],
    ];
    
    foreach ($cars as $id => $car) {
        showCarCard($car, $id);
    }
    ?>
    </div>
</body>
</html>