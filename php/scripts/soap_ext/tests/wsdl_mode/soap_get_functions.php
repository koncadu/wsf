<?php

include_once '../../soap_ext.php';

try {
    $client = new WSSoapClient("r.wsdl");
    $test = $client->__getFunctions();
    var_dump($test);

} catch (Exception $e) {
    printf("Message = %s\n",$e->__toString());
}
?>
