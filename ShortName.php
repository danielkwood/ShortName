<?php
    // Generates lower case hyphenated short names for IDs or URLs
    // Created by Daniel Wood

    function ShortName($original_string){
        return preg_replace("/[^A-Za-z0-9-]/", "", strtolower(preg_replace("/[^\w]+/", "-", trim($original_string))));
    }
    
    $test_string = 'Your Original String Goes Here';
    echo ShortName($test_string);
?>