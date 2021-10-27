<li>
    Locate the <?=$latestVer?> <?php if ($useSetupImport) {?>fresh install<?php } else { ?>update<?php } ?> package you downloaded earlier, the file should be named
    something similar to:<br />
    <strong><?php echo $packageFilename; ?></strong><br /><br />
    If you can't find it, re-download it by following the applicable step above.
    <?php if ($useSetupImport) { ?>
        <?php echo $noteStart; ?>
            You are using the "fresh install" package to update this time.  This is because
            of changes between your current platform and the latest, the update
            process is a little different than if you were already on the
            new platform.  To give you an idea of what to expect in the
            upcoming steps:
            <br />- "upload" files from fresh install to your server.
            <br />- "Process" your current database to allow it to be
            imported.  (This step is referred to as "pre-setup")
            <br />- "Install" the latest version.
            <br />- Import your users, price plan, categories, and listings
            into the new installation.
        <?php echo '</div>'; ?>
    <?php } ?>
</li>

<?php if ($selected['method'] == 'wizard') { ?>
    <?php require 'wizard.php'; ?>
<?php } else { ?>
    <?php require 'zipped.php'; ?>
<?php } ?>

<li>
    The next step in the upgrade process will take place in a browser window.
    The software will perform a quick check of your server to ensure that the
    minimum requirements to run the software are met. You will see a page
    similar to the image below. If the software reports that your server does
    not meet the minimum requirements to run the software, you will need to
    contact your host to make any necessary changes in order to meet the
    minimum requirements.
    <br /><img src="images/<?php if ($useSetupImport) { ?>install14.png<?php } else { ?>upgrade7.png<?php } ?>" alt="Browser portion update page" class="screenshot" />
</li>
<li>
    "Check" the radio button to agree to the License Agreement.
    <?php if (!$useSetupImport) { ?>
        You should have
        already performed a "database backup" and a "File Backup" earlier in this
        upgrade process. If you did, "check" the radio button confirming that you
        have backed up the entire database, and then the "Continue" button.
    <?php } else { ?>Then click on the "Continue" button.<?php } ?>

</li>
<?php if ($useSetupImport) { ?>
    <li class="new">
        The next page will test the connection to the Database.  If there is
        something wrong, you will need to fix it (usually by checking the
        database settings in your config.php file) before continueing.

        If everything appears set up correctly with the database, there will be
        a "Continue" button, click that button to go to the next page.
    </li>
    <li class="new">
        This page should look similar to the screen shot below.  Click on the
        "pre-setup" link to proceed to the next step.
        <br /><img src="images/install15.png" alt="Browser portion update page" class="screenshot" />
    </li>
    <li class="new">
        Check the box (You DID back up your files and database already as one
        of the first steps, right?) and click the "Upgrade" button when you are
        ready to proceed.
        <br /><img src="images/install16.png" alt="Browser portion update page" class="screenshot" />
    </li>
    <li class="new">
        The software will now 'rename' all of your current installation's
        database tables in preparation to be imported.
        <br /><br />
        Next, you will see a screen similar to the one below. Click on the
        "Standard Setup" link next to <strong>Step 1</strong>. A new window will open, but <strong>DO NOT</strong> close
        this window.  You will need to return to this screen later.
        <?php echo $importantStart; ?>
            Remember, do <strong>not</strong> close
            the window that is illustrated in the screen shot below.  You will
            be coming back to this screen later so you need to keep it open.
            <br />pre_setup/index.php?moveData
        <?php echo '</div>'; ?>
        <br /><img src="images/upgrade204_3.png" alt="Browser portion update page" class="screenshot" />
    </li>
    <li class="new">
        You will once again be taken to "Server Minimum Requirements" screen
        as you were when you began the "Browser Based Installation Wizard"
        portion of the update. Again, check the box to Agree with the "License
        Agreement" and then the "Continue" button. Follow any on-screen
        instructions that pertain to you, and click the "Continue" button.
    </li>
    <li class="new">
        Follow the rest of the steps, answering any questions that pertain to
        you.  This portion will work just like a "fresh installation" would,
        becasue that is exactly what is happening, you are performing a fresh
        installation.  Remember, you will be importing your data from the "old"
        installation in a few steps.
    </li>
    <li class="new">
        Once the setup is finished:  Now go back to that window
        that should still be open (the one that looks like the screen below),
        and click on the "Transfer my Old Data" link next to the <strong>Step 2</strong>.

        <br /><img src="images/upgrade204_3.png" alt="Browser portion update page" class="screenshot" />
        <?php echo $importantStart; ?>
            Oops, did you close that window?  If so you will have to manually go to
            the URL that completes the upgrade since you can't click on the
            "Transfer my Old Data" link.  The URL ends in <strong>
            "pre_setup/index.php?moveData"</strong>, so if your software was
            installed at example.com, you would go to:<br /><br />
            http://example.com/<strong>pre_setup/index.php?moveData</strong>
        <?php echo '</div>'; ?>
    </li>
    <li class="new">
        Your database will once again be updated, but this time with your old
        installation's data. This is the step where your old installation data
        is being "imported" into the fresh installation.  You will then see the
        screen below. Click the "admin" link to proceed.
        <br /><img src="images/upgrade204_4.png" alt="Browser portion update page" class="screenshot" />
    </li>
<?php } else { ?>
    <li>
        On the next page you will enter your license key.  Usually the key will
        already be entered for you, but if not, copy and paste the license key
        from the client area.
        <?php if (!$isCore) { ?>
            <br /><br />
            Make sure you enter the new GeoCore license key, which you can find
            in the client area.  Your old license key will not work with GeoCore.
            Conversely, the GeoCore license key will not work with the older software
            versions before 7.0.0.
        <?php } ?>
        <br /><img src="images/upgrade_license.png" alt="License page" class="screenshot" />
    </li>
    <li>
        The next screen(s) will be similar to the one below. The software will
        report your current version, as well as, the version you are upgrading to.
        Click on the "Run Listed Upgrades" button to apply the upgrade to your
        installation, and then when prompted, the "Finish" button to complete the
        process.
        <?php if (!$isCore) { ?>
            <br /><br />
            <p class="new">
                <strong>Note:</strong>  The update to 7.0.0 can take a long time due
                to the new way that geographic regions are structured. Particularly on
                large sites, the update may take several hours. During that time, the
                page will periodically refresh to update its status and prevent timeouts.
            </p>
        <?php } ?>
        <br /><img src="images/upgrade8.png" alt="Browser portion update page" class="screenshot" />
    </li>
    <?php if ($tplUpdate) { ?>
        <li class="new">
            When the update to 5.0.0 is run, it will give a screen that looks
            similar to the screenshot below.
            <br />
            <img src="images/update_export_tpls.png" alt="Export design update page" class="screenshot" />
            <br />
            Make sure that the checkbox highlighted in the screenshot above is
            <?php if ($selected['tplUpdate'] == 'export') { ?>
                <strong>checked</strong> to perform the design export, and continue on to the next step.
            <?php } else { ?>
                <strong>NOT checked</strong> so that you can use the
                default templates, and continue on to the next step.
                <?php echo $noteStart; ?>
                    If you change your mind, you will be able to export your
                    pre-5.0 design in the admin panel after the update is complete.
                <?php echo '</div>'; ?>
            <?php } ?>
        </li>
    <?php } ?>
    <li>
        When you get to the last step in the Update Wizard it will give you a link
        to the admin panel, as well as, a link to front User Side of the
        software. (If you do not see these links the update is not yet complete!)
        Access your software's Admin Panel using the link on the last step.
    </li>
<?php } ?>

<li>
    From the admin login screen of the software, enter your admin
    "username" and "password" as you ordinarily would and click the "Login"
    button.
</li>
<?php if (!$atLeast['3.0']) { ?>
    <li class="new">
        You will now see a screen similar to the one below.  Enter your license
        key in the space provided and click "Enter".
        <br /><img src="images/upgrade9.png" alt="Browser portion update page" class="screenshot" />
        <br /><br />
        To see what your license key is:
        <ol type="a">
            <li>
            <strong>THIS PART IS OUTDATED</strong> - we will update it if/when we are able.
                <br><br>
                Log in to your <?php echo $links['client_area']; ?> on the Geodesic Solutions website
                and click "View" for your order.
                <br /><img src="images/view.gif" alt="Browser portion update page" class="screenshot" />
            </li>
            <li>
                You will see a screen similar to the one below. Your License
                Key will appear on this page. Copy and Paste that key into the
                software's Admin Panel and click the "Enter" button.
                <br /><img src="images/view_key.gif" alt="Browser portion update page" class="screenshot" />
            </li>
        </ol>
    </li>
<?php } ?>
<li>
    You should now see the Main Admin Panel screen for your software.
</li>
