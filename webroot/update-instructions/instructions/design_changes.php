<?php if ($tplUpdate) { ?>
    <?php if ($selected['tplUpdate'] == 'export') { ?>
        <?php $t_set = 'geo_exported_pre_5.0';?>
        <li class="new">
            In the admin panel at <strong>Design &gt; Template Sets</strong>, make sure the checkbox for <strong>Active</strong>
            and <strong>Admin Editing</strong> is checked for the template set <strong>geo_exported_pre_5.0</strong>.
        </li>
    <?php } else { ?>
        <?php $t_set = 'my_templates';?>
    <?php } ?>
    <li class="new">
        There are a number of recommended text changes that you may wish to make in order for things to look correctly on your site.
        This is optional, but highly recommended to prevent layout/display issues caused by HTML elements in the language text.  Click
        the link below to expand the instructions.
        <br /><br />
        <span id="applyTextToggle">
            + Apply Recommended Text Changes
        </span>
        <div id="applyTextInstructions" style="display: none;">
            <strong>Apply Recommended Text Changes</strong>
            <ol>
                <?php if ($t_set == 'my_templates') { ?>
                    <li>
                        You will need to create the main template set.  To do this,
                        in your admin panel go to <strong>Design &gt; Template Sets</strong>,
                        and in the top right corner make sure it says <strong>Design Mode: Standard</strong>.
                        If you have previously changed it to advanced mode, change it back to <strong>standard mode</strong> now.
                    </li>
                    <li>
                        As long as there are no template sets found, there should be a button labeled <span class="mini_button">Create your Main Template Set</span>.  Click on this button to create your main template set, which will be a copy of the default templates.
                        If you have already created the main template set, you will not need to do this again.
                        <?php echo $noteStart; ?>
                            If you choose to name the template set something other than <strong>my_templates</strong>, in the following instructions you would replace my_templates with what you decided to name the template set.
                        <?php echo '</div>'; ?>
                    </li>
                <?php } ?>
                <li>
                    For this, you will be importing a number of changes to various
                    text entries that will work similar to the import text tool. If
                    you want to use an alternate language besides English, or if you
                    want to <strong>make changes to the text</strong> before you apply them:
                    <ol>
                        <li>
                            Using FTP, download and edit the file <strong>geo_templates/<?php echo $t_set; ?>/text.csv</strong> using software that can read and write CSV files.
                            <?php echo $noteStart; ?>
                                We recommend <em>Libre Office's Calc</em> to open, edit, and save CSV files.  It is free to download and use, from <a href="http://www.libreoffice.org/"<?php echo $popup;?>>http://www.libreoffice.org/</a>.
                            <?php echo '</div>'; ?>
                        </li>
                        <li>
                            Go through each row, and make any needed text changes to the last column
                            in the row. If you see a text change that you do not want it to perform
                            at all, you can remove the entire row and it will not be applied when you
                            later import the text changes.
                        </li>
                        <li>
                            Save the file and upload it back to your site, make sure it saves in CSV format or the import will not work.
                        </li>
                    </ol>
                </li>
                <li>In the admin panel, go to <strong>Design &gt; Template Sets</strong>.</li>
                <li>Click the button <span class="mini_button">Import Text Changes</span> next to the template set <strong><?php echo $t_set; ?></strong>.</li>
                <li>On the window that opens, read it carefully, then select which language you wish to import the text changes for.</li>
                <li>Click the <span class="mini_button">Import Text</span> button to complete the import of the recommended text changes for the 5.0 design.</li>
            </ol>
        </div>
    </li>
<?php } ?>

<?php if ($smarty_31) { ?>
    <!-- that one change -->
    <li class="new">
        Addon tags are now loaded on-the-fly, which requires a small change to your templates
        if your site uses the Geographic Navigation addon:
        <ol>
            <li>In your admin, go to <strong>Design &gt; Manager</strong>, and browse to <strong>header.tpl</strong> and <strong>front_page.tpl</strong> within the main_page templates, and edit those templates.</li>
            <li>
                Within the template, look for any places that have:
<pre>$geo_inc_files.addons.geo_addons.geographic_navigation</pre>
                And change those to:
<pre>$enabledAddons.geographic_navigation</pre>
            </li>
            <li>
                If you have a highly customized design, you may also wish to go to <strong>Design &gt; Text Search</strong>
                and search your templates for any other locations that might have the above mentioned snippet, and replace
                within those templates as well.
            </li>
        </ol>
    </li>

    <!-- {php} tags -->
    <li class="new">
        <strong>Embedded PHP within templates:</strong>  You will need to remove/replace anywhere within your templates that make use of embedded PHP.
        You can find such places by in the admin, at <strong>Design &gt; Text Search</strong>,
        do a text search for <pre>{php</pre>
        For anywhere that is found, either <strong>remove</strong> the embedded PHP, or
        replace with an alternative method.  You can find <strong>alternatives to {php}</strong> <a href="/wiki/tutorials/design_adv/no_use_php"<?php echo $popup;?>>here</a>.
    </li>

<?php } ?>

<?php if (!$isCore && $atLeast['4.0']) { ?>
    <li class="new">
        In the admin, go to <strong>Design &gt; Text Search</strong>, and search for:
        <pre>$geographic_navigation_region</pre>
        Then click on the tab for <strong>Template Contents</strong>.  If it finds any results,
        click the button to read more info below.
        <br /><br />
        <span id="geoRegionsToggle">+ More Info</span>
        <div id="geoRegionsInstructions" style="display: none;">
            Since the region structure has changed significantly in GeoCore, any places
            inside your templates that use the above will need to be adjusted.
            If there are just a few places, you can easily make this adjustment by
            following the manual conversion steps below.
            <br /><br />
            <strong>Manual Conversion:</strong>
            <ol>
                <li>
                    The template will probably have something like:
                    <pre>{if $geographic_navigation_region=='country23'}</pre>
                    <br />
                    If you see something like that, where <strong>country23</strong> could start with
                    "country", "state", or "region", then followed by a number.  That entire value
                    will need to be changed to the "new ID".
                </li>
                <li>
                    In your admin, browse to <strong>Geographic Setup > Regions</strong>
                    and navigate to the region you want to use.  It will list the ID number.
                    If you do not know which region the old "country23" (or whatever is used
                    in your case), skip down to "Automatic Conversion" below.
                </li>
                <li>
                    In the template, replace the "country23" with just the new ID.  So for instance,
                    if "country23" went to Spain, and the ID listed for Spain is now 55, you would change
                    it to:
                    <pre>{if $geographic_navigation_region=='55'}</pre>
                    <br />
                    This is just an example, the ID number and such will of course be different.
                </li>
            </ol>
            <br /><br />
            <strong>Automatic Conversion:</strong><br />
            We have a beta conversion script that will search for matches that "look like"
            the old style before GeoCore, look up the "new ID", and automatically replace
            the value in the template.  Contact us if you would like to use the script,
            and we can send it to you.  Just be sure to back up your templates before use,
            and note that the script should be considered beta.
        </div>
    </li>
<?php } ?>

<?php if (!$tplUpdate && !$atLeast['7.1']) { ?>
    <li class="new">
        In the admin panel, go to <strong>Design &gt; Text Search</strong>, and search for:
        <pre>$addonActionButtons</pre>
        Click on the <strong>Template Contents</strong> tab.  If any results are
        found, you will need to make some changes to those templates.
        <br /><br />
        <a href="#template_addonActionButtons" class="show_hide_link">Template Change Instructions +</a>
        <div id="template_addonActionButtons" style="display: none;">
            For each template that is found:
            <ol>
                <li>Click <strong>View/Edit Template</strong> to edit the template.</li>
                <li>
                    Make sure you are on the tab <strong>&lt;..&gt; Source Code Editor</strong> in the
                    template editor, then <strong>Find:</strong>
                    <pre>{foreach from=$addonActionButtons item=btn}
    {$btn}
{/foreach}</pre>
                    <strong>Replace</strong> the entire section with:
                    <pre>{listing tag='listing_action_buttons' addon='core'}
{listing tag='listing_social_buttons' addon='core'}</pre>
                </li>
                <li>
                    Save the changes, then go back to the page <strong>Design &gt; Text Search</strong> and
                    follow the instructions for the next template found.
                </li>
            </ol>
        </div>
    </li>
    <li class="new">
        In your admin at <strong>Design &gt; Text Search</strong>, do a search for:
        <pre>&lt;!doctype html public</pre>
        Click on the <strong>Template Contents</strong> tab.  If no results
        are found, try searching for just "<strong>&lt;html</strong>" or
        "<strong>&lt;head</strong>" (without the quotes), and
        <strong>ignore results in the default/ folder</strong>.  Follow the template change
        instructions for each result found.
        <br /><br />
        <a href="#template_html5Changes" class="show_hide_link">Template Change Instructions +</a>
        <div id="template_html5Changes" style="display: none;">
            For each template result that is found:
            <ol>
                <li>If the <em>File Name</em> starts with <strong>default/</strong>,
                    skip this result and continue to the next result.
                </li>
                <li>Under matching text, see if it looks similar to this:<pre>&lt;!DOCTYPE html&gt; &lt;html&gt; &lt;head&gt;</pre>
                    If the matching text looks similar to that, skip the result and
                    continue to the next result.
                </li>
                <li>Click the <strong>view/edit template</strong> button.</li>
                <li>Make sure the editor window is on the <strong>&lt;..&gt; Source Code Editor</strong> tab.</li>
                <li>You will be changing the doctype to use the new HTML5 doctype.
                    You accomplish this by:
                    <ol>
                        <li>In the template contents, <strong>remove</strong> this from the top: <pre>&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;</pre>
                        <?php echo $noteStart; ?>
                            If you do not see that near the top, you need to remove
                            any "xml", "doctype" and "html" tags.  For any normal template,
                            this means you need to remove the contents <strong>before</strong>
                            the "<strong>&lt;head&gt;</strong>" tag, so that the first
                            thing in the file is the &lt;head&gt; tag.
                        <?php echo '</div>';?>
                        </li>
                        <li>In place of what you removed (at the very top of the template), add this:
                            <pre>&lt;!DOCTYPE html&gt;
&lt;html class="no-js"&gt;</pre>
                        </li>
                    </ol>
                </li>
                <li>In the same file, look for a meta tag with <strong>X-UA-Compatible</strong>
                    as part of the meta tag.  If you do not have this line, add
                    it below the <strong>&lt;head&gt;</strong> tag:
                    <pre>&lt;meta http-equiv="X-UA-Compatible" content="IE=Edge"&gt;</pre>
                </li>
                <li>In the same file, insert the snippet for Modernizr, which among other things,
                    will ensure that HTML5 will work with older versions of Internet Explorer:
                    <br /><br />
                    Right before the end head tag <strong>&lt;/head&gt;</strong>,
                    insert the following:
                    <pre>		&lt;script src="js/modernizr-2.6.2.min.js"&gt;&lt;/script&gt;
        &lt;script&gt;Modernizr.load({ test: Modernizr.mq('only all'),nope:'{external file="css/old_ie.css"}'});&lt;/script&gt;</pre>
                    Note: If you already see this in the template, do not add it a second time.
                </li>
                <li>
                    Save the changes, then go back to the search page and repeat
                    the process for the next found result.
                </li>
            </ol>
        </div>
    </li>
    <li class="new">
        View the front page of your website, where the software is installed.
        Do the navigation links at the top display
        in the wrong place, or is the header section of the page otherwise
        formatted incorrectly?  If so, make these changes within your custom
        template set (usually inside <em>my_templates</em>):
        <br /><br />
        In the file <strong>external/css/theme_styles.css</strong>, near the top, directly <strong>above</strong> the line
        <pre>/* ######### BODY STYLES ######### */</pre>
        Add this if it is not already there:
        <pre>/* ####### HEADER COMPATIBILITY ######## */
div#search_bar {padding: 1px;border: 5px solid #eaeaea;position: absolute;top: 36px;left: 0;z-index: 1;width: 99%;}
#nav {clear: both;font-size: 11px;font-weight: bold;width: 100%;height: 100px;z-index: 1;position: relative;}
#nav_bar {position: absolute;z-index: 2;margin: 0px 0px 0px 10px;padding: 0px;top: 0px;}</pre>
    </li>
<?php } ?>

<?php if (!$tplUpdate && !$atLeast['7.3']) { ?>
    <li class="new">
        <strong>If you intend to continue using your existing design:</strong>
        View the front page of your website, where the software is installed.
        Does the footer area of the page look wrong, like things are not lined up
        correctly?  If so, make these changes within your custom tempalte set
        (usually inside <em>my_templates</em>):
        <br /><br />
        In the file <strong>external/css/secondary_theme_styles.css</strong>, at the
        very bottom of the file, add the following CSS if it is not already there:
        <pre>/* ##### 7.3 COMPATIBILITY ##### */
html {line-height: normal;}
.blurb {position: static;margin: 0; color:#666666;}
nav.footer {box-sizing: content-box;-moz-box-sizing: content-box;position: static;background: none;margin: 0;}
nav.footer a {float: none;width: auto;}
input[type="text"] {box-sizing: content-box;-moz-box-sizing: content-box;}
.breadcrumb {background: none repeat scroll 0 0 #EEEEEE;}</pre>
    </li>
    <li class="new">
        <strong>If you intend to continue using your existing design:</strong>
        In the admin at <strong>Design &gt; Manager</strong>, in your main
        template set (usually <strong>my_templates</strong>), view/edit
        the template file <strong>main_page / footer.tpl</strong>.  Make sure you
        are using the <strong>&lt;..&gt; Source Code Editor</strong> tab.
        <br /><br />
        Within the template, look for:
        <pre>{footer_html}</pre>
        <br /><br />
        If you do not see this in your footer.tpl template file anywhere, add it
        <strong>right before</strong> the HTML tag
        <strong>&lt;/body&gt;</strong> (or to the very end of the template if you don't see
        that HTML tag), and save changes.  This will allow you to
        use the optimization setting <strong>Use {footer_html} to delay loading of certain javascript</strong>
        if you wish.
    </li>
    <li class="new doYourself">
        In the new version, there are a few features that make the software more mobile-friendly.
        To use them with an existing design will take some extra work.  Note that
        this entire step is <strong>optional</strong>, your site should work fine
        without doing any of the options below, but may not have some of the new
        abilities added in 7.3.
        <br /><br />
        <a href="#73_startOver" class="show_hide_link">Option 1: Start from New Design (To use new RWD and faster pages) +</a>
        <div id="73_startOver" style="display: none;">
            <br />
            This option is recommended if your site has minimal design changes, or
            if you happen to like the new design better than your old one.
            <br /><br />
            <ol>
                <li>In the admin, at <strong>Design &gt; Template Sets</strong>,
                    click the button to <strong>Create Main Template Set</strong>,
                    and use the tool to create a new template set.  Be sure to name
                    it something different than your old template set, and if your site is live,
                    make sure the template set is not active.</li>
                <li>Customize the template set to your needs.  To
                    help with the process, you can use the admin <strong>Getting Started &gt; Checklist</strong>
                    page, specifically the <strong>design</strong> section.  Go through
                    all the checklist items and make sure you have done them for
                    the new templates.  You may also need to refer to the user
                    manual for help customizing the new design, as a few things
                    have changed.  The main thing is that you now put all of your
                    custom CSS into the <strong>custom.css</strong> file in your
                    template set.</li>
                <li>Once you are satisfied with the look of your new template set,
                    in the admin at <strong>Design &gt; Template Sets</strong>,
                    make sure "active" is checked for your template set, and un-check
                    the box for any of the old template set(s).
                </li>
            </ol>
        </div>
        <br />
        <a href="#73_speedyOld" class="show_hide_link">Option 2: Make your existing Design Load Faster +</a>
        <div id="73_speedyOld" style="display: none;">
            <br />
            In this option, you will be keeping your existing design, but will
            be copying all of your CSS previously used for your exiting design,
            into a single <strong>custom.css</strong> file.
            Doing this will allow you to take advantage of the new
            <strong>combine, minify, and compress</strong> feature for the CSS and JS.
            <br /><br />
            <strong>Note:</strong>  This option will take a lot of work, especially
            if you wish to produce the smallest "footprint" possible (which will result
            in faster page loads since the CSS file will be smaller).  If at all possible,
            for many it can be less work to use option 1, just "starting over" from
            the new design and applying your customizations based on the new design.
            <br /><br />
            <ol>
                <li>Using FTP program such as Filezilla, or the admin interface at
                    <strong>Design &gt; Manager</strong>,download the following 6 files:
                    <ul>
                        <li>default / external / css / theme_styles.css</li>
                        <li>default / external / css / primary_theme_styles.css</li>
                        <li>default / external / css / secondary_theme_styles.css</li>
                        <li><em>[your template set]</em> / external / css / theme_styles.css</li>
                        <li><em>[your template set]</em> / external / css / primary_theme_styles.css</li>
                        <li><em>[your template set]</em> / external / css / secondary_theme_styles.css</li>
                    </ul>
                    (replace <em>[your template set]</em> with your main template set, usually my_templates)<br />
                    If using FTP, these will be in the <strong>geo_templates/</strong>
                    folder.
                    <br /><br />
                    Download the files into 2 different folders, one for default and one
                    for your own template set, so that they don't get mixed up.
                </li>
                <li>
                    This step is <strong>optional but recommended</strong>:  To reduce the end "CSS footprint"
                    by about half, resuling in faster pages and a faster website:
                    <br />
                    Use a program like <strong>Winmerge</strong>, to merge the files together,
                    in such a way that the file from your own template set would "overwrite"
                    differences in the default.
                    <br /><br />
                    The end result is that for each of the <strong>theme_styles.css</strong>,
                    <strong>primary_theme_styles.css</strong>, and <strong>secondary_theme_styles.css</strong> files,
                    you have any <em>missing</em> CSS that might be in the default copy but not your own,
                    and at the same time any changes you have made to your own copy, should over-write
                    the CSS from the default.
                    <br /><br />
                    If you choose to do this, in the following step you will only be copying
                    in the "merged" contents for each file, a total of 3 merged files.
                </li>
                <li>
                    Copy the contents of each file, into a new file <strong>custom.css</strong> using
                    your favorite text editor such as notepad++ or gedit.  Be sure the files
                    are in the same order in the <strong>custom.css</strong> as they
                    are in the list above.<br />
                    <strong>Omit any starting line or lines</strong> that start with:
                    <pre>@import</pre>
                </li>
                <li>
                    Use FTP or the admin interface at <strong>Design > Manager</strong> to upload
                    the new <strong>custom.css</strong>, into your own template
                    set in the <strong>external/css/</strong> folder.
                </li>
                <li>In the admin at <strong>Design &gt; Manager</strong>, edit the file
                    <strong>[your template set] / main_page / head.tpl</strong>
                </li>
                <li>
                    Remove Each of these lines if any of them exist in the file:
                    <pre>{* Load the theme_styles.css files last, so it can over-write any page/module specific CSS files if desired. *}
&lt;link href="{external file='css/theme_styles.css'}" rel="stylesheet" type="text/css" /&gt;
&lt;link href="{external file='css/primary_theme_styles.css'}" rel="stylesheet" type="text/css" /&gt;
&lt;link href="{external file='css/secondary_theme_styles.css'}" rel="stylesheet" type="text/css" /&gt;</pre>
                    If you do not have lines exactly like that, you need to remove any lines that reference
                    theme_styles.css, primary_theme_styles.css, or secondary_theme_styles.css.
                </li>
                <li>
                    Save the changes to the head.tpl file.
                    <br /><br />
                    <strong>Note:</strong>  If your own template set does not use
                    <strong>head.tpl</strong>, you will need to do a search to find
                        and remove any lines that add any of those 3 theme_style files.
                </li>
            </ol>
        </div>
        <br />
        <a href="#73_keepOld" class="show_hide_link">Option 3: Convert Existing Design to use RWD +</a>
        <div id="73_keepOld" style="display: none;">
            <br />
            <strong>Note:</strong> This option is probably going to be the most work out of
            the 3 options!  If at all possible, depending on how "custom" your design is,
            it may actually be less work to just "start over" from
            the new design and applying your customizations on top of the new design,
            using "option 1".
            <br /><br />
            Due to the amount of time this can potentially take, and so that we can
            more easily adjust and tweak these instructions as needed, you will find the instructions
            to convert your existing design to use RWD in the following wiki page:
            <br /><br />
            <a href="/wiki/tutorials/design_adv/convert_design_rwd/"<?php echo $popup;?>>Convert Existing Design to use RWD</a>
            <br /><br />
            We recommend to complete the rest of the update process, then you can take your time
            using the tutorial linked above as a guide to help you convert your
            existing design to use RWD.
        </div>
    </li>
<?php } ?>

<?php if ($ver==='7.3rc1' || $ver==='7.3rc2') { ?>
    <li class="new">
        If your design is based on <strong>7.3 Release Candidate 1 or 2</strong> templates, there are a few
        changes you will need to make to your templates noted below.
        <br /><br />
        In your own template set, in the main_page templates, for each template in this list:
        <ul>
            <li>basic_page.tpl</li>
            <li>cart_page.tpl</li>
            <li>category_page.tpl</li>
            <li>front_page.tpl</li>
            <li>alternate_front_pages/ (all 3 templates)</li>
            <li>layout-1-column.tpl</li>
            <li>layout-2-column.tpl</li>
            <li>layout-3-column.tpl</li>
            <li>listing_page.tpl</li>
            <li>login_page.tpl</li>
            <li>tag_page.tpl</li>
            <li>user_management_page.tpl</li>
        </ul>
        <br /><br />
        Edit each template in the list, and replace the entire top part starting
        with the first line, down to (and including)
        the <strong>&lt;body class="no-js"&gt;</strong> tag or the <strong>&lt;body&gt;</strong>
        tag (whichever one your template has) with the following:
        <pre>&lt;!DOCTYPE html&gt;
&lt;html class="no-js"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
        &lt;title&gt;{module tag='module_title'}&lt;/title&gt;
        &lt;meta name="description" content=""&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"&gt;

        {head_html}

        &lt;!--  This loads the RSS feed  --&gt;
        &lt;link rel="alternate" type="application/rss+xml" title="Newest Listing Feed" href="rss_listings.php" /&gt;

        {include file='head_common.tpl'}
        &lt;script src="js/modernizr-2.6.2.min.js"&gt;&lt;/script&gt;
        &lt;!--[if lt IE 9]&gt;&lt;link rel="stylesheet" type="text/css" href="{external file='css/old_ie.css'}" /&gt;&lt;![endif]--&gt;
    &lt;/head&gt;
    &lt;body&gt;</pre>
        <br /><br />
        Note that these changes are required for a number of reasons, most notably
        for "old" Internet Explorer version compatibility (although that is not the
        only reason, so the change is recommended even if you do not care about
        supporting old IE).
    </li>
<?php } ?>

<!-- ADD NEW CHANGES ABOVE THIS!!!  The system template change should always be last
amound all the template changes listed. -->


<?php if ($atLeast['7.3']) { ?>
    <li class="doYourself">
        <!-- NOTE: Does not get new class because it is done for every update
            after they get to 7.3.0
         -->
        If you have turned off using the <strong>default.css</strong> file, you will need
        to follow the instructions below to add new CSS from the new version.
        <br /><br />
        <?php echo $noteStart; ?>
            Disabling the default.css file is not typical.  If you are not sure, you can check by:
            <br /><br />
            In the admin at <strong>Design &gt; Settings</strong>, if the advanced
            setting <strong>Do NOT automatically include default.css</strong>
            is <strong>checked</strong>, you will need to follow the steps below.
        <?php echo '</div>'; ?>
        <br /><br />
        <a href="#default_css_changes" class="show_hide_link">default.css Update Instructions +</a>
        <div id="default_css_changes" style="display: none;">
            <?php echo $noteStart; ?>
                These steps are meant for websites with a very highly customized
                CSS design that do not use the <strong>default.css</strong> and "overwrite" sections
                in a <strong>custom.css</strong> file, but instead the <strong>custom.css</strong>
                contains all required CSS and the setting to not use default.css is turned on.
                For such sites, almost every update will have new CSS for new
                features that will need to be copied into the custom CSS file
                and adjusted to match the custom design.  The steps below will
                help walk you through this process.
                <br /><br />
                If you do not think your site is like this, we suggest turning off
                the setting to "do NOT automatically include default.css",
                that way it will use <strong>default.css</strong> from the new version and the steps
                below would not be necessary.
            <?php echo '</div>'; ?>
            <ol style="list-style: upper-alpha;">
                <li>Go through every single template change listed for every version
                    between <?php echo $ver; ?> and the latest release
                    <a href="/changelog/"<?php echo $popup;?>>here</a>.
                </li>
                <li>Look for changes to the file <strong>external/css/default.css</strong>,
                    and for every change listed, apply that change to your own
                    custom CSS file.  If you have followed the recommendations in
                    the user manual, this will be the file <strong>external/css/custom.css</strong>
                    in your custom template set.  Some sites may use a different
                    CSS file, you would apply the changes to whatever you use
                    for your main CSS file.
                </li>
                <li>You may need to make adjustments to the new CSS to fall in line
                    with your custom design.
                </li>
            </ol>
        </div>
    </li>
<?php } ?>
<?php if($atLeast['7.0'] && !$atLeast['16.02.0']) { ?>
    <li class="new">
        If you are using the <strong>marquee</strong> or <strong>fusion</strong> alternate template sets, follow these instructions when upgrading to GeoCore v16.02 or higher.<br />
        <br />
        <a href="#marquee_v16_update" class="show_hide_link">Marquee Template Set Required CSS Patch +</a>
        <div id="marquee_v16_update" style="display: none;">
            <ol>
                <li>In the admin panel, go to <strong>Design &gt; Template Sets</strong> and ensure that the marquee template set is selected in the Admin Editing column.</li>
                <li>Navigate to <strong>Design &gt; Manager</strong> and edit the file <strong>external/css/custom.css</strong></li>
                <li>Add the following code to the bottom of this file, and then Save your changes.<br />
                <br /><pre>
/* ==========================================================================
   MARQUEE UPGRADE v7 to v16 CSS PATCH
   ========================================================================== */

@media only screen and (min-width: 52em) {

    /* Main menu bar backround position from top. Adjust accordingly */
    .page-bar {
        top: 1.8em;
    }

    .user-bar {
        max-width: 480px;
        position: relative;
        top: 1.3em;
    }

    .design2016 .user-bar {
        float: left;
        padding-top: 0;
    }
}

@media only screen and (max-width: 52em) {
    .fixed-nav {
        background-color: #535353;
        border-bottom: 1px solid gray;
    }
    .fixed-link:hover {
        background-color: #FFF;
    }
}

.cz-categories {
    display: block;
}
.form-wrapper {
    box-sizing: content-box;
}
a.list-group-item:hover, a.list-group-item.active, a.list-group-item.active:hover {
    background-color: #3E4851;
}
.price-tag {
    background: #279e4e none repeat scroll 0 0;
}

*, *::before, *::after {
    box-sizing: border-box;
}
.legend div, .legend div::before, .legend div::after,
.legend, .legend::before, .legend::after {
    box-sizing: content-box;
}
.browsing_filter_container h1.browsing_filter_title {
    background: #999 url("../images/backgrounds/title_bar_bg2.png") repeat scroll 0 0;
}
div.offsite_video_box_title_editing {
    background: #3e8fd0 url("../images/backgrounds/title_bar_bg2.png") repeat scroll 0 0;
}

h1.my_account {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border-bottom: thin dotted #535353;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    color: #535353;
}
h3.title {
    background: url("../images/backgrounds/title_bar_bg2.png") repeat scroll 0 0 #ff9a35;
}
.cat-block-popout .category_column ul {
    margin: 0;
}
.cat-block-popout .category_column {
    padding: 0;
}
.header-links-rwd {
    top: 3px;
}
.badge {
    background-color: #777;
    border-radius: 10px;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    min-width: 10px;
    padding: 3px 7px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}
.page-bar .menu-link {
    min-width: 12%;
}</pre>
                </li>
            </ol>
        </div>
        <br />
        <a href="#fusion_v16_update" class="show_hide_link">Fusion Template Set Required CSS Patch +</a>
        <div id="fusion_v16_update" style="display: none;">
            <ol>
                <li>In the admin panel, go to <strong>Design &gt; Template Sets</strong> and ensure that the fusion template set is selected in the Admin Editing column.</li>
                <li>Navigate to <strong>Design &gt; Manager</strong> and edit the file <strong>external/css/custom.css</strong></li>
                <li>Add the following code to the bottom of this file, and then Save your changes.<br />
                <br /><pre>
/* ==========================================================================
   FUSION UPGRADE v7 to v16 CSS PATCH
   ========================================================================== */

@media only screen and (min-width: 52em) {

    /* Main menu bar backround position from top. Adjust accordingly */
    .page-bar {
        top: 6.8em;
    }
    .user-links .menu-link {
        color: #fff;
    }
}

@media only screen and (max-width: 52em) {
    .fixed-nav {
        background-color: #535353;
        border-bottom: 1px solid gray;
    }
    .fixed-link:hover {
        background-color: #FFF;
    }
}

.cz-categories {
    display: block;
}
.form-wrapper {
    box-sizing: content-box;
}
a.list-group-item:hover, a.list-group-item.active, a.list-group-item.active:hover {
    background-color: #3E4851;
}
.price-tag {
    background: #279e4e none repeat scroll 0 0;
}

*, *::before, *::after {
    box-sizing: border-box;
}
.legend div, .legend div::before, .legend div::after,
.legend, .legend::before, .legend::after {
    box-sizing: content-box;
}
.browsing_filter_container h1.browsing_filter_title {
    background: #999 url("../images/backgrounds/title_bar_bg2.png") repeat scroll 0 0;
}
div.offsite_video_box_title_editing {
    background: #3e8fd0 url("../images/backgrounds/title_bar_bg2.png") repeat scroll 0 0;
}
h3.title {
    background: url("../images/backgrounds/title_bar_bg2.png") repeat scroll 0 0 #3E8FD0;
}
h1.my_account {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border-bottom: thin dotted #535353;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    color: #535353;
}
.cat-block-popout .category_column ul {
    margin: 0;
}
.cat-block-popout .category_column {
    padding: 0;
}
.header-links-rwd {
    top: 3px;
}
.badge {
    background-color: #777;
    border-radius: 10px;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    min-width: 10px;
    padding: 3px 7px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}
.page-bar .menu-link {
    min-width: 12%;
}</pre>
                </li>
            </ol>
        </div>
        <br />
        <a href="#marquee_fusion_v16_update_optional" class="show_hide_link">Header Patch (required for both Marquee AND Fusion) +</a>
        <div id="marquee_fusion_v16_update_optional" style="display: none;">
            <ol>
                <li>These directions are identical for both the <strong>Fusion</strong> and <strong>Marquee</strong> template sets</li>
                <li>Be sure to complete the appropriate CSS Patch for your template set as described above, if you have not already done so</li>
                <li>These steps will add important navigation elements to your site's header when viewed on a mobile-size screen</li>

                <li>From the <strong>Design &gt; Manager</strong> admin menu, edit the file <strong>main_page/header.tpl</strong></li>
                <?php $htmlSnippet = <<<'CODE'
<!-- START SUBMENU -->
{if ($smarty.get.a == 4 && $logged_in) || $smarty.get.a == 'cart'}
    {* in My Account section or Cart process -- show mini-cart *}
    <div class="content_box clearfix regions my-account">
        {module tag='my_account_links' mini_cart_only=1}
    </div>
    <div class="submenu-spacer">&nbsp;</div>
{elseif $enabledAddons.geographic_navigation && $smarty.get.addon != 'storefront'}
    {* On any other page (EXCEPT STOREFRONT PAGES), and if the GeoNav addon is set up, show region selection as the submenu *}
    <div class="content_box clearfix regions">
        <h3 class="title section-collapser">
            <span class="glyphicon glyphicon-map-marker"></span>&nbsp;Region&nbsp;<span style="font-size: .8em; font-weight: normal;"><span style="font-size: .8em;" class="glyphicon glyphicon-chevron-right"></span> {addon author='geo_addons' addon='geographic_navigation' tag='current_region'}&nbsp;
            {if $geographic_navigation_region}&nbsp;[&nbsp;<a href="{$classifieds_url}?region=0" style="color: #FFF;">clear</a>&nbsp;]{/if}</span>
        </h3>
        {addon author='geo_addons' addon='geographic_navigation' tag='navigation'}
    </div>
    <div class="submenu-spacer">&nbsp;</div>
{/if}
<!-- END SUBMENU -->
CODE;
    ?>
                <li>Immediately below <strong>&lt;header class="page clearfix"&gt;</strong>, add the following:<pre>
<?php echo htmlspecialchars($htmlSnippet); ?></pre></li>
                <li>Save your changes</li>
            </ol>
        </div>
        <br />
    </li>
<?php } ?>
<?php if (!$tplUpdate) { ?>
<?php
//helper link thingy
$systemTipLink = '<a href="/wiki/tutorials/design_adv/replace_system_templates/#geo_updates_customized_templates"'.$popup.'>here</a>';
?>
    <li class="doYourself">
        <!-- Note: Does not get new class because this is done on anything that started with
        template sets, so will show up in every update from now on. -->
        If you have custom <strong>system</strong>, module, or addon templates, follow the instructions
        below.  Note that this is not typical, you can tell by viewing your template
        set folder and seeing if it has any "system", "module" or "addon" folders
        in them, or if Geodesic support has specifically instructed you to follow these steps.

        <br /><br />
        <a href="#template_system_update" class="show_hide_link">System Template Update Instructions +</a>
        <div id="template_system_update" style="display: none;">
            <?php echo $noteStart; ?>
                Do you have a lot of templates in your system, module, or addon folders
                in your custom template set, but don't think all of them have changes
                in them?  If so, follow <a href="/wiki/tutorials/design_adv/make_template_set_update_friendly/"<?php echo $popup;?>>these instructions</a> before continuing, to make
                your template set more update friendly.  Doing this will greatly
                reduce the amount of work you will need to do now and in future updates.
                <br /><br />
                Also make sure to always follow <a href="/wiki/tutorials/design_adv/replace_system_templates/"<?php echo $popup;?>>this tutorial</a>
                when you need to customize a new system or module template.
            <?php echo '</div>'; ?>
            <ol style="list-style: upper-alpha;">
                <li>Go through every single template change listed for every version
                    between <?php echo $ver; ?> and the latest release.
                    <ul>
                        <?php if (!$atLeast['7.0'] && $ver!=='6.0.6') { ?>
                            <li>Changes for versions <strong>before</strong> 7.0.0 in the user manual <a href="/wiki/designers/changes_to_note/"<?php echo $popup;?>>here</a>.</li>
                        <?php } ?>
                        <li>Changes for versions <strong>after</strong> 7.0.0
                            in the changelogs <a href="/changelog/"<?php echo $popup;?> class="broken">here</a>.</li>
                    </ul>
                </li>
                <li>Go through each listed file, and if you have that file in your custom
                    template set, apply the changes as noted.
                </li>
                <li>If the changes listed look too complex to apply to
                    your customized template, or if you cannot
                    recognize where the changes are located in your custom
                    template, read the tips <?php echo $systemTipLink;?>
                    for help updating your custom template to be compatible
                    with the latest version.
                </li>
            </ol>
        </div>
    </li>
<?php } ?>
