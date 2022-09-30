<?php
function quickSort(&$arr, $low, $high) {
    $i = $low;                
    $j = $high;
    $middle = $arr[ ( $low + $high ) / 2 ];  // middle — опорный элемент; в нашей реализации он находится посередине между low и high
    do {
        while($arr[$i] < $middle) ++$i;  // ищем элементы для правой части
        while($arr[$j] > $middle) --$j;  // ищем элементы для левой части
        if($i <= $j){           
            // перебрасываем элементы
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            // следующая итерация
            $i++; $j--;
        }
    } 
    while($i < $j);
    
    if($low < $j){
      // рекурсивно вызываем сортировку для левой части
      quickSort($arr, $low, $j);
    } 

    if($i < $high){
      // рекурсивно вызываем сортировку для правой части
      quickSort($arr, $i, $high);
    } 
}
?>