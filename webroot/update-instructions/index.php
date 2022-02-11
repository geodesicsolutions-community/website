<?php
/**
 * Copied from old internal tools and adapted to be stand-alone
 *
 * This is in its own folder to give it its own bound context so we don't have to modernize it.
 */

//set up common stuff
define ('ENT','Enterprise');
define ('PREMIER', 'Premier');
define ('BASIC', 'Basic');
define ('LITE', 'Lite');

define ('CLASSIFIEDS','Geo Classifieds');
define ('AUCTIONS', 'Geo Auctions');
define ('CLASSAUCTIONS', 'GeoClassAuctions');
define ('GEOCORE','GeoCore');

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/prototype.js"></script>
    <script type="text/javascript" src="js/main.js?v=2"></script>
    <link href="style.css?v=1" rel="stylesheet" type="text/css" />
    <title>Full Update Instructions</title>
</head>
<body>
<div class="pad">
    <h1 style="text-shadow: 2px 2px 0 #999999;">Product/Version Based Full Update Instructions</h1>
</div>
<br /><br />
<?php
//select box, and figure out the product/edition/version selected
require 'select_update.php';
//displays instructions.
require 'instructions.php';
?>
</body>
</html>
