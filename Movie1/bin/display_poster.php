<?php

 $MovieName ='Venom';
  //do some validation h'ere to ensure id is safe

  $link = mysqli_connect("localhost","root","","MovieMagic1");


  $result = mysqli_query($link,"SELECT * FROM movies WHERE MovieName= '$MovieName'");
  $row = mysqli_fetch_assoc($result);
  $s=$row['img'];
//header("Content-type: image/jpeg");
 //echo $s.'< alt="HTML5 Icon" style="width:128px;height:128px">';


 header("Content-type: image/jpeg");
 echo $s. '<alt="HTML5 Icon" style="width:450x;height:415px">';

?>
