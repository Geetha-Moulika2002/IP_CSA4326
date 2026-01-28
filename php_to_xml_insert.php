<form method="post">
name:<input type="text" name="name">
<input type="submit" name="save" value="Save"></br>
</form>
<?php
if(isset($_POST['save'])){
$xml=file_exists("examplew.xml")?
simplexml_load_file("examplew.xml"):new SimpleXMLElement("<students></students>");
$xml->addChild("name",$_POST['name']);
$xml->asXML("examplew.xml");
}

?>
