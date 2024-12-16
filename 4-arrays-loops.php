<?php 
    $names = array("John", "Jane", "Joe");
    echo $names[0];
    echo "<br>";
    echo $names[1];
    echo "<br>";
    echo $names[2];
    echo "<br>";
    echo $names[3];

?>

<p> Hi my name is <?php echo $names[0]; ?></p>
<p> Hi my name is <?php echo $names[1]; ?></p>
<p> Hi my name is <?php echo $names[2]; ?></p>


<? php
    $count = 1;
    while ($count <= 10) {
        echo "<li> $count </li>";
        echo "<br>";
        $count++;
    }
?>

<?php
    $count = 0;
    while($count < count($names)) {
        echo "<li> Hi, my name is $names[$count]</li>";
        $count++;
    }
?>
