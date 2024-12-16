<?php 

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }   

    echo addNumbers(1, 2);

    echo "<br>";

?>

<?php
    function greet($name){
        echo "<p> Hi my name is $name and I am a web developer</p>"
        echo "<br>";
        echo "<p> Hi my name is $name and I am a web designer</p>";
    }

    greet("John");
    greet("Jane");
?>

// wordpress specific functions
<h1>
    <?php bloginfo('name'); ?>
</h1>

<p>
    <?php bloginfo('description'); ?>
</p>