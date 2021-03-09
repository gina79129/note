<?
for($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

for($i=1;$i<=9;$i++){
    for($j=1;$j<=(9-$i);$j++){
        echo "*";
    }
    echo "<br>";
}

for($i=1;$i<=6;$i++){
    for($j=(2*$i)-1;$j<=12;$j++){
       echo "&nbsp;"; 
    }
    for($j=1;$j<=(2*$i)-1;$j++){
       echo "*";
    }
    echo "<br>";
}
for($i=1;$i<=13;$i++){
    echo "*";
}

echo "<br>";

for($i=6;$i>=1;$i--){
    for($j=(2*$i)-1;$j<=12;$j++){
       echo "&nbsp;";      
    }
    for($j=1;$j<=(2*$i)-1;$j++){
       echo "*";       
    }
    echo "<br>";
}

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        if($i==1){
            echo "*";
        }elseif($i==9){
            echo "*";
        }elseif($i!=1 && ($j!=1 && $j!=9)){
            echo "&nbsp;&nbsp;";
        }else{
            echo "*";
        }
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        if($i==1){
            echo "*";
        }elseif($i==9){
            echo "*";
        }elseif($i!=1 && ($j!=1 && $j!=9)){
            if($i==$j) echo "*";
            else if($i+$j==10) echo "*";
            else echo "&nbsp;    ";
        }else{
            echo "*";
        }       
    }
    echo "<br>";
}

for($i=1;$i<16;$i++){
    for($j=1;$j<=16;$j++){
        echo "<div style='height:30px;width:30px;border:1px solid black;display:inline-block;'></div>";
    }
    echo "<br>";
}

?>