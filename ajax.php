<?php
header('Access-Control-Allow-Origin: *');

$people = array('Denise', 'Cecilia', 'Minnie', 'Diego');

if (!empty($_GET['show'])) {
    if ($_GET['show'] === 'people') {
        echo json_encode($people);
    }
}

if (!empty($_POST['name'])) {
    array_push($people, $_POST['name']);
    echo json_encode($people);
}
?>
