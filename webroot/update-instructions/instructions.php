<?php
/**
 * Copied from old internal tools and adapted to be stand-alone
 *
 * This is in its own folder to give it its own bound context
 */

if (!($selected['product'] && $selected['edition'] && $selected['version'])) {
?>
    <p>
        <strong>Update Instructions:</strong> Select your current Product, Edition, and version
        above to generate instructions.  Also <strong>Write Down</strong> your
        current product, edition, and version information for reference later.
    </p>

    <p>
        If you are <strong>not certain</strong> which version you are currently running you can
        find out this information by logging in to your admin's control panel.
        The current edition and version number that you are running will either
        appear in the <strong>header area or the footer area</strong>. For some versions you may
        need to click into one of the menu pages before it will show up in the
        header or footer. For example, if you are running GeoClassifieds
        Premier 2.0.3, then "Geo Classifieds" would be your "Software Product",
        "Premier" would be your "Software
        Edition" and "2.0.3" would be your "Version Number".
    </p>
    <?php
    return;
}

//Gets here, then they have all that selected.
$ver = $selected['version'];

// @todo use static file again
$latestVer = '18.02.0';

$isEnt = ($selected['edition'] == ENT||$selected['edition']==GEOCORE);
$isPremier = ($selected['edition'] == PREMIER);
$isBasic = ($selected['edition'] == BASIC);
$isLite = ($selected['edition'] == LITE);

$isClassifieds = ($selected['product'] == CLASSIFIEDS || $selected['product'] == CLASSAUCTIONS || $selected['product'] == GEOCORE);
$isAuctions = ($selected['product'] == AUCTIONS || $selected['product'] == CLASSAUCTIONS|| $selected['product'] == GEOCORE);

//Create some common comparisons that might be used more than once
$atLeast['3.0'] = $atLeast['3.0.0'] = (version_compare($ver, '3.0.0RC1','>='));
$atLeast['3.1'] = (version_compare($ver, '3.1.0','>='));
$atLeast['4.0'] = (version_compare($ver, '4.0.0','>='));
$atLeast['4.1'] = (version_compare($ver, '4.1.0','>='));
$atLeast['5.0'] = (version_compare($ver, '5.0.0RC1','>='));
$atLeast['6.0'] = (version_compare($ver, '6.0.0','>='));
$atLeast['7.0'] = (version_compare($ver, '7.0.0beta','>='));
$atLeast['7.1'] = (version_compare($ver, '7.1.0','>='));
$atLeast['7.1.4'] = (version_compare($ver, '7.1.4','>='));
$atLeast['7.3'] = (version_compare($ver, '7.3beta3','>='));
$atLeast['16.02.0'] = (version_compare($ver, '16.02.0','>='));
$atLeast['16.03.0'] = (version_compare($ver, '16.03.0','>='));

//these are all the beta versions leading up to 3.0, treat them as if they are
//at least 3.0
$beta3Versions = array (
'2.0.0b','2.0.1b','2.0.2b','2.0.3b','2.0.4b','2.0.6b','2.0.7b','2.0.8b','2.0.9b','2.0.10b'
);
$atLeast['3.0'] = ($atLeast['3.0'] || in_array($ver, $beta3Versions));

//use to make a link popup
$popup = ' onclick="window.open(this.href); return false;"';


$links['client_area'] = '<a href="#"'.$popup.' class="broken">client area (dead link)</a>';
$links['my_downloads'] = '<a href="#"'.$popup.' class="broken">My Downloads</a>';

//now figure out if we're going to the "latest" or not...
$to = $latestVer;
$ageMessage = ' <span onclick="alert(\'Due to the age of your current version, you will first'
    .' need to update to the version listed here before you can update to the latest version.  '
    .'The instructions below will guide you through this process.\');"
    style="cursor: help; color: navy;">(?)</span>';
$useSetupImport = false;
if (!$atLeast['3.0']) {
    if (!$isEnt && $ver != '2.0.4') {
        //Premier, basic, or lite, pre-dating 2.0.4..
        //they will need to first update to version 2.0.4.
        $to = 'Geodesic Version 2.0.4 -> GeoCore '.$latestVer.$ageMessage;
    } else if ($isEnt && !$isClassifieds && $ver != '1.0.7') {
        //Auctions ent before 1.0.7
        $to = 'GeoAuctions Version 1.0.7 -> GeoCore '.$latestVer.$ageMessage;
    } else if ($isEnt && !$isAuctions && $ver != '2.0.5.2') {
        //classifieds ent before 2.0.5.2
        $to = 'GeoClassifieds Version 2.0.5.2 -> GeoCore '.$latestVer.$ageMessage;
    }
    if (!$isEnt) {
        $useSetupImport = true;
    }
}
//figure out package label

$oldPackageFolder = $links['my_downloads'].' &gt; Geo'.(($isClassifieds)? 'Classifieds ': 'Auctions ');
if ($isEnt) { $oldPackageFolder .= 'Enterprise'; }
else if ($isPremier) { $oldPackageFolder .= 'Premier'; }
else {$oldPackageFolder .= 'Basic'; }

$oldPackageFolder .= ' - Single License &gt; ';

$oldPackageFolder .= 'Previous Releases &gt; 2.0.4 (Update Only)';

$packageFolder = $links['my_downloads'].' &gt; GeoCore - Purchased License &gt; Current Release &gt;';

$packageFolder .= (($useSetupImport)? 'New Installation': 'Update Existing Installation');

$packageLabel = 'GeoCore ';
$packageLabel .= (($useSetupImport)? 'Install' : 'Update').
    ' - '.(($selected['method']=='wizard')? 'Executable Wizard' : 'Zip').
    ' Package - Version '.$latestVer;

//Geodesic_CA_ent_update_zipped_v{$version}.zip
//Geodesic_CA_ent_full_install_wizard_v{$version}.exe
$packageFilename = 'Geodesic_core';

$packageFilename .= '_'.(($useSetupImport)?'full_install':'update').'_'.
    (($selected['method']=='wizard')? 'wizard':'zipped').'_v'.$latestVer.
    (($selected['method']=='wizard')? '.exe':'.zip');

$importantStart = '<div class="importantBox">
<span style="font-weight: bold;"> IMPORTANT: </span>';

$noteStart = '<div class="noteBox">
<span style="font-weight: bold;"> NOTE: </span>';

$tplUpdate = false;
if (($atLeast['3.0'] || $isEnt) && !$atLeast['5.0']) {
    $tplUpdate = true;
}
$smarty_31 = (!$useSetupImport&&!$tplUpdate&&!$atLeast['6.0']);


?>
<?php if ($doYourself) { ?>
    <?php echo $noteStart; ?>
        The instructions below are <strong>not covered by Professional Update Service</strong>.
        You may need to follow these instructions depending on if they apply to your
        site or not.
    <?php echo '</div>';?>
    <?php if (isset($_GET['doYourself'])) { ?>
        <script type="text/javascript">
            //<![CDATA[
            jQuery(document).ready(function () {
                jQuery('ol.top').children(':not(.doYourself)').hide();
            });
            //]]>
        </script>
    <?php } ?>
<?php } else { ?>
    <br />
    <p><strong style="cursor: help">Update Instructions:</strong><br />
    <strong>From:</strong> <?php echo $selected['product'].' '.$selected['edition'].' DB Version '.$selected['version']; ?>
    <br />
    <strong>To:</strong> <?php echo $to; ?>
    <br />
    <span id='methodText'>
        <strong>Method: </strong> <?php echo $methods[$selected['method']]; ?> <span id='changeMethod' class="mini_button">change</span>
    </span>
    <span id='methodSelectBox' style="display: none;">
        <select id="methodSelect">
            <?php foreach ($methods as $key => $value) { ?>
                <option value="<?php echo $key; ?>"<?php if ($currentMethod === $key) { ?> selected="selected"<?php } ?>>
                    <?php echo $value; ?>
                </option>
            <?php } ?>
        </select>
    </span>

    <?php if ($tplUpdate) { ?>
        <br />
        <span id='tplUpdateText'>
            <strong>Use: </strong>
            <?php if ($selected['tplUpdate']=='export') {?>
                Existing Custom Templates &amp; Design
            <?php } else { ?>
                New Default Templates &amp; Design
            <?php } ?>
            <span id='changeTplUpdate' class="mini_button">change</span>
        </span>
        <span id='tplUpdateSelectBox' style="display: none;">
            <select id="tplUpdateSelect">
                <option value="export"<?php if ($selected['tplUpdate']=='export') { ?> selected="selected"<?php }?>>Keep Using Existing Templates &amp; Design</option>
                <option value="use_default"<?php if ($selected['tplUpdate']=='use_default') { ?> selected="selected"<?php }?>>Use New Default Templates &amp; Design</option>
            </select>
        </span>
    <?php } ?>
    </p>
<?php } ?>

<?php if (!$atLeast['16.03.0']) { ?>
    <?php echo $importantStart; ?>
        <strong style="color: red;">Compatibility Warning:</strong>
        <a href="/wiki/doku.php/id,server_requirements;start/"
            <?php echo $popup; ?>>Minimum requirements</a> have
        changed since Ver. <?php echo $ver; ?>, please ensure that your site meets
        these requirements before proceeding:
        <ul>
                <li><strong>PHP 5.4.0</strong> or higher. (But really, 7.3+ since 7.2 and below are officially EOL)</li>
        </ul>
    <?php echo '</div>'; ?>
<?php } ?>

<?php if ($useSetupImport) { ?>
    <?php echo $importantStart; ?>
        Due to differences in
        the <em>software platform</em>, your <strong style="color: red;">current site design will
        be lost</strong>.  The
        update to the latest version will preserve your categories, users,
        listings, and price plan. However, you will be required to modify the
        design, as your site's existing design will be lost. Instead, your
        updated site will look like the default demo on the Geodesic Solutions
        website.
    <?php echo '</div>'; ?>
<?php } else if ($tplUpdate) { ?>
    <?php echo $importantStart; ?>
        The software's default design has totally changed, including contents of modules and pages that are
        generated by the software.  The software even has a new design system different
        than what you might be used to in previous versions.
        <br /><br />
        <?php if ($selected['tplUpdate']=='export') {?>
            By following instructions below, your existing "overall" templates and design will stay intact,
            however the <strong style="color: red;">module and page contents will look different</strong>.
            You will most likely need to make manual adjustments to match your existing design (using the instructions below).
        <?php } else { ?>
            The instructions below will help you set up your site to use the new re-designed default templates,
            so that any existing templates from previous versions will no longer be used.
        <?php } ?>
    <?php echo '</div>'; ?>
<?php } else if ($smarty_31) { ?>
    <?php echo $importantStart; ?>
        Due to the new version of <strong>Smarty Template Engine 3.1</strong>, your site design may require changes
        to be compatible with the new version of Smarty.  The largest change is <strong>No more {php} tags!</strong>
        In addition, Smarty 3 is more "strict," so potential problems in your templates that may
        have gone undetected in previous versions may now cause errors.
        <br /><br />
        The instructions below will help you make sure your design is compatible with Smarty 3.1.
        For some sites, these steps may take a significant amount of time, during which your site may be down.
        Because of this, it is recommended to perform this installation on a test location first to minimize downtime.
        This is especially true for high-traffic sites, sites with highly customized design, or sites that use {php} tags.
        Performing the update on a test location is <strong>not</strong> part of these instructions.
    <?php echo '</div>'; ?>
<?php } ?>
<ol class="top">
    <?php require 'instructions/pre_update.php'; ?>
    <?php require 'instructions/update_normal.php'; ?>
    <?php require 'instructions/post_update.php'; ?>
</ol>


