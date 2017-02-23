<?php

$dom = new DOMDocument("1.0");
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);

    $users = DB::table('markers')->get();

    header("Content-type: text/xml");

    foreach ($users as $marker) {
       $node = $dom->createElement("marker");
       $newnode = $parnode->appendChild($node);
       $newnode->setAttribute("name",$marker->name);
       $newnode->setAttribute("address", $marker->address);
       $newnode->setAttribute("lat", $marker->lat);
       $newnode->setAttribute("lng", $marker->lng);
       $newnode->setAttribute("type", $marker->type);
    }
    echo $dom->saveXML();

?>