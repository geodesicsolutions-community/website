<?php if (!$isCore) { ?>
    <li class="new">
        Log into the client area, and go to <?php echo $links['my_downloads']; ?>.  Next to your
        existing main package, it should say:
        <pre>Eligible for <strong>GeoCore Upgrade</strong></pre>
        <?php echo $importantStart;?>
            If you see a message below this that <em>starts</em> with:
            <pre><strong>NOTE:</strong> Access to New Downloads has <strong style="color:red;">Expired.</strong></pre>
            As it states in the rest of the message, you will need to extend
            your download access in order to download the update.
            You can see the different
            pricing options for extending your download access
            <a href="#" class="broken" <?php echo $popup; ?>>here</a>.
            <br /><br />
            <strong>Note:</strong> We mention this in one of the first steps, to make
            sure you are aware of it before getting too far in the instructions.
            You will be guided through the purchase process in the upcoming steps if this
            does apply to you.
        <?php echo '</div>';?>
    </li>
    <li class="new">
        Below the "Eligible for GeoCore Upgrade" message, click on the button labeled <strong>Upgrade License to GeoCore</strong>.
        When it asks if you are sure, click <strong>Ok</strong>.

        <br /><br /><strong>What it does:</strong> Clicking on the button will
        generate a new GeoCore license, transfer any
        addons to the new license, and transfer your remaining support and download
        access time to the new license.  Note that your old license will remain active
        to give you time to upgrade to Geocore.
    </li>
<?php } ?>

<li>
    <strong>THIS PART IS OUTDATED</strong> - we will update it if/when we are able.
    <br><br>
    <a href="#"<?=$popup?>>
    Download the Update Package</a> from the <?php echo $links['client_area'];?>
    on our site.  Remember where you have downloaded the package to on your
    PC. The package to download will be at:
    <br /><br />
    <strong>Browse to:</strong> <em><?php echo $packageFolder; ?></em><br /><br />
    <strong>Download Labeled:</strong> <em><?=$packageLabel?></em>
    <?php if ($isCore) { ?>
        <br /><br />
        <strong>Note:</strong>  We give this as one of the first steps, to make
        sure you can properly download the latest update package, before going
        through any more trouble.  You will not actually be using the update
        package you downloaded until at least a few steps further.
    <?php } ?>
    <br /><br />
    <strong>If you cannot download this package</strong>, you will need to purchase an extension
    to your download access using the links at the top of the page.<br /><br />
    <span id="purchaseUpdateToggle">
        + Purchase Download Extension Instructions
    </span>
    <div id="purchaseUpdateInstructions" style="display: none;">
        <ol>
            <li>
                Note that these steps are only required if your <strong>download access has expired</strong> and the above mentioned package
                is not able to be downloaded.  You do not need to purchase something every time you update if you
                are doing the update yourself, only if your download access has expired.

            </li>
            <li>
                At the top of the same page that lists the download, you see:
                <pre>Extend Download Access to Updates <span style="color: blue;">See Options</span></pre>
                Click on <strong>see options</strong> link.  Make sure you click the link next
                to the correct one, as there will also be a link that only extends the paid support.
                Of course you can extend paid support if you wish, but it will not grant access to the download by itself.
            </li>
            <li>
                You will have a few different duration and pricing options, click on <strong>Add to Cart</strong> next to the option you wish to purchase.
            </li>
            <li>Continue through the checkout and purchase process.</li>
            <li>Once you have paid, come back to the download page and this time it should allow you to download the software.</li>
        </ol>
    </div>
</li>

<?php if ($atLeast['3.0']) { ?>
    <li>
        Turn your site &quot;off&quot;: In the admin panel, at <strong>Site
        Setup &gt; General Settings</strong> change the setting
        <strong>Site On/Off Switch</strong> to <strong>off</strong>
        and save the changes.
    </li>
<?php } ?>
<?php if ($atLeast['3.1']) { ?>
    <li>
        Turn Geo cache Off: In the admin panel, at <strong>Site Setup
        &gt; Cache</strong> change the setting <strong>Cache
        System</strong> to <strong>off</strong> if it is currently on,
        and save the settings.
    </li>
<?php } ?>
<li>
    <a href="/wiki/doku.php/id,tutorials;server;db_backup/"<?=$popup?>>
    Back up your current MySQL Database</a>.  <strong>Important Step! Do
    NOT skip!</strong>
</li>
<li>
    Create a full File Backup of your current installation.
    <br /><br />
    <strong>Very Important!</strong>  Don't skip this step either!
    We cannot stress the two backup
    instructions enough!  These backups will be your only life line in the
    event that something goes wrong during the update.  In addition, if
    you have made changes to files, the file backup will be there to make restoring those
    customizations much easier.
</li>
<?php if (!$atLeast['3.0']) { ?>
    <?php if (!$isEnt) {?>
        <?php if ($ver != '2.0.4') { ?>

            <li class="new">
                <a href="/wiki/doku.php/id,installation;download_software;start/"<?=$popup?>>
                Download 2.0.4</a> version from the client area.  The package to download will be in the <a href="#" class="broken"<?=$popup?>>Client Area</a> at:
                <br /><br />
                <strong>Browse To:</strong> <em><?=$oldPackageFolder?></em><br /><br />
                <strong>Download Labeled:</strong> <em>Update to 2.0.4 <?php
                        //will be CB, CP, AP, or CL depending on product & edition
                        if ($isClassifieds) { echo 'Classifieds '; }
                        else { echo 'Auctions '; }

                        if ($isBasic) { echo 'Basic'; }
                        else if ($isPremier) { echo 'Premier'; }
                        else if ($isLite) { echo 'L'; }
                    ?></em>
            </li>
            <li class="new">
                Follow the instructions that are included with the
                2.0.4 file download to update the software to 2.0.4.
            </li>
            <li class="new">
                Access your software's admin panel and verify that it
                now displays version <strong>2.0.4</strong>.
            </li>
            <li class="new">
                Proceed to the next step ONLY if 2.0.4 displays.
                <br />Otherwise, contact Geodesic Solutions Support if you are having
                trouble updating to 2.0.4.
            </li>
        <?php } ?>
    <?php } else if ($isClassifieds && $ver !== '2.0.5.2') { ?>
        <li class="new">
            <strong>Update to version 2.0.5.2</strong>:  Sorry this is too old, there isn't a viable update path.
            Your best bet is to treat it like migrating from another software platform, and have a developer assist.
        </li>
    <?php } else if ($isAuctions && $ver !== '1.0.7') { ?>
        <li class="new">
            <strong>Update to version 1.0.7</strong>:  Sorry this is too old, there isn't a viable update path.
            Your best bet is to treat it like migrating from another software platform, and have a developer assist.
        </li>
    <?php } ?>
<?php } ?>

