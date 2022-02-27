<li>
    Un-zip the package to a location on your PC that is easy to locate.
</li>
<?php if ($useSetupImport) { ?>
    <li class="new">
        Edit the <strong>config.php</strong> file located wherever you unzipped the
        software to, and change the database settings. Use the same settings
        used in the "old" config.php file.  Note that some settings in the "old"
        config.php file may no longer do anything, that is why here we are only
        concerned about the main database settings.
    </li>
<?php } ?>
<li>
    FTP the files to your site, using an FTP program.
</li>
<?php if (!$atLeast['20.0']): ?>
    <li class="new">
        Empty (delete) all the files and/or folders in the <strong>templates_c</strong> folder. Be sure to leave the
        folder itself, but the folder must be empty.
    </li>
<?php endif; ?>
<li>
    On your server, double check the file "permissions" to make sure the
    following directories <strong>and their contents</strong> are writable by the “apache user”. Consider this a
    "troubleshooting step" though, chances are you won't need to do anything special.  But if you get errors about
    <strong>templates_c</strong> not being writable, you may need to adjust the permissions.  The following folders
    and their contents need to be "writable" by the apache user.
    <ul>
        <li><strong>_geocache/</strong></li>
        <li><strong>templates_c/</strong></li>
        <li><strong>user_images/</strong></li>
        <li><strong>geo_templates/</strong></li>
    </ul>
</li>
<li>
    Run the web-based update script located at
    <strong><?php if ($useSetupImport) echo 'setup'; else echo 'upgrade'; ?>/index.php</strong>
    using your favorite Internet browser, such as Firefox or Internet Explorer.
    For example, if your site was <em>example.com</em>, you would run
    <br /><strong>http://example.com/<?php if ($useSetupImport) echo 'setup'; else echo 'upgrade'; ?>/index.php</strong>
    <br /> in your browser.
</li>
