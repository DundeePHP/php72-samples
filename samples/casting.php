<html>
<body>
<pre>
$arr = [0 => 1, 1 => 2, 2 => 3]; 
$obj = (object)$arr;
</pre>

<p>
will now produce an object with accessible properties named "0", "1" and "2"
</p>



<?php

$arr = [0 => 1, 1 => 2, 2 => 3]; 
$obj = (object)$arr; 

echo "<br/>";
echo 'print_r($obj);';
echo "<br/>";
print_r($obj);
echo "<br/>";
echo 'print_r($obj->{1});';
echo "<br/>";
print_r($obj->{1});

?>

</body>
 
</html>