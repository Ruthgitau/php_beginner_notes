<?php
$marks=40;
if($marks>=60){
    echo "First Division";
}
elseif($marks>=45 && $marks<=59){
    echo "Second Division";
}
elseif($marks>=33 && $marks<=44){
    echo "Third Division";
}

else{
    echo "Student will be Fail";
}
?>