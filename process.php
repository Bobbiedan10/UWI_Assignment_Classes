<?php
    $first_seven = substr(str_shuffle("0123456789"), 0, 7);
    $time = strtotime("-16 year", time());
    $result = date("Ymd", $time);
    $liceNum = $first_seven.$result;
    echo $liceNum;
?>