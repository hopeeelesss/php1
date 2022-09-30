<?php
if(isset($_GET['array'])){
    require_once "quicksort.php";
    $array = array_map('intval', explode(',', $_GET['array']));
    echo 'Before sorting: ' . implode(',', $array);
    quickSort($array, $array[0] , $array[count($array) - 1]);
    echo '<br>After sorting: ' . implode(',', $array);
}else {
    echo "Specify your CMD parameter";
}
?>