<?php

    $names = array('Brad', 'John', 'Jane', 'Meowsalot', 'Barksalot');

    $count = 1;

    echo '<ul>';

    while ($count < count($names)) {
        echo "<li>Hi, my name is $names[$count] </li>";
        $count++;
    }

    echo '</ul>';

    /*
        Hi, my name is John
        Hi, my name is Jane
        Hi, my name is Meowsalot
        Hi, my name is Barksalot 
    */
?>
