<?php

//Different text/image stuff
$whichWizard = array (
    'image' => 'upgrade',
    'update' => 'update'
);
if ($useSetupImport) {
    $whichWizard = array (
        'image' => 'install',
    );
}

?>
<li>
    "Double-click" on the executable file.  You will see a box similar to
    the image blow.  Click "Next" to begin the installation process.
    <br /><img src="images/<?php echo $whichWizard['image']; ?>1.jpg" alt="Wizard 1st page" class="screenshot" />
</li>
<li>
    In the next window, you will need to accept the License Agreement in
    order to continue with the installation. Select 'I accept the agreement'
    and then click "Next".
    <br /><img src="images/<?php echo $whichWizard['image']; ?>2.jpg" alt="Wizard 2nd page" class="screenshot" />
</li>
<li>
    In the next step, the Wizard will perform the file transfer (FTP)
    process to your domain for you. Enter your FTP information into
    the fields and click the "Browse" button. Your host should provide you
    with the information necessary to FTP into the server.
    <br /><img src="images/<?php echo $whichWizard['image']; ?>3.jpg" alt="Wizard FTP info" class="screenshot" />
</li>
<li>
    After clicking the "Browse" button, the Wizard will attempt to connect
    to your domain. Once connected, a new popup window will display and you
    will select the location that your software installed. For instance, if
    the software is currently the front page of your domain, you will need
    to select the root folder (sometimes 'www', or 'htdocs', or 'httpd',
    etc.). If you are not certain as to which folder is the "root" directory
    on your domain, please contact your host.
    <?php echo $importantStart; ?>
        This upgrade must be applied to an existing installation. The
        upgrade will not function properly on its own as it does not
        contain all of the software's base files. Therefore, do not attempt
        to choose a different folder (directory) other than where the base
        software is currently already installed.
    <?php echo '</div>'; ?>
</li>
<li>
    Now you should see the previous window (above) and in most cases the
    "Upload files into folder" field will now be filled in with a server
    path to the folder you have just selected. Click "Next".
    <?php echo $noteStart; ?>
        You should now see a "popup" window that warns you that <strong>"The upload
        folder is not empty."</strong> You already know this because you have just
        chosen a folder that the software's base files are currently
        installed. Since you want to apply the upgrade to the base software
        files, <strong>click the "Yes" button</strong> to continue.
    <?php echo '</div>'; ?>
</li>
<li>
    The next window will display a URL path to the folder you have selected
    and should look similar to the image below. If everything looks correct,
    click the "Next" button.
    <br /><img src="images/<?php echo $whichWizard['image']; ?>4.jpg" alt="Wizard page" class="screenshot" />
</li>
<li>
    The Wizard will then run a series of server tests and provide a report
    for you to review. This report is for informational purposes only.
    Select the "Install" button to continue with the installation. The
    Wizard will then begin the FTP process of the software's files to your
    domain. A window similar to the one below will display the progress of
    the installation. The length of time to complete this process depends
    upon your Internet Connection speed. The uploading should be complete
    within 20 minutes at Broadband speed.
    <br /><img src="images/<?php echo $whichWizard['image']; ?>5.jpg" alt="Wizard page" class="screenshot" />
</li>
<li>
    After all of the files have been successfully transferred to your
    domain, the Wizard will display a window similar to the one shown
    below.
    <?php if ($useSetupImport) { ?>
        Check the <strong>"Run Configuration Tool"</strong> box if it is not
        already and
    <?php } ?>
    Click the <strong>"Finish"</strong> button.
    <?php echo $noteStart ?>
        If the <strong>Wizard</strong> reports that your
        server does not meet the minimum requirements to run the software,
        and you are sure that Zend Optimizer is installed on your server,
        you can ignore the message (click "Ok") and continue.  Otherwise,
        please refer to <a href="/wiki/installation/wizard/troubleshoot/start/"<?php echo $popup; ?>>
            this troubleshooting page</a>.
    <?php echo '</div>'; ?>
    <br /><img src="images/<?php echo $whichWizard['image']; ?>6.jpg" alt="Wizard page" class="screenshot" />
</li>

<?php if ($useSetupImport) { ?>
    <li class="new">
        Now you should see a window similar to the one below. It is now time to
        edit the software's <strong>config.php</strong> file with the MySQL database information
        obtained through the database utility on your host (domain's) control panel.
        <strong>"Double-click"</strong> the <strong>"config.php"</strong> text
        in the window to open the file for editing.
        <br /><img src="images/install8.jpg" alt="Wizard page" class="screenshot" />
    </li>
    <li class="new">
        The file you have just opened should look similar to the one below. The
        main purpose of the config.php file is to provide the connection
        information between the software you are installing and the database
        you have set up on your server. Therefore, the data you enter must be
        absolutely correct. Any wrong entry or even an extra space entered into
        the config.php file and the software will not connect to the database.
        <br /><br />
        You will be entering the same connection data as was used in your "old"
        config.php file.
        <?php echo $importantStart; ?>
            The user assigned to the database must have permissions set to
            "all". These permissions are set on your server (domain's control
            panel) typically through the same page(s) as used to create your
            database. Some hosts will automatically set the permission for you
            when the database is created.
        <?php echo '</div>'; ?>
        <br /><img src="images/install9.jpg" alt="Wizard page" class="screenshot" />
        <ol type='a'>
            <li>
                Scroll down until you see STEP 1 as shown below. There are four
                entries that you need to make under STEP 1. You will replace the
                text that we have pre-populated and surrounded by quotes.
                Leaving the quotes in place and without adding any spaces,
                enter the database information you obtained from your hosting
                account when setting up the database.
                <br /><img src="images/install10.jpg" alt="Wizard page" class="screenshot" />
            </li>
            <li>
                Your config.php file should now look similar to our example
                file below, except of course, with your database information.
                When you are satisfied with your entries, click the “OK” button
                and the window will close.
                <br /><img src="images/install11.jpg" alt="Wizard page" class="screenshot" />
            </li>
        </ol>
    </li>
    <li class="new">
        You will now, once again see the same window as before, except that the
        “State” of the config.php file will be “unsaved” instead of
        “unconfigured”. See image below.
        <br /><img src="images/install12.jpg" alt="Wizard page" class="screenshot" />
    </li>
<?php } ?>
<li>
    <?php if ($useSetupImport) { ?>
        Click the “Apply” button and the config.php file will be saved. Also,
        a new popup window will open which takes you into the software's
        Browser Based Installation Wizard.
    <?php } else { ?>
        Once you click "Finish" on the Wizard and the main Wizard window closes,
        A new popup window will open which takes you into the software's
        browser based portion of the Update Wizard.
    <?php } ?>
    <?php echo $noteStart; ?>
        If it does not automatically open the browser based portion of the
        update with a window that looks similar to the screenshot in the
        next step, you will need to manually start the Browser based portion.
        <br /><br />
        To do this, open up an Internet browser such as IE or Firefox, and
        visit "<?php if ($useSetupImport) echo 'setup'; else echo 'upgrade'; ?>/index.php" at where you installed the software to.  For instance, if you were installing
        the software at "example.com", you would go to:
        <br /><br />
        http://example.com/<strong><?php if ($useSetupImport) echo 'setup'; else echo 'upgrade'; ?>/index.php</strong>
        <br /><br />
        You cannot skip this step or your software's database will be
        "out of date" compared to the files, which can cause problems in
        the software.
    <?php echo '</div>'; ?>
</li>
