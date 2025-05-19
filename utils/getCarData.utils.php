<?php
function getID ($id, $cars) {
    return isset($cars[$id]) ? $cars[$id] : null;
}
?>