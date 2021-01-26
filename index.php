<?php

echo abs(-12) . "<br>";
echo ceil(-11.3) . "<br>";
echo floor(11.5) . "<br>";
if(is_nan(1.1)){
    echo "not a number";
}
else{
    echo "number";
}

echo "<br>";

echo max(2,5,2.5) . "<br>";
echo min(2,5,2.25) . "<br>";

echo round(2.23,1);