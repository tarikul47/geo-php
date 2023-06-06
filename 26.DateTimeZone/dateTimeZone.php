<?php

/**
 * Date & Time 
 * #. find our defaut time zone - echo date_default_timezone_get()
 * #. Set time zone = date_default_timezone_set('Asia/Dhaka');
 * #. we can get crrent uninx time stamps in second =  time();
 * #. also we can added future time with curent time = $current_time + 5 * 24 * 60 * 60
 * #. For user we can formate unix time stamps = echo date('d/m/Y g:ia', $current_time)
 *      - d/m/Y g:i:sam
 *      - d = day | m = Month | Y = year | g = hour | i = minute | s = second | a = am / pm 
 * #. we can create custom unix time stamps with formate = date('d/m/Y g:i:sa', mktime(10, 50, 20, 4, null))
 * #. we can convert any string time to unix time stamps
 * #. the time unix time stamp convert date formate 
 *      - timeStamps = strtotime('06/06/2023 10:50:36am');
 *      - date('d/m/Y g:i:sa', $timeStamps);
 */

//echo time(); // current unix timestamp in second

echo date_default_timezone_get() . '<br>';

date_default_timezone_set('UTC');

$current_time = time();

// 5 days in future time stamps in second 
echo $current_time + 5 * 24 * 60 * 60 . "<br>";

// last day time stamps in second
echo $current_time - 24 * 60 * 60 . "<br>";

// Need to show on frontend 
echo date('d/m/Y g:ia', $current_time) . '<br>';

// 5 days in future time formate 
echo date('d/m/Y g:ia', $current_time + 5 * 24 * 60 * 60) . '<br>';


date_default_timezone_set('Asia/Dhaka');

// Need to show on frontend 
echo date('d/m/Y g:ia', $current_time) . '<br>';

echo date_default_timezone_get() . '<br>';

// mkdtime() = get unix time stamp
echo mktime(0, 0, 0, 4, 10, null) . '<br>'; // we can define all parameter 

// readbale formate mktime = hour, minute, second, month, current year(null)
echo date('d/m/Y g:i:sa', mktime(10, 50, 20, 4, null)) . '<br>';

// we con convert any string date to unix time stamp
echo date('d/m/Y g:ia', $current_time) . '<br>';

$timeStamps = strtotime('06/06/2023 10:50:36am');
echo $timeStamps . '<br>';

$date = date('d/m/Y g:i:sa', $timeStamps);

// date can parse and given all information 
//var_dump(date_parse($date));

echo date('D/m/Y g:ia', $current_time) . '<br>';
echo date('d/m/Y g:ia', $current_time) . '<br>';
echo date('j/m/Y g:ia', $current_time) . '<br>';
echo date('l/m/Y g:ia', $current_time) . '<br>';
echo date('N/m/Y g:ia', $current_time) . '<br>';
echo date('jS/m/Y g:ia', $current_time) . '<br>';