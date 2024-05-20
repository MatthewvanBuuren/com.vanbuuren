<?php
header('Content-disposition: attachment; filename=Matthew William van Buuren.vcf');
header('Content-type: text/x-vcard');
readfile('Matthew William van Buuren.vcf');
?>