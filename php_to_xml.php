<?php
if (file_exists("examplew.xml")) {

    $xml = simplexml_load_file("examplew.xml");

    echo "<h3>Names from XML</h3>";

    foreach ($xml->name as $n) {
        echo $n . "<br>";
    }
}
?>
