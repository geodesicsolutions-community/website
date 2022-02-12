<li>
    Download the latest release from the <a href="/resources.php" target="_blank">Download Section</a> on the website.
    Look for the download for <strong>Full Release - Community Edition</strong>.
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
    <a href="/wiki/tutorials/server/db_backup/" target="_blank">
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
                <strong>Update to version 2.0.4</strong>:  Sorry this is too old, there isn't a viable update path.
                Your best bet is to treat it like migrating from another software platform, and have a developer
                familiar with the GeoCoreCE project assist.  The rest of the update instructions listed will work if
                you do find a way to update to 2.0.4 somehow.
            </li>
        <?php } ?>
    <?php } else if ($isClassifieds && $ver !== '2.0.5.2') { ?>
        <li class="new">
            <strong>Update to version 2.0.5.2</strong>:  Sorry this is too old, there isn't a viable update path.
                Your best bet is to treat it like migrating from another software platform, and have a developer
                familiar with the GeoCoreCE project assist.  The rest of the update instructions listed will work if
                you do find a way to update to 2.0.5.2 somehow.
        </li>
    <?php } else if ($isAuctions && $ver !== '1.0.7') { ?>
        <li class="new">
            <strong>Update to version 1.0.7</strong>:  Sorry this is too old, there isn't a viable update path.
                Your best bet is to treat it like migrating from another software platform, and have a developer
                familiar with the GeoCoreCE project assist.  The rest of the update instructions listed will work if
                you do find a way to update to 1.0.7 somehow.
        </li>
    <?php } ?>
<?php } ?>
<?php if (!$atLeast['20.0']): ?>
    <li class="new">
        <strong>Uninstall and Delete Legacy Addons:</strong>  Make sure to uninstall and delete (in that order - once
        the addon is deleted it will no longer show in the addons section) the following addons.
        <br><br>
        <strong>Addons to uninstall / delete:</strong>
        <ul>
            <li>
                <strong>License Activity Log</strong> - folder <strong>log_license_db/</strong> - reason: No longer
                needed now that the software is distributed freely under the
                <a href="https://github.com/geodesicsolutions-community/geocore-community/blob/b9af5eda2a839d468dbd410279a63783dd0941d5/LICENSE">MIT license</a>.
            </li>
            <li>
                <strong>AdPlotter</strong> - folder <strong>adplotter/</strong> - the 3rd party adplotter website is
                no longer running, so there are no ads to plot.
            </li>
        </ul>
        <br>
        For each addon listed:
        <ol>
            <li>
                In the admin, go to <strong>Addons > Manage Addons</strong>, then disable and uninstall the addon.
                The addon must be in the "uninstalled" section.
            </li>
            <li>
                <strong>After</strong> they are uninstalled in the admin panel, delete them from the
                <strong>addons/</strong> folder, noting the folder name in the list above.
            </li>
        </ol>
    </li>
<?php endif; ?>
