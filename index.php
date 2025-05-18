<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
    <link href="assets/css/styles.css" media= "all" rel="stylesheet">
</head>
<body>
    <h1>Available Cars</h1>
    
    <div class ="car-container">
    <?php
    $cars = [
        1 => ["Toyota", "Camry", 2020],
        2 => ["Honda", "Civic", 2021],
        3 => ["Ford", "Focus", 2019],
        4 => ["Honda", "NSX", 2000],
        5 => ["Toyota", "Supra", 2020],
        6 => ["Mclaren", "F1", 2000],
        7 => ["Nissan", "GTR Nismo", 2020],
        8 => ["Mazda", "RX-7 FD", 2010]
    ];

    $cardict = [
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
            "type" => "Super"
        ],
        6 => [
            "make" => "Mclaren",
            "model" => "F1",
            "year" => "2000",
            "type" => "Sports"
        ],
        7 => [
            "make" => "Nissan",
            "model" => "GTR Nismo",
            "year" => "2020",
            "type" => "Sports"
        ],
        8 => [
            "make" => "Mazda",
            "model" => "RX-7 FD",
            "year" => "2010",
            "type" => "Sports"
        ],
    ]
    
    foreach ($cars as $id => $car) {
        $url = "page/cardetails.php?id=$id";
        echo '<div class="car">';
        echo '<h3>' . $car[0] . ' ' . $car[1] . '</h3>';
        echo '<p>Year: ' . $car[2] . '</p>';
        echo '<a href="page/cardetails.php?id=' . $id . '">View Details</a>';
        echo '</div>';
    }
    ?>
    </div>
</body>
</html>