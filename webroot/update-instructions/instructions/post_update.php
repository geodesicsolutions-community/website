<li>
    <strong>Custom Admin Folder Name: (ADMIN_LOCAL_DIR setting in config.php)</strong> If you have NOT changed your
    admin folder name, you can continue to the next step.
    <br /><br />
    <a href="#changedAdminToggle" class="show_hide_link">
        + View Instructions
    </a>
    <div id="changedAdminToggle" style="display: none;">
        If you have re-named the admin directory:
        <?php echo $importantStart; ?>
            ONLY do the following "mini-steps" if you <strong>have re-named the admin
            directory</strong>!  These instructions will break things if you follow them
            when you have NOT re-named the admin directory.
        <?php echo '</div>'; ?>
        <ol style="list-style-type: lower-alpha;">
            <?php if (!$atLeast['3.1']) { ?>
                <li>
                    If you have renamed your "admin" folder, a setting needs to be added (or
                    edited) in your software's <strong>config.php</strong> file. Edit the
                    config.php file and add the following code snipet, replacing the
                    <strong>"new_admin_dir/"</strong> with your "admin" folder name:
<pre>//the location of your admin directory, relative to base_dir.
//NOTE: It is important that this is properly set, or your license validation will fail.
define ('ADMIN_LOCAL_DIR', 'new_admin_dir/');
</pre>
                </li>
            <?php } ?>
            <li>
                On your server, replace the contents of the re-named admin directory,
                with the contents of the new version admin folder.  In other words,
                copy the contents of "admin" to "new_admin_dir", where "new_admin_dir"
                is what you re-named the folder to.  If you don't do
                this step, you will be wondering why a lot of stuff is broken in
                your admin, since you will be using OLD admin files.
            </li>
            <li>
                Remove the original "admin/" directory if it still exists.
            </li>
        </ol>
    </div>
</li>

<li>
    <strong>Custom geo_templates Folder Name: (GEO_TEMPLATE_LOCAL_DIR setting in config.php)</strong> If you have NOT changed the
    geo_templates folder name, you can continue to the next step.
    <br /><br />
    <a href="#changedGeoTemplatesToggle" class="show_hide_link">
        + View Instructions
    </a>
    <div id="changedGeoTemplatesToggle" style="display: none;">
        If you have re-named the geo_templates/ directory:
        <?php echo $importantStart; ?>
            ONLY do the following "mini-steps" if you <strong>have re-named the geo_templates
            directory</strong>!  These instructions will break things if you follow them
            when you have NOT re-named the geo_templates directory.
        <?php echo '</div>'; ?>
        <ol style="list-style-type: lower-alpha;">
            <li>
                On your server, <strong>copy</strong> the entire contents of the
                geo_templates folder, into your own re-named folder.  You will need
                make sure you <strong>replace</strong> all files.  In other words,
                copy the contents of "geo_templaets" to "new_geo_templates_dir", where "new_geo_templates_dir"
                is what you re-named the folder to.  If you don't do
                this step, you will be wondering why a lot of stuff is broken,
                since you will be using OLD default templates and template loading files.
            </li>
            <li>
                Remove the original "geo_templates/" directory.
            </li>
        </ol>
    </div>
</li>

<?php if ($atLeast['7.3']) {?>
    <li>
        <strong>Using CDN / Alternate Server for External Media:</strong>
        The software is able to load CSS, JS, and images from an external stand
        alone location independent of the main website.
        <br /><br />
        If you have not previously set this up, you can skip this step.  Note that
        this is NOT a typical setup, usually only done by large sites that require
        load balancing or similar.
        <br /><br />
        <a href="#changedCDNToggle" class="show_hide_link">
            + View Instructions
        </a>
        <div id="changedCDNToggle" style="display: none;">
            If you have set up a stand-alone location for load balancing or other
            purposes, you will need to follow the additional steps below:
            <?php echo $importantStart; ?>
                ONLY do the following "mini-steps" if you <strong>have set up
                a stand-alone location to load geo_templates resources from</strong>!
                These instructions will break things if you follow them
                when you have NOT done this.  If you are not sure, most likely
                you do not need to follow these instructions.
            <?php echo '</div>'; ?>
            <ol style="list-style-type: lower-alpha;">
                <li>
                    First a quick note:  If you have several different
                    sites that all reference a "common" location for images and such,
                    we recommend to only follow these steps once all locations
                    have been updated to the latest version.  (It will not work well
                    to have different installations sharing common resources if those
                    installations do not match version numbers)
                </li>
                <li>
                    Follow the instructions located in the PHP source code file
                    <strong>geo_templates/min.php</strong>, make sure to read the
                    instructions from the new version (not your previous version),
                    in case anything has changed.  When copying files / folders
                    as per the instructions, you will be <strong>overwriting</strong>
                    files.  Note that this is safe since it should only contain
                    the default resources, any images or CSS or such that you have
                    customized should be located in it's own template set folder
                    within geo_templates.
                </li>
                <li>
                    Note that this stand-alone ability is still very new and most
                    likely has not been used very often.  If you do run into any
                    trouble, please <strong>let us know</strong> so we can fix it!
                    <br /><br />
                    Sites that would typically use this feature would also usually
                    have their own developers, and while your developers could probably
                    fix any snags in this feature themselves, we ask that you let us know
                    about it so we can fix it in the base software as well.  Thanks!
                </li>
            </ol>
        </div>
    </li>
<?php } ?>

<?php require 'design_changes.php'; ?>

<?php if (!$atLeast['4.0']) { ?>
    <li class="new">
        Starting in version 4.0.0, the <strong>User Management Page</strong> has been totally changed, and is now named <strong>My Account</strong>.
        It is now much more of a "control panel" page rather than a page just with links to different sections.
        In order to use the new my account, you must follow <a href="/wiki/tutorials/switch_to_my_account_home/start/" target="_blank">these instructions</a>.
    </li>
<?php } ?>

<li>
    If you have any 3rd party addons, check with the addon's author to see if
    there are updates available for those addons.  If so, update the addon(s),
    following any instructions provided by the 3rd party addon author.
</li>
<li>
    In your admin, go to <strong>Addons &gt; Manage Addons</strong>, and look for
    any Addons that might need to be updated, and click the link to
    <strong>"Upgrade to ###"</strong> as illustrated below.
    <br /><img src="images/upgrade10.png" alt="Admin update addons" class="screenshot" />
    <br />
    <?php echo $noteStart; ?>
        When updating the addons, be sure to carefully read any messages displayed,
        as they may contain information or instructions you will need to know.
    <?php echo '</div>'; ?>
</li>

<?php if (!$isCore && ($isEnt||$isPremiere)) { ?>
    <li class="new">
        <strong>Features moved to Addons:</strong><br />
        Some features of the software have been converted to
        <?php echo (!$atLeast['3.0'])? 'what we now call "Addons"' : 'Addons'; ?>.
        By default, these Addons have been set to "disabled" in order
        to successfully complete the upgrade process, even though you may have
        been using them prior to upgrading. Therefore, you will need to
        manually activate each of the following "Addons" using the instructions
        below:
        <ul>
            <?php if (!$atLeast['3.0'] && $isEnt) { ?>
                <li>Security Image</li>
                <li>Attention Getters</li>
                <li>Discount Codes</li>
                <li>Signs &amp; Flyers</li>
                <li>SEO</li>
            <?php }?>
            <?php if ($isEnt) { ?>
                <li>Account Balance</li>
                <li>Featured Levels</li>
            <?php } ?>
            <li>Enterprise Pricing</li>
            <li>Subscription Pricing</li>
        </ul>
        <br />
        Follow these instructions to re-enable the features listed above:
        <ol style="list-style-type: upper-alpha;">
            <li>In your Admin, browse to <strong>Addons &gt; Manage Addons</strong>.</li>
            <li>Install any Addons that contain the features you want to re-enable.</li>
            <li>Enable the Addons you have just installed.</li>
            <?php if (!$atLeast['3.0'] && $isEnt) {?>
                <li>
                    If you are using any of the addons listed below, click on the
                    name to see additional instructions below:
                    <br />
                    <span style="cursor: help; color: navy;"
                        onclick="$('securityImageInstructionsPost').toggle();">+ Security Image</span>
                    <ol id='securityImageInstructionsPost' style="display:none; list-style-type: lower-alpha;">
                        <?php if ($selected['product'] != AUCTIONS) { ?>
                            <li>
                                In the Admin Panel, browse to <strong>Design &gt; Text Search</strong>, and search for <strong>security_image.php</strong>
                            </li>
                            <li>Click on the <strong>Template Contents</strong> tab for the search results.</li>
                            <li>If it finds any results, click the <strong>View/Edit Template</strong> button to edit each one.  With each one:
                                <ol>
                                    <li>
                                        Find and remove this section of code:
<pre>&lt;tr&gt;&lt;td class="login_box_text1"&gt; Enter Access Code:&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class="field_data"&gt;
&lt;input name="b[securityCode]" maxlength="4" size="4" class="field_data" type="text"
style="border:1px solid #000000;"&gt;&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td class="field_data"&gt;&lt;img
src="security_image.php"&gt;&lt;br&gt;&lt;br&gt;&lt;/td&gt;&lt; /tr&gt;
</pre>
                                    </li>
                                    <li>
                                        Replace the above code with:
<pre>&lt;tr&gt;&lt;td&gt;{addon author='geo_addons' addon='security_image' tag='secure_image'}&lt;/td&gt;&lt;/tr&gt;
</pre>
                                <?php echo $noteStart; ?>
                                    You can see the tags for a particular Addon by
                                    hovering over the Addon's name within the Manage
                                    Addons page of the Admin panel.
                                <?php echo '</div>'; ?>
                                    </li>
                                </ol>
                            </li>
                        <?php } ?>
                        <li>
                            If you wish to edit the default text for the security
                            image, go to <strong>Addons &gt; Manage Addons</strong>
                            then click <strong>edit text</strong> for the addon.
                        </li>
                        <li>
                            If your site has the file <em>security_image.php</em>
                            in the main folder (the same folder that contains
                            <em>config.php</em>), you can safely delete the file,
                            as it has been replaced by a different file.
                        </li>
                    </ol>
                    <br />
                    <span style="cursor: help; color: navy;"
                        onclick="$('agDCInstructionsPost').toggle();">+ Attention Getters &amp; Discount Codes</span>
                    <ol id='agDCInstructionsPost' style="display:none; list-style-type: lower-alpha;">
                        <li>
                            If you have modified the text for either of these features
                            on your previous version, you will need to re-implement
                            that text as outlined below:
                        </li>
                        <li>
                            In the admin, navigate to <strong>Addons &gt; Manage Addons</strong>
                        </li>
                        <li>Click <strong>edit text</strong> next to the appropriate Addon.</li>
                        <li>Modify the text as desired.</li>
                        <li>Click "Save Text Changes"</li>
                    </ol>
                    <br />
                    <span style="cursor: help; color: navy;"
                        onclick="$('emailInstructionsPost').toggle();">+ Main E-mail Sender</span>
                    <ol id='emailInstructionsPost' style="display:none; list-style-type: lower-alpha;">
                        <li>
                            There are new E-mail features that are turned "off" by
                            default.
                        </li>
                        <li>
                            View the settings on the <strong>E-mail Setup &gt;
                            General E-Mail Settings</strong> page for more details
                        </li>
                        <li>
                            Send a test e-mail from that page to confirm that your
                            settings are working properly after the update, since
                            how the e-mails are sent has been enhanced, you may need
                            to "tweek" the e-mail settings to make it work.
                            <?php echo $noteStart; ?>
                                In your previous version,
                                the only "send method" available was "native mail",
                                we have since added "sendmail" and "SMTP" as alternate
                                methods of sending e-mails.
                                <br /><br />
                                The 3 different "send methods" are NOT the same as
                                the 3 option settings for sending e-mail that existed in your
                                previous version, as in your previous version all 3
                                "e-mail options" were related to how used "native mail"
                                work.  Those 3 e-mail options are no longer necessary
                                as they are now automatically detected.
                            <?php echo '</div>'; ?>
                        </li>
                    </ol>
                    <br />
                    <span style="cursor: help; color: navy;"
                        onclick="$('seoInstructionsPost').toggle();">+ SEO Addon</span>
                    <ol id='seoInstructionsPost' style='display:none; list-style-type: lower-alpha;'>
                        <li>
                            There have been many improvements to how SEO addon works.
                            To take advantage of these improvements, Install/Enable
                            the addon, then in the admin go to <strong>Addons &gt;
                            SEO &gt; General Settings</strong>, and go through
                            the "first time/update setup wizard" and follow the
                            instructions on each step.
                        </li>
                    </ol>
                </li>
            <?php } ?>
        </ol>
    </li>

<?php } ?>

<?php if (!$isCore) { ?>
    <li class="new">
        <strong>Check the Geographic Regions</strong>:  Starting in version 7.0.0, the built-in countries and state/provinces have been
        combined with the unlimited regions added by Geographic Navigation Addon.  Now
        all regions are administered through one page in the admin panel.  The Geographic Navigation
        addon is still used to add the navigation tags that it provides, however you will no longer
        administer "city level" and below regions inside the addon, those region levels are now built in.
        <br /><br />
        In the admin go to <strong>Geographic Setup &gt; Regions</strong> and make sure
        the regions were set correctly by the update.  Some sites may need to move
        regions around, depending on how countries and states, and the geographic navigation
        regions were set up previously.  If you see any regions out of place,
        select those regions and use the <strong>Move</strong> button at the top
        to move those regions to the proper location.
        <br /><br />
        You may also wish to disable
        certain regions by clicking the green check-mark for that region, the update
        script makes all regions enabled by default.
    </li>
<?php } ?>

<?php if ($tplUpdate && $selected['tplUpdate']=='export') { ?>
    <?php if ($isEnt) { ?>
        <li class="new">
            <?php echo $noteStart; ?>
                <strong>Below For Reference Only:</strong> As of version 6.0.0, use of <strong>{php}</strong> no longer supported.  It will
                still export your PHP modules as noted below, but will be commented out to prevent errors, so you will have access to them for your reference.
                You can find alternatives to using {php} <a href="/wiki/tutorials/design_adv/no_use_php/" target="_blank">here</a>.
            <?php echo '</div>'; ?>
            PHP Modules have been converted into Smarty template files, since now
            <del>you can insert PHP inside of template files directly using</del>:
            <br />
            <pre>{php}
/* PHP CODE HERE */
{/php}</pre>

            <br />
            However, the PHP modules that have been converted to Smarty templates,
            are no longer at the "module scope".  Most of the time this is not a problem,
            but some sites may need adjusting to the PHP modules.  If you have any
            PHP modules, view the site and make sure they still function correctly,
            if there are any problems, use the instructions below to make adjustments.
            <br /><br />
            <span id="adjustPHPToggle">
                + Adjusting Converted PHP Modules
            </span>
            <div id="adjustPHPInstructions" style="display: none;">
                <strong>Adjusting Converted PHP Modules</strong>

                <?php echo $noteStart; ?>
                    If you prefer to edit files using FTP, you can skip the first 2 steps below, and simply edit the files from FTP:<br />
                    <strong>geo_templates/geo_exported_pre_5.0/main_page/attached/</strong>
                <?php echo '</div>'; ?>
                <ol style="list-style-type: lower-alpha;">
                    <li>
                        In the admin go to <strong>Design &gt; Manager</strong>.
                    </li>
                    <li>
                        Click on the <strong>attached</strong> folder within the list of files.
                    </li>
                    <li>
                        For each php template found named php##.tpl:
                        <ol style="list-style-type: lower-roman;">
                            <li>Click on the file so that it is selected, and click
                                <strong>View/Edit</strong> at the bottom of the manager.  Make sure
                                the editor window is on the <strong>&lt;..&gt; Source Code Editor</strong> tab.
                            </li>
                            <li>
                                Search for the following anywhere in the file:
                                <pre>$this</pre> <br />
                                If found, replace with:
                                <pre>$db</pre>
                            </li>
                            <li>
                                See if the file contains any of the following vars, and if so,
                                add the respective line to the top of the file after
                                the first <strong>{php}</strong> line.
                                <br /><br />
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Search For Variable</th>
                                            <th>What to add to Top</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><pre>$page</pre></td>
                                            <td><pre>include_once(CLASSES_DIR.'site_class.php');
$page = Singleton::getInstance('geoSite');</pre></td>
                                        </tr>
                                        <tr>
                                            <td><pre>$db</pre></td>
                                            <td><pre>$db = DataAccess::getInstance();</pre></td>
                                        </tr>
                                        <tr>
                                            <td><pre>$view</pre></td>
                                            <td><pre>$view = geoView::getInstance();</pre></td>
                                        </tr>
                                        <tr>
                                            <td><pre>$addon</pre></td>
                                            <td><pre>$addon = geoAddon::getInstance();</pre></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                Save the changes, and view a page that uses that PHP
                                template to make sure it works correctly.  If you are
                                having trouble, you may need to consult the author
                                of the PHP contents.  Technically speaking, the variables
                                $db, $this, $page, $view, and $addon are no longer
                                in the "local scope" so they need to be initialized before
                                being used.
                            </li>
                            <li>Repeat for the rest of the php##.tpl files.</li>
                        </ol>
                    </li>
                </ol>
            </div>
        </li>
    <?php } ?>
    <li class="new">
        View the front side of your site, and browse
        the site. You will see that your "overall" surrounding styles should be intact, but
        all module and page contents will look different than before. If you like how it looks,
        then you are finished. If it does not match your site design or you wish to make
        changes to how things look, click the link below to expand the instructions.
        <br /><br />
        <span id="adjustStylesToggle">
            + Adjusting Styles
        </span>
        <div id="adjustStylesInstructions" style="display: none;">
            If things don't look quite right for your custom design, you can adjust the styles by editing the main theme_styles.css file:
            <?php echo $noteStart; ?>
                If you prefer to edit files using FTP, you can skip the first 3 steps below, and simply edit the file from FTP:<br />
                <strong>geo_templates/geo_exported_pre_5.0/external/css/theme_styles.css</strong>
            <?php echo '</div>'; ?>
            <ol style="list-style-type: lower-alpha;">
                <li>
                    In the admin go to <strong>Design &gt; Manager</strong> and click on the "external Files" link illustrated below.
                    <br />
                    <img src="images/external_files_link.png" alt="External Files Link" class="screenshot" />
                </li>
                <li>
                    Click on the <strong>css</strong> folder within the list of files.
                </li>
                <li>
                    Click on the file <strong>theme_styles.css</strong> so that it is selected, then near the bottom of the
                    editor click the link to <strong>View/Edit</strong>.
                </li>
                <?php if (!$atLeast['3.0.0']) { ?>
                    <li>
                        At the bottom of the <strong>theme_styles.css</strong> file, add the following lines
                        so that extra questions display correctly:
                        <br />
                        <pre>/* extra questions and extra checkboxes */
.extraCheckboxes {
    margin:0px;
    padding:0px;
    float:left;
    list-style-type: none;
}
.extraCheckboxes li {
    background-image: url('images/checkbox_arw.gif');
    background-position: 0px 50%; /* X-pos Y-pos (from top-left) */
    background-repeat: no-repeat;
    padding-left: 15px;
    border: 0px solid black;
    margin:0px;
}
.extraQuestionName,
.extraQuestionName li,
.extraQuestionValue,
.extraQuestionValue li {
    margin:0px;
    padding:0px;
    list-style-type: none;
}
.extraQuestionName li,
.extraQuestionValue li {
    margin-bottom: 5px;
}</pre>
                    </li>
                <?php } ?>
                <li>
                    Adjust the <em>theme_styles.css</em> file as needed to make it match your
                    site design. If you are new to CSS, check out this
                    <a href="http://www.w3schools.com/css/css_intro.asp" target="_blank">CSS Intro Tutorial</a>
                    from <a href="http://w3schools.com" target="_blank">http://w3schools.com</a>,
                    an excellent site for learning HTML and CSS (among other things).
                </li>
            </ol>
        </div>
    </li>
<?php } ?>

<?php if ($smarty_31) { ?>
    <li class="new">
        View the front side of your site, and browse the site.  Because of the new version of Smarty 3.1,
        you may need to make adjustments to your templates, but most these will be minor changes.  When browsing the site,
        watch out for <strong>"Oops! Template Error!"</strong> errors which indicate that there was a Smarty template parse error.
        Since this error may display on live sites, it does not give details about the template error, but instead
        e-mails the details to the e-mail you have set for the admin.  So when you see such errors,
        check your admin e-mail and look for any e-mails with title <strong>Automated Admin Notice: TEMPLATE ERROR!</strong>.
        In the e-mail, it should give the template file, line number, and snippet of the template that is causing
        the error, plus advanced debug information that may be useful as well.
        <br /><br />
        <?php echo $noteStart; ?>
            <strong>Help with Errors:</strong>  You can find help for interpreting
            the template error messages in the user manual <a href="/wiki/designers/template_error/" target="_blank">here</a>.  If that does not help,
            technically, problems within custom templates are
            not covered by support.  In this case however, for problems specifically caused
            by Smarty 3.1 compatibility issues, if you are having trouble understanding
            what is wrong, support can interpret the error for you and
            try to help you as much as possible.
        <?php echo '</div>'; ?>
    </li>
<?php } ?>
<?php if ($atLeast['3.0']) { ?>
    <li>
        Turn your site "on": In the admin panel, at <strong>Site Setup &gt; General
        Settings</strong> change the setting <strong>Site On/Off Switch</strong> to <em>on</em> and save the
        changes.
    </li>
<?php } ?>
<li>
    If you wish, turn Geo cache "on": In the admin panel, at <strong>Site
    Setup &gt; Cache</strong> change the setting <strong>Cache System</strong> to <em>on</em>, and
    save the settings.
</li>
<li>
    Delete the following folders and any contained files from your site:<br />
    <ul>
        <?php if ($useSetupImport) { ?>
            <li><strong>pre_setup/</strong></li>
            <li><strong>setup/</strong></li>
            <li><strong>sql/</strong></li>
        <?php } ?>
        <li><strong>upgrade/</strong></li>
    </ul>
</li>
<li>
    This concludes the update process. Your software should now be fully updated. Proceed to the
    <a href="/wiki/how_this_software_works/start/" target="_blank">
    "How this Software Works"</a> section of the User Manual to learn how everything
    works.
    <br /><br />
</li>
