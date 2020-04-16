<?php
$original_matrix = array(  
    array(1, 2, 3),  
    array(4, 5, 6),  
    array(7, 8, 9)  
);

$m = count($original_matrix);  //rows
$n = count($original_matrix[0]); //columns

$tranpose_matrix = array_fill(0, $n, array_fill(0, $m, 0));

for($i = 0; $i < $n; $i++){  
    for($j = 0; $j < $m; $j++){    
        $tranpose_matrix[$i][$j] = $original_matrix[$j][$i];  
    }  
}

print("Original: <br>");  
for($i = 0; $i < $n; $i++){  
    for($j = 0; $j < $m; $j++){  
       print($original_matrix[$i][$j] . " ");  
    }  
    print("<br>");  
}

print("Transpose: <br>");  
for($i = 0; $i < $n; $i++){  
    for($j = 0; $j < $m; $j++){  
       print($tranpose_matrix[$i][$j] . " ");  
    }  
    print("<br>");  
} 
?>