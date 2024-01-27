<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description');  ?></h2>

<?php
function myFirstFunction($name, $color) {

    echo "<p>Hi, my name is $name and my favorite color is $color</p>";
};

myFirstFunction('John', 'white');
myFirstFunction('Jane', 'blue');

?>