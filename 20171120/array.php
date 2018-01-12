<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$data</title>
</head>

<body>
        <?php
        $data=array(
            array("Name","Stock","Sold"),
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)  
        );
        $x;
        $y;
        //for
        echo "<table border='1'>";
        for($x=0; $x<5; $x++) {
                echo "<tr>";
            for($y=0; $y<3; $y++) {
                if($x==0){
                  echo "<th>". $data[$x][$y]."</th>";
                }
                else{
                  echo "<td>". $data[$x][$y]."</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table><br>";

        //foreach
        $start=0;
        echo "<table border='1'>";
        foreach ($data as $key) {
            echo "<tr>";
            if($start==0){
                foreach ($key as $value) {
                  echo "<th>". $value."</th>";
                 }
            }
            else{
                foreach ($key as $value) {
                echo "<td>". $value."</td>";
                }
            }
            $start=1;
            echo "</tr>";
        }
        echo "</table><br>";

        //array_map + join
        echo "<table border='1'>";
        function table($str){
        $b= join("</td><td>",$str);
        $a = "<tr><td>".$b."</td></tr>";
           return $a;
        }
        $result=[];
        $result=array_map("table",$data);
        for($y=0;$y<5;$y++){
            echo $result[$y];
        }
        echo "</table><br>";
        ?>
</body>

</html>