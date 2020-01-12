<?php
function factorial($x, $result) {
    if ($x > 1) {
        $result *=$x;
    factorial($x-1, $result);
    }
    else
    {
        echo $result;
    }
   
};
?>
