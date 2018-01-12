<?php
if($_POST["height"]==NULL||$_POST["weight"]==NULL){
    echo "please type in all information"."<br>";  
}
else{
    extract($_POST);
    echo "height:$height</br>";
    echo "weight:$weight</br>";
    $height=$_POST["height"];
    $weight=$_POST["weight"];
    echo "BMI: ".$weight/($height*$height)."<br>";
}
$subfile=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
if(empty($_FILES["file"]["tmp_name"])){
    echo "empty";
}
else if($subfile!='bmp' && $subfile!='jpg' && $subfile!='jpeg' && $subfile!='gif' && $subfile!='tif' && $subfile!='tiff' && $subfile!='png' && $subfile!='wmf' ){
    echo "wrong file type";
}
else{
    $filename=$_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src="upload/'.$filename.'"/>';
}    
?>