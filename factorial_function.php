<?php
function factor($x, $result) {
    if ($x > 1) {
        $result *=$x;
    factor($x-1, $result);
    }
    else
    {
        echo $result;
    }
   
};
?>
