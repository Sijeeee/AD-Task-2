

<!DOCTYPE html>
<html>
<head>
    <title>Car Details</title>
    <link href="assets/css/styles2.css" rel="stylesheet">
</head>
<body>
    <a href="../index.php" class="back-link">← Back to list</a>
    
    <?php
    $cars = [
        1 => ["Toyota", "Camry", 2020, "Silver", "2500 miles", "camry.jpg"],
        2 => ["Honda", "Civic", 2021, "Blue", "6000 miles", "civic.jpg"],
        3 => ["Ford", "Focus", 2019, "Blue", "5000 miles", "focus.jpg"],
        4 => ["Honda", "NSX", 2000, "Red", "1000 miles", "nsx.jpg"],
        5 => ["Toyota", "Supra", 2020, "White", "2500 miles", "supra.jpg"],
        6 => ["Mclaren", "F1", 2000, "Orange", "0 miles", "mclaren_f1.jpg"],
        7 => ["Nissan", "GTR Nismo", "White", "1500 miles", "nismo.jpg", 2020],
        8 => ["Mazda", "RX-7 FD", "Liberty Walk Livery", "3000 miles", "rx7fd.jpg", 2010]
    ];
    
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    if($id > 0 && isset($cars[$id])) {
        $car = $cars[$id];
        echo '<div class="details">';
        echo '<div class="car-image">';
        echo '<img src="assets/img/' . $car[5] .'" alt="' . $car[0] . ' ' . $car[1] .'">';
        echo '</div>';
        echo '<div class="car-info">';
        echo '<h2>' . $car[0] . ' ' . $car[1] . '</h2>';
        echo '<p>Year: ' . $car[2] . '</p>';
        echo '<p>Color: ' . $car[3] . '</p>';
        echo '<p>Mileage: ' . $car[4] . '</p>';
        echo '</div>';  
        echo '</div>';  
        } else {
        echo '<p>Car not found.</p>';
    } 
    ?>
</body>
</html>