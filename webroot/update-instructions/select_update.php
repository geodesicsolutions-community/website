<?php
/**
 * Copied from old internal tools and adapted to be stand-alone
 *
 * This is in its own folder to give it its own bound context
 */

$products = array (
GEOCORE,
CLASSIFIEDS,
AUCTIONS,
CLASSAUCTIONS
);
$currentProduct = (isset($_GET['product']) && in_array($_GET['product'], $products))? $_GET['product']: 0;

if ($currentProduct!= GEOCORE) {
    $editions = array ();

    $editions[] = ENT;
    if ($currentProduct && $currentProduct != CLASSAUCTIONS) {
        $editions[] = PREMIER;

        if ($currentProduct == CLASSIFIEDS) {
            $editions[] = BASIC;
        }
        //un-comment next line if we ever start releasing the Lite edition again
        //$editions[] = LITE;
    }

    $currentEdition = (isset($_GET['edition']) && in_array($_GET['edition'], $editions))? $_GET['edition']: 0;
    $isCore = false;
} else {
    //geocore is it's own edition
    $currentEdition = GEOCORE;
    $isCore = true;
}
$currentVersion = (isset($_GET['version']) && trim($_GET['version']))? trim($_GET['version']): 0;
//clean version #
if ($currentVersion) {
    $currentVersion = preg_replace('/[^a-zA-Z0-9\.]+/','',$currentVersion);
    if (!$currentVersion) {
        $currentVersion = 0;
    }
}
//make display default to 7.0.0 if they selected geocore, or 6.0.8 otherwise
$versionPlaceholder = ($currentProduct==GEOCORE)? '7.0.0':'6.0.8';
$versionDisplay = ($currentVersion)? $currentVersion: '';

$methods = array (
    'wizard' => 'Executable Wizard',
    'zip' => 'Manual FTP (Zipped Package)'
);
$currentMethod = (isset($_GET['method']) && isset($methods[$_GET['method']]))? $_GET['method']: 'wizard';

$validChoices = array ('export', 'use_default');
$tplUpdate = (isset($_GET['tplUpdate']) && in_array($_GET['tplUpdate'], $validChoices))? $_GET['tplUpdate'] : 'export';

//this is the variable we will be accessing throughout the other parts
$selected = array (
'product' => $currentProduct,
'edition' => $currentEdition,
'version' => $currentVersion,
'method' => $currentMethod,
'tplUpdate' => $tplUpdate
);

?>
<form action='' method='get' id='productForm'>
    <select name="product" id="product">
        <option value='0'>-- Product --</option>
        <?php foreach ($products as $product) { ?>
            <option<?php if ($currentProduct === $product) { ?> selected="selected"<?php } ?>><?php echo $product; ?></option>
        <?php } ?>
    </select>
    <?php if ($currentProduct) { ?>
        <?php if ($currentProduct!==GEOCORE) { ?>
            <select name="edition" id="edition">
                <option value='0'>-- Edition --</option>
                <?php foreach ($editions as $edition) { ?>
                    <option
                        <?php if ($currentEdition === $edition) : ?> selected="selected"<?php endif; ?>
                    ><?php echo $edition; ?></option>
                <?php } ?>
            </select>
        <?php } ?>
        <?php if ($currentEdition) { ?>
            <label> <strong>DB Version:</strong> <input type="text" name="version" id="version" placeholder="<?php echo $versionPlaceholder; ?>" value="<?php echo $versionDisplay; ?>" size="4" /></label>
            <br />

            <br />
            <input type="hidden" id="method" value="<?php echo $currentMethod; ?>" name="method" />
            <input type="hidden" id="tplUpdate" value="<?php echo $tplUpdate; ?>" name="tplUpdate" />
            <input type="submit" value="Get Update Instructions" class="mini_button" />
        <?php } ?>
    <?php } ?>
</form>
