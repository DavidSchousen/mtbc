<?php
//add ?color=ff0000 at end of url
//Initialize your variables
$label = null;
$color = blue;

//Check for get parameters
if(!empty($_GET['color'])){ //This is a control statement
  //This is the body of the statement
  $color = "#{$_GET['color']}";
}

//Can we name the color by it's hex value
if($color == "#ff0000"){
  $label = "red";
}elseif($color == "#00ff00"){
  $label = "green";
}elseif($color == "#0000ff"){
  $label = "blue";
}else{
  $label = "unknown";
}

//Output the data
echo "<div style=\"color:{$color}\">The color is {$label}</div>";