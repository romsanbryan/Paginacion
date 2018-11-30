<?php
if (isset($_REQUEST['cat']))
    $categoria=$_REQUEST['cat'];
else
    $categoria="";

if (isset($_REQUEST['mar']))
    $marca=$_REQUEST['mar'];
else
    $marca="";

if (isset($_REQUEST['ord']))
    $order=$_REQUEST['ord'];
else
    $order="name";

if (isset($_REQUEST['pro']))
    $productos=$_REQUEST['pro'];
else
    $productos=12;

if (isset($_REQUEST['pos']))
    $inicio=$_REQUEST['pos'];
else
    $inicio=0;
?>