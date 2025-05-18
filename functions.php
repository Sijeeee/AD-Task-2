<?php
function showCarCard($car, $id) {
    $url = "page/cardetails.php?id=$id";
    echo '<div class = car>';
    echo '<h3>' . $car['make'] . ' ' . $car['model'] . '</h3>';
    echo '<p>Year: ' . $car['year'] . '</p>';
    echo '<p>Type: ' . $car['type'] . '</p>';
    echo '<a href= "' . $url . '">View Details</a>';    
    echo '</div>';
}

function getID ($id, $cars) {
    return isset($cars[$id]) ? $cars[$id] : null;
}