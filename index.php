<?
$xmlfile = 'data-20190901t0000-structure-20160705t0000.xml';
$xmlSchema = 'structure-20161003t0000.xsd.xml';

$reader = new XMLReader();
$reader->open($xmlSchema);

while($reader->read()){
    if($reader->name == "xs:attribute"){
        echo $reader->getAttribute("name")."<br>";
    }
}
?>


