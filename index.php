<?php 

$names = array('Yury', 'Tanaj', 'Ulad', 'Ciska');

$count = 0;

while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
}

?>


<p>Hi, my name is <?php echo $names[3]; ?></p>