<pre>
<?php 
    $n = 5;
    for($i = 0 ; $i< $n ; $i++){
        for($j = 0 ; $j< $n ; $j++){
            if($j + 1 >= $n - $i){
                echo "O";
            }else{
                echo " ";
            }
        }
        echo "<br/>";
    }
?>
</pre>
