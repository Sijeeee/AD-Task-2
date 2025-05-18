

<!DOCTYPE html>
<html>
<head>
    <title>Car Details</title>
    <link href="assets/css/styles2.css" rel="stylesheet">
</head>
<body>
    <a href="../index.php" class="back-link">← Back to list</a>
    
    <?php
    require_once '../functions.php';

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
    
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $car = getID($id, $cars);

    showCarDetails($car, '');
    ?>
</body>
</html>