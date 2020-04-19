<?php
echo "Transpose of a matrix<br/><br/>";
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

echo "<br/>Addition of two matrices<br/>";

echo "<br/>The First matrix is given below:-"."<br>";
$a=array(array());// First two dimensional array declaration
$b=array(array());//Second two dimensional array declaration
$c=array(array());//Third two dimensional array declaration
$rows=4;
$cols=4;
$m=1;
$n=1;
for($i=0;$i<$rows;$i=$i+1)
{
    for($j=0;$j<$cols;$j=$j+1)
    {
        $a[$i][$j]=$m;
        echo $a[$i][$j]." ";
        $m=$m+1;
    }
    echo "<br>";
}
echo "The second matrix is given below:-<br>";
for($i=0;$i<$rows;$i=$i+1)
{
    for($j=0;$j<$cols;$j=$j+1)
    {
        $b[$i][$j]=$n;
        echo $b[$i][$j]." ";
        $n=$n*1;
    }
    echo "<br>";
}
echo "The Final matrix is given below:-"."<br>";
for($i=0;$i<$rows;$i=$i+1)
{
    for($j=0;$j<$cols;$j=$j+1)
    {
        $c[$i][$j]=$a[$i][$j]+$b[$i][$j]; 
        echo $c[$i][$j]." ";
    }
    echo "<br>";
}
        
echo "<br/>Multiplication of two matrices<br/><br/>";
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[2]);
echo "the first matrix :"."<br/>";
for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $n; $col++)
        echo " ".$a[$row][$col];
    echo "<br/>";
}
echo "the second matrix :"."<br/>";
for ($row = 0; $row < $p; $row++) {
    for ($col = 0; $col < $q; $col++)
        echo " ".$b[$row][$col];
    echo "<br/>";
}
echo " The multiplication of matrices: <br/>";
$result=array();
for ($i=0; $i < $m; $i++) {
    for($j=0; $j < $q; $j++){
        $result[$i][$j] = 0;
    for($k=0; $k < $n; $k++)
        $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
}
}
for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $q; $col++){
        echo " ".$result[$row][$col];
    }
    echo "<br/>";
}
?>