<?php
function showCarCard($car, $id) {
    $url = "page/index.php?id=$id";
    echo '<div class = car>';
    echo '<h3>' . $car['make'] . ' ' . $car['model'] . '</h3>';
    echo '<p>Year: ' . $car['year'] . '</p>';
    echo '<p>Type: ' . $car['type'] . '</p>';
    echo '<a href= "' . $url . '">View Details</a>';    
    echo '</div>';
}

function showCarDetails($car, $basepath = '') {
    if(!$car) {
        echo '<p>Car not found.</p>';
        return;
    }

    $imgPath = $basepath . 'page/assets/img/' . strtolower($car['make'] . '_' . $car['model']) . '.jpg';
    echo '<div class = "details">';
    echo '<div class = "car-image">';
    echo '<img src = "' . $imgPath . '">';
    echo '</div>';
    echo '<div class ="car-info">';
    echo '<h2>' . $car['make'] . ' ' . $car['model'] . '</h2>';
    echo '<p>Year: ' . $car['year'] . '</p>';
    if(isset($car['type'])) {
        echo '<p>Type: ' . $car['type'] . '</p>';
    }
    echo '</div>';
    echo '</div>';
}
?>