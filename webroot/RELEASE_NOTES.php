<html>

<head>
    <title>Legacy Release Notes &amp; Change Log - Geodesic Solutions Products</title>

    <style type="text/css">
        #FogBugzReleaseNotes {
            font-family: Verdana, Arial, sans-serif
        }

        #FogBugzReleaseNotes h1 {
            border-bottom: 1px solid #449;
            font-size: 1.2em;
            color: #449;
            clear: both;
        }

        #FogBugzReleaseNotes h2 {
            font-size: 1em;
        }

        #FogBugzReleaseNotes p {
            font-family: Georgia, 'Times New Roman', serif;
            margin-left: 0.5in;
            font-size: 0.9em;
        }

        #FogBugzReleaseNotes ol li {
            font-family: Georgia, 'Times New Roman', serif;
            margin-left: 0.5in;
            font-size: 0.9em;
        }

        #FogBugzFooter {
            font-size: 10px;
            text-align: center
        }

        ul.releaseMenuList,
        ul.tagLegendList {
            border: navy thin solid;
            float: left;
            padding-right: 0px;
            padding-left: 0px;
            padding-bottom: 5px;
            margin-left: 20px;
            margin-bottom: 30px;
        }

        ul.releaseMenuList li,
        ul.tagLegendList li {
            list-style: none;
            padding-left: 15px;
            padding-right: 15px;
        }

        ul.releaseMenuList li a,
        ul.tagLegendList li a {
            text-decoration: none;
        }

        #FogBugzReleaseNotes ul li a:hover {
            text-decoration: underline;
        }

        #FogBugzReleaseNotes ul li.ReleaseMenuTitle {
            border-bottom: black solid thin;
            margin-bottom: 8px;
        }

        a.top_link {
            text-decoration: none;
            font-size: small;
        }

        a.top_link:hover {}

        /* "tag" styles */
        .featureType,
        .bugFixType,
        .allEdition,
        .addonEdition,
        .entEdition,
        .premierEdition,
        .basicEdition,
        .aucProduct,
        .classProduct,
        .classAucProduct,
        .mixedEdition {
            font-style: italic;
            font-variant: small-caps;
        }

        /* Tag Legend */
        ul.tagLegendList {
            max-width: 350px;
            min-width: 300px;
        }

        ul.tagLegendList li {
            text-indent: -10px;
            margin-left: 10px;
            font-size: 10px;
        }

        ul.tagLegendList li span {
            font-size: 12px;
            font-weight: bold;
        }

        ul.tagLegendList li strong,
        ul.tagLegendList li.ReleaseMenuTitle {
            font-size: 12px;
            text-indent: 0px;
            margin-left: 0px;
        }

        .previousLink {
            font-size: 12px;
            color: black;
            text-decoration: none;
        }

        .previousLink:hover {
            text-decoration: underline;
        }

        .broken {
            text-decoration: line-through;
        }

        .broken::after {
            content: '[broken]';
            vertical-align: super;
            font-size: .8em;
        }
    </style>
</head>

<body>
    <div id="FogBugzReleaseNotes">
        <h1>Legacy Release Notes &amp; Change Log for Classifieds/Auctions/ClassAuctions - Versions Before 6.0.0</h1><br />
        <!-- Release Menu -->
        <ul class="releaseMenuList">
            <li class="ReleaseMenuTitle col_hdr">Releases</li>
            <li><a href="#5.2.4">5.2.4 - 06/24/2011</a></li>
            <li><a href="#5.2.3">5.2.3 - 05/13/2011</a></li>
            <li><a href="#5.2.2">5.2.2 - 05/03/2011</a></li>
            <li><a href="#5.2.1">5.2.1 - 01/21/2011</a></li>
            <li><a href="#5.2.0">5.2.0 - 01/13/2011</a></li>
            <li><a href="#5.1.4">5.1.4 - 11/01/2010</a></li>
            <li><a href="#5.1.3">5.1.3 - 09/13/2010</a></li>
            <li><a href="#5.1.2">5.1.2 - 09/03/2010</a></li>
            <li><a href="#5.1.1">5.1.1 - 07/30/2010</a></li>
            <li><a href="#5.1.0">5.1.0 - 07/02/2010</a></li>
            <li><a href="#5.0.3">5.0.3 - 06/01/2010</a></li>
            <li><a href="#5.0.2">5.0.2 - 04/02/2010</a></li>
            <li><a href="#5.0.1">5.0.1 - 02/22/2010</a></li>
            <li><a href="#5.0.0">5.0.0 - 02/09/2010</a></li>
            <li><a href="#4.1.3">4.1.3 - 10/15/2009</a></li>
            <li><a href="#4.1.2">4.1.2 - 09/15/2009</a></li>
            <li><a href="#4.1.1">4.1.1 - 08/03/2009</a></li>
            <li><a href="#4.1.0">4.1.0 - 07/24/2009</a></li>
            <li><a href="#4.0.9">4.0.9 - 06/15/2009</a></li>
            <li><a href="#4.0.8">4.0.8 - 05/22/2009</a></li>
            <li><a href="#4.0.7">4.0.7 - 05/11/2009</a></li>
            <li><a href="#4.0.6">4.0.6 - 05/07/2009</a></li>
            <li><a href="#4.0.5">4.0.5 - 04/08/2009</a></li>
            <li><a href="#4.0.4">4.0.4 - 04/01/2009</a></li>
            <li><a href="#4.0.3">4.0.3 - 03/06/2009</a></li>
            <li><a href="#4.0.2">4.0.2 - 03/02/2009</a></li>
            <li><a href="#4.0.1">4.0.1 - 02/17/2009</a></li>
            <li><a href="#4.0.0">4.0.0 - 02/13/2009</a></li>
            <li><a href="#3.1.10">3.1.10 - 04/09/2009</a></li>
            <li><a href="#3.1.9">3.1.9 - 07/28/2008</a></li>
            <li><a href="#3.1.8">3.1.8 - 07/18/2008</a></li>
            <li><a href="#3.1.7">3.1.7 - 07/02/2008</a></li>
            <li><a href="#3.1.6">3.1.6 - 06/28/2008</a></li>
            <li><a href="#3.1.5">3.1.5 - 11/09/2007</a></li>
            <li><a href="#3.1.4">3.1.4 - 11/06/2007</a></li>
            <li><a href="#3.1.3">3.1.3 - 10/24/2007</a></li>
            <li><a href="#3.1.2">3.1.2 - 10/11/2007</a></li>
            <li><a href="#3.1.1">3.1.1 - 10/08/2007</a></li>
            <li><a href="#3.1.0">3.1.0 - 09/28/2007</a></li>
            <li><a href="#3.0.2">3.0.2 - 07/02/2007</a></li>
            <li><a href="#3.0.1">3.0.1 - 05/18/2007</a></li>
            <li><a href="#3.0.0">3.0.0 - 05/10/2007</a></li>
            <li><a href="#2.0.9b">2.0.9b - 12/01/2006</a></li>
            <li><a href="#2.0.8b">2.0.8b - 11/28/2006</a></li>
            <li><a href="#2.0.7b">2.0.7b - 10/24/2006</a></li>
            <li><a href="#2.0.6b">2.0.6b - 10/17/2006</a></li>
            <li><a href="#2.0.2b">2.0.2b - 09/22/2006</a></li>
            <li><a href="#2.0.1b">2.0.1b - 09/08/2006</a></li>
            <!-- Versions before 2.0.1b - see release notes included in files for that release -->


        </ul>

        <!-- Tag Legend -->
        <ul class="tagLegendList">
            <li class="ReleaseMenuTitle col_hdr">Tag Legend</li>
            <li><span class="featureType">[Feature]</span> - Adds a feature or functionality that did not exist before.</li>
            <li><span class="bugFixType">[BugFix]</span> - Fixes something in software.</li>
            <li><span class="allEdition">[All Editions]</span> - Applies to all editions.</li>
            <li><span class="addonEdition">[AddOn]</span> - Applies to all Editions using specified addon, or it deals with overall Addon functionality.</li>
            <li><span class="entEdition">[Enterprise]</span> - Applies to products at the Enterprise Edition.</li>
            <li><span class="premierEdition">[Premier]</span> - Applies to products at the Premier Edition.</li>
            <li><span class="basicEdition">[Basic]</span> - Applies to products at the Basic Edition.</li>
            <li><span class="classAucProduct">[ClassAuctions]</span> - Applies to GeoClassAuctions only.</li>
            <li><span class="classProduct">[Classifieds]</span> - Applies to GeoClassifieds only.</li>
            <li><span class="AucProduct">[Auctions]</span> - Applies to GeoAuctions.</li>
            <li><span class="mixedEdition">[Product &amp; Edition]</span> - Applies to the multiple products or Editions specified in the tag.</li>
            <li></li>
        </ul>

        <!-- Version 5.2.4  <?php $noteId = 0; ?> -->
        <h1 id="5.2.4">June 27, 2011 - 5.2.4 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.2.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Remote API compatibility issues with updated 3rd party library</h2>
        <p>New version of 3rd party library for XML RPC requires compatibility changes in the software. This will fix problems with the remote API, such as certain errors when attempting to use the JFusion plugin.</p>

        <h2 id="5.2.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Let addons know about JIT registered users</h2>
        <p>When a user is registered using the "Just In Time" method, the software now informs all addons. This mainly affects registrations being shared properly by the bridge addon. No updates to the addon are required.</p>

        <h2 id="5.2.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Error when attempting to attach price plan with specific name or description</h2>
        <p>On user group edit page in the admin panel, when editing additional price plan attachments, it generates an error when you attempt to attach a price plan and use double quotes in the name or the description.</p>

        <h2 id="5.2.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Changes to allow multiple jfusion plugin copies to be used, to connect multiple Geo installations through JFusion</h2>
        <p>Changes to the remote API calls to allow the JFusion plugin to use dual login with multiple Geo installations. Requires newer version of JFusion plugin, and Geo 5.2.4 to be running on all Geo installations. These changes will allow the same "multiple Geo login" to work for any 3rd party script that uses the API as well.</p>

        <h2 id="5.2.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> The "new image upload" box on the standard uploader is mis-aligned</h2>
        <p>Changes to the JS used for image uploader were made, to fix the slight mis-alignment of the image uploader that was present starting in 5.2.2 when 3rd party library Prototype was updated.</p>

        <!-- Version 5.2.3  <?php $noteId = 0; ?> -->
        <h1 id="5.2.3">May 13, 2011 - 5.2.3 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.2.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> List Users page in admin not compatible with new Prototype version</h2>
        <p>The new Prototype 3rd party JS library version 1.7 required compatibility tweaks to the list users page to function properly.</p>

        <h2 id="5.2.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Errors in WYSIWYG editor caused by TinyMCE library</h2>
        <p>The 3rd party library known as TinyMCE, used for the WYSIWYG editor in the admin panel, needed to be updated to fix a problem in the version that shipped with the previous 5.2.2 release. The problem would cause errors when trying to edit a template within the admin panel, basically crippling the functionality on the page.</p>


        <!-- Version 5.2.2  <?php $noteId = 0; ?> -->
        <h1 id="5.2.2">May 3, 2011 - 5.2.2 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Offsite videos sometimes removed when listing edit is canceled</h2>
        <p>Fixed an issue where the offsite videos can get inadvertently removed when the user cancels the listing edit process, after the user has viewed or made changes to the media for the listing.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Media collection page submits when user refreshes page</h2>
        <p>Fixed problem where it proceeds to the next step when the user refreshes the media collection page. The problem would also make it clear any videos since it behaves as if the media form is submitted without any information filled in the form.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Browsing tags with filters in place</h2>
        <p>On the browsing tag page, fixed issue that would cause blank page if using certain listing filters, such as geographic navigation level 3 or higher.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Some message replies do not get sent through e-mail properly</h2>
        <p>Fixed problem with e-mail headers used during certain message replies, that would prevent the e-mail from being sent. Note that the replies would still show in the user's "messages" section without my account.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Tag search module contents are cached when they should not be</h2>
        <p>The tag search module's contents were cached by the system, when cache is turned on, resulting in the value of the search not changing depending on what tag is currently being displayed.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> User logged off when changing Geographic Navigation addon's subdomain</h2>
        <p>Fixed issue where the user would be logged out, if they navigate to a different Geographic Navigation addon region that uses a different sub-domain. Also fixed problem where links on my account page "lost" the current Geographic Navigation sub-domain being used.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Final fee cost summary in cart is wrong when for dutch auction</h2>
        <p>Fixed the final fee cost summary when the final fee is for a dutch auction, it didn't make any sense before. Note that the amount charged was correct, but the summary it showed for how it got that cost was not complete.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Uses cache for Zip filter module when it should not</h2>
        <p>Changed the default cache settings so that the zip search module does not use the cache if a filter is in place.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Updated 3rd party libraries for Prototype, Scriptaculous, and TinyMCE for IE9 compatibility</h2>
        <p>There were Internet Explorer version 9 compatibility problems, that needed updates to some of the 3rd party libraries.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Use of communication type setting inconsistent for "reply e-mails"</h2>
        <p>The previous functionality was such that if the receiver had communication type set to private, it would not send the e-mail, but only for reply e-mails. This was changed to always send the e-mail, even on replies, and even when communication type is set to private, so that the functionality is consistent with how the initial "contact seller" works.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> Closing dutch auction causes fatal error during close routine</h2>
        <p>During the close listing cron job, if it is closing a dutch auction, in some cases it will cause a fatal error preventing the close listing routine from finishing properly and locking up the cron job.</p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Site wide optional fields "other" box ignored in search</h2>
        <p>If an optional field is set up to use pre-valued drop-downs with the "other" box, and someone performs a search using that other box, the value is ignored by the search result.
            <br /><br />This seems to be a pre-existing issue with how fields are used within the search page, and is related to bug fixed in 5.2.1 that was specific to "other" box but for category questions.
        </p>

        <h2 id="5.2.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Zipsearch addon problems with specific ranges</h2>
        <p>The "crosses north/south pole" calculations that were added in last version had calculation problems that needed to be fixed. The calculations are actually part of the base code, so there is not a newer version of the Zipsearch addon at this time. Still, as always, make sure you have the latest version available for download in the client area, for any of your addons, when you update the main software.</p>

        <!-- Version 5.2.1  <?php $noteId = 0; ?> -->
        <h1 id="5.2.1">January 21, 2011 - 5.2.1 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Show currency symbols for 'cost' fields in search results</h2>
        <p>Optional Fields of type 'Use As Cost' will now display with the appropriate precurrency and postcurrency symbols on the search results page.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> My Active Listings page instructions not editable</h2>
        <p>Fixed a bug that caused the &quot;page instructions&quot; text on the My Active Listings page to not be editable through the admin.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Error when trying to restart ad in admin panel</h2>
        <p>Fixed an issue with the restart ad feature in the admin panel.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Zipsearch hides listings while enabled but not active</h2>
        <p>Fixed a bug that would cause all listings to be hidden if the Zipsearch addon was active and a zip filter was NOT selected.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Site Error on My Expired Listings page</h2>
        <p>Fixed a bug (affecting only some new installs of 5.2.0) that could cause a Site Error to appear on the My Expired Listings page.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Zipsearch table header missing</h2>
        <p>Fixed a bug that caused the Search Results table to not show the header text for the &quot;distance&quot; column when using the Zipsearch addon. That text is now correctly drawn from the Zipsearch's addon text.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Licensing validation problems detected when using geographic navigation sub-domains</h2>
        <p>Fixed a license validation issue with the new licensing (added in 5.2.0) that caused problems when using a sub-domain that is added by the Geographic Navigation addon.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Parse newlines when editing an optional field textarea</h2>
        <p>Fixed a bug that would cause line breaks in an Optional Field in Textarea mode to appear as &quot;&lt;br /&gt;&quot; tags when editing existing listing data.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Legacy Image Uploader on new Media Collection Page</h2>
        <p>Fixed an issue that caused the legacy image uploader to not function properly on the media collection page.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Tweaks to standard image uploader Javascript</h2>
        <p>Made a few minor tweaks to the standard image uploader JS that should improve stability, specifically when the &quot;select file&quot; flash button is shown/hidden in rapid succession.<br /><br />Also applied a minor change to the actual SWFUpload JS library file, from a more recent version of the library, that should help stop &quot;null pointer to cheese&quot; errors in specific scenarios.&nbsp; We elected to not update the entire SWFUpload library since the new version of the library is still considered BETA.</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Handle zipsearches across north/south poles</h2>
        <p>Added code to prevent the zipsearch from breaking when the area searched crosses either the north or south pole (it now simply stops at those points instead of wrapping to the other side of the globe)</p>

        <h2 id="5.2.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Blank search problem in admin search for order or recurring billing</h2>
        <p>Fixed problems caused when admin does a search for recurring billing or order with the search field left blank.</p>

        <!-- Version 5.2.0  <?php $noteId = 0; ?> -->
        <h1 id="5.2.0">January 13, 2011 - 5.2.0 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improved software licensing checks on new license keys</h2>
        <p>We have added more automation to the software licensing validation. Sites using "new" license keys will no longer need to contact Geodesic Solutions in order to add a test installation to the license. The first two installation locations, one "main" installation and one "test" installation, will be automatically approved. This <strong>does not affect</strong> older, pre-existing license keys.<br /><br />Example <strong>Old</strong> Key: Classifieds_ENT-2-xxxxxxxxxxx<br />Example <strong>New</strong> Key: GeoClassifiedsEnt-xxxxxxxxxxxx (key will not contain any underscore (_) characters)<br /><br />Only the "new keys" will have the added functionality noted above. Existing older keys will continue to work like they have in the past.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Converted "Upload Image" step to "Media Collection"</h2>
        <p>In the listing placement process (and listing edit process), we have converted the step dedicated to uploading images to a page for collecting all media for the listing. Both image uploads and the new Youtube videos will be collected on this page. Addon developers can also add sections to this page, to allow collecting other types of media with the use of 3rd party addons.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Ability to add Youtube videos to a listing</h2>
        <p>We have added the ability for users to add Youtube videos to their listings. The videos are collected in the listing placement and listing edit processes on the new media collection page.&nbsp; The admin can control (via price plan cost settings) how many videos are allowed, the pricing, and on Enterprise editions, how many &quot;free&quot; videos are allowed per listing.<br /><br />This will embed the Youtube videos on the listing details page.&nbsp; Note that this requires changes to the listing details templates on sites that are updating from previous versions. Refer to the new default templates for what needs to be added.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Public Questions &amp; Answers on listing details</h2>
        <p>Buyers may now ask &quot;public&quot; questions to sellers, that will then be displayed in the associated listing.<br /><br />When choosing to Contact Seller, a user will have the option to mark the message as a public question. If he does so, the seller will also be able to choose to answer publicly.<br /><br />If BOTH parties elect for the question/answer to be public, then the question and answer will be displayed on the listing display page.<br /><br />The admin can control how many public questions are shown at a time on any given listing, and can remove the &quot;public flag&quot; from a specific question, effectively removing it from display. This also requires changes to the listing details template for sites updating from previous editions. As with the Youtube feature above, refer to the new default templates for what needs to be added.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add &quot;select all&quot; for manage orders and manage order items</h2>
        <p>Manage Orders and Manage Items now have &quot;check all&quot; box to quickly apply status changes to group of orders or items.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Improved checks on numeric optional fields</h2>
        <p>Improved the checks done on any optional fields with type set to &quot;numeric only&quot; or &quot;adds cost&quot;.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Category Description able to display when placing listing</h2>
        <p>Added feature to show the category description on the &quot;choose category&quot; step when placing or editing a listing.&nbsp; To turn on, set new setting &quot;Category Descriptions&quot; to &quot;show&quot; in admin panel at <strong>Listing Setup &gt; General Settings</strong>.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add admin edit/delete buttons to listing details page</h2>
        <p>&quot;Edit&quot; and &quot;delete&quot; buttons will now appear on the listing details page next to the listing title if logged in as an admin user; these are similar to the buttons that are already displayed when browsing categories.&nbsp; The edit button will also display in listing details when the user logged in is the user that placed the listing. Also added an addon hook here for addons to add their own buttons near a listing title. This also requires changes to the listing details template for sites updating from previous editions. As with the Youtube feature above, refer to the new default templates for what needs to be added. (That's the last one (for now) on that page, we promise!)</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Move &quot;Allow Copying Listings&quot; setting out of beta settings</h2>
        <p>The &quot;Allow Copying to new Listing&quot; setting has been moved out of Beta Settings and into <strong>Listing Setup &gt; General Settings</strong> as a fully-supported option of the software.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New sort order choice for displaying listings</h2>
        <p>Added a new option to the &quot;Default Order of Classifieds/Auctions While Browsing&quot; selections: sorting by listings that have at least one image first (or last).</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Display order details on payment success/failure page</h2>
        <p>Details of a completed order will now be shown on the success/failure page for payment types that display that page (such as cash payments, or &quot;on site&quot; CC payments).</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="classProduct">[Classifieds &amp; Enterprise]</span> Featured pic module shows &quot;sold&quot; image for sold classifieds.</h2>
        <p>Added the &quot;sold&quot; image to listings displayed by the featured pic module for listings that are marked as sold.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improvements to Manage Orders page in admin panel</h2>
        <p>Added ability to sort orders by order id, username, date, invoice ID, gateway used, or order status.&nbsp; Also added ability to filter orders by date range, and by user.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Allow spaces in username</h2>
        <p>Spaces are now allowed in the middle of usernames.&nbsp; Spaces at the beginning or end of the username will still be trimmed off.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Removed &quot;special tag&quot; filtering from allowed HTML feature</h2>
        <p>The allowed HTML had a section for &quot;special cases&quot; where it would remove things that were not actually HTML tags, that could cause a problem for security (like the PHP open tag &quot;&lt;?&quot;).&nbsp; However, with how templates work now, those items no longer pose a security risk, so there is no need to remove them.&nbsp; As such, they have been removed from the Allowed HTML page, but may still be removed, if desired, by using the badword replacement feature.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Revamped My Active/Expired Listings Pages</h2>
        <p>Revamped the appearance of the My Active Listings and My Expired Listings pages, to produce cleaner-looking tables that are especially more friendly for users with smaller viewports, such as netbooks and mobile devices.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add ability to delete template set from the admin panel</h2>
        <p>Added the ability to delete an entire &quot;inactive&quot; template set from the admin panel, on the page &quot;Design &gt; Template Sets&quot;.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add ability to make a copy of the selected template file.</h2>
        <p>Added the ability to make a copy of a selected file, with new &quot;Make Copy&quot; button (next to &quot;Rename&quot;), in the admin on the page &quot;Design &gt; Manager&quot;.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Download and upload of template sets no longer requires zip extension</h2>
        <p>System no longer requires PHP's zip extension to be loaded to use the template upload and download functionality within the admin at &quot;Design &gt; Template Sets&quot;.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Bulk uploader improvements</h2>
        <p>Version 3.0.0 of the Bulk Uploader addon is now available. Major changes are as follows:<br /><br />-Fixed many bugs.<br /><br />-Rewrote image handling code. You can now select between two image upload types: Faster, which works similar to the original Bulk Uploader and requires URL-referenced images, or Better Quality, which copies the images to the local server and creates thumbnails for them. Better Quality is more in line with how images are processed in the software's front end, but the Faster method may be required in some cases, especially when uploading large numbers of images.<br /><br />-Added new options to Step 3 of the upload process:<br />-- &quot;Check User Limits&quot; will verify that the seller entered for a listing is able to place a listing according to his price plan settings before entering a listing for him in the bulk uploader. If a user is either at his maximum number of listings, or is in a subscription-based price plan and does not have an active subscription, listings he is the seller of will be skipped over by the bulk uploader. This setting will also enforce the seller's default price plan's limit on the number of images per listing, by skipping over any images in excess of that limit.<br />-- &quot;Use Default User Data&quot; will cause some location and contact data from a user's profile to automatically be included as defaults in bulk uploaded listings for which he is the seller. Data entered directly in the upload will take precedence over these defaults.<br /><br />-The file structure of Revolving Inventory source files has changed slightly: each revolving session will now have a dedicated folder created for it, in addons/bulk_uploader/uploads/revolving/. Existing revolving upload sessions will not be affected.<br /><br />-Revolving Inventory can now handle listings that expire between cron executions (by creating new listings for them).</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Improvements to ZipSearch searches and filtering</h2>
        <p>Version 2.0.0 of the Zipsearch addon is now available. If you have this addon, be sure to update to the latest version when you update the main software, or zip/postal code searches will no longer function on your site. Major changes are as follows:<br /><br />-Added setting to allow changing "distance" units to either Miles or KM.<br /><br />-Improved distance calculation to use a more accurate formula when determining listings that fall within a certain distance of a zip or postal code.<br /><br />-Removed the old CGI-Interactive option, as the company that produced that data has been gone for several years now.<br /><br />-Moved what "search method" setting from main site to the addon settings page.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Subscription Expiration Errors</h2>
        <p>Fixed a bug that could cause Subscriptions created by the Admin to never expire, and another bug that could cause the entire subscription expiration process to fail.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Flood protection does not account for messages sent while not logged in</h2>
        <p>Fixed a bug that could cause the flood protection checks to not function properly when someone used the Contact Seller feature while not logged in.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Downloading non-image file produces 404 in IE 7</h2>
        <p>Fixed a bug that caused 404 &quot;page not found&quot; error when attempting to download a non-image file using IE7 on a listing.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Auction feedback removed when listing is archived</h2>
        <p>Fixed a bug that caused auction feedback to be removed when an auction was archived. This restores the pre-5.0.0 functionality.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Using URL and image upload causes error when using only URL</h2>
        <p>Fixed a bug that could cause image URL uploads in the &quot;legacy uploader&quot; to fail.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Problem registering new user using API</h2>
        <p>Fixed an issue with registering a new user over the API that was first introduced in version 5.1.0.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Update user password through API</h2>
        <p>Fixed a problem with editing a user password through the API while client password hashing was turned on that would cause the hashed password to be generated incorrectly.&nbsp; This most notably affects the beta plugin for JFusion.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Seller to Buyer section displayed when featured disabled.</h2>
        <p>Made the &quot;enter paypal ID&quot; input for the seller/buyer gateway section not display when the feature is turned off.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> State/Province drop-down does not populate for countries with special chars</h2>
        <p>Fixed a bug in listing placement that would cause the State dropdown to not be populated if a country containing a special character was selected.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category question search with other box</h2>
        <p>Fixed a bug on the advanced search page that would cause any dropdown selections to be ignored if on an optional field that also had an 'Other' box.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Problem with SEO URL with + in title and force SEO URL turned on</h2>
        <p>Plus (+) characters are now filtered from the title in the SEO URL for listings, to stop an &quot;infinite re-direct loop&quot; when the force SEO URL option is enabled.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Zipsearch issue with filtering by unknown postal code</h2>
        <p>Fixed a bug that would generate a fatal error on category browsing pages if you used the zip/postal search and &quot;filtered&quot; by a postal code that was not in the database.</p>

        <h2 id="5.2.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category specific Fields to Use not always followed for addons</h2>
        <p>Fixed an issue during listing placement that would cause fields added by addons on the listing detail collection page to use site-wide Fields to Use settings instead of category-specific Fields to Use settings.</p>

        <!-- Version 5.1.4  <?php $noteId = 0; ?> -->
        <h1 id="5.1.4">November 1, 2010 - 5.1.4 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.1.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="bugFixType">[Security]</span> Security Vulnerability fixed</h2>
        <p>An XSS (Cross Site Scripting) security vulnerability has been reported and fixed, that affects versions 3.1.10 through 5.1.3. A user would have to click on a specially crafted link to be exposed. To our knowledge, it has not been seen or used &quot;in the wild&quot; (on a production site).<br /><br />We recommend if you have any of the affected versions, to update to 5.1.4 immediately. If you are not able to update to 5.1.4, contact us for patching options.</p>

        <h2 id="5.1.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Shortened tags sometimes end in - or space</h2>
        <p>Fixed problem where if a tag goes over the &quot;max tag length&quot;, it can sometimes be shortened so that the last character is - or space.</p>

        <h2 id="5.1.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Require admin approval for registrations problem on some configurations</h2>
        <p>Fixed problem where user is not inserted into confirm table properly on certain server configurations, if e-mail notification setting is set to require admin approval for new registrations.</p>

        <!-- Version 5.1.3  <?php $noteId = 0; ?> -->
        <h1 id="5.1.3">September 13, 2010 - 5.1.3 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> New SMARTY tags available on category browsing page templates</h2>
        <p>Added the smarty view variables {$currentCategoryName} and {$currentCategoryDescription} which can be used to show the current category's name and description, respectively, from category browsing pages.</p>

        <h2 id="5.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="classAucProduct">[ClassAuctions]</span> Browsing featured pics does not use listing types allowed setting.</h2>
        <p>Fixed issue where both classifieds and actions sections are displayed on GeoClassAuctions even if classifieds or auctions are turned &quot;off&quot; according to listing types allowed setting.</p>

        <h2 id="5.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Fixed problems with Discount Codes addon</h2>
        <p>The Discount Codes addon has been updated in this release, to fix several problems introduced in the last version. It also adds new stats info for each discount code, like ability to view all users that have not used a discount code yet and even e-mail those users.</p>

        <h2 id="5.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Ability to show image/icon column during browsing</h2>
        <p>The &quot;display locations&quot; check-boxes for the image/icon in the fields to use settings page were inadvertently removed, resulting in the column not being able to be shown after changes are made to fields to use settings.&nbsp; Those check-boxes were re-added back to that field and a few other fields that need ability to set those settings.</p>

        <h2 id="5.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Data is cleared in admin registration notification e-mail</h2>
        <p>Fixed issue that caused all the user data except for the user ID to be blank in the admin registration complete e-mail.</p>

        <h2 id="5.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Default ordering for listing feeds not set properly</h2>
        <p>Fixed issue that caused the listing order to not get set properly on the different listing feeds, such as the RSS feed.</p>

        <h2 id="5.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fatal error caused by certain server configurations with certain cron jobs</h2>
        <p>Fixed issue caused by some server configurations, such as servers using a non-standard build of PHP known as the &quot;Suhosin Patch&quot;, that would cause a fatal error on certain cron jobs.</p>

        <!-- Version 5.1.2  <?php $noteId = 0; ?> -->
        <h1 id="5.1.2">September 3, 2010 - 5.1.2 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Security Image able to use reCAPTCHA for validation</h2>
        <p>New version of the security image released with main software, which is able to be configured to use reCAPTCHA for security image verifications. See <a href="http://recaptcha.com" onclick="window.open(this.href); return false;">recaptcha.com</a> for more info about reCAPTCHA.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Discount Codes now able to apply to recurring payments</h2>
        <p>New version of the discount code addon, with a few new enhancements:<br />
            - Discount codes able to be applied to recurring billing payments, with settings to say what each code can be applied to.<br />
            - Able to specify start and end times, so that a code can automatically expire after a certain date.<br />
            - Able to make each code only work for specific user groups (or "all groups" for backwards compatibility).
        </p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> New version of Geographic Navigation addon with a few improvements.</h2>
        <p>In the new Geographic Navigation addon version, added ability to show selection drop-down in search box module, and added ability to add location info to title module.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Improved multibyte string handling</h2>
        <p>Improved the way the listing placement process handles multi-byte strings, so that user input should no longer be cut off in the middle of non-Latin characters.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Added more date format options with seconds</h2>
        <p>Added additional date format options in the admin under &quot;Listing Setup &gt; Fields to Use&quot;, to have many options that show the seconds as well.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Add ability to not process {body_html} on home page</h2>
        <p>There is a new switch in the admin at &quot;Site Setup &gt; Browsing Settings&quot;, setting named &quot;{body_html} Contents on home page&quot;.&nbsp; If the setting is set to the option &quot;No Contents/Tag Not Used&quot;, it will improve performance on sites that do not use {body_html} on the home page template.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Improve bid increments admin page</h2>
        <p>Made the bid increments a lot easier to administer in the admin on the page &quot;Listing Setup &gt; Bid Increments&quot;, allowing for much easier editing and fine grain tuning of existing bid increments.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Ability to specify notification user salutation.</h2>
        <p>Added new setting to the page &quot;E-mail Setup &gt; General E-Mail Settings&quot; to allow setting the salutation used in most e-mails.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Usage of &quot;display locations&quot; for certain fields in fields to use settings</h2>
        <p>Changed the fields to use settings to not show checkboxes for &quot;display locations&quot; for the fields that are not able to display in those locations, such as URL links, certain contact data, etc.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Make listing counts more accurate on &quot;newest listings&quot; pages</h2>
        <p>The category block on Newest Listings pages will now show numbers of ads in each category representative of only those listings that fall in the time period being looked at. This resolves an issue where the counts displayed site totals for each category instead of limiting by time.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Google maps apostrophe encoding</h2>
        <p>Fixed a bug in google maps that caused the map pointer to sometimes not be in the right location when an address contained an apostrophe.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fallback language extra page attachment not always used</h2>
        <p>Fixed issue where if there was no extra page template attachment set for the current language, it would not fall back to use the base fallback language attachment, resulting in the body part of the extra page being blank.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Replies to site messages show admin email address</h2>
        <p>Fixed a bug that caused emails send from the Reply To Message form to be defaulting to being from the site-admin email address, instead of the actual sender.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Changes to listing extras via admin panel list wrong changes</h2>
        <p>Fixed issue where when viewing details of &quot;listing change admin&quot; order item, it would say featured level 1 and attention getters were removed, when they were not part of listing in the first place.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Search text for tags and extra questions sometimes not populated correctly</h2>
        <p>Fixed rare issue, where if listing is placed in a category with no category specific questions, and the listing has tags, the search text for the listing does not contain the tags for the listing as it should.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Loading category navigation module in {body_html} template causes error</h2>
        <p>Fixed issue where if certain modules (such as category navigation modules) are placed in {body_html} templates, like classified or auction details templates, it would cause stdClass error.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Full size images fatal error</h2>
        <p>Fixed a fatal error caused when viewing the Full-Size Images page without the Anonymous Listings addon enabled.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Delete pending registrations not always work</h2>
        <p>Fixed issue that prevented some pending registrations from being able to be removed in the admin panel.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Multiple images in RSS listing feed</h2>
        <p>Fixed issue that prevented any images from displaying at all in the RSS feed, when the feed is configured to use any more than a single image.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Using category cache when site filters applied</h2>
        <p>Fixed issue that caused the breadcrumb to be displayed from category cache, displaying the wrong Geographic Navigation Location along with incorrect category counts.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Sub-domain lost when use main &quot;sell&quot; link.</h2>
        <p>Fixed issue where if using sub-domain (geographic navigation), and use certain links such as the &quot;sell&quot; link, the sub-domain would be lost.</p>

        <h2 id="5.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Language specific category questions for newly added languages</h2>
        <p>Fixed issue where language specific category questions could not be edited for languages added after the category question is added.</p>

        <!-- Version 5.1.1  <?php $noteId = 0; ?> -->
        <h1 id="5.1.1">July 30, 2010 - 5.1.1 <a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Manual changes to t_sets.php file now can be preserved</h2>
        <p>Added new &quot;section&quot; to the t_sets.php file, the file responsible for telling the system what template sets to load.&nbsp; If any changes are made inside this section, they will be left intact even if the admin changes what template sets are loaded.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Better placement rotation per category</h2>
        <p>Added setting to be able to rotate listings on a per terminal category basis, instead of rotating them for the entire site.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Curl no longer required for initial remote licensing checks</h2>
        <p>When the license key is first entered and verified using the Geodesic license server, the verification no longer requires CURL for it to work.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category mismatch when renewing auctions</h2>

        <p>Fixed a rare bug where editing the site categories after an auction expired could cause a renewal of that auction to appear in the wrong category.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category counts show when turned off</h2>
        <p>Fixed a bug that caused category counts to appear in category browsing when the admin had them turned off.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Newest listings subcategory URLs broken</h2>

        <p>Fixed an issue where URLs in the subcategory browsing section were not &quot;remembering&quot; their lookback or sort-order settings, which had the side effect of making the SEO addon fail to rewrite them.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> &quot;ending today&quot; search condition</h2>
        <p>Fixed a bug that caused the &quot;listings ending in the next 24 hours&quot; checkbox on the advanced search form to sometimes make the search return no results.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Better Placement rotation sometimes doesn't rotate any listings to the top.</h2>
        <p>Fixed issue when listings have expired, causing &quot;gaps&quot; in better placement, which was causing no rotation to happen when the rotation got to those gaps.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Allow admin to set negative account balance for user</h2>

        <p>The admin can now change a user's account balance to be a negative amount, when editing the user details in the admin panel.</p>

        <h2 id="5.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Listing filters don't send emails</h2>

        <p>Fixed a bug that was causing no emails to be sent when a listing was created that matched a user's filter.</p>

        <!-- Version 5.1.0  <?php $noteId = 0; ?> -->
        <h1 id="5.1.0">July 2, 2010 - 5.1.0 <a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> New Listing Tags feature added (with auto-complete!)</h2>
        <p>Added a new "listing tags" feature, that allows tags to be set for each listing. (A listing tag is basically a keyword that applies to the listing.)
            <br /><br />
            - The user can browse the site by listing tag, similar to browsing by category.
            <br />
            - Auto-complete feature for listing tag field in listing placement and listing edit process.
            <br />
            - Complete control over how listing tags are used, through the fields to use settings in the admin panel.
            <br />
            - Browse by tag uses SEO re-written URL if the SEO addon is installed, enabled, and configured correctly.
            <br />
            - Can search by tag, with auto-complete built into the search.
        </p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Improved category layout when using multiple columns</h2>
        <p>Improved the layout for all category modules and category navigation.&nbsp; All category modules now use the same shared template.&nbsp; The use of the various sub-category &quot;surrounding text&quot; settings have been removed, since now an even better level of customization is possible by editing the module template.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Category count able to reflect current filters applied</h2>
        <p>Updated the category count generation so that the category counts displayed reflect any current filters that are applied (such as when using zip filter or geographic navigation).</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Filmstrip View on Listing Details Page</h2>

        <p>Added new Filmstrip view when displaying images on the listing details page.&nbsp; The filmstrip view can be used by editing the &quot;Image Block Layout&quot; setting on the admin page &quot;Listing Setup &gt; File Upload &amp; Display Settings&quot;.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Better Placement - Listing Rotation</h2>

        <p>Added new feature, to allow &quot;rotating&quot; listings with the better placement extra, so that what listing is at the top of the list rotates daily (or on set time period).</p>


        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Geographic Navigation Addon now included with all editions</h2>
        <p>The Geographic Navigation addon is now included with all editions of the software for free.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Created new Remote API Calls</h2>
        <p>As part of the upcoming JFusion bridge built for the software, there have been various new remote API calls available to use.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Ability to disable registration</h2>

        <p>Added the ability to easily disable user registrations, using new setting under &quot;Registration Setup &gt; General Settings&quot; on the top of the page.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Manual CC gateway - clear CC data button</h2>
        <p>Added a &quot;Clear CC Data&quot; button to the admin, when displaying credit card data entered by the &quot;manual&quot; payment gateway. Clicking it will permanently erase the stored credit card information for that order from the database, so that CC info can be removed once it is no longer needed.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature][AddOn]</span> Bulk Uploader - Revolving Inventory Uploads</h2>

        <p>Added support for Revolving Inventory to the Bulk Uploader. See the following user manual page for more details on how it works and how to use it: https://geodesicsolutions.org/wiki/addons/bulk_uploader/revolving_inventory</p>


        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category used for a renewed copied listing</h2>
        <p>Fixed an issue that happens in a very specific scenario involving renewing a listing that was copied from another listing, where the category would get set incorrectly during the renewal.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> JIT registration username/password length</h2>
        <p>When allowing users to select a username and password in the JIT Registration process, users will no longer be able to select usernames longer than the maximum allowed length, which would ultimately prevent them from logging in.</p>

        <h2 id="5.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix][AddOn]</span> Restored addon 'My Account' images</h2>
        <p>Added a switch to the Site Setup &gt; User Account Settings page to re-enable the My Account Links icons for addons</p>

        <!-- Version 5.0.3  <?php $noteId = 0; ?> -->
        <h1 id="5.0.3">June 1, 2010 - 5.0.3 <a href="#" class="top_link mini_button">Back to Top</a></h1>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="allEdition">[All Editions]</span> Updated client area and license system</h2>
        <p>The client area on the Geodesic Solutions website has been updated in order to provide you with a better experience. Along with that, there have been changes made to the software licensing in 5.0.3. A few of the main changes are listed below:
            <br /><br />
            - In the client area, you will have access to older version releases, starting with version 5.0.3. Versions before 5.0.3 will not be available due to changes in how licensing works.<br /><br />
            - After your software download expires in the client area, you can continue to download the software version that was available before your access expired, you will just not be able to download newer versions. This <strong>starts with 5.0.3</strong>, you will not be able to download versions released before 5.0.3 except for specific cases.<br /><br />
        </p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Make delete country also delete all states attached</h2>
        <p>The admin can now delete a country that has states attached. Caution: doing so will irreversibly delete all states attached to that country.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Ignore folders added by Dreamweaver in design section</h2>
        <p>Made changes so that the Design section in the admin panel ignores all folders created by Dreamweaver when that software is used to edit template files.&nbsp; Note that this fixes the problem where &quot;gibberish&quot; would display at the top of the &quot;Design &gt; Manager &gt; Edit&quot; page when editing a template file, after a template set has been edited using Dreamweaver.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Listing Filter improvements</h2>
        <p>Made some improvements to listing filters:<br /><br />
            - It is now possible to set up filters for the same search term in multiple categories. Before, if you had an existing filter looking for &quot;Widgets&quot; in the Gizmos category, and then created a new filter looking for &quot;Widgets&quot; in the Gadgets category, the Gizmos filter would be deleted. This is no longer the case.
            <br /><br />- The &quot;search terms&quot; of a filter are now truly optional, as their default text label states. Before, a filter with no search terms would appear okay, but never send an email. Now, a filter with no search terms will trigger on any listing placed in its category
            <br /><br />- When searching by search terms, the system will now properly respect (and split on) commas. This brings the functionality into line with what the default text says it actually does.
            <br /><br />- Improved the speed of the filter search algorithm.
        </p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Multi-category bulk uploads</h2>
        <p>Admins may now select multiple categories during a single bulk upload session, by adding a column for the category ID number to the upload data.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Make Storefront Control Panel be translatable</h2>

        <p>Text in the Storefront Control Panel may now be edited and translated through the Admin</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Changes to &quot;Manual Payment&quot; payment gateway</h2>
        <p>The &quot;manual payment&quot; gateway is now of type &quot;cc,&quot; meaning when it is in use, it will prompt the end-user for a credit card number at checkout, and automatically place any attached orders into &quot;pending_admin&quot; mode.<br /><br />The intent is that the administrator can then view the order through the admin panel, where the CC number and expiration date will be shown only if the admin is connected over SSL. The administrator can then run the CC number through some &quot;manual&quot; form of processing, and mark the order as active or canceled/invalid, as required.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> My Account link on transaction approval page</h2>
        <p>On the checkout complete page (called &quot;process queue&quot; if charge for listings is turned off), changed it to not display the my account link if order is being placed anonymously.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category ID not always available in templates</h2>
        <p>Fixed issue that prevents &quot;Mortgage Calculator&quot; and other &quot;gadgets&quot; (parts of the template that rely on the &quot;category ID&quot; in the template) from displaying properly.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Price sort column link doesn't work</h2>
        <p>Fixed a bug that caused browsing tables to not be sortable by price, entry date, or time left.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Paypal Recurring Billing for periods more than 90 days</h2>

        <p>Fixed issue with recurring billing using Paypal when the subscription period is more than 90 days, it would cause an error on the Paypal site due to how Paypal's billing periods work.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Base tag not SSL if SSL disabled for listing process</h2>
        <p>Fixed issue where the &lt;base ...&gt; tag that is automatically inserted by the SEO addon, would only use SSL URL for the tag if SSL was turned on for the listing process.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Reply to in e-mails not used correctly when it is specified.</h2>
        <p>Fixed issue where the reply-to in e-mail was not used correctly, this specifically affects e-mails sent by the contact us addon.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category specific optional fields in advanced search</h2>
        <p>Fixed issue where for &quot;Search By&quot; setting in fields to use for site wide optional fields were not always used for category specific searches.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Added error for invalid categories on some browse pages</h2>
        <p>Attempting to send an invalid category to the URL of the browse newest/featured text/featured pic pages will now properly trigger an error message.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Admin Panel - Field filter editing sometimes encodes the value</h2>

        <p>Fixed issue where if a field filter value was edited, and any non-alpha-numeric characters are entered, those characters would be inadvertently &quot;encoded&quot;.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Badword replacement now case insensitive</h2>
        <p>Made changes so that badword replacement is now case insensitive.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> JIT registration doesn't play nice with security image</h2>

        <p>Fixed a bug where sellers registering via Just-In-Time could sometimes be shown a security image error.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Don't show disabled category specific extras in account info</h2>
        <p>Fixed it so that it does not show pricing for items that are turned off in the category specific pricing, on the &quot;my account info&quot; page.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Template error for anonymous listing when no images in classified</h2>
        <p>If all images are disabled so that the image upload step is skipped, and the listing is being placed anonymously, fixed issue where it would cause a template error on the anonymous password step.&nbsp; The template for the anonymous password step can now be set, and it defaults to use the cart_page.tpl template file.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> HTML Entities in e-mail contents</h2>

        <p>Fixed problem where if any text in certain e-mails sent by the system have HTML entities in them, the e-mail contents shows the entity code rather than the character for that HTML entity.&nbsp; For instance it might display &amp;pound; instead of £.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Group Specific Fields to Use settings don't save</h2>
        <p>Fixed issue where if attempting to use group specific fields to use for a group not previously set to group specific, the settings did not save properly.</p>

        <h2 id="5.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Really large prices with no decimal changed to 2147483647</h2>
        <p>Changed how the software &quot;filters&quot; price entered by user, so that it is not converted to 2,147,483,647 if the price is more than that amount.&nbsp; Note that even with this change, the database structure would still need to be altered to allow saving values that large, this fix only makes it so that the number is not reduced by the filter routine.</p>


        <!-- Version 5.0.2  <?php $noteId = 0; ?> -->
        <h1 id="5.0.2">April 2, 2010 - 5.0.2 <a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> New Paypal Currencies</h2>
        <p>Paypal recently added support for some additional currency types. We have added these currency types to the software, and they may be selected for use with Paypal through the admin. They are: Brazilian Real (BRL), Malasyian Ringgits (MYR), Philippine Pesos (PHP), Taiwan New Dollars (TWD), and Thai Baht (THB).</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Made Design Manager ignore Frontpage Extension folders</h2>
        <p>Made changes so that the Design section in the admin panel ignores all folders created by Frontpage extensions installed on some hosts.&nbsp; Note that this fixes the problem where &quot;gibberish&quot; would display at the top of the &quot;Design &gt; Manager &gt; Edit&quot; page when editing a template file.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Add alternative file-type detection when main detection does not work</h2>
        <p>Uploaded file type detection now works better for a wider variety of servers, for detecting the file type for non-image file uploads (such as video files).</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Easier to change logo image in design</h2>
        <p>On fresh installations, it is now a lot easier to replace the default logo image used at the top of each page:&nbsp; no changes to the CSS are needed if the image dimensions are not the same like were previously required.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Problem when deleting listing duration with multiple languages</h2>
        <p>Fixed a bug that caused Listing Duration choices in the admin to not delete fully when using multiple languages.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Make it ignore c:\fakepath\ for filename when uploading a file in IE8</h2>
        <p>In the admin, at &quot;Design &gt; Manager&quot;, when using the &quot;upload file&quot; feature, created a workaround for IE8 issue that was causing the &quot;upload as&quot; field to have &quot;C:\fakepath\&quot; inserted before the filename when it was not supposed to.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fixed AJAX prompt when multi-admin user does not have permission to perform an action.</h2>
        <p>Fixed issue that affects the Multi-admin Addon, to display a &quot;no permission&quot; message instead of an &quot;Are you sure?&quot; prompt, when they do not have permission to perform that action.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Rare image copy problem when copying listing</h2>
        <p>Fixed rare issue where images would not get copied correctly in very specific scenario involving renewing an expired auction.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Input fields blank when editing a listing</h2>
        <p>Fixed a very rare issue where some of a listing's input fields would be blank when editing a listing that has been recently renewed and was in the system for more than a year.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Quotes in template file names</h2>
        <p>Added checks to prevent single quotes from being used in filenames in the design pages in the admin, as such characters will cause problems with page template attachments.&nbsp; If any files already exist with single quotes in the name, it now ignores such files within the design section in the admin, as if the file were hidden.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Auction prices sometimes can't be entered</h2>
        <p>Fixed a bug that could cause auction price fields to not be editable when they should be.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Template seek order problems in standard mode</h2>
        <p>Fixed problem where if in standard mode, on the admin page &quot;Design &gt; Template Sets&quot; the template seek order column and up/down arrow buttons did not display correctly.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Admin Tools &amp; Settings &gt; View Expired Ads inadvertently removed</h2>
        <p>The admin page &quot;Admin Tools &amp; Settings &gt; View Expired Ads&quot; has been added back to the packages it was removed from in previous 5.0 versions.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Problem removing categories with listings</h2>
        <p>Fixed problem with routine that removes the listings, which affected when attempting to delete a category in the admin panel that has listings to be removed.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Text for All Categories in category dropdown module</h2>
        <p>Added text for the &quot;All Categories&quot; text used on category dropdown module and made it use the number of sub-category count setting properly in the module.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Rare problems detecting mime type during file upload on certain servers</h2>
        <p>On sites that have problems getting stats on files in system temp folder (usually due to mis-configured permissions or exotic configuration for temp folder), the detection of mime-type works better now.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Password sent in notification e-mails when not needed</h2>
        <p>Removed password from the notification e-mails sent during registration process, from both client and admin notification e-mails, as sending passwords through e-mail can be a security risk.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Admin invoice buttons not displayed correctly</h2>
        <p>Fixed issue where the &quot;print&quot; and &quot;close&quot; buttons did not display properly on the invoice view in the admin panel.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Template editor scrolls up when using IE8</h2>
        <p>Applied a work-around that fixes an issue in IE 8, where when editing a template file in the admin at &quot;Design &gt; Manager&quot;, if the mouse hovers over certain areas on the page it would cause the editor to scroll up and loose the current position in the template file.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> W3C compliance issue with default templates</h2>
        <p>We fixed W3C compliance issues in a few places in the default templates.</p>

        <h2 id="5.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fixed RSS feed to work as originally designed</h2>
        <p>Changes made to make the feed work as it was originally designed, which should make the feed run more efficiently.</p>



        <!-- Version 5.0.1  <?php $noteId = 0; ?> -->
        <h1 id="5.0.1">February 22, 2010 - 5.0.1 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> SEO Urls - added limited Cyrillic and Arabic character support</h2>
        <p>Changed how the software removes/converts characters for the SEO addon for titles in the URL, so that it allows Cyrillic (used by Russian, Bulgarian, and other languages) and other non-Latin charsets such as Arabic to be used in the URL. This may not work properly for non UTF-8 charsets, in which case will need to disable the title part of the URL.</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Ability to reset default addon template attachments</h2>
        <p>In the event of deletion and re-uploading of the default template set, addon attachments will be reset by the &quot;re-scan template set&quot; tool when used for the default template set.</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> New Data available in listing details template</h2>
        <p>Added a new tag (a template &quot;Smarty variable&quot;) available to use in the listing details page, the {$seller_id} which is the seller's ID #.<br /><br />Also made available an array, $listing_data_raw on the listing details page, that can be used to access the &quot;raw&quot; listing data to allow for more advanced options available to template designers.</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Addon listing details sometimes not displayed during listing placement</h2>
        <p>Fixed problem where if the mapping fields are set to not be used, then any fields added at the bottom of listing detail collection page by an addon (such as Pedigree Tree) does not get displayed.</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> &quot;charge by duration&quot; dropdown doesn't pull the right data</h2>
        <p>Fixed a bug that caused the &quot;duration&quot; dropdown on the listing placement page to not populate with the correct data when charging by duration.</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> External tag not parsed in text with cache turned on</h2>
        <p>Fixed problem when cache turned on, where the {external ...} tags within language text was not getting replaced when the text is loaded from cache.</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Missing admin edit/delete buttons when browsing categories</h2>
        <p>The edit/delete buttons have returned to category browsing pages (when browsing as an Admin user)</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Badword Filters sometimes remove too much</h2>
        <p>Fixed problem where in certain circumstances, if a badword is found it clears the entire entry instead of just replacing the badword.</p>

        <h2 id="5.0.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Template WYSIWYG Editor - rare duplicated content issue</h2>
        <p>Fixed a problem where in certain circumstances, the parts of the template &quot;outside&quot; the body tags, such as &lt;html&gt;&lt;head&gt; or &lt;/body&gt;&lt;/html&gt; gets duplicated, causing parts of the page to be duplicated.<br /><br />This most notably affects user registrations, if the head section is duplicated, it causes the registration form to be displayed again instead of the success page.&nbsp; It might also affect user login process as well.&nbsp; To fix your site if this has happened, edit the template head.tpl and remove the duplicated content.</p>


        <!-- Version 5.0.0  <?php $noteId = 0; ?> -->
        <h1 id="5.0.0">February 09, 2010 - 5.0.0 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Totally re-designed default templates</h2>
        <p>The default templates have been totally re-designed from the ground up using a div-based layout, giving the software a much more &quot;modern&quot; look and feel. Even the modules and page contents have been re-designed.
            <br /><br /><strong>Existing Sites Take Note:</strong> Your overall templates and CSS changes will stay intact (using the export DB-based design during the update), but all modules and page contents will look different than before to match the new design, and a lot of the old "CSS rules" will no longer have an effect on modules or page contents. Be sure to follow the <strong>full update instructions</strong> in the user manual as it will have steps to ease the transition if you wish to keep your current design. For live sites we highly recommend to <strong>test the update on a test installation</strong> to see how your existing design looks before updating your live site.
        </p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Switch software to use only file-based templates</h2>
        <p>The software now uses only what is known in version 4 as &quot;file based Smarty templates&quot;.&nbsp; These templates can be edited in the admin panel, using a new &quot;Design&quot; section in the admin, or they can be edited directly using FTP to upload changes to the files, whichever you prefer.
            <br /><br />During the update process it will allow &quot;exporting&quot; the previous &quot;DB-based&quot; templates and module/page attachments to be file-based, so that the previous site design is left intact.
            <br /><br /><strong>Export DB-Based Design Note</strong>: While the overall templates and "page/module attachments" will be able to be exported during the update, all modules and page contents within the software have been re-designed, so your site will look different going from 4.1 or before to 5.0. See the release note <a href="#5.0.0.1">Totally re-designed default templates</a> above for more information.
        </p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Replaced all "HTML Logged In/Out" and "PHP" Modules</h2>
        <p>Now that the software uses only file-based Smarty templates, the HTML Logged In/Out modules and the PHP modules are no longer necessary, and have been removed from the software. Any pre-existing module contents are exported during the export DB-based templates routine, so no contents are lost during an update.
            <br /><br /><strong>Logged In/Out Module Alternate:</strong> In the template, you can easily include a sub-template that might be shared between several different templates. On the template editor, use the "insert tag" tool to help with doing this. You can also display something different based on whether the user is logged in or not, for help with that see the user manual.
            <br /><br /><strong>PHP Module Alternate:</strong> In the template, simply use the Smarty {PHP} tags to insert PHP code directly into your template. Note that this means that PHP code can be inserted into any template, in <strong>All Editions</strong>, unlike before where the PHP modules were limited to Enterprise only. What is inserted into the template would look something like:<br /><strong>{php}/* PHP Code Here */{/php}</strong>
        </p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improved Fields to Use system</h2>
        <p>
            Totally re-wrote how fields to use works, to give more control to the admin user, and allow addons to easily use the system. This is actually several new features in one:
            <br />
            <br />- The new settings allow &quot;turning off&quot; ANY field, and that includes <strong>disabling the title and description</strong> which were not previously possible. Although we do not recommend turning off those fields, it is now possible if you need this capability.
            <br />- There are now different &quot;display location&quot; settings for each field, so that you can do something like make the title display on browsing pages, but not on search result pages.&nbsp; This, combined with the category and user group specific abilities, makes for very powerful and flexible options.
            <br />- For <strong>Enterprise</strong> editions, the new system allows setting the fields to use on a per category and/or <strong>per user group</strong> basis.&nbsp; This allows things like disabling a field from showing in a certain category, or showing a field only if the user viewing it is in a specific user group.
            <br />- For <strong>Enterprise</strong> editions, the fields to use settings at the category and user group specific levels have much more power than the &quot;category specific fields&quot; had in previous versions. For instance, you can now change whether each field can be edited or not at the category-specific level.
            <br /><br />In this first release with the new fields to use system, you can specify display locations for only &quot;browsing&quot;, &quot;search by&quot;, and &quot;search results&quot;, but we plan to add/move additional settings to use the new system in future releases (such as what fields are displayed in each module, or what fields are displayed during storefront navigation).
            <br /><br /><strong>Addon Developers Take Note</strong>:&nbsp; Addons can add their own fields that would be administered on the main fields to use page, and can add their own &quot;display locations&quot; as well.&nbsp; For details, see the documentation provided with the updated Example Addon released for version 5.0.
        </p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New payment gateway available: Netcash</h2>
        <p>The Netcash (http://www.vcs.co.za/) payment gateway is now available for use.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improve deleting of sub-categories</h2>
        <p>Improved the functionality of the delete category routine.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Logged in as: Admin</h2>
        <p>Added Logged In As: Username to the header of the admin pages, along with the user ID if logged in with a "multi-admin user".</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Created a &quot;quick find&quot; tab in the admin panel</h2>
        <p>Created a new Quick Find tab in the admin panel, that allows easily searching for different things in the software, all from one location.&nbsp; Previously these quick find tools were on the admin home page.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add &quot;main&quot; category to copy subcategory feature</h2>
        <p>Added the ability to copy a Main Category's Subcategories to be Main Categories themselves.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improvements to text search tool in admin panel</h2>
        <p>Text search in the admin panel has been almost completely re-done.
            <br /><br />- Improved the &quot;search algorithm&quot; to use case-insensitive, exact phrase matches and perform much more accurately.
            <br />- Search results are now separated into different tabs, one for each different type of search results (like page/module text, or addon text, or template contents, etc.).
            <br />- Added search results for addon text, file-based templates, and even template filenames.
            <br />- Added direct search query perma-link, making it easy to &quot;show&quot; another admin user a search: just send him the direct link.
            <br />- It remembers the last search query performed (using a cookie), making it much easier to do multiple find/change operations without having to re-type the search query after every change.
        </p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Ability to specify category ID for the &quot;from&quot; and &quot;to&quot; when copying category questions</h2>
        <p>When copying category questions from one category to another, added the ability to specify the from and to category ID instead of selecting the category from the drop-down.&nbsp; This allows specifying a category that might be &quot;below&quot; the currently displayed category level. This has been added to other category tools as well.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add &quot;search template text&quot; quick-search</h2>
        <p>In the &quot;Quick Find Tools&quot;, added a quick-search for template and text search, which uses the existing functionality in the admin on the page &quot;Design &gt; Text Search&quot;.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add friendly error message if a particular template file isn't found (instead of PHP fatal error)</h2>
        <p>Before, if a template file was not found (for instance, if the admin switched to use &quot;file-based design&quot; in 4.1 or before, without exporting the DB templates to file-based), it would display a &quot;PHP fatal error&quot;.<br /><br />We've made changes so that it now displays an error message stating that a template file could not be found, and lists the file that was not found.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> In listing details collection page, &quot;Adds Cost&quot; optional fields can be displayed below normal price fields.</h2>
        <p>On the listing detail collection page, during place a listing and edit listing processes, any optional site-wide field that is marked as &quot;adds cost&quot; can now be displayed right below the other &quot;price fields&quot; such as the minimum bid and reserve price.<br /><br />We've also made changes so that any optional site-wide field marked as adds cost, now displays in &quot;price format&quot;, that is with the pre-currency and post-currency, anywhere the optional site-wide fields are displayed.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Allow admin text search to search in addon text as well</h2>
        <p>Added ability for the admin text search to search within addon text.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> For addons that use pages, make them auto-assign what page to use</h2>
        <p>When installing or updating an addon that has it's own page or pages, the template assignment can now be automatically created in the &quot;default template set&quot;, removing the possibility of getting &quot;no template attached to page&quot; errors before the admin gets the chance to assign templates for the new pages.
            <br /><br /><strong>Addon developers</strong>:&nbsp; Be sure to read over the &quot;Changes to Note&quot; for 5.0 and reference the updated Example addon for full details on how to take advantage of this new ability. Specifically, the new var <strong>$pages_info</strong> that would be set in your addon's Info class.
        </p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add Oodle feed, extending the existing RSS feed.</h2>
        <p>There is a new Oodle feed, that can be used to send a list of listings on your site to oodle.com (see references below), using the file oodle_feed.php. The feed comes &quot;disabled&quot; by default, the file must be edited in order to &quot;turn on&quot; the feed.&nbsp; The file can be edited, to change settings set within the source code (source code not available to edit in Trial editions at this time) to customize various aspects of what information the feed displays. Note that this feed is meant to be submitted to oodle.com, it will not work to simply &quot;visit&quot; the page.&nbsp; See the &quot;in-line PHP comments&quot; in the file, and the user manual for more information on customizing what info is generated for the Oodle feed.<br /><br />References:<br />About Oodle: http://www.oodle.com/info/about/<br />Oodle feed submission: http://www.oodle.com/info/feed/</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Title Module text for full sized images page</h2>
        <p>Added ability to display the listing's category and title on the full-sized images page for the listing.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New tag, {$seller_username} available on various templates</h2>
        <p>We have added a new tag available for use in templates, {$seller_username} which can be placed on any template or anywhere a normal tag might be placed.&nbsp; On pages for seller's other ads, listing details, full sized images, the tag will be replaced with the seller's username.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added listing title to edit confirmation email</h2>
        <p>The email sent to the seller and admin when a listing is successfully edited now contains the title of the listing in question.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Just-In-Time (JIT) Login/Registration</h2>
        <p>Added a feature to allow a user to place most of a listing before being asked to login. If the user does not have an account on the site, there is an option to have the system automatically create one.<br /><br />This functionality is completely separate from the &quot;anonymous listings&quot; addon (which doesn't require the user to login at all), and can be enabled via a new switch on the Registration Settings admin page</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improvements to LightBox</h2>
        <p>Changed the slideshow transition effects, so that it fades the image in when going to the next or previous image, just like it does when the lightbox is first loaded.&nbsp; Also increased the slideshow duration to 5 seconds per image, to account for the extra transitioning time needed.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Allow removal of line-items on my account home page</h2>
        <p>Blanking out any line-item's label on the my account home page will now cause that item to not appear. For instance, if you edit the text of "Lifetime Classifieds Sold:" to be empty, the numerical portion of that statistic will also not be shown on the My Account page.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Do not display photo title input if allowed chars is 0</h2>
        <p>Improved both the standard image uploader, and the legacy uploader, so that if the &quot;Max Length of Photo Description&quot; setting in the admin is set to 0, it does not display the field to collect that info during file upload.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added a &quot;hide 0 cents&quot; ability when formatting prices to display</h2>
        <p>Added a new setting &quot;hide .00 cents&quot; so that when displaying any price, it hides .00 cents from display, and only displays the cents if there are cents to show.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Hide the add to cart buttons when max allowed listings is 0</h2>
        <p>Changed it so that the &quot;add new classified&quot; button is not displayed if the max number of allowed listings in the classified price plan for the user is set to 0.&nbsp; The add new auction button is also hidden, if the max allowed listings for the auction price plan is set to 0.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Allow addon text to be imported/exported along with normal text.</h2>
        <p>When using the export or import text tool for a language, the tool now exports and imports the addon text as well.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Allow deleting multiple countries simultaneously.</h2>
        <p>The Geographic Setup > Countries page now has a series of checkboxes that can be used to delete a set of countries in a single pass.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Action interrupted - change messages when old and new actions are the same</h2>
        <p>Changed it so that on the &quot;action interrupted&quot; page (for instance, if a user attempts to add a new listing when they already started working on adding something else), if the action being interrupted is the same as the new action, it uses alternate text so that the resume and start over button text is a lot shorter.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> File too large warning BEFORE upload</h2>
        <p>If a user attempts to select a file that is too large (larger than max file size specified in admin panel), it gives an error before uploading instead of after. The user no longer has to wait for the file to upload before finding out it is too large. This applies to the standard file uploader only, not the legacy uploader.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Remove Links to Affiliate Pages</h2>
        <p>Affiliate pages (which are an enterprise-only feature) are being phased out, in favor of the Storefront, which accomplishes much the same functionality, is more up to date, and is now included with all Enterprise-level installs.<br /><br />Existing Affiliate pages will continue to function, but the ability to edit those pages or create new ones has been removed, and those pages may be removed in future releases.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Hide Fields from users not logged in</h2>
        <p>Added new feature that allows the admin to specify fields on the listing display page that will be hidden from view if the visitor is not currently logged in.&nbsp; The hidden fields can be controlled from the admin panel at &quot;Listing Setup &gt; Hide Fields&quot;.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Reversed bid display order</h2>
        <p>Flipped the display order of bids on the Bid History page, so that more recent bids will now display at the top of the page.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Make bidders' names link to feedback pages</h2>
        <p>Added links to bidders' names on the bid history page that point to the bidders' feedback pages.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Storefront: default pages</h2>
        <p>Storefront v1.7.0, including:<br /><br />New storefronts will have some pages and a category pre-populated (controllable via templates/default_pages/).<br /><br />Also added the ability to select a Page for use as the default landing page (so that someone visiting the store goes directly to that page instead of the &quot;main&quot; category)</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> New stock images added for Attention Getters addon</h2>
        <p>We added new stock images for attention getters, which are automatically added upon update or installation of the addon.&nbsp; We also added a new section to the attention getter settings, to make it easy for attention getters to be added from a specific directory all at once.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Cache + search module, category selected problem.</h2>
        <p>On the search box module, the category drop-down usually changes depending on the current category being viewed, but this does not work with cache turned on.&nbsp; Fixed it to not cache the output of the search box module so that the category selected is correct.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Paypal IPN Signal sometimes not validated due to input filtering</h2>
        <p>Fixed problem where the inputs would be filtered, causing the Paypal IPN signal to falsely be marked as invalid.&nbsp; This affects transactions with single or double quotes in the transaction data, which is not typical.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Can't renew user-removed listings</h2>
        <p>Fixed a bug that sometimes prevented listings that had been prematurely ended by their owner from being renewed.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fixed category dropdown</h2>
        <p>Fixed a bug that caused the Category Dropdown module to display wrong and not work for category navigation.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[Auctions &amp; Enterprise]</span> Buy now only auctions show minimum/starting bid</h2>
        <p>The irrelevant values of minimum bid and starting bid will no longer be shown on the listing display page for Buy Now Only auctions.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Non-image file types not previously &quot;compatible&quot; with gallery view</h2>
        <p>The image gallery now works fully with non-image file types, as does other areas like the slideshow.</p>

        <h2 id="5.0.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Authorize.net SIM method repaired</h2>
        <p>The SIM method for the Authorize.net payment gateway will now function correctly, and may be used for transactions where customers' CC data is collected on a secure page hosted by Authorize.net.</p>

        <!-- Version 4.1.3  <?php $noteId = 0; ?> -->
        <h1 id="4.1.3">October 14, 2009 - 4.1.3 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Increased capacity of Sitewide Optional Fields</h2>
        <p>Site-wide Optional Fields can now hold up to 65,535 characters, instead of 256. This change has actually existed in the database for some time, but this release updates the <strong>Admin &gt; Listing Setup &gt; Fields to Use</strong> form to be able to take advantage of the entire capacity.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Show total bid in dutch auction emails</h2>
        <p>Emails sent to the seller and winners of a dutch auction now show both the individual bid and the total. e.g. 2 items @ $3.00 = $6.00</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Updated 3rd party library &quot;Prototype JS Framework&quot;</h2>
        <p>Updated the 3rd party library &quot;Prototype JS Framework&quot; to the latest version, 1.6.1.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Updated 3rd party Paypal SDK library</h2>
        <p>The 3rd party Paypal SDK library needed to be updated to include new version of license chain.&nbsp; This library is used by the Paypal Pro payment gateway, and the updates &quot;fix&quot; problems where all payments were being declined, due to SSL verification problems.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Sometimes not able to delete &quot;old&quot; upgrade/renewal in cart</h2>
        <p>Fixed problem where if renewing or upgrading a listing, and the renew/upgrade period for that listing &quot;passes&quot; so that it is no longer eligible for renewal or upgrade, it would not be able to be removed from the cart.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Error deleting a user's Recurring Billing when user is deleted</h2>
        <p>Fixed problem where deleting a user can sometimes cause a fatal error.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Price plan used during upgrade</h2>
        <p>Fixed problem where when needing to look up a default price plan for a user, it gets the wrong price plan if the order is not yet set for the order item.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Incorrect bid formatting when using European-style numbers</h2>

        <p>Fixed a bug that could sometimes cause buyers' bids to be errantly multiplied by 100 when using European-style number formats</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Link on Extras page in admin panel sometimes wrong</h2>

        <p>Fixed problem where when the URL is changed, on the extras pages in the admin panel, the link to the extras page still uses the old URL.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Dutch auction emails show the wrong bid amount</h2>
        <p>Fixed an issue where dutch auction emails showed the actual amount a user bid, instead of the lowest winning bid</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Browse by invalid category id shows all listings</h2>
        <p>Changed behavior when invalid category ID specified (such as when a category has been removed, but search engine still links to the old category) to show an error instead of showing all the listings on the site.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> My account home: dutch auction feedback</h2>
        <p>Fixed an issue causing links to dutch auction feedback pages (on the My Account page) to be missing or broken</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Dynamic filters (added by addons such as Geographic Navigation) can affect module cache</h2>

        <p>Changed the &quot;filter in effect&quot; detection done by the Cache system to detect filters more accurately, and stop from using cache when such a filter is in effect.&nbsp; One notable thing this will fix, is when the Geographic Navigation addon is used with the cache system turned on.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Optional Fields and Category Questions sometimes double-encoded upon listing edit.</h2>
        <p>Fixed problem where when editing a listing's details, some of the fields would appear with HTML entities (garbled looking) resulting from the fields being double-escaped.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Edit Category Questions sometimes does not save</h2>
        <p>Fixed problem when editing category questions that prevented the edited values from saving properly.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Image Count on listing renewal sometimes forced to be higher than it needs to be.</h2>

        <p>Fixed rare problem where if an image is removed from a listing, then that listing is renewed, it &quot;forces&quot; the image count to be the previously purchased number, not the new &quot;lower&quot; image count.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Javascript error when selecting payment type</h2>
        <p>Fixed problem with JS on the payment choices page that caused a javascript error to occur when a different payment choice was selected.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Entering different license key during update does not reset the key properly.</h2>
        <p>Fixed an issue that prevented the license key from being set to the license key that is entered during the software update, which can provide problems for sites attempting to &quot;upgrade&quot; and run the update at the same time.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Restrict actions on recurring billings that are &quot;pending&quot; and have an order that is not active yet.</h2>

        <p>If the recurring billing were allowed to be canceled while the order were still awaiting payment, once payment went through that could cause issues in the system.&nbsp; Therefor it will now restrict actions so that the recurring billing will not be able to be canceled unless the order it is contained in is already active.&nbsp; Note that the &quot;safe&quot; way to &quot;cancel&quot; a recurring billing in such a situation, would be to cancel the order, not the recurring billing itself.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Secondary search pages missing when searching by country</h2>
        <p>Fixed a bug that prevented search results from showing on pages other than the first when the &quot;search by country&quot; criterion was used.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> E-mail error does not display when editing user info</h2>
        <p>Fixed problem where when editing the user info on the client side, if anything is wrong with the e-mail entered (such as left blank, or if it uses improper formatting), the error message is not displayed.</p>

        <h2 id="4.1.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> E-mail 2 verify field not displayed</h2>
        <p>Fixed problem where during registration, if using the e-mail 2 field, the e-mail verification field for e-mail 2 was not displayed.</p>


        <!-- Version 4.1.2  <?php $noteId = 0; ?> -->
        <h1 id="4.1.2">September 15, 2009 - 4.1.2 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fee-based users shown renew subscription link</h2>

        <p>Fixed a rare bug in auctions-only products where a fee-based user could sometimes be shown a link to Renew Subscription</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Authorize.net - now voids auth-only $1 transactions automatically instead of letting them expire</h2>
        <p>When there are final fees, but no charges at the time the listing is initially placed, and using authorize.net payment gateway, it will create a $1 &quot;authorization only transaction&quot; meaning it is only authorizing the transaction, it never actually finishes the $1 transaction so that is not charged.&nbsp; The transaction is automatically canceled after 30 days.&nbsp; We've made changes so that after the authorization takes place, it immediately voids the $1 transaction instead of letting it sit there for 30 days waiting to be voided on it's own.</p>


        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> User currently unable to cancel recurring billing for Storefront subscription</h2>
        <p>User now has ability to cancel the recurring billing payments for a Storefront subscription.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Compatibility problem with Prototype Framework and CJAX</h2>

        <p>Fixed compatibility problem between CJAX (custom JS library) and Prototype JS Framework (3rd party JS library) that broke lightbox view on pages that utilized CJAX (such as user info page when Paypal seller to buyer is turned on).</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Updates problem from 3.1.9 or before</h2>
        <p>Fixed problem with update script when updating from 3.1.9 or before to 4.1, where the update pages would get stuck in a loop.<br /><br />Also fixed a few import issues with updates that require use of &quot;pre setup&quot; utility to update (updates from before 2.0.10b).</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Missing email body on tell-a-friend form</h2>
        <p>Fixed a bug that caused the tell-a-friend form to not add the message body to the email it sends</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> File upload settings bug</h2>

        <p>Fixed problem where changes to the max lead picture dimensions, or the # of photo columns, would not save.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Not all embedded modules are always found in various pages management admin</h2>
        <p>Fixed problem in logic that prevented it from registering all embedded modules in certain specific scenarios.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Lightbox image sometimes fails when alternate URL used.</h2>

        <p>Fixed it so that the URL does not have to match up with what is set in the admin, the lightbox view will still work fine without causing the &quot;small empty box bug&quot; to happen.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Recurring Billing not canceled for deleted/modified user.</h2>
        <p>Changed it so that when the user's user group is changed in the admin panel, it cancels all recurring billings currently set up for that user.&nbsp; Also made it so that when a user is removed, it cancels and removes all recurring billings for the user.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Max word width filter side-effect</h2>
        <p>Fixed problem where the filters that &quot;broke up&quot; long words were causing long lines to get broken up as well, even though there were spaces in the line already so that it was not a continuous &quot;word&quot; that needed to be broken up.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Added back delete image in legacy image uploader</h2>
        <p>Fixed a problem preventing the &quot;remove image&quot; link from showing in the &quot;legacy&quot; image uploader form, when files have already been uploaded.&nbsp; This does not affect the new image uploader.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Non-biddable Auctions</h2>
        <p>Fixed a couple bugs that made it possible to create auctions that could never be bid on:<br /><br />1) Buy Now Only auctions can no longer be created with a Buy Now price of $0<br /><br />2) If creating an auction using a Start Date and a Duration (e.g. start tomorrow at 5 o' clock and continue for 3 days), the Duration part will now begin from the start time, instead of when the auction is first made live. Id est, time an auction spends in &quot;preview mode&quot; no longer counts against its duration.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Can't edit email/phone data when using category-specific fields-to-use</h2>

        <p>Fixed a bug that could prevent editing a listing's email/phone1/phone2/fax fields if that listing was in a category that was using category-specific fields-to-use</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Admin mime type detection needed updating</h2>
        <p>Updated the &quot;add allowed upload type&quot; mime-type detection in the admin panel so that the mime type detected in the admin panel will match what is detected in the new image uploader.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Nochex gateway broken</h2>
        <p>Fixed a bug that caused the nochex payment gateway to display an error when checking out.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Listing open in pop window, no scroll bars in IE6 or IE7</h2>
        <p>Fixed a problem when using the setting to open listing details in a popup window, the popup window's height is not properly specified.&nbsp; In Internet Explorer 6 and 7 this causes the scrollbars to not be turned on.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Edit Storefront category bug</h2>
        <p>Fixed a problem where in certain rare cases where the price plan ID is set wrong for a listing, when editing that listing the storefront category is not able to be edited.</p>

        <h2 id="4.1.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Apply user info changes to all listings - data formatted incorrectly.</h2>

        <p>Fixed problem when applying user info changes to all listings, that caused the listing data to be formatted incorrectly, so that it would no longer come up in search results and various filters would filter incorrectly.</p>


        <!-- Version 4.1.1  <?php $noteId = 0; ?> -->
        <h1 id="4.1.1">August 3, 2009 - 4.1.1 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Admin Messaging : Improved to queue e-mails</h2>
        <p>Changed the admin e-mail messaging system to queue up e-mails to be sent later, instead of attempting to send them all during the page load.<br /><br />The messages are queued, the sent at a later time by the cron job that sends e-mail messages.</p>

        <h2 id="4.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="premierEdition">[Premier]</span> Recurring Billing edition check error</h2>
        <p>Fixed problem where subscription order item didn't validate the edition before using recurring billing, causing an error.</p>

        <h2 id="4.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Paypal IPN signal - false positive on security checks</h2>
        <p>Fixed problem in Paypal IPN signal security checks that was causing a false positive, making it treat the signal as invalid and thus not updating the status on the order.</p>

        <h2 id="4.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Certain category specific fields to use settings not used.</h2>
        <p>Fixed problem where some of the category specific fields to use settings were not being used properly when browsing categories.</p>

        <h2 id="4.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fixed sorting of browse pages</h2>
        <p>Fixed some issues in the way category browsing tables were sorted.</p>

        <h2 id="4.1.1.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> 3rd Party JS Library Updated (Prototype Framework)</h2>
        <p>Updated the 3rd party library &quot;Prototype&quot; to the latest available version, 1.6.1 RC3, needed to fix compatibility problems in the new Internet Explorer version 8.0.</p>

        <!-- Version 4.1.0  <?php $noteId = 0; ?> -->
        <h1 id="4.1.0">July 24, 2009 - 4.1.0 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>" style="color: red"> <span class="allEdition">[All Editions]</span> Update Process now checks for current Support &amp; Updates service</h2>
        <p>
            <strong>3rd Party Developers take note:</strong> If you are updating one of your clients' installations, verify that they have active Support &amp; Updates service, or the update will not proceed.
            <br /><br />
            <strong>Multiple Installations/Licenses:</strong> Be sure you only attempt to update the installation(s) that have an active Support &amp; Updates service, or the update will not proceed.
            <br /><br />
            <strong>Not Sure?</strong> If you are able to download the update package from the client area, you should be good to go. It will not allow the download if you do not have a current Support &amp; Updates service for that license.<br /><br />
            <a class="broken">More info on Support &amp; Updates service here</a>.
        </p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Ability for admin to log in as another user</h2>
        <p>The admin user can now log into the &quot;client side&quot; for any user.&nbsp; This is how it works:<br /><br />1. Log into admin panel with your normal admin user/pass.&nbsp; For security reasons, you must be currently logged into the admin panel to be able to log in as other users on the client side.<br />2. Go to the &quot;client side&quot; (if currently in the admin panel, click &quot;My Site&quot;).&nbsp; If already logged into the client side, log out.<br />3. You will be able to use any username, and your admin password to log in as that user.&nbsp; Once you are logged in it will be just like you had used the user's normal password to log in.<br /><br />Multi-Admin Addon: We've updated the multi-admin addon to give you the ability to use this new feature for any multi-admin user.&nbsp; For the user's permissions, just check the new &quot;special permission&quot; for &quot;Log in as Any User (client side)&quot;.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Recurring Billing ability built into Cart.</h2>
        <p>There is a new &quot;Recurring Billing&quot; ability built into the Cart system, that leverages different payment gateways' methods for setting up automatically recurring payments for a user.&nbsp; Starting out, only a hand-full of payment gateways have this feature enabled (see list below), but we will be adding the ability to additional payment gateways that have &quot;recurring billing capabilities&quot; in future versions.<br /><br />In 4.1.0, the payment gateways that have recurring billing added:<br />- Paypal<br />- Paypal Pro<br />- Authorize.net<br />- More Coming Soon!<br /><br /><strong>Developer Note:</strong> Any payment gateway that has recurring billing capabilities, can be made to use recurring billing in the Cart, see the new methods in the <em>_template.php</em> payment gateway dealing with recurring billings.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Change auction's bidding start time in admin</h2>
        <p>Added ability to set the &quot;bidding starts&quot; time for auctions in the admin, on the &quot;Restart Listing&quot; page in the admin.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Unlimited sub-regions in Geographic Navigation Addon</h2>
        <p>Added the ability to have virtually unlimited levels of sub-regions in the Geographic Navigation Addon.<br /><br />The regions can be &quot;tied&quot; to listings and to user data, so that the listing region is pre-populated when that user places a new listing.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Created way to allow adding additional &quot;parent types&quot; for an order item</h2>
        <p>In the Addon system, if an addon contains a custom order item that wishes to &quot;adopt&quot; a common child order item, we have added functionality to allow this.
            <br /><br /><strong>Developer Note:</strong>&nbsp; If there are any calls to an order item's getParentTypes() method, that must be changed to use the new geoOrderItem::getParentTypesFor() method. See <em>Changes to Note</em> in the developer section in the user manual.
        </p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Add ability to use &quot;contact seller&quot; on anonymous listings</h2>
        <p>Added the ability to use the &quot;contact seller&quot; feature on listings placed anonymously, as long as the &quot;email&quot; field is filled in during listing placement.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Image Upload page totally re-done</h2>
        <p>We have totally re-done the image upload page during listing placement and listing edit, as noted below:<br /><br />
            - Re-do the &quot;built in&quot; default image upload process, to use <a href="http://swfupload.org/" onclick="window.open(this.href); return false;">SWF Upload</a> to upload the images.<br />- Upload only 1 image at a time, but using SWF Upload's capabilities. Since it only uploads 1 image at a time, on sites that allow a large number of file uploads, it lessens the &quot;load&quot; on the server as it only has to process 1 image at a time instead of 5 or 10 or however many.<br />- Upload progress bar and amount uploaded indicator.<br />- Allow changes to images after they have been uploaded, without having to delete or re-upload images:<br />&nbsp; -&nbsp; Change display order of images.&nbsp; Uses a &quot;drag and drop&quot; interface to allow moving things around much easier.<br />&nbsp; -&nbsp; &quot;Swap out&quot; the lead picture, using the same &quot;change display order&quot; drag and drop interface.<br />&nbsp; - Change the image description &quot;in place&quot;<br />- Much better &quot;error detection/handling&quot;.&nbsp; No more &quot;white screens&quot;, instead the user is given a &quot;meaningful&quot; error message which is a lot better than a &quot;fatal error&quot; displayed on the page or a totally white page displayed (for instance, if it went over the memory limit, or the server times out).&nbsp; <br />- The old &quot;legacy&quot; image uploader is still used for computers that are not able to run the new image upload, for computers with JavaScript turned off or blocked, or those that do not have flash player.<br />- Settings for changing how it works can be found in the admin at <em>Listing Setup &gt; File Upload &amp; Display Settings</em>.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Lightbox-like display to replace image popup</h2>
        <p>We have replaced the normal &quot;image popup&quot; with a &quot;lightbox&quot; like slideshow view which is much more user friendly, not to mention easier on the eyes ;).&nbsp; The display resembles what is known as &quot;Lightbox&quot; where the full image is displayed &quot;on top&quot; of the current page instead of in a new window.
            <br /><br /><strong>CSS Changes Needed:</strong> If using a custom overall CSS file, for the new Lightbox view to display correctly, be sure to copy/paste the new CSS at the bottom of the default <strong>geostyle.css</strong> file. The new CSS starts with <strong>/* Light up box slideshow styles */</strong>.
            <br /><br /><strong>Template Designers &amp; Developers take note:</strong>&nbsp; The lightbox view can be used for any link, just give the &lt;a&gt; tag a CSS class of &quot;lightUpLink&quot; for a normal HTML based page, or &quot;lightUpImg&quot; for links directly to image files.&nbsp; We will also be using this functionality to go beyond just image slideshow display in the future.&nbsp; For instance, it is already used for the new &quot;ok/cancel&quot; warning when a user clicks to cancel the new subscription recurring billing.
        </p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> My Account Home Page admin controls</h2>
        <p>A new admin page has been created under <em>Site Setup &gt; User Account Settings</em> to hold settings related to the My Account section of the front-end. Most of these settings are new, but two have been moved from Browsing Settings to this new page. The &quot;My Account Home Type&quot; and &quot;Post-Login Landing Page&quot; settings now reside under <em>User Account Settings</em>.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Search Active Listings</h2>
        <p>Added ability for users to search through their current active listings through a new search box on the active listings page.&nbsp; It will search by listing ID#, Listing Title, and Listing Description.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Use SSL for login or user management</h2>
        <p>Added ability to use &quot;SSL&quot; connection for the login page, and for any user management pages.<br /><br />The new settings to turn on/off using SSL in those areas, is in the admin at <em>Site Setup &gt; General Settings</em>.<br /><br />Note that to enable SSL for login page, it requires editing the logged in/out HTML module for the quick login box, to make the form submit to your site's SSL URL.&nbsp; If they log in from the main login page, that will automatically submit to the SSL URL.&nbsp; See the user manual regarding the new setting, for more information.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improved price plan checks when renewing listing</h2>
        <p>Improved price plan checks when renewing a listing, so that it checks whether the price plan attached to the listing is still a valid price plan for the user.&nbsp; If it is not, it will make the price plan used for the renewal default to the default price plan for the user.&nbsp; Note that it does take into account price plans that are &quot;attached&quot; to the user's user group (selectable price plans).</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Check for new software version in admin</h2>
        <p>On the admin home page, it now displays the latest version of the software currently available, and if there is a new version, links to the update instructions.<br /><br />It also displays additional license information, and info about when Support &amp; Updates service expires. Previously many Geo license holders were not aware when the Support &amp; Updates service would expire, this allows them to renew the service for another year, so that they can continue to download software updates.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Admin Landing Page</h2>
        <p>Added ability to make it so that after logging into the admin panel, you can set whether to make it display the &quot;Admin Home&quot; page or the &quot;Last page viewed&quot;.&nbsp; Note that the current behavior is to show the last page viewed.<br /><br />You can set what the admin landing page is, on the Admin Home page.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Admin Quick Find tools</h2>
        <p>On the admin home page, added several search boxes to quickly find different things all from one convenient place, most notable is the ability to type in a listing ID# to view a particular listing in the admin panel.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add (!IMAGE_BLOCK_LARGE!) tag for listing details page</h2>
        <p>Added mentioned tag to the listing details page.&nbsp; There is also another tag <em>(!IMAGE_BLOCK_LARGE_LINK!)</em> that can be placed at the top of the template, to display a link sorta like &quot;See all ## Photos&quot; that when clicked, makes it scroll down to wherever you place the large image block tag.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Smarter listing preview window</h2>
        <p>Before the listing preview button added an inline &quot;onclick&quot; to the &lt;body&gt; tag to disable clicking on links in the preview window.&nbsp; We've improved it to instead add some javascript to the head of the page that does the same, without replacing the &lt;body&gt; tag.&nbsp; The improved functionality no longer creates a JS &quot;alert&quot; box when clicking, it just stops clicking from functioning in the preview window.<br /><br />It also changes the cursor to a crosshair instead of pointer on the links since a pointer indicates you can click on something.&nbsp; The new functionality is done in a system Smarty template, so can be more easily customized if desired.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added a &quot;clear all&quot; link to admin message archive</h2>
        <p>Added a link to make it easier to clear all old messages from the admin's message history</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Paypal multi-language support</h2>
        <p>Added the ability to specify a &quot;language code&quot; that can tell Paypal to show their page in a different language.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add ability to specify PayPal Pro API Signature instead of Cert File</h2>
        <p>The Paypal Website Payments API has the ability to use either an API certificate file, or an API &quot;signature&quot;.&nbsp; We have added the ability to use either one, instead of only being able to use the API certificate file.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add more date formats</h2>
        <p>Added 20 more (mostly European-style) choices for date formats to the <em>Listing Setup &gt; Fields to Use</em> page in the admin.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Reduce spam vulnerability</h2>
        <p>Closed a vulnerability that could allow a malicious user to arbitrarily send SPAM messages to any other user.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New RSS Feed</h2>
        <p>There is a new RSS feed, using the file <em>rss_listings.php</em>. The feed works "as-is" without any changes, and will display the newest 10 listings that have been placed with using just the default settings in the file. The file can be edited, to change settings set within the source code (source code not available to edit in Trial editions at this time) to customize various aspects of what information the feed displays. The default templates for the home page, and basic page 1 now "link" to the RSS feed for fresh installations of 4.1.0. See the "in-line PHP comments" in the file, and the user manual for more information on customizing what info is displayed by the RSS feed.
            <br /><br />This is a replacement of the old "featured listings RSS module", which was not fully functional "out of the box" like this new RSS feed is.
        </p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="classAucProduct">[ClassAuctions]</span> Can edit listings into invalid categories</h2>
        <p>Fixed a bug that could allow auctions to be placed into classifieds-only categories (or classifieds into auctions-only categories) during the Listing Edit process.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Allow/block e-mail domain registration: problem with certain combinations of wildcards</h2>
        <p>Fixed problem where if there was a wildcard &quot;*&quot; in the allowed or blocked domain name, such as something like &quot;*.example.com&quot;, it would falsely match any domain name with the same ending, in other words in the example it would be treated as if it was &quot;*.com&quot;.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> Edit Buy Now Prices</h2>
        <p>Fixed a bug that prevented editing the Buy Now price of auctions</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Bulk uploader crash on certain errors</h2>
        <p>Fixed rare crashing problems in the Bulk Uploader.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> My Account page - IE box headers</h2>
        <p>Fixed display of My Account box headers in Internet Explorer.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Listing Filters - all categories with &quot;subcategory only&quot; off bug</h2>
        <p>Fixed problem where, if user creates an ad filter using &quot;all categories&quot; and did not check the &quot;subcategories also&quot;, it would not work as intended.&nbsp; Changed it so that if &quot;all categories&quot; is chosen, then all subcategories is always implied.&nbsp; This change will work retro-actively on filters already created, so that any new listings placed that match will generate the e-mail to the user.</p>

        <h2 id="4.1.0.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Moneris payment gateway bug</h2>
        <p>Fixed a problem where if the payment was made successfully, it would sometimes not display the success page correctly, instead showing result information.</p>

        <!-- Version 4.0.9  <?php $noteId = 0; ?> -->
        <h1 id="4.0.9">June 15, 2009 - 4.0.9 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="bugFixType">[Security]</span> Security Vulnerability found</h2>
        <p>A security vulnerability has been found and fixed during an internal code review. This vulnerability is considered a "high risk" for sites that are affected by it. It only affects sites with certain features turned on in combination on version 3.1.5 through 4.0.8. To our knowledge, it is not known "in the wild".
            <br /><br />
            We recommend if you have any of the affected versions, to update to 4.0.9 immediately. If you are not able to update to 4.0.9, or want further details on what specifically it affects, contact Support for options on patching your existing version.
        </p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Account balance history doesn't show admin adjustments</h2>
        <p>Fixed problem where transaction data was not set properly when the admin manually adjusts a user's account balance, that caused the adjustment to not display in the user's account balance history as it should.&nbsp; Such adjustments will now display properly in the user's account balance history.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Paypal Pro gateway now sends payer's e-mail</h2>
        <p>Fixed it so that paypal pro payments now send payer's e-mail address if the e-mail is supplied on the billing info page.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Storefront : re-written Storefront category URL bug</h2>

        <p>Fixed problem with the Storefront URLs where the category title used in URL was always &quot;-&quot; instead of the title.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Subscription price wrong on checkout page</h2>
        <p>Fixed problem that caused the price to always display as $0 on the checkout page (payment details page) for any subscription items.&nbsp; The total calculated still used the correct price for the subscription however, so the user was charged correctly, just that one line item displayed as $0.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Order Complete e-mail text added</h2>

        <p>Made text for &quot;[ACTIVATED]&quot;, &quot;[PENDING APPROVAL]&quot;, and &quot;Tax:&quot; in the order complete e-mail that was previously set in the code, be able to be changed in the admin as text for the order complete e-mail page.&nbsp; Also changed the text used for each item's title use same as it would be on the main cart page, so that text can be edited as well.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Rare Cache problem with displaying mainbody</h2>

        <p>Fixed problem where in certain rare cases, the mainbody contents would not display with the cache turned on.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Listing un-locked allowing multiple listing edits at once</h2>
        <p>Fixed a problem where in a certain rare scenario, the lock on the listing is lifted before it should be.&nbsp; Without the lock, listing data could become corrupted (the most notable is multiple images uploaded to the same &quot;image slot&quot;).</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Rare Fatal error when parent item removed from DB</h2>

        <p>Fixed rare problem where if a main item (such as a classified) is somehow removed from the DB but the &quot;child&quot; items (such as bolding or images) are left, it would produce a PHP fatal error.&nbsp; Now instead, such &quot;orphaned&quot; child items as we call the poor things, are left in the system but effectively marked as &quot;invalid&quot; so they are not used.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Subcategory text for non-primary languages doesn't copy</h2>

        <p>fixed a bug that prevented copying subcategory data for languages other than the base language.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Seller's ads time left</h2>
        <p>Fixed it to display the time left properly on the seller's other ads page, before it was displaying &quot;-&quot; for all entries.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> URL Link 1 &amp; 2 can't be used together</h2>

        <p>Fixed a bug that would prevent either &quot;URL Link 1&quot; or &quot;URL Link 2&quot; from appearing on the listing display page if both were used in a given listing.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Edit user info optional field errors not displaying</h2>
        <p>Fixed a problem where if a registration optional field is required, but left blank when a user edits the user info, it does not display the error in certain cases.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Order status not saved after checkout on certain payment gateways</h2>

        <p>Fixed a problem where on certain payment gateways, the cart session was expired before the order status was saved to the database.&nbsp; This resulted in the order appearing to &quot;disappear&quot; from the system since the data was not updated correctly.<br /><br />We have fixed it so that the above scenario is no longer possible, and have included a script in the update that will &quot;fix&quot; any existing orders that have been affected.&nbsp; Because of this, after updating there may be pending orders displayed that were not visible before the update.<br /><br />This affects orders processed with the Check, Money order, Cash, or Manual Payment gateways, but note that not all sites or orders are affected as the above scenario only happens in certain cases.</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Improve bulk uploader session handling</h2>

        <p>Bulk Uploader sessions will now properly clear when the bulk upload completes, so that returning to the bulk uploader later will show page 1 instead of page 4</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> bulk uploader: MS display bugs</h2>

        <p>Fixed some bugs that could prevent the Bulk Uploader from displaying properly on a Windows-based server, or when viewing in Internet Explorer 8</p>

        <h2 id="4.0.9.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Change Security Image Addon to use addon pages to display security image</h2>
        <p>Changed how the security image is displayed, to use the new Addon Pages feature built into Geo 4.0 to display the security image instead of using the &quot;stand alone&quot; security_image.php file.&nbsp; This change should fix the license errors that occur on certain sites as a result of the security image addon.</p>


        <!-- Version 4.0.8  <?php $noteId = 0; ?> -->
        <h1 id="4.0.8">May 22, 2009 - 4.0.8 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.8.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> <span class="AucProduct">[Auctions &amp; ClassAuctions]</span> Seller Buyer gateway &quot;reserve not met&quot; bug</h2>
        <p>Fixed problem where in certain circumstances, once the listing closes it might allow the highest bidder to use the &quot;pay now&quot; button even if reserve was not met.</p>

        <h2 id="4.0.8.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Search query improvements</h2>
        <p>Made improvements to the search database query to remove redundancy, and fixed problem where searching whole word only did not work in certain scenarios.</p>

        <h2 id="4.0.8.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Cache on affiliate pages</h2>
        <p>Fixed problem where affiliate pages that have been cached would use site-wide template instead of affiliate template.</p>

        <h2 id="4.0.8.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Updated 3rd party WYSIWYG library</h2>
        <p>Updated the 3rd party WYSIWYG library, TinyMCE to the latest version available.</p>

        <h2 id="4.0.8.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Discount codes don't &quot;track&quot; listings</h2>
        <p>The Discount Codes admin tool will once again report how many listings were placed using a given discount code.</p>

        <!-- Version 4.0.7  <?php $noteId = 0; ?> -->
        <h1 id="4.0.7">May 11, 2009 - 4.0.7 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.7.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Security Image conflicts with Addon License Checks</h2>
        <p>Fixed a problem with the new Addon licensing checks, that caused the license checks to fail every time the Security Image was displayed, causing all the addons to be automatically disabled.<br /><br />Also changed how the license checks work, so that if a license check fails for an addon, the addon is only disabled for the rest of the page load, but is not automatically disabled in the database.</p>

        <h2 id="4.0.7.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Problems with Addon License Checks</h2>
        <p>Fixed a problem that prevented the addon license validation from working properly on certain license types.</p>

        <h2 id="4.0.7.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Default currency used in auction e-mail notifications</h2>
        <p>Fixed it to use the currency type selected for the auction instead of the site-wide currency, when displaying bid prices inside of auction notification e-mails.</p>

        <h2 id="4.0.7.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Made debug messages smarter</h2>
        <p>Fixed it so that it better detects when things are already loaded properly, so that debug messages don't &quot;escape&quot; the custom error handler to fill up error logs.</p>

        <h2 id="4.0.7.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Billing Info : Sub Region (state) does not populate properly with multiple regions</h2>
        <p>Fixed problem where if using multiple regions (countries), on the billing info page the sub-regions (states) drop down did not &quot;auto populate&quot; properly, resulting in an empty drop-down.</p>


        <!-- Version 4.0.6  <?php $noteId = 0; ?> -->
        <h1 id="4.0.6">May 7, 2009 - 4.0.6 &nbsp;<a href="#" class="mini_button">^Back to Top</a></h1>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Changes to Security Image HTML</h2>

        <p>Developers take note: the HTML for the security image addon has been moved from &quot;addon text&quot; into Smarty templates (which may be found at <em>addons/security_image/templates/</em>). The old text is still available through the admin, in case you need to move over any customizations.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Storefront: Add preview link to Storefront User Control Panel</h2>
        <p>Added a Preview link to the Storefront control panel, so that a Storefront owner can more easily view changes made to settings.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Addon license validation + new functionality for addon developers</h2>

        <p>In order to allow 14 day trial versions to be possible, we have added software license checks into each of the addons.&nbsp; Please be aware of this when updating, and if there are any issues with an addon please contact us as adjustments may be required for certain manually added/edited orders.<br /><br />To make this possible, we have added new functionality for the Addon system for Commercial Addon Developers, for a place to do checks and possibly block an addon from being enabled for a single page load, useful for checking software license.&nbsp; Addon developers check out the new version of the Example Addon, specifically the documentation for the new (optional) method enableCheck() in the info.php file.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Geographic Navigation Addon column changed</h2>
        <p>Fixed problem with the Geographic Navigation Addon where it did not get any of the regions or sub-regions properly, as the column name was changed when the addon was re-named to Geographic Navigation Addon.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Export Template Set - Export of Storefront templates</h2>
        <p>Fixed problem where when exporting templates, it would not process all the &quot;special storefront tags&quot; in storefront templates if there was no (!STOREFRONT_MANAGER!) tag found in the template.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Signs/flyers incompatible with File-Based Design</h2>
        <p>Signs and Flyers created with the Signs/Flyers addon will now display correctly when using file-based design.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Changing SEO URL settings in IE</h2>
        <p>Fixed problem in an AJAX library that was causing an error in IE when the admin user tries to change the &quot;custom text&quot; on one of the parts of an SEO URL.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Storefront - Fixed &quot;Search Engine Friendly&quot; URLs - now integrates with SEO Addon</h2>
        <p>Fixed SEF URL in Storefront to work with new format for storefront URLs.&nbsp; It now integrates with the SEO Addon, so that addon needs to be installed and enabled in order to turn on SEF URL's for Storefronts.&nbsp; The advantage of this is that you can configure the Storefront URLs just like any of the other SEO URLs.<br /><br />To start using SEF URLs: Turn the setting on for Storefront, then re-generate the htaccess file for the SEO addon and update your .htaccess file from the new generated content.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Registration Code page and Cache</h2>
        <p>This affects sites that use registration codes, and have the Cache turned on.&nbsp; Fixed a problem where the &quot;verifying registration code&quot; page would not always auto-submit to the next step, because in some cases parts of the page were not properly cached.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Missing optional field headers</h2>

        <p>Headers for Optional Fields 11-20 have returned to Featured Ad Modules 1-5.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> My account page fatal error</h2>
        <p>Fixed a fatal error that could occur in the My Account Home Page if the Account Balance gateway was not installed.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Unapproved Registrations count wrong in admin home</h2>

        <p>Fixed it to display proper count on un-approved registrations on admin home.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Listing collect details page error</h2>
        <p>Fixed syntax problem in template file that causes the page to show &quot;white screen&quot; or &quot;fatal error&quot; when placing a new listing, on the listing details collection page.&nbsp; This problem appears to have only affected certain versions of PHP or certain server PHP configurations.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Can't un-ban banned IP addresses</h2>
        <p>Fixed a bug that prevented banned IP addresses from being deleted (&quot;unbanned&quot;).</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Edit listing &amp; Image Uploads Allowed</h2>

        <p>Fixed problem where in certain circumstances, it did not allow uploading all the allowed images possible when editing a listing that previously had images removed from it.</p>

        <h2 id="4.0.6.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Registration Successful page login status</h2>
        <p>Fixed it so that on the registration successful page, when the user should be automatically logged in, they are already logged in on the success page.&nbsp; Before it had a problem where it was not logged in on the success page, but when you browsed to another page you would be logged in after that.</p>




        <!-- Version 4.0.5  <?php $noteId = 0; ?> -->
        <h1 id="4.0.5">April 8, 2009 - 4.0.5 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="mixedEdition">[Premier &amp; Basic]</span> <span class="addonEdition">[AddOn]</span> Security Image now included with Premier and Basic Editions</h2>

        <p>The Security Image addon is now included in Premier and Basic editions 4.0 packages free of charge, as is already the case for Enterprise editions. To get the included Security Image Addon, just update to 4.0.5 and it will be included with the base update package.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Common version checking for addons</h2>

        <p><strong>Addon developers:</strong> now there is an easy way to require a minimum version of the base software for use with your addons. If, for example, your addon relies on functionality not present in the base software until version 4.1.3, simply add the following to the info file: var $core_version_minimum = '4.1.3';<br /><br />Anyone trying to install, enable, or upgrade that addon on a pre-4.1.3 installation will be shown an error and not allowed to proceed. See the example addon for an example.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="bugFixType">[Security]</span> Security Vulnerability found</h2>

        <p>A security vulnerability has been found and fixed during an internal code review. This security vulnerability affects all GeoAuctions, GeoClassifieds, and GeoClassAuctions products using Enterprise, Premier, or Basic editions starting with version 4.0.0 through 4.0.4.
            <br /><br />
            We recommend if you have any of the affected versions, to update to 4.0.5 immediately. If you are not able to update to 4.0.5, or want further details on what specifically it affects, contact Support for options on patching your existing version.
        </p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> User group restriction for Create Listing fixed</h2>
        <p>Fixed it so that the buttons to create a new auction or classified does not display in the cart if the "Create Listing" restriction is turned off for the user group.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category specific fields to use, the &quot;description below title&quot; setting</h2>
        <p>Added ability in admin, category specific fields to use, to set the setting for whether description is displayed below the title or gets it's own column.<br /><br />The setting was already in the database and being used in the files, it was just not able to be set in the admin panel on a per category basis.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> CVV2 Code in Paypal Pro</h2>

        <p>&quot;Turned On&quot; feature to require CVV2 code for Paypal Pro payments.<br /><br />Current sites may need to &quot;configure&quot; and &quot;save&quot; the Paypal Pro settings in order to turn on the &quot;use CVV2 code&quot; feature for that gateway.&nbsp; No Paypal Pro settings need to be changed (as long as they are already set correctly), just the act of saving the settings will turn on using CVV2 code for Paypal Pro.&nbsp; This is done in the admin on the page &quot;Payments &gt; Payment Gateways&quot;</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Billing info on invoice same as when checking out</h2>

        <p>In previous 4.0 versions, the client billing info displayed on an invoice was the info for the user.&nbsp; We have changed it so that if available, it will display the info entered during checkout instead.<br /><br /><strong>Note:</strong> The billing info entered for orders prior to updating to 4.0.5 will not be available.&nbsp; If viewing an invoice for an order placed before a site was updated to 4.0.5, it will still display the billing info attached to the user, not the info entered when they checked out.&nbsp; To be clear, before 4.0.5 the billing info was used when processing the payment, but then was not properly &quot;saved&quot; after that point so it is not able to be displayed (before now) in the invoice.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Field Filters cleared when edit user info</h2>

        <p>Fixed it to not clear the field filters when editing the user details, which could sometimes happen depending on what field filter levels were &quot;attached&quot; to what fields.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Field Filters not set for new listings</h2>
        <p>Fixed the field filters feature to work properly with the new way listings are entered in Geo 4.0.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category browsing options module missing some options</h2>

        <p>Some missing options have returned to the Category Browsing Options module.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> IDev Integration improvements</h2>
        <p>We've made improvements to the IDev Affiliate integration so that it works more accurately with a wider variety of server configurations.</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> New store subscribers can't customize their stores</h2>

        <p>Restored the ability of newly-subscribed storefront owners to customize their stores (upload logo, welcome note, etc)</p>

        <h2 id="4.0.5.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> New Version of WYSIWYG Library</h2>
        <p>Updated the 3rd party WYSIWYG editor library, tinyMCE to the latest version.&nbsp; The new version is reported to fix certain problems with displaying the WYSIWYG editor in newer versions of Internet Explorer.</p>

        <!-- Version 4.0.4  <?php $noteId = 0; ?> -->
        <!--  Oh NOOs! version could not be found, 4.0.4 error!  ................ April Fools!
 		We were going to make the 4.0.4 installation download link point to a 404 error page, but bosses said no to that... -->
        <h1 id="4.0.4" title="NOT a funny April Fools joke, we promise!  Not even the non-funny kind either...  You should have seen what we had planned though!">April 1, 2009 - 4.0.4 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Ability to specify 404 status on expired listings</h2>

        <p>Added ability for the software to set the &quot;status&quot; of the page to &quot;404&quot; when a user (or more importantly, a search engine spider) visits a listing that has expired.&nbsp; The new feature is turned on in admin, at &quot;Site Setup &gt; General Settings&quot;.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Add ability to switch back and forth from SSL connection or non-SSL connection</h2>

        <p>Added the ability to switch to use SSL or non-SSL connection, based on the current page being viewed, and the SSL settings in the admin.&nbsp; This makes it so that it will not get &quot;stuck&quot; in SSL mode after someone has gone to a page that uses SSL.&nbsp; Also added the ability for addons to specify which &quot;pages&quot; should use an SSL connection.<br /><br />See the new setting &quot;Force SSL URL&quot; in the admin on the page &quot;Site Setup &gt; General Settings&quot;.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> Make price fields on search page work for Auctions</h2>

        <p>The price range fields on the advanced search page may now be used to search Auctions as well as Classifieds</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Storefront: new Control Panel</h2>
        <p>The floating &quot;Storefront Manager&quot; window has been replaced by a new Storefront Control Panel, accessible through the My Account Home page.<br /><br />If you are using file-based templates or the old-style User Management Home Page, there may be additional steps required after upgrading the storefront addon to ensure full operation of the new control panel. If you need to take any action in these regards, the addon upgrade process will provide you with more information.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Storefront: admin-specified image size on List Stores page</h2>

        <p>Storefront: new admin controls for maximum image size on the List Stores page</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Storefront: allow site admin to change store owner's subscription expiration date</h2>
        <p>Storefront: added a control in the Admin to allow manipulating the expiration date of a user's storefront subscription</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fatal error using Paypal micropayments</h2>
        <p>Fixed a fatal error that occurred when using Paypal micropayments.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Country uses full country name instead of abbreviation for CC info</h2>

        <p>Changed the payment details page, to use the &quot;country abbreviation&quot; instead of the &quot;country name&quot; when submitting data to payment processor, as some payment gateways require the country code NOT the full name (such as Paypal Pro).</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Narrow selection button in manage items broken</h2>
        <p>The 3rd party &quot;Smarty Library&quot; has been updated as of Geo 4.0.2.&nbsp; Because of changes in the new version of Smarty, it &quot;broke&quot; the how the narrow selection button worked in the admin template, which broke the button in the admin at &quot;Orders &gt; Manage Items&quot;.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Site-wide setting &quot;auto title from optional fields&quot; problem</h2>

        <p>Fixed problem when using the &quot;Create title from site wide optional fields&quot;, where it still allowed the user to enter a title on the listing details page.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Ability for Admin user to view site when the site is off</h2>
        <p>Fixed it so that the admin user can view the &quot;front side&quot; when the site is turned off, by logging into the front side as the admin user prior to turning the site off.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Rare &quot;edit details check&quot; problem that prevents editing certain listings after changes to &quot;fields to use&quot; settings.</h2>

        <p>Fixed rare problem, where if admin changed &quot;fields to use&quot; so that a certain field is &quot;required&quot; and &quot;not editable&quot; it might stop the ability to edit listings that were placed before the &quot;required&quot; and &quot;not editable&quot; changes were made.&nbsp; (This is not a common scenario).<br /><br />It has been changed so that if a field is &quot;required&quot;, and &quot;not editable&quot;, and the user edits a listing where the field is blank since the field was previously required, in the detail checking it behaves as if the field is &quot;not required&quot; in the mentioned circumstances.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Price increments form does not submit for classified price plans</h2>

        <p>Fixed &quot;Price Increments&quot; page in the admin so that the form will submit properly.&nbsp; This applies to when editing classified price plans only.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> URL for CSS files inside template sets cause warning on SSL pages</h2>
        <p>Fixed problem caused because the URL generated for template set external files (such as CSS files) used absolute URL: it didn't take into account SSL mode.&nbsp; Changed it to always use relative URL.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> File Based Design fixes</h2>

        <p>Fixed various problems with the BETA feature to use file-based templates for overall design.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Renew/Upgrade buttons for listings using old price plan</h2>
        <p>Fixed problem where if a listing is attached to a price plan that no longer exists (because of admin deletion of price plan), it would not show the upgrade button for that listing even if it was eligible for upgrade.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category Count not updated on admin extend/upgrade/renew listing</h2>
        <p>Fixed problem where the category count was not updated, when the admin user extended, renewed, or upgraded a listing from the admin panel, and it resulted in a listing becoming &quot;live&quot; again.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Made &quot;Paypal ID not set&quot; link &quot;pop&quot;</h2>

        <p>When placing a new auction, if the user does not have their Paypal ID set in their account info page, it displays a link that lets them set it.&nbsp; We changed it so that when the user clicks on that link, it &quot;pops&quot; to a new window, so that the information they already entered on the listing details page is not lost.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> SEO breaks zip filter settings</h2>
        <p>If a zip filter is set while in a category browsing page with the SEO addon in use, it will now properly remain set when changing to another category</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> File Based Templates and addon tags with capitalized addon names</h2>

        <p>Fixed problem with the Export DB-Based Templates to Files-Based tool, where it made any addon tags all lowercase, breaking addon tags that need to have uppercase characters in them.<br /><br />This only affects sites using the (BETA) file-based design, and are using an addon that has a capital letter or letters in the addon's name, author tag, or tag name.&nbsp; Any such sites will need to update, then re-export the templates to fix.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Seller to Buyer payment gateways not available in Subscription price plans</h2>
        <p>Fixed it so that in the admin, for subscription based auction price plans, it will now allow turning on the ability to use seller-buyer payment gateways.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Images break if single-quote used in description</h2>

        <p>Fixed a bug where invalid input in the &quot;image title&quot; field could cause the image gallery script to not function</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Still displays extras page when not charging for listings, and have all extras turned off</h2>
        <p>Fixed it so that if &quot;charge for listings&quot; is turned off, and they have no extras enabled, it does not show the &quot;extras&quot; step in the listing process.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Order Status not saved with certain gateways</h2>

        <p>Fixed it to save the order details properly before going to an external payment site for certain payment gateways.&nbsp; This affects sites using the following gateways:<br /><br />- authorize.net SIM method<br />- internetsecure<br />- nochex<br />- paymentexpress<br />- 2CO<br />- World Pay</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Rare auction renewal length problem</h2>
        <p>Fixed a problem where if renewing an auction that has been renewed once before, and it is renewed for exactly the same amount of time as before, the renewal length is not saved properly so the duration of the listing is just a few seconds.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Title text not saved for non-image uploads</h2>

        <p>fixed a bug that caused the file description text to not save when uploading a non-image file</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fixed problems with new addon abilities.</h2>
        <p>Fixed a problem with how &quot;addon payment gateways&quot; work so that it works without causing PHP errors.&nbsp; Note that this fix does not actually affect any existing addons, it is just to fully enable one of the new features that addons should be able to do, which is create a payment gateway.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> Can't renew expired auctions</h2>

        <p>Fixed a bug that sometimes caused expired auctions within the renewal period to not be allowed to renew</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fresh install and pricing increments</h2>
        <p>If using a &quot;fresh install&quot; of 4.0, database structure needed changes to reflect recent changes made in an update.&nbsp; The changes to structure that are fixed here, will also fix the problem where, when viewing price plan pricing increments in the admin, the main part of the page in the admin panel is blank.<br /><br />Note that sites that updates from before 4.0.2 to 4.0.3 will already have the changes needed applied to their site, this only affects sites who did a &quot;fresh install&quot; starting on 4.0.3.</p>
        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Remove user errors</h2>

        <p>First, changed the order in which data tied to a user is removed, so that the actual user details and login info is removed last of all (after listings, orders, favorites, etc. are removed).&nbsp; This makes it so that if there are so many listings (or orders, or anything) tied to a user, that it causes the page to run out of memory or time out, the user will still &quot;exist&quot; in the system, but some of the data will be removed.&nbsp; That way if removing the user the first time fails, the &quot;delete user&quot; routine can be run subsequent times to remove the rest of the data, and finally remove the main user details.<br /><br />Second, fixed a problem where if the admin had renewed an auction from the admin panel for a certain user, and the &quot;original&quot; auction is now &quot;archived&quot;, then the Admin tries to delete the user, it would cause an error.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Edit Listing: Charges when uploading new &quot;already paid for&quot; images</h2>

        <p>When editing a listing, if the user uploads any new images, it charges the user for the images just as if they were placing a new listing, even though the image &quot;slots&quot; have already been paid for previously.<br /><br />This only affects sites who charge for listings, and allow listing editing.</p>

        <h2 id="4.0.4.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Add to Account Balance: nothing else can be added</h2>
        <p>This is how &quot;Add to Balance&quot; works: When a user is adding to the account balance, nothing else can be added to the cart at that time.&nbsp; This is because adding to the account balance is a special type of transaction and requires there to be nothing else in the order when it happens.<br /><br />We applied a fix so that it does not show the &quot;add items to cart&quot; section of the my account links module, if the user is currently in the process of adding funds to the account balance.&nbsp; Before this change, the links were displayed, but when clicked they did not do anything since the action was &quot;blocked&quot; for the above reasons.</p>

        <!-- Version 4.0.3  <?php $noteId = 0; ?> -->
        <h1 id="4.0.3">March 6, 2009 - 4.0.3 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Listing is archived when listing renewal is pending payment</h2>

        <p>Added check so that if there is a pending listing renewal in an order that is pending payment, it will not archive the listing.&nbsp; Note that it already checks for pending renewals inside of orders that are &quot;active&quot; or &quot;pending&quot;.</p>

        <h2 id="4.0.3.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> White Screen using My Account Links module</h2>
        <p>Fixed problem in subscription order item that was causing a white screen (or error message on some sites) in certain cases when using the My Account Links module.</p>


        <!-- Version 4.0.2  <?php $noteId = 0; ?> -->
        <h1 id="4.0.2">March 2, 2009 - 4.0.2 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Add Category error</h2>

        <p>Fixed &quot;site error&quot; that sometimes displays when adding a new category in the admin.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Fatal error on admin upgrade/extend listing</h2>
        <p>Fixed problem with renewing or extending a listing from the admin that caused a fatal error.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Sub-categories not displayed on some modules</h2>

        <p>Fixed problem where if &quot;display sub-categories&quot; was enabled for certain category navigation modules, it would not properly display the sub categories.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> No charge: displays price for images</h2>
        <p>Changed it so that if charge for listings is turned off, it does not display the cost per image info.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Initial account balance setting not accessible</h2>

        <p>Fixed the initial account balance user group registration details setting to display and be used properly.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> New Listing e-mail sent when de-activating order</h2>
        <p>Fixed listing item to only send the &quot;listing successfully placed&quot; e-mail if the order item is being activated.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Improved IP Banning page in admin</h2>

        <p>Cleaned up Banned IP page in the admin, and changed it to do simple IP sorting so that the admin user can easily find an IP or see if they have duplicate IP's.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Images disappear when renewing auction</h2>
        <p>Fixed a bug where images could disappear when renewing an auction.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Addon Tags on old My Account Page</h2>
        <p>Only affects sites using &quot;File Based Design (BETA)&quot;, and the OLD My Account Home page.&nbsp; Fixed it to properly process any modules or addons attached to the main body template.&nbsp; In other words, fixed it so that addon tags would work properly on my account home page, when using file based design.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Auction Price Plan selection</h2>

        <p>Fixed it to show price plan selection step when placing a new auction, if the user group has multiple auction price plans attached.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> CC Declined Error message not always displayed correctly</h2>
        <p>Fixed display of error messages when a CC payment is declined in certain payment gateways.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Image thumbnail problem</h2>
        <p>Fixed problem where when a listing is being copied (for instance, when renewing an expired auction), the thumbnail was not always copied.</p>

        <h2 id="4.0.2.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> WYSIWYG Editor - rare blank screens in IE</h2>

        <p>Created &quot;workaround&quot; for intermittent problem with IE and the WYSIWYG editor on &quot;slow&quot; sites.&nbsp; The solution results in the page loading slower, and the problem is very rare, so to &quot;turn on the workaround&quot;, see the admin setting &quot;IE Blank Screen Fix&quot; on the page &quot;Admin Tools &amp; Settings &gt; WYSIWYG Settings&quot;.<br /><br />Note that this problem is not typical, and the &quot;work around&quot; setting referenced above should only be turned on for sites that experience the problem.</p>


        <!-- Version 4.0.1  <?php $noteId = 0; ?> -->
        <h1 id="4.0.1">February 17, 2009 - 4.0.1 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="allEdition">[All Editions]</span> <span class="bugFixType">[BugFix]</span> Fixed errors on certain configurations</h2>
        <p>Fixed PHP &quot;Fatal Error&quot; when using certain server configurations.
        </p>

        <!-- Version 4.0.0  <?php $noteId = 0; ?> -->
        <h1 id="4.0.0">February 13, 2009 - 4.0.0 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="allEdition">[All Editions]</span> PHP Requirement Change</h2>
        <p>Geo 4.0 and higher versions require <strong>at least PHP 5.2.0</strong>. If you do not meet this new minimum requirement, we will still
            be maintaining the older Geo 3.1 platform, which has a minimum requirement of PHP 4.3.
            <br /><br />
            We will continue to make maintenance releases on the 3.1 platform as needed, but there will be no new features
            added to the 3.1 platform.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New Cart-Based System for Listing Placement</h2>
        <p>Created new cart-based system for placing a listing. The new Cart system is used for: placing a listing, editing a listing,
            renewing/upgrading a listing, extending a subscription, adding to account balance, and anything else where the user needs
            to pay the site owner for services.
            <br /><br />
            Here are a few of the main benifits of this new system:
            <br />
            - Multiple listings (or upgrade/renewal, or whatever) can be purchased at once, so the user only has to pay once.<br />
            - The overall process is more familiar to users, since it looks/feels like a normal shopping cart.<br />
            - New system is much more cusomization-friendly. Developers: see the Example addon for more details.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New Order/Invoice/Transaction System</h2>
        <p>Created new Order/Invoice/Transaction system that works hand-in-hand with the new Geo Cart used for placing listings.
            <br /><br />
            Initially there will be minimal controls/statistics using the new system as the bulk of the changes are
            &quot;behind the scenes,&quot; but these changes open up all sorts of possibilities with regards to
            new features that can now be added in upcoming releases. In other words, this new system lays the
            groundwork to make it easy to add new features relating to orders, invoices, and transactions.
            <br /><br />
            Note that Invoicing we refer to here is different than &quot;invoices&quot; that were part of the negative balance system in older
            versions. The invoices in this system is not related to invoices in the 3.1 and earlier platforms.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New Remote API system built into the software</h2>
        <p>There is a new Remote API system built into the software that allows 3rd party software to &quot;communicate&quot; with
            a Geo installation. This will open up all sorts of possibilities with regards to making the Geo installation accessible
            from outside the software.
            <br /><br />
            Note that this IS NOT the old &quot;Geo API Addon&quot;, which is now known as the &quot;Bridge Addon&quot;.
            (Knowing that this feature was planned to be created was the main reason we re-named that addon to Bridge Addon)
            <br /><br />
            For a very brief technical overview: it uses XML RPC protocol for communication, which is handled transparently by the back-end.
            It allows Addons to create API calls (see Example Addon). Each system API call is fully documented, and includes a sample
            stand-alone script that demonstrates how to make each call. It also features built-in security using randomly generated
            (so different for every Geo site) API security keys.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Ability to upload needed PHP Pear libraries</h2>
        <p>You can now upload any PEAR libraries that a gateway or other part of the software needs into the sub-folder <em>classes/PEAR/</em>. See the readme in that directory for more info.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improved password security</h2>
        <p>When creating or editing a user, the system now requires that the username and password be different, in order to help prevent easily
            guessable passwords.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Edit user info- password required</h2>
        <p>When editing user info on the &quot;client side,&quot; the user's current password must be entered before any user info
            can be changed, so that if a user forgets to log off and someone else uses the computer, the newcomer won't be able to
            change the user's info.
            <br /><br />
            This behavior can be controlled in Enterprise editions on the page
            <em>Admin Tools & Settings > Security Settings > General Security Settings</em>, all other editions it defaults to on.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> New Beta feature: File-Based Smarty Templates</h2>
        <p>There is a new Beta feature, to opt to use File-Based Smarty Templates instead of the current 3.1 DB-Based templates. The file-based templates are organized by &quot;template sets.&quot; These template sets are designed with the intention that website designers will be able to create a template set, and then distribute that set for people to use on their Geo installations.<br /><br />Initially, there will be very few controls; you will be able to export your DB-based templates to File-Based Smarty templates, and be able to set up &quot;template sets&quot; (which will be explained more in the user manual). The rest of the control has to be done by manually editing files contained in the template set (such as changing which template is attached to which page). We will be adding many more admin-side controls in future releases.<br /><br />We have also started the process of pulling out all HTML generated inside of PHP scripts, and using Smarty templates. What this means is that where, in the past, you would have to edit a PHP file to make a change to HTML generated by the script, you can now instead edit a Smarty template file. The templates will be part of the template set. So, once we are finished and all of the HTML is moved to use Smarty templates, a template designer will have full control over any and all HTML produced by the software, and will be able to distribute their creations on a large scale with minimal work needed to set up each site to use the template set.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Language Specific Extra Pages</h2>
        <p>Added functionality to Extra Pages so that they can now offer multiple language capabilities.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Language Specific Category Specific and Group Specific questions</h2>
        <p>Added functionality to Category and Group Specific questions so that they can now offer multiple language capabilities.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[Feature]</span> <span class="allEdition">[All Editions]</span> Language Specific Print Friendly page</h2>
        <p>Added functionality to the Print Friendly page so that it can now offer multiple language capabilities.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New auto-remove "cron jobs" added</h2>
        <p>Several new <em>cron jobs</em> have been created to automatically expire or remove old data from the database: Remove old cart sessions, remove old archived listings, remove old orders, items, invoices, transactions, and remove old user communications.
            <br /><br />
            Settings for how long before certain things will be removed, are in the admin at <strong>Listing Setup > General Settings</strong> in the <strong>Expiration Settings</strong> section near the bottom.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Post-login Redirect URL</h2>
        <p>Added beta setting &quot;post_login_url&quot; that when set, will take the user to the specified URL after they log in.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Admin Change of Account Balance is displayed</h2>
        <p>When the admin directly edits a user's account balance, that change will now be displayed when the user views their account balance history. The Admin can also leave a note regarding why the change was made, that will be viewable by the user on the account balance history page.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Negative account balance e-mail</h2>
        <p>If using the account balance feature, and a user has a negative balance, the system will now automatically e-mail the user a reminder every 30 days. This is done using a <em>cron routine</em>, and the
            30 day period can be changed in the admin at <strong>E-Mail Setup &gt; Notification E-Mail Settings</strong>.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New tag for image text in popup teplate</h2>
        <p>Added ability to use the tag (!DISPLAY_IMAGE_TEXT!) on the image popup template. It will work the same way as the (!FULL_SIZE_TEXT!) tag works on the full sized images page.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New e-mails sent</h2>
        <p>As part of the new Order/Invoice/Transaction system in place, e-mails will be sent for:
            <br />
            - To Client - Order Approved (when order approved by admin, or when order is automatically approved from payment received)
            <br />
            - To Client - Edit Listing approved and live
            <br />
            - Negative account balance reminder (enterprise editions only)
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="allEdition">[All Editions]</span> Developer Note: Classes Renamed</h2>
        <p>A note for PHP developers, the following classes have been renamed:<br /><br />Addon = geoAddon
            <br />Site = geoSite (the Site Class)<br />AdminPageAutoload = geoAdmin<br />product_configuration = geoPC
            <br />Session = geoSession
            <br /><br />
            This is not a complete list, this is just the most commonly used classes that have changed names. With the exception
            of geoSite, all classes listed above now have a static getInstance() method that should be used instead of
            Singleton::getInstance(class_name).
            <br /><br />
            Many methods now have new homes - A lot of the methods in the site class have been moved to new classes, according to what
            their functionality is. For instance, deformat_number function can now be called using geoNumber::deformat($string)
            <br /><br />
            Also note that the CSS file <strong>transaction_details.css</strong> has been <strong>renamed to cart_pages.css</strong>, for anyone
            that has customized that file, you will need to copy your changes over to the new CSS file.
            <br /><br />
            There have also been many other changes to existing methods and classes. See the <a href="/wiki/developers/changes_to_note/start">Developer section in the 4.0 user manual</a> for more information.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Max photos set per price plan/category</h2>
        <p>Added ability to set the maximum amount of photo/file uploads on a per price plan and (for Enterprise editions) per Category basis. The max images is no longer set under Photo Upload Settings; it is now set under each individual price plan.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Reset Start Date on Upgrade/Renew</h2>
        <p>In the admin, at <strong>Listing Setup &gt; General Settings</strong>, the setting <strong>Reset Start Date on Upgrade or Renewal</strong> has slightly <a href="/wiki/admin_menu/listing_setup/general_settings/start#reset_start_date_on_upgrade_or_renewal">different "behavior" than before</a>. See the linked page for more info.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Create Easy On/Off Switch for WYSIWYG</h2>
        <p>Added ability to easily turn on/off the editor for fields that use the WYSIWYG editor both in the admin, and on the client side.<br /><br />The client side is now customized by editing a smarty template file, system/tinymce.tpl.&nbsp; If your site previously used the beta settings to customize the client-side WYSIWYG editor, you will need to copy those changes over to the template file.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Payment Gateway Improvements</h2>
        <p>Payment Gateways have been totally redesigned, to make it easy to add new gateways using an addon. As part of the changes, now most gateways have some form of &quot;testing mode&quot; to make it easier to identify possible problems with the gateway's settings.
            <br /><br />
            The new settings for the payment gateways are now found in the admin at: <em>Payments &gt; Payment Gateways</em>. Most existing gateway settings should be carried over in the upgrade, with the exception of Paypal settings (as noted above).
            <br /><br />
            We advise site owners upgrading from versions before 4.0 to <strong>double check all the gateway settings</strong> to ensure they are configured correctly.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Ability to use Memcache for Cache system</h2>
        <p>Improved the Cache system to allow for the use of memcache (see http://php.net/memcache for more information). The memcache settings are configured in the config.php file.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New Module: My Account Links</h2>
        <p>A new module is available via the (!MY_ACCOUNT_LINKS!) tag. This can be included in any template to display the links from the User Management Home Page in a list format, including highlighting for the currently-active page.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="mixedEdition">[Enterprise &amp; Premier]</span> User Credits is now User Tokens</h2>
        <p>The feature formerly known as &quot;User Credits&quot; will now be known as &quot;User Tokens&quot; in order to reduce confusion as to what it does. Also, changed how the tokens work so that they are more dynamic in the new Cart.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> <span class="entEdition">[Enterprise]</span> Seller to Buyer On-Site Payments</h2>
        <p>Added ability for auction winners to pay the seller through Paypal using a &quot;pay now&quot; button that is displayed once the auction closes. The button takes the winner to Paypal to pay for the item(s) won.<br /><br />Initially, only Paypal is added. We may add more gateways in the future if there is a demand.<br /><br />This feature does not work for Dutch auctions.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> <span class="entEdition">[Enterprise]</span> Beta Switch: Directly insert bids below the reserve price</h2>
        <p>Added a beta switch that enables inserting a bid directly (bypassing the proxy bid feature) if the bid is above the minimum and below the reserve.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> <span class="entEdition">[Enterprise]</span> Beta Switch: Edit proxy bids</h2>
        <p>Added a beta switch that allows the current high bidder to raise or lower his proxy bid.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Display auction end time on Favorites page</h2>
        <p>Added display of end time for auctions to the My Favorites page</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Add auction to user's Favorites on bid</h2>
        <p>When a user bids on an auction, that auction will now be automatically added to his My Favorites list.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature] [AddOn] [Classifieds]</span> New Addon: Anonymous Listings</h2>
        <p>Created an addon that enables the posting of classifieds anonymously, without requiring the user to log in. As part of the anonymous placement process, users are given randomly-generated passwords, one password for each listing placed, that they may later use to edit the particular listing.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Global e-mail footer</h2>
        <p>Added feature to allow the addition of a site wide footer to all emails sent by the system. The new feature can be used in the admin, at <em>E-Mail Setup > General E-Mail Settings</em></p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature] [AddOn]</span> SEO Addon: Enhanced URLs</h2>
        <p>SEO Addon enhanced to use category name and listing title in applicable rewritten URLs. The new SEO 2.0 is only compatible with Geo 4.0.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature] [AddOn]</span> Discount codes for upgrading and renewal</h2>
        <p>Discount codes are now available for use in the upgrade and renewal processes.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Copy current user information email changes to current listings</h2>
        <p>Added ability to copy the updated email address within the client side User Information Edit form to that user's current listings if they choose to.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> User info export tool</h2>
        <p>Added user information export tool to allow export of user data into other software applications. Specific user information can be allowed/disallowed from the export using the export information select tool.
            <br /><br />
            This new tool can be particularly useful for <strong>exporting user's e-mail addresses</strong>, for use in 3rd party newsletter software, among other things.
        </p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> More price control when charging by duration</h2>
        <p>When configuring a Price Plan to charge by Duration, you are no longer restricted to increments of .25</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Resend registration confirmation email from admin tool</h2>
        <p>Added ability to resend the registration verification email from the Registrations Awaiting Approval admin tool.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Show Category URL on Edit Category Settings page</h2>
        <p>The URL for a category's page on the front side of the site is now displayed in that category's Admin page</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Improved Admin Home page</h2>
        <p>The Admin Home page has been improved to show more statistics and have a Search Users form</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Minimum site balance value to add</h2>
        <p>There is now an option to force users putting funds into their site balance to insert at least a minimum amount, specified in the Admin</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Display IP address for each registrant</h2>
        <p>Added display of IP address to registrant's information within the admin registration approval tool</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Display client side link to listing if unarchived in the &quot;list open feedbacks&quot; page</h2>
        <p>If a listing is not archived, a link to it will be displayed in the &quot;list open feedbacks&quot; page</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> New Payment Gateway: Payscape</h2>
        <p>The Payscape payment gateway is now available for use.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix] [Auctions]</span> Sort auctions by price</h2>
        <p>Fixed the sorting of auctions by the price column. Before, it would sometimes display all of the buy now auctions first or last, or it would display all the auctions that were bid on first, etc.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix] [Auctions]</span> Proxy bids removed in a specific bidding situation</h2>
        <p>Fixed a bug that could cause proxy bids to wrongly be removed.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix] [Auctions]</span> Dutch Auctions minimum bid reporting</h2>
        <p>Minimum bid reporting on dutch auctions improved to report the current minimum bid necessary to win any quantity of the items being auctioned.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix] [Auctions]</span> Bidders' email not exposed to seller after listing closed</h2>
        <p>Bidders' email addresses are now exposed to the seller after an auction has expired.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix] [Auctions]</span> Auction title missing from some auction close emails</h2>
        <p>Fixed a bug that caused the auction title to be missing from some auction close emails.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix] [Auctions Enterprise]</span> Free subscription at registration not set for Auction Enterprise versions</h2>
        <p>Fixed a bug in Auctions Enterprise that would cause free subscriptions at registration to not be set for new users.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> User's Past Transactions Problem</h2>
        <p>Fixed a bug that caused the wrong information to be shown when viewing a user's past transactions</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> City field does not show up in Edit My Info</h2>
        <p>Fixed a bug that caused the City field to sometimes not be visible on the Edit My Info page.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Tooltip position bug</h2>
        <p>Tooltips on the General Security Settings page now display properly in Firefox</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Tooltips not working in User Groups - IE only</h2>
        <p>Tooltips in (Admin) User Groups pages should now display properly in all browsers.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Links within the Blacklist feature are incomplete</h2>
        <p>Fixed a bug where links within the Blacklist feature did not point to the correct destinations</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Error message on successful removal of a user</h2>
        <p>Removed an error message that would sometimes display when successfully removing a user from the system.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Bugs in Admin Text Search form</h2>
        <p>Improved the Admin Text Search tool.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Error when updating client side user information</h2>
        <p>Fixed a bug that caused users' email addresses to not update properly on the front side Edit My Info page</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> &quot;Main&quot; text does not appear correctly in category tree browsing modules</h2>
        <p>Fixed display of &quot;main&quot; category link text within the category tree modules</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Phone 2 field does not get updated after an 'edit'</h2>
        <p>Changes to the &quot;Phone 2&quot; field on Edit My Info page will now properly update to the seller's other listings if the option to do so is selected.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Badword filter does not check vote/comment data entered by clients</h2>
        <p>The badword filter now applies to vote/comment data entered by users.</p>

        <h2 id="4.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> DB saved images totally removed</h2>
        <p>The ability to save images in the database has been totally removed. If you have images that are
            saved in the database, contact Geo support for a utility to export all images from the database to
            the file system.
            <br /><br />
            Note that this is not typical, only people updating from the old platform will be affected, as the ability to
            turn on DB saved images has been removed for quite some time now.
        </p>

        <!-- Version 3.1.10  <?php $noteId = 0; ?> -->
        <h1 id="3.1.10">April 9, 2009 - 3.1.10 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.1.10.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Category Edit in Admin</h2>

        <p>For GeoAuctions or GeoClassifieds, fixed bug where in some configurations, it would display an error in the admin when attempting to edit category details.</p>

        <h2 id="3.1.10.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Tag properties broken when placing listing</h2>
        <p>During the process of checking for dis-allowed tags, the script will some times &quot;mangle&quot; the properties of a tag, resulting in broken tags (such as a property to change the color does not work).&nbsp; This has been fixed.<br /><br />This affects all products and versions that have the feature to automatically strip dis-allowed HTML.</p>

        <h2 id="3.1.10.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Search Results disappear after the first page</h2>

        <p>Fixed a bug that caused search results beyond the first page to not be accessible if the search terms contained multiple words.</p>

        <h2 id="3.1.10.<?php $noteId++;
                        echo $noteId; ?>"> <span class="bugFixType">[BugFix]</span> Change Feedback in Admin</h2>
        <p>Fixed problem where if admin changed feedback for a user in the admin, in some cases it would set the same feedback score for all users in the system.</p>

        <!-- Version 3.1.9  <?php $noteId = 0; ?> -->

        <h1 id="3.1.9">July 28, 2008 - 3.1.9 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.1.9.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Listing placement when no price field</h2>
        <p>Fixed a bug that prevented completion of the listing placement process if the listing was placed in a category that had the Price field turned off.</p>

        <h2 id="3.1.9.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> Buy Now Only auctions sometimes fail to place</h2>
        <p>Fixed a bug that could cause Buy Now Only auction placements to fail at the Approval step on some server configurations.</p>

        <h2 id="3.1.9.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[Premier &amp; Basic]</span> Packages missing file</h2>
        <p>Missing file has been added to Premier and Basic edition packages to enable turning on the cache system in the admin.</p>


        <!-- Version 3.1.8  <?php $noteId = 0; ?> -->
        <h1 id="3.1.8">July 18, 2008 - 3.1.8 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="bugFixType">[Security]</span> <span class="mixedEdition">[Auctions &amp; ClassAuctions]</span> Security vulnerability found</h2>
        <p>A security vulnerability has been found and fixed during an internal code review. This security vulnerability affects all GeoAuctions and GeoClassAuctions products released
            within the last few years.
            <br /><br />
            We recommend if you have GeoAuctions or GeoClassAuctions you update to 3.1.8. If you are not able to update to 3.1.8, or want further details about the vulnerability found, contact Support for options on patching your existing version.
        </p>

        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> Auctions category specific Price field</h2>
        <p>The ability to show price column was recently added to Auctions, but the setting was not able to be set for category specific fields to use.&nbsp; Enabled the ability to set the category specific fields to use setting for the Price field, on Geo Auctions product.</p>

        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Search routine fatal error</h2>
        <p>There was a critical bug found in the search routine that was introduced in version 3.1.7.&nbsp; When searching using specific criteria, it would cause a fatal error.
            <br /><br />
            Version 3.1.7 is now considered unstable due to this bug.&nbsp; If you are using that version and support has not patched your site with the fix, we highly recommend updating to 3.1.8.
            <br /><br />
            This bug does not affect version 3.1.6 or earlier.
        </p>

        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Total shows wrong amount</h2>
        <p>When using certain configurations, the total will display as $0 on the final calculate total page, when the total should be more than 0.<br /><br />
            This was introduced in 3.1.7, and only affects certain configurations.</p>

        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Module Tags in Listings</h2>
        <p>If a module tag is entered in the description field, on some places it will parse the tag and replace it with the contents
            of the module.&nbsp; While this is not a serious problem, it can cause unwanted results and affect the overall page
            layout. This has been fixed by removing any Geo tags as part of the badword filter process.</p>


        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Add Filter &quot;all categories&quot; Text</h2>
        <p>Changed code to use new editable text on the Add Filter form, for the text &quot;All Categories&quot;.&nbsp; You can now edit that text from the admin.</p>


        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Auction start time Category Specific setting</h2>
        <p>Added ability to allow display of Auction start time on category specific fields to use.<br /><br />Also fixed logic throughout the code, before classified start time had to be enable in order to also display auction start time, now either one can be turned on/off independently.</p>

        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Missing columns from search results</h2>
        <p>Added columns for bid count and address, to search results, according to fields to use settings.</p>


        <h2 id="3.1.8.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> My current bids displays wrong currency</h2>
        <p>Fixed my current bids to use the currency selected by the seller in the place a listing process to display the bids, instead of the &quot;site wide&quot; currency.</p>

        <!-- Version 3.1.7  <?php $noteId = 0; ?> -->
        <h1 id="3.1.7">July 2, 2008 - 3.1.7 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.1.7.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Flood prevention for contact seller</h2>
        <p>If enabled, it will now limit the number of times a client can contact sellers on the site within an hour.&nbsp; This is to stop manual spamming of sellers on the site (since it already prevents bot spamming by use of the security image).
            <br /><br />
            Also added ability for admin to control the number allowed per hour in the admin, at <em> E-Mail Setup > Notification E-mail Settings</em>
            <br /><br />
            Note that while this is technically a new feature, we opted to add it as part of a maintenance release since it is minor and deals with improving security.
        </p>

        <h2 id="3.1.7.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> Bidding sometimes allowed on closed auctions</h2>
        <p>Added check to bidding routine to check the end time of an auction before accepting a bid to stop possible bidding before closing routine has been run.
            <br /><br />Note that this only affects the small window between the time the auction end time, and when the cron job &quot;close listings&quot; routine runs and officially closes the auction.
        </p>

        <h2 id="3.1.7.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="classProduct">[Classifieds]</span> Prevent listing expiration notices for &quot;sold&quot; classifieds</h2>
        <p>Changed listing expiration emails to NOT be sent when the classified listing has been set as &quot;sold&quot; by the classified listing's owner.</p>

        <h2 id="3.1.7.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> PHP 4 problems with Signs &amp; Flyers addon</h2>
        <p>There was a PHP 4 compatibility issue that has been fixed in the Signs &amp; Flyers addon that was distributed with Geo 3.1.6.<br /><br />This only affects sites using PHP 4 and the Signs &amp; Flyers addon that is distributed with Geo 3.1.6 Enterprise editions.</p>

        <h2 id="3.1.7.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Setup required PHP 5.2</h2>
        <p>The requirement checks for the setup in 3.1.6 was set to require PHP 5.2 when the Geo 3.1.* platform only requires PHP 4.3.<br /><br />This only affects if you were unable to install the 3.1.6 platform due to the incorrect requirement check.</p>


        <h2 id="3.1.7.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Payflow Pro purchased by Paypal.com, so Gateway needs Updating</h2>
        <p>Changed Payflow Pro gateway to connect to paypal.com to process a transaction.
            <br /><br />This means that the old Payflow Pro server requirements (such as requiring pf libraries) should no longer apply.
        </p>

        <h2 id="3.1.7.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Category templates not language specific</h2>
        <p>It will now allow language specific settings within the category specific template feature.</p>


        <!-- Version 3.1.6 --><?php $noteId = 0; ?>
        <h1 id="3.1.6">June 27, 2008 - 3.1.6 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="allEdition">[All Editions]</span> Cache System no longer Beta</h2>
        <p>The Cache system has had time to mature since it was first introduced as a new <a href="#3.1.0.27">Beta feature in 3.1.0</a>.
            We now consider it stable enough to no longer be considered Beta, and as such, the cache system
            has been made available to Premier and Basic editions. You can now access it from <em>Site Setup > Cache</em> in the admin menu.
            <br /><br />
            Note that while the Cache system is no longer Beta, although very rare, the Cache system will not work on some servers that are not able
            to "lock" files correctly. Namely, servers that use NFS or other networked file system, and
            servers that use FAT file structures may not work correctly. This is a limitation inherent in most PHP based file
            cache systems, as the cache system needs to be able to lock a cache file while it is being written, in order to ensure it is not corrupted. For more info, see the warning found
            on the <a href="http://www.php.net/flock">php.net documentation for file lock</a>. You can also find more information about the Cache system in the user manual.
        </p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="entEdition">[Enterprise]</span> Cron System no longer Beta</h2>
        <p>The new Cron system first introduced as a <a href="#3.1.0.28">Beta feature in 3.1.0</a>, is no longer considered Beta. In Enterprise editions, the advanced controls can now be found in the admin at <em>Site Setup > Cron Jobs</em>. If you have
            a high-traffic site running Enterprise edition and your host supports the ability to utilize cron tasks, we encourage you to take advantage of the cron system to reduce the server load. See the user manual for more information about how
            to do this for your site.
        </p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="mixedEdition">[Enterprise &amp; AddOn]</span> Security Image 2.0.0 - New Features</h2>
        <p>A new version of the Security Image Addon (Version 2.0.0) will be included with Enterprise editions, and will be available for download for clients that have purchased the addon separately.
            <br /><br />
            This new version adds error checking &amp; displays server capabilities into the admin for the Security Image.&nbsp; This allows site owners to see exactly what is wrong if the security image is not working.
            <br /><br />
            The new version also brings other new features, like more controls for the look of the image, a re-designed admin interface, and more.
            <br /><br />
            Note that normally new features are not added with maintenance releases, but in this case the security image has already been tested by clients (and used on the demo) and is considered stable.&nbsp; This is the last planned new feature that will be added to the 3.1 platform,
            although there may be more maintenance releases if needed.
        </p>


        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Field Filter Admin and alternate charsets</h2>
        <p>Fixed charset problem when displaying the field filters in the admin page for managing the filters (aka region filters, aka site wide filters).<br /><br />This only affects sites that use a non-standard charset such as Arabic.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> No Off switch for Auto title builder</h2>
        <p>Fixed the auto title feature (where it dynamically generates the title of the listing based on answers to site-wide optional fields) so that it can be properly turned off in the fields to use admin tool once it has been turned on.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="AucProduct">[Auctions]</span> Dutch Auction leave feedback</h2>
        <p>Fixed bug where on Dutch auctions, it would not save the feedback left by the seller to the bidder.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="classProduct">[Classifieds]</span> Payment Types missing in fields to use for classifieds</h2>
        <p>Allowing &quot;payment types accepted&quot; has recently been added to Classifieds.&nbsp; When Classified product (does not apply to ClassAuctions or Auctions), fixed it so that the &quot;payment types&quot; can be turned on/off in the admin, under the fields to use page.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Admin messaging select form bug</h2>
        <p>Fixed bug where if you tried to select a saved form message, it instead selected the previous message sent.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> End date displayed for archived listings</h2>
        <p>Fixed it to display the end date instead of the &quot;archive&quot; date for listings that have been archived, when viewing your expired listings on the client side.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Listing Renewal - Additional images not allowed</h2>
        <p>During renewal, changed it to allow selecting additional images (more than was originally purchased for the listing).&nbsp; Previously additional images could only be purchased during a listing upgrade.</p>


        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Cache issue with print friendly pages</h2>
        <p>Fixed bug where if cache is turned on, it caches one print friendly listing and displays that cache for all listings.&nbsp; Fixed it to not cache that part of the page on print friendly pages.</p>


        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Category questions on search page</h2>
        <p>Fixed problem where if any of the category questions have the pipe ( &quot;|&quot; ) character in them, it will make the advanced search page only display the questions up to the pipe.&nbsp; Fixed so that the back-end uses &quot;~~|~~&quot; instead, which is much less likely to be used in a category question.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> License directory on IIS servers</h2>
        <p>Fixed the installation directory detection on IIS servers with certain server configurations to properly detect the correct installation directory.<br /><br />If you update your software from a previous version and <strong>start getting &quot;invalid installation directory&quot;</strong> license messages, <strong>contact support</strong> to have your license installation directory updated to be the correct location.
            <br /><br />
            This only affects upgrades on IIS servers.
        </p>


        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Extra Page Editing</h2>
        <p>Fixed problem with editing extra pages in the admin, where if the HTML code was not formated properly it would mess up and not allow changing the text for the extra page.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Page cache and embedded modules</h2>
        <p>Fixed bug where if a certain module is embedded inside other modules, and cache is turned on, the module is repeated several times on the page.
            <br /><br />
            This only affects sites that turn cache on, and have embedded a certain module inside of another HTML module.
        </p>


        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Redirect after login</h2>
        <p>On the client side, fixed problem where for some pages that require you to log in, after you log in it was not taking you back to the previous location correctly.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Forgot Password</h2>
        <p>Bug when using hashed passwords, that caused the &quot;forgot password&quot; to not work correctly.
            <br /><br />
            This only affects sites that use hashed client passwords.
        </p>


        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Popup Image Fatal Error</h2>
        <p>Fixed bug that caused fatal errors with certain server configurations, when displaying a popup image is turned on.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Admin Messaging with HTML</h2>
        <p>Fixed problem where when trying to send HTML message using the admin messaging system, it would sometimes send as plain-text instead of HTML.</p>

        <h2 id="3.1.6.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Max listing limit check</h2>
        <p>Fixed code to check the maximum listing limit immediately after the listing type is selected instead of after the category is chosen.</p>


        <!--  Version 3.1.5 --><?php $noteId = 0; ?>
        <h1 id="3.1.5">November 9, 2007 - 3.1.5 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.1.5.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Listing Upgrade &amp; Renewal problems</h2>
        <p>Fixed &quot;logic&quot; problems introduced in 3.1.3, that caused problems under certain configurations when attempting to renew or upgrade a listing.</p>


        <!--  Version 3.1.4 --><?php $noteId = 0; ?>
        <h1 id="3.1.4">November 6, 2007 - 3.1.4 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.1.4.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Turning off settings on fields to use page error</h2>
        <p>Fixed bug in some configurations, where the setting did not save when it was changed on the fields to use page in the admin. This only affects sites that were upgraded from before the 3.* platform.</p>

        <h2 id="3.1.4.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Sending e-mail using SMTP</h2>
        <p>If the e-mail configuration in the admin had the method set to SMTP, on some servers it defaulted to use the native mail() method instead.</p>

        <h2 id="3.1.4.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Paypal IPN on some GoDaddy domains</h2>
        <p>The PayPal IPN needed to be updated to work on some of the GoDaddy hosting accounts, as some
            GoDaddy hosting account configurations cause the PayPal IPN to fail.</p>

        <!--  Version 3.1.3 --><?php $noteId = 0; ?>
        <h1 id="3.1.3">October 24, 2007 - 3.1.3 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="3.1.3.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Category-specific pricing in admin listing approval display</h2>
        <p>Fixed display of category-specific pricing when applicable within the admin listing approval display.</p>

        <h2 id="3.1.3.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> If price plan attached to listing deleted an error is thrown</h2>
        <p>Fixed code to use the user's default price plan if the price plan attached to the listing is deleted from database.&nbsp; This fixes an error in the listing details display of the admin tool.</p>

        <h2 id="3.1.3.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Beta Cache system - file corruption</h2>
        <p>Re-coded the Cache system file writing process, to use file locking to prevent corrupted files in extremely high traffic sites. This change prevents the cache system from being usable on certain
            server configurations, such as servers that use network storage, but is necessary to prevent cache file corruption.
            <br /><br />
            The file structure of the cached files has also changed, so you must <strong>clear the cache if you currently have the cache system turned on.</strong>
            The changes to the file structure are to change how the expiration of a certain cache file is stored, they are no longer stored in a centralized _age.php file
            (which was part of the problem of why file corruption was happening),
            they are instead stored as the first line of the actual cache file. The system has also been changed so that if cache updates are needed,
            it waits until after the page has been loaded to write the files.
        </p>

        <h2 id="3.1.3.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Expiration notification e-mail bug</h2>
        <p>Expiration e-mails are sent without e-mail subject, and with most of the e-mail message missing. Fixed to properly get the subject
            and message text.</p>

        <h2 id="3.1.3.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Close Listings bug</h2>
        <p>Fixed bug in close listings cron routine, that made the cron routine exit pre-maturely, preventing certain e-mails from being sent, such as the winning bidder notification.</p>

        <h2 id="3.1.3.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Transaction details further improvements</h2>
        <p>Changed transaction details pages (or any pages that display payment options) to be much more small-width friendly. The original transaction detail re-design (see release notes for 3.1.0) was
            done with larger fixed width layouts in mind (and required tweaking the transaction_details.css file if your layout did not match), the additional changes done here make the default layout and styles work with almost any customized page layout, with little or no modifications needed to the
            transaction_details.css file.
            Other minor problems with HTML on those pages have also been addressed.
            <br /><br />
            If you have already customized your transaction_details.css file, further modifications may be needed to keep the same look. We recommend starting from the transaction_details.css file that
            comes with 3.1.3, then re-applying any changes needed, rather than trying to make your custom transaction_details.css file work with the changes.
        </p>



        <!-- Version 3.1.2 --><?php $noteId = 0; ?>
        <h1 id="3.1.2">October 11, 2007 - 3.1.2 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="3.1.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Further Cache system changes</h2>
        <p>Fixed a very rare (but crippling) bug in the new Cache system, where if 2 people are writing the same cache
            file at nearly the same time (within milliseconds of each other), it causes conflicts and results in a
            corrupted cache file.
            <br /><br />
            Also fixed a bug where if the admin logs into the client side, it can potentially cache parts of
            the page with the "edit" or "delete" buttons, so that normal non-admin users may also see
            the buttons. It is now fixed so that if an admin user logs in, the "output" cache is disabled, much
            like is done if a user that has zip or state filters turned on.
        </p>

        <h2 id="3.1.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Pre-Valued drop-down link</h2>
        <p>Fixed bug introduced in 3.1.1 that broke the pre-valued drop down links in the dynamically generated admin menu.</p>

        <h2 id="3.1.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Security Image license problem</h2>
        <p>Fixed a bug with the license validation for the security image, where accessing
            the security image would cause a license log entry because the directory
            was detected incorrectly.</p>

        <h2 id="3.1.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Transaction Details further fixes</h2>
        <p>Fixed a few issues in transaction details for listing upgrade process, to fix page
            layout issues when there are attention getters.</p>


        <!-- Version 3.1.1 --><?php $noteId = 0; ?>
        <h1 id="3.1.1">October 8, 2007 - 3.1.1 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="3.1.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Admin Site Map in PHP4</h2>
        <p>Fixed bug that prevented the admin site map from displaying when using PHP 4.</p>

        <h2 id="3.1.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Save Templates in PHP4</h2>
        <p>Fixed a bug affecting PHP4 sites, where when you save a template, it gives a PHP error.</p>

        <h2 id="3.1.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Cache system improvements</h2>
        <p>Fixed bugs in the new Cache system and PHP4. Also made improvements across the board for
            the cache system, to prevent doing certain things more than once.
            <br /><br />As a result of the improvements (and
            bug fixes in PHP4), <strong>Page load-time has significantly improved
                in both PHP4 and PHP5 when the cache is turned on</strong>, when comparing to page load times on 3.1.0 with the Cache system turned on. The demo now defaults with the
            Cache system turned on, even when running as Premier or Basic editions.
        </p>

        <h2 id="3.1.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Image gallery bug</h2>
        <p>Fixed a JS bug in the image gallery view, when there is only 1 image to view, so that the image
            no longer disappears.</p>

        <h2 id="3.1.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Fixed update - removed old column</h2>
        <p>In the update, an old column in the pages table sometimes causes problems. To fix, removed
            the non-used column from the table.</p>

        <h2 id="3.1.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Transaction Details alignment issues</h2>
        <p>Fixed alignment issues on the new transaction details page, when using certain configuration (when the site balance system is used).</p>

        <h2 id="3.1.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Various minor bug fixes</h2>
        <p>Made various other minor bug fixes in the software.</p>



        <!-- Version 3.1.0 --><?php $noteId = 0; ?>
        <h1 id="3.1.0">September 28, 2007 - 3.1.0 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Change cookie and session handling to remove need for redirects.</h2>
        <p>Removed use of re-directs to verify saving of a cookie (AKA redirect_check).
            <br /><br />
            Added a step on login and registration pages, that verifies that cookies are saved and working.&nbsp; The &quot;in between&quot; step shows a message similar to &quot;Validating Credentials&quot;, along with the in progress gif image.&nbsp; Both the image and the text use <em>page text</em>, so can be customized on a per-language basis by editing the text for the page in the admin.
            <br /><br />
            If there are any problems detected with saving cookies, when trying to log in or register, it displays an appropriate message, which can also be changed by editing the text for that page, on a per language basis.
        </p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New e-mail connection type</h2>
        <p>Added a new connection type, Native mail() Connection, to work on hosts that do not work with Sendmail or SMTP, but do work using the mail() function.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Use HTML in user agreement</h2>
        <p>Added the ability to use HTML in the register user agreement page, if the software sees that there are HTML tags in the user agreement, it will use a &quot;div&quot; tag so that the use of HTML tags is possible.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Addon management shows more information</h2>
        <p>Added ability for addons to display messages during the install, uninstall, enable, disable, and upgrade processes.&nbsp; See the updated example addon for more details.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Admin RSS News Feed</h2>
        <p>The Admin home page now has a News section that shows the latest entries from the Geodesic Solutions company blog. This allows site owners to easily see when a new release has been made, along with other important notices that may pertain to their software.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Address field for listings</h2>
        <p>Added a new field for listings for the address field, that can be customized just like other fields on the &quot;fields to use&quot; page in the admin. <br /><br />Previously, the state, country, and zip were built-in fields for listing display, but not the address.&nbsp; The address was previously only associated with a user, it was not associated with a listing and able to be shown on the listing details page.&nbsp; Now the address is a built-in field for listings, and can be shown on the listing detail page if desired.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> <span class="addonEdition">[AddOn]</span> Added more "core functions" to the software.</h2>
        <p>Added many new <em>core functions</em> AKA <em>software hooks</em> into the main software files, to give addons the power and flexibility to do more things in the software. To see all the new core functions, download the new version of the Example Addon. Most of the new
            hooks have been added at the request of 3rd party developers, if you are a developer and wish to have a hook added into the system, don't be afraid to send in a request to support.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Ability to convert charset before and after input clean</h2>

        <p>This feature mainly benefits sites that use "non standard" charsets, such as Arabic or Farsi, that are not supported directly in the htmlspecialchars() function.
            <br /><br />Added the ability to convert the charset before and after cleaning it (independently of each other). This conversion is sometimes necessary when using a charset that is not compatible with
            the PHP function htmlspecialchars(). The recommended work-around (from php.net) is to first convert the charset to one that is compatible with the htmlspecialchars(), then run the function, then convert it back to the original charset.
            These new settings in the config.php allow for doing this.
            <br /><br />
            Also added the ability to specify whether to use the PHP function iconv() or mb_convert_string() for the conversion by making a change in the config.php file.
            <br /><br />
            The charset conversion/cleaning settings are currently site-wide set in the config.php, and there are plans to change the setting to be language specific in future releases.
            <br /><br />
            See the &quot;charset settings&quot; sub-section in the config.php for the new version, for information on how to use this new feature.
        </p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add Moneris Payment Gateway</h2>
        <p>New payment gateway available for credit card processing: <a href="http://www.moneris.com" target="_new">Moneris</a></p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New Category browsing options module</h2>
        <p>Created new browser filter module to allow browsing by:
            <br />
            <span class="allEdition">[All Editions]</span>
            <br />&nbsp; &nbsp; All Listings (basically a &quot;reset&quot; button)
            <br />&nbsp; &nbsp; Listings ending within 24 hours
            <br />&nbsp; &nbsp; Listings with pictures
            <br />
            <span class="classAucProduct">[ClassAuctions]</span>
            <br />&nbsp; &nbsp; Classifieds only
            <br />&nbsp; &nbsp; Auctions only
            <br />
            <span class="mixedEdition">[Auctions &amp; ClassAuctions]</span>
            <br />&nbsp; &nbsp; Auctions using Buy Now (includes auctions using buy now only)
            <br />&nbsp; &nbsp; Auctions using Buy Now Only
            <br />&nbsp; &nbsp; Auctions with bids
            <br />&nbsp; &nbsp; Auctions without bids
        </p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Help link in admin</h2>
        <p>Added a new help link that shows on every page in the admin.&nbsp; The link goes to a search in the user manual on http://geodesicsolutions.com that searches the user manual for the title of the page.
            <br /><br />
            This makes it easier to find related help resources when looking for help on how to do something in the admin.
        </p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add image addition to upgrade if charging for images</h2>

        <p>Added the ability to add images during the upgrade process when charging for images in the price plan.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Expired listings feature for the admin tool</h2>
        <p>Added admin tool to be able to view the listings that have expired within the last 30 days maximum.&nbsp; The admin&nbsp; can select the number of days in the past they wish to view expired ads.&nbsp; This feature does not display archived listings.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Category dropdown quick link</h2>
        <p>Added quick category dropdown link module to allow quick linking directly to categories. Look for the new module in the category navigation section under modules.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add listing title to &quot;alt&quot; text of thumbnails</h2>

        <p>Image thumbnails now use the listing's title as the alt text, which is considered to improve search engine rankings.&nbsp; This affects any thumbnails on main pages, not listing details pages.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Changed Admin notification settings</h2>
        <p>Changed admin tool to set the &quot;notify admin of registration attempt&quot; setting when the admin sets the admin tool to have the admin approve all listings. If you have previously set the e-mail verification system to <em>Admin Approves all Registrations</em>, you may
            need to re-save the page in order to turn on admin notifications when someone attempts to register.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improve badword filter controls</h2>

        <p>Added ability for the badword filter to filter badwords on a "whole word" basis, or a "partial word" (e.g. bad in badwords) basis.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add &quot;incomplete&quot; column within listings awaiting approval admin tool</h2>
        <p>Added &quot;incomplete&quot; transaction column to awaiting approval admin tool to let admin know that the transaction displayed has not completed through payment gateway yet.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Major improvements to the Transaction Details pages</h2>
        <p>Reworked the payment collection screens (AKA Transaction Details) within the place a listing, listing renewal, subscription renewal, invoice/balance purchase and storefront subscription renewal forms to improve look and css use.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Character counter on Description field</h2>
        <p>Added javascript character count feature to the description field of the place a listing process, that lets the user know the number of characters left. The feature currently only works with the WYSIWYG editor for the description turned off.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added more Paypal currency type choices within admin tool</h2>
        <p>Added New Zealand, Swiss Franc, Hong Kong Dollar, Danish Krone, Polish Zloty, Norwegian Krone, Hungarian Forint and Czech Koruna currency types to Paypal admin tool</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Add advanced css control</h2>
        <p>Created the ability to add advanced custom CSS in the font management in the admin, to allow greater control over styles if needed.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improved List Users page in the admin</h2>
        <p>Improved the list users page in the admin to be easier to use, and more functional.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improved Admin panel look &amp; feel</h2>
        <p>Changed the look and feel for the pages in the admin. With the new look, the pages with a lot of different settings are now better structured and grouped into different sections, to make it easier to find and identify settings in the admin.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> New confirmation/result messages</h2>
        <p>Changed look of the result messages in the admin, and made results easier to quickly identify if settings were saved correctly or not.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> New Bridge Addon to replace API module</h2>

        <p>The Geo API has been replaced by the new Bridge Addon.&nbsp; The Bridge Addon has been re-designed from the ground up to be much more 3rd party developer friendly, and make it easier to add additional bridge types and features in the future.&nbsp;
            <br /><br />
            The main Bridge Addon that provides the structure for software bridges will be distributed in the packages for all editions, but it will only come with a template bridge for developers to use to create their own bridge. As of the time of this release, the bridges for vBulletin and Geo 3.1 software can be purchased in a package together.
            <br /><br />
            Anyone that has previously purchased the Geo API Module, and has access to it in the client area of our site, will now be able to download the addon package containing the bridges for vBulletin and Geo 3.1 software.
            <br /><br />
            <strong>New features of the Bridge Addon in addition to features of the Geo API</strong>
            <br />
            - Ability to &quot;sync&quot; existing users, so that it will copy users that exist in one installation but not another (depends on installation types)<br />
            - Back-end allows external developers to easily create a new &quot;Bridge Type&quot; to help with bridging the users between different software installations and the Geo software.<br />
            - Because of the ability to easily create new bridge types, we will be able to create new bridges developed in-house to popular software that was not available before in the old Geo API module.
            <br /><br />
            <strong>Compatibility Notes</strong><br />
            - If you have multiple Geo software installations that are linked with the old Geo API, <strong>if you update one Geo installation to version 3.1, all linked Geo software installations must also be updated to 3.1</strong> for compatibility.&nbsp; (Keep this in mind when deciding whether you want to update to 3.1.)<br />
            - If you have API installations currently set up, it will require copying your existing API installations to the new Bridge addon, otherwise they will no longer be linked as the Geo API is not compatible with 3.1.&nbsp; You will still be able to view the API installation settings so that you can easily migrate them to the new Bridge Addon.<br />
            - The bridge with vBulletin was fully tested using vBulletin 3.6.8, if you have an older version of vBulletin we recommend you update to ensure best compatibility.&nbsp; If you cannot update vBulletin to 3.6.8, contact Geo Support and we will be happy to work with you to ensure the bridge is compatible with your version.<br />
            - At the time of release, the Phorum bridge has been dropped due to lack of use.&nbsp; If you wish to use the Bridge Addon to link to Phorum, contact Geo Support.<br />

        </p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> New File Cacheing system</h2>
        <p>Created a new file caching system, that should significantly speed up sites with high traffic.
            <br /><br />
            Since the file cache system is brand new, and server configurations can vary widely, the cache system will be considered as &quot;beta&quot; until it has had a chance to be tested and used on a large variety of different servers with different server configurations.
            <br /><br />
            The admin for the new system is on the page &quot;Admin Tools &amp; Settings &gt; BETA Tools &gt; Cache&quot;.&nbsp; The cache system will remain an Enterprise-only feature at least until it is no longer considered &quot;BETA&quot;.
        </p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Ability to run tasks as cron jobs</h2>
        <p>Created new &quot;Cron task&quot; system, to more efficiently run tasks that need to be run on a periodic schedule, for instance closing the expired listings or sending expiration e-mails.<br /><br />The new system will be in all editions of 3.1, but the admin page to control the advanced settings is Enterprise only.&nbsp; The new admin page is at <em style="white-space: nowrap;">Admin Tools &amp; Settings &gt; BETA Tools &gt; Cron Jobs</em>.
            <br /><br />
            The new file cron.php is able to be called using a server-side &quot;cron task&quot;, by default it will be called the way the &quot;close routine&quot; used to be called, using an ajax call on each page load, and is (currently) the only way it can be called in Premier or Basic.&nbsp; That way use of cron tasks on the server is not required to use the software.
        </p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Add ability to customize tinyMCE on the client side</h2>
        <p>Added a new beta setting, to allow specifying custom javascript to use for the WYSIWYG editor on the client side.<br /><br />This is meant to be temporary, we plan to add more in-depth controls for the client-side WYSIWYG in the future, this is the first step toward that.<br /><br />To see the new setting, look in &quot;Admin Tools &amp; Settings &gt; BETA Tools &gt; BETA Settings&quot;</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Auto build title field from site wide optional field data</h2>
        <p>Added feature to automatically build the title field from answers within the site wide optional fields (which are Enterprise only).</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Added ability to charge by length for auctions</h2>
        <p>Added feature to charge for auction placement by length of auction duration chosen.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Add Paytrace Payment Gateway functionality</h2>
        <p>Added Paytrace payment gateway as choice within Authorize.net payment gateway admin tool. In the admin, see the page <em>Payments > Payment Types > Credit Card Setup > Authorize.net/Paytrace</em>
            <br /><br />
            Note that since this is a new payment gateway, it is considered a BETA feature until it has had a chance to be tested and confirmed on a wider variety of different servers.
        </p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="AucProduct">[Auctions]</span> Ability to edit payment types accepted of a live auction</h2>
        <p>Added ability to edit the payment types accepted by a client within their auction details.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="mixedEdition">[Auctions &amp; ClassAuctions]</span> Ability to add a fixed fee to every final fee increment charged for auctions</h2>
        <p>Added ability to charge a fixed fee within each increment of the final fee schedule setup within the price plan admin tool.&nbsp; Admin can charge by fixed fee instead of percentage of final cost for auctions.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Added new Beta Setting, &quot;use_cc_card_code&quot; into the beta switches section of admin</h2>
        <p>Added beta switch to force the use of the credit card verification field within credit card payment forms within the software. It will be the last setting on the Beta Settings page in the admin.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="mixedEdition">[Classifieds &amp; ClassAuctions]</span> If marked &quot;sold&quot; do not send expiration notice</h2>
        <p>Improved script to not send out expiration notices for a listing if the sold sign feature has been turned on for that listing</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Set the number of free photos on category by category basis</h2>
        <p>Added the ability to set the number of free images on a category by category basis within the category specific options in the price plan.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Discount Codes Addon - Added new error message</h2>
        <p>Made it show an error message if the discount code entered is not correct.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> 100% discount codes sometimes trigger payment gateways</h2>

        <p>Fixed a bug that sometimes forced users to payment gateways (Paypal, etc) even when a listing was made free by a 100% discount code</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Buying more pictures during upgrade resets pic count instead of adding to it</h2>
        <p>Fixed a bug that could cause an ad to lose pictures while being upgraded.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Admin setting &quot;Reset start date when listing is edited&quot; does not work properly</h2>
        <p>In the admin, on the page &quot;Listing Setup &gt; General Settings&quot;, fixed it so that the setting &quot;Reset Start Date of Listing when Seller Edits&quot; works properly on the client side.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> BASE_DIR name conflicts on some servers.</h2>
        <p>Changed the constant BASE_DIR to be named GEO_BASE_DIR to avoid name conflicts on rare server configurations which pre-set this constant to a value that is different than the software uses.
            <br /><br />
            If you have manually changed this setting in config.php, you will need modify your configuration to use GEO_BASE_DIR instead of BASE_DIR.
            <br /><br />
            <strong>3rd Party Developers:</strong>&nbsp; If you use the constant BASE_DIR to include files in any addons, we recommend to change this to GEO_BASE_DIR to ensure compatibility with those servers that have a naming conflict.&nbsp; BASE_DIR is still defined, but is no longer used by the main software.
        </p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Renew process re-uses text for photos</h2>

        <p>Made the renew/upgrade process use it's own text for the image label and description, on the price confirmation page. If you have a non-English site, note that this means there are new text messages for those pages you may need to translate. The update process will add the new text messages for every language you have, but the text will default to the English text.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Conflict with Site Balance and Listing Process</h2>
        <p>Fixed a problem with the database structure, which prevented users from being able to add money to their site balance, while at the same time be in the middle of the listing process.&nbsp; Now, a user can add money to their site balance, and when they return to the listing process it will pick up where they left off.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Email domain blocker does not support domains with more than 2 pieces</h2>

        <p>Registration Allow/Block Email Domains now has improved support for wildcards and domains with non-standard formats (e.g. mywebsite.co.uk)</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Admin-deleting a pending ad does not re-credit site balance</h2>
        <p>Fixed a bug where the admin deleting a pending ad would not give credit back to a user's account balance if the ad was paid for out of the positive-only site balance feature.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Linkpoint payment gateway errors out</h2>
        <p>Fixed Linkpoint gateway code to allow completion of transaction when certain configuration settings are set.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Dashes within bulk uploader cause problems</h2>
        <p>Fixed bulk uploader code so that it better handles special characters within import data</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Duplicate email address when editing user</h2>
        <p>Fixed the update user information form in the client side admin tool to properly check the current existence of an email address within the system so there are no duplicate email addresses in the system before updating the user's information.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="basicEdition">[Basic]</span> Javascript popup for full-size images not selectable within the basic edition admin tool</h2>

        <p>Fixed code in basic edition image upload settings admin tool to stay on the javascript popup selection to display full size images</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Additional text fields not displaying within affiliate listing detail display</h2>
        <p>Fixed affiliate listing detail display code to properly place the additional text fields within the affiliate listing display template</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Make a bid link appearing in auction details page before the preview period is up</h2>
        <p>Fixed code to not display the make a bid link within the auction detail display page before the preview period is up</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Cost of pictures does not give proper selections or display proper price within renewal/upgrade listing form</h2>
        <p>- fixed bolding cost within the renewal/upgrade form to properly display cost according to money formatting set within admin tool.<br />- fixed total cost within the renewal/upgrade success page to properly display cost according to money formatting set within admin tool.<br />- fixed display of pictures cost within renewal process.<br />- fixed display of add picture selections and costs within the upgrade listing form</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Upgrade a listing link to add images even when no more images could be added</h2>
        <p>Fixed code to properly check the current image count for a listing against the max number of images allowed by the site before choosing to display the upgrade link within the current listings display of the client side admin tool.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Bidding allowed on auctions before bidding start time if set</h2>
        <p>Fixed code to not allow bidding before the preview period is up within an auction if the &quot;start time&quot; is used</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Feedbacks inserted multiple times for listings when they should not be</h2>
        <p>Fixed code to check if feedback is already in the database before the closing cron routine tries to close the listing<br /></p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Featured category modules 1 and 2 do not have css tags for header row</h2>
        <p>Fixed css issues in featured category modules 1 and 2</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Make state selected in state filter the default displayed within the dropdown</h2>
        <p>Fixed bug in state filter module where the currently browsed state will be the default choice in the state dropdown when state filter module is in use</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Total price of listing is incorrect within Listings Awaiting Approval admin tool</h2>

        <p>Improved code to properly display the total cost to place/renew a listing within the Listings Awaiting Approval admin tool</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Date display control</h2>
        <p>Improved/added more controls to give the ability to change the date format for different areas of the software.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Dutch auction selection appears in detail collection form of the place a listing process when should not</h2>
        <p>Removed dutch auction from detail collection form of the place an auction process when set to not be an option within the admin tool.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Make User Management Pages W3C compliant</h2>
        <p>Fixed the script-generated HTML for the user management pages to be W3C compliant.</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Admin listing display bug</h2>
        <p>Fixed listing display bug in the admin, that reported an incorrect end time if the listing has already expired.&nbsp; This bug only affects viewing the listing in the admin.</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Problems with storefront display of price and description</h2>
        <p>- Fixed display of price of auctions while browsing categories<br />- Fixed display of description while browsing categories</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Help text not showing in other languages</h2>
        <p>Fixed code to properly consider current client language choice when displaying help popup text</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> Bulk uploader does not check the size of url referenced images to check for thumbnail size</h2>
        <p>Added code to bulk uploader to check the full size dimensions of url referenced images, get thumbnail dimension and place in the database with the image data</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Renewal cost of listing not displayed properly within the listings awaiting approval admin tool</h2>
        <p>Fixed code to display the cost of renewal within the listings awaiting approval admin tool</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Browsing vote &quot;not recommended&quot; text is incorrectly referenced in code</h2>

        <p>Fixed text misreference at the php code level within the browsing vote feature</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> No css tag for header row within all featured ad pic modules</h2>
        <p>Fixed all featured ad pic modules to have the proper css tag for the header row</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Return to client home link within view communications form does not work</h2>
        <p>Fixed html within &quot;back to client home&quot; link within the view communications configuration form</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Japanese money formatting displays incorrectly</h2>
        <p>Fixed Japanese money formatting display </p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Dutch auction minimum bids do not display properly when all items have not been bid on</h2>
        <p>Fixed code to not update the minimum bid until all items have been bid on</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Full size image page does not use category specific templates when they are set</h2>

        <p>Fixed code to use the category specific full size image template when they are set within the categories &gt; templates admin tool</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> &quot;must be logged in to contact seller&quot; feature not within the premier edition</h2>
        <p>Fixed code to have the &quot;must be logged in to contact seller&quot; feature within the premier edition</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> &quot;choose a state&quot; field not appearing in non-classauction installations</h2>
        <p>Added query to upgrade to make &quot;choose a state&quot; field appear in non-classauction installations</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Discount amounts not shown in admin listing approval tool listing detail display</h2>

        <p>Fixed code to properly display discounts and affect upon totals within the admin approval tool listing detail display</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Image display order not followed within the listing details page</h2>
        <p>Fixed display of images within the listing details page to display the images in the order that was set for them within the image upload process</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Changed price plan amount to allow $500 as a choice within the price plan increments form</h2>
        <p>Changed price plan amount to allow $500 as a choice within the price plan increments form</p>


        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Title row of newest listing modules 1 and 2 display despite nothing in the text for the header</h2>
        <p>Changed the code to not display the html for the header row of newest modules 1 and 2 when there is no title row text to display</p>

        <h2 id="3.1.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Message text within contact seller does not reappear in form if there is an error in the form</h2>
        <p>Fixed code to redisplay message text within the contact seller form if there was an error in submitting the contact seller form</p>



        <!-- Version 3.0.2 --><?php $noteId = 0; ?>
        <h1 id="3.0.2">July 2, 2007 - 3.0.2 (Maintenance Release) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> New Icon does not show</h2>
        <p>Fixed bug in Sub Category navigation modules, so that the new icon displays properly when using the module.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Client Session Time-Out</h2>
        <p>Fixed bug where the client side session timeout was saved to be the same as the admin session timeout.&nbsp; The 2 timeouts can now be set to different values.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[Basic &amp; Premier]</span> Notify Seller Bug</h2>
        <p>Fixed bug for notify seller, that took user to login page even if already logged in.&nbsp; Fixed to always allow the use of notify seller feature, even if not logged in.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[Basic &amp; Premier]</span> Fields to Use bug</h2>
        <p>Fixed bug, where on some configurations, changing the fields to use settings did not affect all listings.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[Basic &amp; Premier]</span> Various bugs found in Premier and Basic packages</h2>
        <p>Added missing file to Basic and Premier packages, fixed bug in listing extras admin page, and fixed other minor bugs found in Premier and Basic edition packages.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="basicEdition">[Basic]</span> Edit user details bug</h2>

        <p>Fixed bug that prevented editing a user's details, where it improperly detected if the e-mail is already in use by another user.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="basicEdition">[Basic]</span> Modify base price plan bug</h2>
        <p>Fixed a bug that prevented modifying the price plan.</p>



        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Linkpoint Gateway Communication</h2>
        <p>Fixed Linkpoint gateway code to properly communicate with Linkpoint.</p>


        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> PayPal Pro Certificate File Field</h2>
        <p>Fixed code to remove any extra whitespace from around the cert file location field, so that PayPal Pro will still work if extra spaces are entered before or after the cert file location.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> 2Checkout auto activate bug</h2>
        <p>Fixed code to properly handle 2Checkout return signal to complete 2Checkout transaction, so that listings are automatically activated when payment is received through the gateway.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Charge for listings bugs</h2>

        <p>Fixed code to properly recognize admin setting "charge for listings" during:<br />
            - Listing renewal process<br />
            - Adding a new image to current listing</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Totals for expired dutch auctions</h2>

        <p>Added code to properly display the totals for a dutch auction, within the expired listing tool on the client side.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Renewing listing drops pictures</h2>
        <p>Fixed a bug that sometimes caused pictures attached to a listing to be deleted when renewing that listing.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Price plan charges can't go above $999.99</h2>
        <p>Changed the database structure to handle storing values up to $999,999,999.99 for various listing costs(May be less depending on limitations set by configuration of MySQL database).<br />
            The admin Price Plan configuration can now handle charges up to that amount.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Various W3C HTML Compliance Issues</h2>
        <p>Made the extra pages for new installs W3C compliant.&nbsp; Note: updates do not change templates, to get the new W3C compliant extra pages, copy/paste from our main demo.</p>

        <h2 id="3.0.2.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Featured listings from category modules, wrong category bug</h2>
        <p>Fixed problem within code where the featured listings from a specific category modules were not displaying listings from the category selected for the module.</p>


        <!-- Version 3.0.1 --><?php $noteId = 0; ?>
        <h1 id="3.0.1">May 18, 2007 - 3.0.1 (Maintenance Release) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> User Information blank page</h2>
        <p>Fixed bug, where with certain configurations, the My Information page would be blank.</p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="allEdition">[All Editions]</span> Admin Page Management Sections</h2>
        <p>Fixed bug, where in the admin under "Pages Management", a few of the sub-sections re-direct back to the main section, resulting in not being able to enter a sub-section.</p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Multiple category questions per display order bug</h2>
        <p>Fixed bug, where if more than one category specific question used the same display order, it would only show one of the questions for that display order number.</p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="allEdition">[All Editions]</span> Image Removal on Admin Approve all listings bug</h2>
        <p>Fixed bug where if the admin is set to approve all new listings, and a successful credit card transaction is run, the images for the listing awaiting approval were removed.</p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> <span class="mixedEdition">[ClassAuctions &amp; Classifieds]</span> Category specific pricing charging by price bug</h2>

        <p>Fixed category specific charging by price feature to require a value in the price field<br /></p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="allEdition">[All Editions]</span> Title and price display issue on featured pic modules</h2>
        <p>Fixed problem in display of title and price below thumbnail within the featured pic module</p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Buy Now price not editable</h2>
        <p>Fixed bug where the buy now price was not able to be edited unless using the admin user, when editing a listing's details.</p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Pre/Post Currency lost on edit</h2>
        <p>Fixed bug where the pre and post currency values were lost when an auction was edited.</p>

        <h2 id="3.0.1.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="allEdition">[All Editions]</span> Renewal payment expected bug</h2>
        <p>Fixed bug where renewal payment expected setting was not reset if the listing was renewed using a credit card.</p>

        <!-- Version 3.0.0 --><?php $noteId = 0; ?>
        <h1 id="3.0.0">May 10, 2007 - 3.0.0 &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> First Release using Common Base Code</h2>
        <p>3.0 is the first release that is &quot;capable&quot; of relying on one code base for all products, all Editions.
            <br /><br />
            Because of this, each new feature &quot;release note&quot; will be tagged with which Edition(s) it applies to. Bug fix release notes will only be tagged with the Edition where applicable.
            <br /><br />
            If a particular release note only applies to a certain PRODUCT, it will be noted.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added new Tags and Tag Legend to release notes.</h2>
        <p>Added new tags to each new release note, to help quickly identify what each release note pertains to. Also added the tag legend to release notes, to explain what each "tag" signifies.
            <br /><br />
            Also, related to Release Notes: Added script to hide previous versions, since the release notes are getting quite long.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Addon Infrastructure</h2>
        <p>New infrastructure for addons, which allow dynamic loading of add-ons.&nbsp; The first stage is implemented, the main structure is there with some of the basic functionality built in.
            <br /><br />
            The second and third stages (not complete yet) will add more built-in functionality, and give more power to addons.&nbsp;
            <br /><br />
            The end goal once the second and third stages are complete, is to have an addon system that will allow almost any customizations (within reason) to be possible, without need to edit any existing Geodesic files that are distributed with the release.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Security image</h2>
        <p>Converted the Security Image into an addon, so that it is able to be purchased at the Premier and Basic Editions.&nbsp; It is included with the Enterprise Edition.<br /><br /><strong>Upgrade Note</strong> If upgrading, and currently using the Security Image, will need to re-configure certain settings.&nbsp; See the &quot;Post Upgrade Script Instructions&quot;.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Attention Getters</h2>

        <p>Attention Getters have been converted to an addon, so that they can be purchased at the Premier and Basic Editions.&nbsp; It is included with the Enterprise Edition.<br /><br /><strong>Upgrade Note</strong> If upgrading, and currently using Attention Getters, will need to re-configure certain settings.&nbsp; See the &quot;Post Upgrade Script Instructions&quot;.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Signs/Flyers</h2>

        <p>Converted the Signs &amp; Flyers into an addon, so that it is able to be purchased at the Premier and Basic Editions.&nbsp; It is included with the Enterprise Edition.<br /><br /><strong>Upgrade Note</strong> If upgrading, and currently using Signs &amp; Flyers, will need to re-configure certain settings.&nbsp; See the &quot;Post Upgrade Script Instructions&quot;.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> SEO (AKA Mod Rewrite)</h2>
        <p>Converted Mod Rewrite into an addon named SEO, so that it is able to be purchased at the Premier and Basic Editions.&nbsp; It is included with the Enterprise Edition.<br /><br /><strong>Upgrade Note</strong> If upgrading, and currently using Mod Rewrite, will need to re-configure certain settings.&nbsp; See the &quot;Post Upgrade Script Instructions&quot;.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Discount Codes</h2>
        <p>Converted the Discount Codes into an addon, so that it is able to be purchased at the Premier and Basic Editions.&nbsp; It is included with the Enterprise Edition.<br /><br /><strong>Upgrade Note</strong> If upgrading, and currently using Discount Codes, will need to re-configure certain settings.&nbsp; See the &quot;Post Upgrade Script Instructions&quot;.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Main E-Mail Sender</h2>
        <p>Converted the e-mail sending methods into an addon, which will be distributed with all Editions and products.
            <br /><br />
            The e-mail addon has the ability to connect directly to an SMTP server, or use the "sendmail" function available on most Linux hosts. This e-mail addon attempts to send an e-mail right away. Alternate e-mail addons are currently in development, which add different functionality like e-mail queuing.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Example Addon</h2>
        <p>Created the example addon, which serves as a starting point for anyone wishing to create their own addon. The addon will not be distributed with the main package to avoid confusion, but will be available for download by anyone in the addon section of the client area.
            <br />
            <br />
            Further documentation is planned, to help create your own addon, and should be ready by the second or third stage of the addon infrastructure changes (see first Addon release note above)
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="addonEdition">[AddOn]</span> Create Logging addon for license activity</h2>
        <p>Created an addon, that is included with all products and Editions, that logs any license activity.&nbsp; On new installations, the addon is installed and enabled by default.
            <br /><br />
            It only logs potential &quot;problems&quot;, or any time that it is necessary to contact the Geodesic license server.&nbsp; Local license validation is not logged, unless there is potential for a problem, or for "non standard" activities, such as saving a new license key.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Better license failure messages</h2>
        <p>When entering the license key and there is a problem validating the license, added more informative messages so that it is easy to tell why the license key is not validating. Before, it just showed one generic message no matter what the problem was.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added &quot;WYSIWYG&quot; editor to admin side.</h2>
        <p>Added the TinyMCE editor to the admin side, to edit templates, Logged In/Out modules, and module language specific text. The editor is turned on by default for new installations, and turned off for upgrades.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Made all templates &amp; text W3C compliant</h2>
        <p>This applies to new installs only, the upgrade always keeps existing templates &amp; text (unless otherwise noted). Changed all templates, logged in/out module html, and all module text to be W3C compliant. Most templates are XHTML 1.1 compliant, with the exception of the print friendly templates, which are XHTML 1.0 Transitional.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Make php-generated html be W3C compliant</h2>
        <p>Most of the client side HTML that is generated by PHP files instead of templates or module text, has been converted to be XHTML 1.1 compliant, which is backwards compliant with XHTML 1.0 Transitional, and XHTML 1.0 Strict.
            <br /><br />
            This initial conversion is considered a feature (W3C compliance is a feature).&nbsp; Any places in the code that still produce non-compliant code after this, will be treated as bugs, meaning that they may be fixed in maintenance releases.
            <br /><br />
            <strong>Upgrade Note:</strong> Since the HTML generated by the scripts is changed to be XHTML 1.1 compliant, changes to existing templates or text may be necessary. Check the post upgrade instructions for more details.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Changed checkbox and extra questions in templates</h2>
        <p>When upgrading, script takes contents of the extra questions and checkbox templates, and imports them into the templates that use them. This gets rid of the need for a separate "sub" template just for the extra questions or checkboxes. In the past, the Extra Questions and Checkboxes were one of the main points of confusion regarding the templates, so this should make it less confusing to new users. The checkboxes are now displayed in an unordered list format, with the aesthetic controlled through the CSS.
            The upgrade script keeps the checkbox template and extra question template intact, but the software no longer uses those templates. New installs do not have the checkbox or extra question templates, and already have them imported to the needed templates.
            <br /><br />
            <strong>Upgrade Note:</strong> Additional configuration steps might be required, check the post upgrade instructions for more details.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Switch the Old RTE Editor to TinyMCE.</h2>
        <p>Changed the wysiwyg editor for the client side from AplosRTE to the TinyMCE editor.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Improve the upgrade process</h2>
        <p>Improved the upgrade process, to allow upgrading on a per-version basis. Also added better error handling controls, so that the upgrade will halt on a critical problem (such as a table failing to be created). When the upgrade starts up again after a failure, it automatically starts at the failed step instead of going through the entire upgrade again.
            <br /><br />
            Upgrading versions prior to 2.0.7b will run the &quot;old&quot; upgrade first, to upgrade the database to 2.0.10b, then run the new process to upgrade to 3.0.0 RC1.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Change all module tags and field tags from &lt;&lt;&gt;&gt; to (! !)</h2>
        <p>Converted all software-used tags from &lt;&lt;&gt;&gt; to (! !) in order to work with WYSIWYG editor better.<br /><br />Also, automatically update all templates and text to replace the old tags with the new ones.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Create feature to &quot;group&quot; ad expirations into one email</h2>

        <p>Added functionality to consolidate listing expiration emails into singular emails that list multiple expirations within their bodies.&nbsp; This will reduce the number of emails clients receive when they have multiple listings within the system that expire around the same time.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Admin pages &amp; menus dynamic loading</h2>
        <p>Converted all admin pages to use a new dynamic page loader, which is much more versatile than the old method.
            <br /><br />
            It allows for things like easily making the current page bold and expanded on the side menu, ability to save last page viewed, ability to change &quot;home&quot; page for admin, etc.<br /><br />The side menu, and front page site map are now created dynamically as well.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> User group specific user management home templates</h2>
        <p>Added functionality to be able to set user management home page templates on a user group by user group basis.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added Total Un-invoiced Amount for the whole site</h2>
        <p>Added feature to display the total un-invoiced amount for the whole site, within the invoicing admin tool, to help determine if invoicing of the site needs to happen.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Extra feature costs not displayed within the admin transaction approval tool</h2>
        <p>Added code to show extra feature costs within the admin transaction approval tool</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Added Singapore Dollars to Paypal currencies list</h2>
        <p>Added Singapore Dollars as an accepted currency type within the Paypal admin tool</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="allEdition">[All Editions]</span> Apply e-mail changes to current listings</h2>
        <p>Added ability to give the user the choice, when changing the e-mail address, to apply the change to any current listings the user has.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Admin Messaging improved control</h2>
        <p>Added 2 new beta settings, to be able to change the number of e-mails sent at once, and to change the amount of time between sending each batch of e-mails.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> HTML e-mail ability in admin messaging tool</h2>
        <p>Added ability to send mass e-mails using HTML instead of just plain-text.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Create Security Settings admin page</h2>
        <p>Added new Security Settings page in the admin, for Enterprise Edition. The new page is under <strong style="white-space:nowrap;">Admin Tools &amp; Settings &gt; Security Settings &gt; General Security Settings</strong>
            <br /><br />
            The page allows changing settings for:<br />
            - Min &amp; max length of password<br />
            - Change storage method used for storing passwords in the database (plain text or &quot;hashed&quot;)<br />
            - Ability to turn off the &quot;forgot password&quot; tool<br />
            - Ability to change the session time-out<br />
            - Ability to change the allowed IPs when the site is disabled.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Category specific search templates</h2>
        <p>Added category specific search templates designation</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Allow category specific picture cost</h2>
        <p>Category-specific Price Plans can now charge separate prices for pictures, bolding, and better placement features.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> <span class="entEdition">[Enterprise]</span> Create more php modules</h2>
        <p>Added 14 more php modules for use within the software, for a total of 20 PHP modules. (PHP Modules are enterprise only)</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> &quot;Stronger&quot; IP banning</h2>
        <p>IP banning forces any banned IP's to ONLY be able to view the front page of the site. However, there were reports that banned IP's were still &quot;getting through&quot; to pages they weren't supposed to.
            <br /><br />Checks are now done at the top of each page load, no matter what page is requested. Banned IPs are only shown on the front page, no matter what page is being requested.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="entEdition">[Enterprise]</span> Site Balance fields not big enough for certain currencies</h2>
        <p>Changed initial site balance field in admin tool and database fields to allow larger values, to accommodate different currencies.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[Enterprise &amp; Premier]</span> Price plan expiration</h2>
        <p>Fixed &amp; improved interface for admin management of price plan expiration.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Auction feedback pagination bug</h2>
        <p>Fixed bug in links for next &amp; previous page, in the auction feedback pages.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Apply final fee changes across all auction price plans for the user group</h2>
        <p>When making a change to the &quot;charge percentage at auction end&quot; or &quot;roll final fees into future transaction&quot; settings within an auction price plan attached to a user group, using the &quot;attached price plans&quot; feature, that same setting will be moved to the other &quot;attached&quot; price plans. This is to prevent confusion for the admin, and to ensure stability in the auction price plan administration.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Delete Auctions bug</h2>
        <p>Fixed the bug where, if logged in as the admin on the client side, and try to delete an auction, it produced an error.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Edit Auction bug</h2>

        <p>Fixed code to not reset auction buy now, reserve and minimum bids when a listing is edited within the client side current listings tool.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Browse by featured pic auctions section displays even when there are no auctions to display</h2>
        <p>Fixed code to not display the featured auctions section within the browse by featured pic feature when there are no auctions to display</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="mixedEdition">[ClassAuctions &amp; Auctions]</span> Invoice details are not showing if the details contain auctions that need to be invoiced</h2>
        <p>Fixed code to properly display auction details if they are within the invoice detail display feature</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="classProduct">[Classifieds]</span> Error saving settings</h2>
        <p>Fixed the &quot;Site Error when saving settings&quot; bug in classifieds product.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> API - Strict mode bug</h2>
        <p>Fixed API module to work properly on MySQL running in strict mode.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> SEO breaks popup image javascript</h2>
        <p>Fixed pop up windows breaking when SEO/Search friendly URLs is enabled</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> SEO - Cancel Registration dead link</h2>
        <p>Fixed bug in SEO where the cancel registration button was a dead link.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> <span class="addonEdition">[AddOn]</span> SEO - Main link in Category navigation modules bug</h2>
        <p>Fixed mod_rewrite problem with the Main link in the category trees.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Required Field bug</h2>
        <p>Fixed bug where ads could not be edited, if the phone field was required.<br /><br />Also added text to the applicable page for failure messages, when required fields were left blank during editing an ad.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Possible issues with transaction totals on final approval screen</h2>
        <p>Fixed code to ignore corrupt final_price data when calculating the transaction total.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Upload image fails with certain obscure server configurations</h2>
        <p>The php copy() function was &quot;disabled&quot; within a certain server configuration.&nbsp; Added code to attempt to use the php move_uploaded_file() function if the copy() function fails when dealing with uploading images.
            <br /><br />Note: Only affects servers that disable the PHP copy() function.
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Need better charset handling</h2>

        <p>Added new setting in config.php:<br />define ('CHARSET','charset_name');
            <br /><br />The charset used must be compatible with the PHP function htmlspecialchars, meaning it has to be one of the listed supported charsets listed on <a href="http://www.php.net/htmlspecialchars">http://www.php.net/htmlspecialchars</a>
            <br /><br />This makes it possible to properly &quot;escape&quot; text when editing the text in various places in the software.
            <br /><br />Note:&nbsp; Most DO NOT need to modify or add the new setting. It only needs to be set if using a charset that is not properly &quot;escaped&quot; when using htmlspecialchars()
        </p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Subscription renewals don't properly rollover into invoices</h2>
        <p>Subscription renewal fees may now be invoiced properly.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Category navigation module 3 referencing incorrect css tag</h2>

        <p>Fixed wrong css tag reference in category navigation module 3</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Subscription periods costs cannot be set above 999.99</h2>
        <p>In upgrade, changed database field to accept subscription period cost values above 999.99.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> If 100% discount code used payment information is still required</h2>

        <p>Changed code to not require a payment choice if the discount code entered is 100% even though there is a cost within the place a listing process.</p>


        <!-- Version 3.0.0RC3 -->

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> No newline on featured photo modules</h2>
        <p>On the featured pic modules, if displaying text, there is no newline between the text and the image. Fixed to
            have a newline added.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Fixed copyright notice on admin login</h2>
        <p>Fixed the copyright notice on the admin page login, to say 2001-2007.</p>

        <!-- Version 3.0.0RC2 -->

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Listing setup &quot;fields to use&quot; required expansion</h2>
        <p>Expanded the ability to require the pre-existing listing fields and fixed a couple that did not require properly.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Add javascript alert/confirmations in any delete routines in the admin</h2>
        <p>Improved the delete routines in the admin to include javascript confirmations where needed.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Add confirm user button to registration approvals</h2>
        <p>Added button for the registration confirmation gui in the admin.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Textarea box selection missing from registration optional field input type choices</h2>

        <p>Added textarea box selection to registration optional field input type configuration in the registration configuration admin tool.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Featured Ads Pic Modules</h2>
        <p>Fixed bug, where the featured ads pics modules did not show more than 1 row of pics, even if set to do so in the admin.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Zip filter has no effect on the &quot;new&quot; icon display</h2>
        <p>Fixed the zip filter feature to affect the &quot;new icon&quot; feature.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Invoice payment page uses SSL correctly</h2>
        <p>Fixed it to force the invoice payment session into SSL, if the script is set to within the admin tool, for the place a listing process.</p>


        <!-- Version 3.0.0RC1 -->



        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Exploit: can use &quot;free pics&quot; to obtain a negative balance</h2>
        <p>Fixed a bug that could allow a user to illegitimately reduce his balance, potentially even to a negative number.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Bug when browsing affiliate listings</h2>
        <p>Fixed parse error bug when browsing the affiliate listings, and the price field is shown.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Check for upgrade_classified.php in admin</h2>
        <p>Added additional checks to improve site security when upgrades are left on the server.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Bug in admin send messages</h2>

        <p>Fixed bug where, when sending to all groups, it only sends to first 50 users.&nbsp; Also fixed related bug where certain groups are selected, instead of all groups, it only sent to first person.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Html disallowed &quot;i&quot; tag replaces the &quot;img&quot; tag also</h2>
        <p>Improved html disallowed filter so that smaller html tag settings like &quot;italicize&quot; &lt;i&gt; does not control larger html tags like &quot;image&quot; &lt;img&gt;.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Sort By bug</h2>
        <p>Fixed sort by column results while browsing the categories</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Subscription Expire e-mail not sent</h2>
        <p>Fixed the subscription expiration notification e-mail bug.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Use image URL says invalid type</h2>
        <p>Fixed &quot;wrong image type&quot; bug, where it reports wrong image type when using image URL instead of uploading a file.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Sell_session_images table not clearing properly</h2>
        <p>Posting multiple ads in rapid succession no longer results in a reduction of available image upload slots in the latter ads</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Fixed &quot;Sorting loses settings&quot; bug.</h2>
        <p>After choosing to display listings from the past X weeks, sorting the results table by one of its fields will no longer cause the original time choice to be forgotten.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> AOL Cookies Bug</h2>
        <p>Fixed bug where some AOL browsers (and a few other browsers &amp; ISPs) were not able to stay logged in for very long.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> &quot;title only&quot; and &quot;description only&quot; search criteria do not affect the search feature</h2>
        <p>Fixed the search feature so that the &quot;title only&quot; and &quot;description only&quot; settings within the advanced search form have the proper effect on the search query</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Authorize.net admin tool has a syntax error</h2>

        <p>Fixed syntax error in Authorize.net admin tool</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Default user communication setting bug</h2>
        <p>Set default communication variable to 1 if setting from database fails to set.&nbsp; This will remove the sql error if there is a problem in the database for this setting</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Buy now only setting is not carried from old listing into new listing when renewed</h2>
        <p>Fixed code within the renewal process to move the BUY_NOW_ONLY setting from the old listing into the new listing when a listing is renewed</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Paypal Automatic listing activation bug</h2>
        <p>Fixed bug where Paypal IPN was not automatically turning on the listing once payment has been received</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Thumbnail resize bug</h2>
        <p>Fixed code to improve thumbnail resizing on the fly for browsing modules</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Old listing image deletion bug</h2>
        <p>Fixed code to remove images from server when expired sell sessions are removed from the server</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Quote in city field bug</h2>
        <p>Fixed bug where if city values with quotes within them are used, it corrupted the place a listing process.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Site Configuration &gt; Browsing admin tool save bug</h2>

        <p>Fixed script to remove the sql query when saving the site configuration&nbsp; &gt; browsing admin tool page</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Delete a category dropdown bug</h2>
        <p>Fixed code to delete category question dropdown values through the admin tool</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Copy new listing feature within My Current Listings page does not work</h2>
        <p>Fixed sql query inserting current listing data into new sell session to exclude more fields that are not within the sell session database table so that the copy to new listing feature in the My Current Listings page would operate properly.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Paypal IPN &quot;cents&quot; bug</h2>
        <p>Fixed Paypal IPN payment handler to handle cent values correctly.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Category navigation modules that display subcategories don't use display_order</h2>

        <p>Category Navigation modules that display subcategories will now sort subcategories within the parent category according their Display Order, which is modifiable in the admin.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Field character limit of price field and auctions</h2>
        <p>Fixed field limit for price fields when auctions are available.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Category Level Navigation 1 module using the wrong css tags within it</h2>

        <p>Fixed css tags within&nbsp; Category Level Navigation 1 module to use the correct tags from css admin tool</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Authorize.net final fee approval bug</h2>
        <p>When using:<br />- the Authorize.net payment handler<br />- not rolling final fees into future transactions<br />- current transaction total is $0<br />- billing for final fees<br /><br />the results from the authorization only transaction were always interpreted as &quot;approved&quot; even when not.&nbsp; Fixed the code to react appropriately to &quot;declined&quot; responses and go back through the billing form again.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Browse by newest is not carrying &quot;sort&quot; values through pagination links</h2>
        <p>Fixed to properly pass sort by value through pagination links in the browse newest ads feature</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Price plan override settings for listing extras in renewal/upgrade process bug</h2>
        <p>Added code to check the price plan specific override settings for the listing extras within the renewal/upgrade process so that extras are not offered to the client when they are offered site wide but not to this specific price plan</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Ccv code for credit card not passed to Authorize.net when using the SIM method</h2>

        <p>Added code to pass the ccv code to Authorize.net when using the SIM method</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Sell session not reset properly when transaction is declined through Authorize.net</h2>
        <p>Fixed code to properly reset sell session so that the client can retry a transaction if their current payment information was declined by Authorize.net</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Search terms not always searched properly</h2>
        <p>Improved the code that builds the search sql query to search terms better<br /></p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Category specific search terms</h2>

        <p>Changed code to improve searching by category specific questions</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Site wide optional fields admin on/off switches do not affect the listing detail check procedure</h2>
        <p>Fixed code to properly consider admin field use switches for site wide optional fields within the listing detail check process</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Listing upgrade with price plan specific settings bug</h2>
        <p>Changed code to consider price plan specific extras override switches when choosing to display the upgrade link within the current listings page</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Transaction details page of place a listing process does not submit in SSL in some instances</h2>
        <p>Fixed code to make sure transaction details page submits in SSL when the admin has set the script to.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Price plan expiration admin tool bug</h2>
        <p>Fixed price plan expiration admin tool to work as expected.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Username not changed bug</h2>

        <p>Fixed script to update all database occurrences of the username when the username is changed within the admin tool.&nbsp; This stops the old username from appearing in certain places around the script when the new username is used to login</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Browse seller by category count bug</h2>
        <p>Fixed seller by category count to display proper count for that specific category</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Listing phone settings changes within pages admin tool are not saved</h2>
        <p>Changed code to recognize and save listing display setting from within pages admin tool</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Featured category modules 1 and 2 do not pull ads from the category selected</h2>
        <p>Fixed featured category modules 1 and 2 to pull featured from the chosen category</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Email address not editable in listing details edit</h2>
        <p>Fixed code to properly display email edit field within listing details edit feature, when it is turned on in the admin.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Site filter editing does not work</h2>
        <p>Fixed site filter editing so that the selection made is saved and the client can continue to the next site filter selection.</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Listing renewal does not override the user attached price plan</h2>
        <p>Fixed code to use the price plan id attached to the listing itself when there is price plan id difference between what is attached to the client user account.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> On/off switch for city field has no effect within search form</h2>
        <p>Fixed code to display/not display the city field within the advanced search form</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Price/bid not displayed properly within the search results</h2>
        <p>Fixed code to display the correct price/bid within the search results</p>


        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Display of listing details needs improvements within the admin tool</h2>
        <p>Added feature prices within listing details for listing details in admin tool<br />- fixed code to check category specific pricing when getting totals for listing details in admin tool<br />- fixed code to urldecode city data from database for listing details in admin tool<br />- fixed code to properly display image costs displayed for listing details in admin tool</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Maximum description length allowed is not large enough</h2>

        <p>Added ability to allow descriptions of up to 50000 characters in the listing description field.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Photo icon bug</h2>
        <p>Fixed photo icon bug, where if someone pays for images then deletes all images, the photo icon still appeared.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Store front default change</h2>
        <p> Changed the installation of the storefront so that when a user obtains a storefront it is on by default instead of off.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Price plans within price plan choice form of place a listing process appear in random order</h2>

        <p>Fixed price plan choice form within the place a listing process to display the price plans in alphabetical order</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Payment express admin link missing from admin tool home page</h2>

        <p>Added Payment Express admin link to admin home page</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Manual credit card admin link missing from admin tool home page</h2>
        <p>Added manual credit card admin link to admin home page</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Reverse radio button logic for display title module needed</h2>
        <p>Fixed admin tool to reverse radio button logic within the display title module</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Phone, second phone and fax values of the user data display in the admin tool are urlencoded</h2>

        <p>Fixed code to display phone, second phone and fax values url unencoded within the user data display admin tool</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Credit card transaction not marked as needing payment within admin transaction approval tool</h2>
        <p>Fixed admin transaction approval tool to display credit card transaction as needing payment.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Full size image display page does not display images in order they were set within place a listing process</h2>
        <p> Changed script (get_image_data function) to select images based on display order within the full size images page</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Display order of images within full images display page does not go by order uploaded</h2>

        <p>Fixed display order of images within full size images display page to match the order the images were uploaded</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Paypal IPN and manual payment methods are not distinguished among site balance transactions awaiting approval</h2>
        <p>Fixed site balance unapproved transactions admin tool to better display the payment type used to make the site balance payment and more of a reason why the transaction is still in the unapproved transactions table.</p>

        <h2 id="3.0.0.<?php $noteId++;
                        echo $noteId; ?>"><span class="bugFixType">[BugFix]</span> Invoicing email to client does not check site setting for SSL</h2>
        <p>Changed code to make invoicing return link within invoicing email to SSL if the site is set to use SSL</p>


        <!-- Version 2.0.9b --><?php $noteId = 0; ?>
        <h1 id="2.0.9b">December 1, 2006 - 2.0.9b (BETA) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="2.0.9b.<?php $noteId++;
                        echo $noteId; ?>">- CRITICAL - Compatibility issues with PHP 5.2</h2>
        <p>Fixed critical compatibility issues with PHP 5.2. In some instances license system stops working, and in others
            there is a white screen on admin side, no matter what page is visited on admin side.</p>

        <!-- Version 2.0.8b --><?php $noteId = 0; ?>
        <h1 id="2.0.8b">November 28, 2006 - 2.0.8b (BETA) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- SECURITY - Fixed sql injection vulnerabilities</h2>
        <p>Fixed code to remove the sql injection vulnerabilities. Vulnerability was found in a few seldom-used modules.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Geo API - Hide API settings if not installed</h2>
        <p>Made it so that the Admin cannot accidentally turn the API on if it is not installed.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Geo API - Price plan assignment across multiple installations</h2>
        <p>Created a fix so that Price Plans across multiple installations of the software that are
            using the API module will be applied accordingly to each installation.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - GEO API - Admin-side Registration does not use API</h2>
        <p>Fixed the API to also work when registering a new user on the Admin side.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Storefront - Redesign Storefront Manager</h2>
        <p>Gave the storefront manager a new default look.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Storefront - Quotes bug in Storefront</h2>
        <p>Removed problems when storefront manager inputs contain quotes</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Storefront - Column headers/text missing on storefront</h2>
        <p>Missing column headers and data text added.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Storefront - Check for unnecessary files for storefront in admin</h2>
        <p>Added a check for the add_storefront_template.php file. It is not needed after the storefront
            has been installed. General improvements to all alerts as well.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>"><span class="featureType">[Feature]</span> Consolidate Ioncube and Zend options into one installer and zip</h2>
        <p>Added the ability to use either Zend or Ioncube, and not have to upload different files for each one.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Full size pop-up image link</h2>
        <p>Added ability to have a listing's thumbnail be a pop-up link, that will only display
            the images attached to that listing, while browsing categories or modules.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Added new Beta Switch/Settings admin section</h2>
        <p>Moved all &quot;beta switch&quot; settings in the config.php file to a new section in
            the admin, <strong>Admin Tools &amp; Settings &gt; BETA Tools &gt; BETA Settings.</strong>
            <br /><br />Those settings are no longer pulled from the config.php file. Also modified
            the &quot;config.php upgrade tool&quot; to give the ability to strip out the un-used
            settings, and save those settings in the new location.
        </p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Add ability to edit reserve, buy now and minimum bids before first bid</h2>
        <p>Added ability for the client to edit the reserve, buy now and minimum bid prices
            before the first bid has been received on an auction.&nbsp; This feature can be turned
            on or off within the <strong>Listing&nbsp;Setup&nbsp;&gt;&nbsp;General&nbsp;Settings</strong>
            admin tool page.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Improvements to &quot;block email domains&quot; feature</h2>
        <p>Added feature to better control email addresses allowed to register within the software.&nbsp;
            This feature allows you to create lists of domains that will either: not be allowed into the
            system, or allow only those domains within that list into the system, according to what the
            settings is set to in the admin.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Improved attention getter selection</h2>
        <p>Added javascript that automatically selects &quot;yes&quot; when choosing an attention
            getter in the place a listing process if not already selected by user and they have just
            chosen which attention getter they want.</p>


        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Separate auction and classified expiration notice controls</h2>
        <p>Added feature to set separate expiration notice times for auctions and classifieds.&nbsp;
            There is a specific setting to have the expiration notice sent a certain number of days
            before an auction expires and a separate settings for classifieds.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Added ability to remove items from the &quot;expired&quot; listings on the client side</h2>
        <p>Provided option in browsing setup menu to accept admin's choice and modified appropriate
            sql queries to apply the filter.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Add image cost to renewal</h2>
        <p>When charging for images, the renewal process now charges for the images again based upon
            the original image cost.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - NEW GATEWAY - Add paymentexpress.com payment gateway</h2>
        <p>Added paymentexpress.com payment gateway support.</p>


        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - &quot;order user by&quot; feature within admin list users tools</h2>
        <p>Added ability to order the list users admin tool results by username, last name,
            date joined latest or date joined earliest</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Add ability to set default display order for auctions and classifieds individually</h2>
        <p>Added ability to set the default display order for classifieds and auctions separately
            while browsing categories.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Browse by &quot;ending today&quot;</h2>
        <p>Added additional search functionality to limit the search results to view only listings
            that will expire within the next 24 hours.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Need &quot;back to ad&quot; link within voting page</h2>
        <p>Added link within voting form to return to ad being voted on, without having to complete the vote.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Need to display the current category before the title in the display title module</h2>
        <p>Added feature to display title module to display the category name the listing is within before the ad title</p>


        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Deleting ads as admin - Add Warning</h2>
        <p>Added Javascript confirmation step when deleting ads as the admin on the client side.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Improve Upgrade script</h2>
        <p>- Eliminated the template assignment from the upgrade process...now better handled in the admin.
            <br>- Removed the choices, now upgrade choice is automatic
        </p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Allow ability to edit session time-out</h2>
        <p>Added ability to change session idle &quot;time out&quot;, in the new BETA settings, at
            <strong>Admin &gt; BETA Tools &gt; BETA Settings.</strong> The settings to change are
            <strong>session_timeout_client</strong> and <strong>session_timeout_admin.</strong>&nbsp;
            See the description in the beta section for more details.
        </p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Improved search engine robot handling</h2>
        <p>If the user is detected to be a &quot;robot&quot; or search engine crawler or spider,
            it does not give them a cookie, and does not re-direct them.<br /><br />This further
            improves search engine listings.<br /><br />The list of pre-defined &quot;user-agents&quot;
            that are known to be robots or search engine spiders are found in robot_list.php and can
            be added to using the new Beta Settings section in the admin.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Display user status in the list user details page</h2>
        <p>Added the display of the user's status to the user detail display in the admin.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Delete column heading on display favorites page cannot be changed by admin</h2>
        <p>The text of the column heading over the remove button on the My Favorites page may
            now be modified through the admin.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Add message that is stored when a person manually deletes ad to admin view</h2>
        <p>If a user manually ends an ad or auction prior to natural expiration, the message of
            why is displayed in the expired details.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Login with case sensitive username bug</h2>
        <p>The recent security enhancements inadvertently made it so that the username used to
            log in must be case sensitive.&nbsp; <br /><br />Changed the behavior to how it worked
            previously, where only the password is case sensitive.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Logout or old session cookie causes problems on Safari browsers.</h2>
        <p>The &quot;Safari browser logout/redirect bug&quot; has been fixed.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Dutch bid closing email contains wrong final bid value</h2>
        <p>Fixed code to send the proper final Dutch bid to all winning Dutch bidders and the
            seller when the closing routine is run on a Dutch auction.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Edit Page in Pages Management bug</h2>
        <p>Fixed bug where, on some servers, it gave a site error when trying to edit a page
            in the Pages Management section.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Ad Placed client e-mail bug</h2>
        <p>Fixed bug where the client did not get an &quot;ad successfully placed&quot; e-mail
            when the admin approves the ad.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Bug with special character filtering</h2>
        <p>Fixed bug where characters like e with accent get converted to HTML entity equivalent.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Bug with Thumbnail Image when Uploading a Video</h2>
        <p>- Fixed code to reference icon setting if it exists instead of thumbnail image.&nbsp;
            Different file type icons will display correctly now when browsing categories</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Edit Price Plan bug.</h2>
        <p>Fixed the site error bug when editing the price plan cost specifics (only affects certain configurations)</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Image thumbnails not displaying in client-side edit</h2>
        <p>Image thumbnails now display when editing a listing on the client side.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Voting Bug</h2>
        <p>Fixed bug where, when user tries to vote on a listing, it incorrectly gives the
            error &quot;cannot vote on own listing&quot;.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Category Description Bug</h2>
        <p>Fixed bug where, on some configurations, the category description does not display
            when that feature is properly turned on.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Restarting Classifieds and Auctions in the Admin</h2>
        <p>Improved the restarting of listings from the admin.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Change database fields for subscription values to allow larger values</h2>
        <p>Altered the field within the database table that contain all subscription length/cost
            choices to allow for larger cost amounts that certain currency types need.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Cannot delete listing lengths once they are added to the listing length list</h2>
        <p>Fixed admin tool to delete listing lengths within the listing lengths admin tool</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Whole word searches not returning expected results</h2>
        <p>Improved search functionality so that whole word search terms include punctuation next
            to search terms entered when searching listing data</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Image text not run through bad word filter</h2>
        <p>Fixed script to scan text attached to images for badwords</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - AutoBid "quantity bid on" not saved bug</h2>
        <p>- Fixed it to properly set the "quantity bid on" when saving a proxy bid.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Added/fixed the "buy now auction price" column when browsing categories or modules</h2>
        <p>Fixed script to display buy now pricing within modules and browsing features on "buy now only" auctions</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Time left column does not appear in the search results</h2>
        <p>Fixed search results to display the time left column if it has been selected for display
            within the fields to use admin tool</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Thumbnail display settings in modules do not affect if length and width set
            are larger than thumbnail</h2>
        <p>Added code to "size up" the thumbnail image to the dimensions the module requires, when
            the dimensions set within the module are larger than the thumbnail dimensions.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Bold feature does not appear in the search function results</h2>
        <p>Corrected script to show bolding feature in search results if a specific listing has the bolding feature.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Auctions displayed on browse newest listings page even when turned off within admin</h2>
        <p>Fixed script to not display classifieds or auctions header within browse newest
            feature when neither are present or not in use.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Minimum bid displayed even though it is lower than starting bid while
            browsing and detail display</h2>
        <p>Fixed script to check minimum bid versus starting bid when deciding to display the
            current minimum bid while browsing categories and within listing details page</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Auctions results displayed even when set to classifieds only configuration</h2>
        <p>Removed display of auctions results within classified only configurations on the
            browse featured text ads feature</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Adding a discount code in the admin</h2>
        <p>Added checks for required fields when editing and adding a discount code.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Current place an ad session and &quot;renew ad&quot; functionality conflict</h2>
        <p>Fixed &quot;session&quot; conflict between current possibly &quot;open&quot;
            place a listing, subscription or add to balance session and the creation of a new listing
            within renewal process.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Fix relation of table and form tags so valign functions properly</h2>
        <p>Fixed the HTML for the state filter module so that the valign attribute functions properly.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Registration dropdown fields error check</h2>
        <p>Adding a registration dropdown did not error check for a value. Added an error check to
            ensure that a value is entered for the name of the dropdown.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Display and alphabetical order of site wide optional field dropdown ignored
            in edit user information form</h2>
        <p>Changed the sql query for the site wide optional field dropdowns in the edit user information
            on the client side</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Payment type message displayed twice on final approval page of the add to
            account balance process</h2>
        <p>Removed double display of payment type message final approval page of the add to
            account balance process</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Linkpoint gateway sends incomplete data, when company name used</h2>
        <p>- Properly "urlencoded" the company name in the Linkpoint Gateway, so that the company name
            data is properly sent. This affects when the company name contains more than one word. Otherwise
            Linkpoint payment handler may not work properly.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Site wide optional "other" field values not saved</h2>
        <p>Added code to check the "other" field submission for site wide optional fields, to save the "other"
            field value if entered, during the "place a listing" process</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Newlines are not removed from listing description within the place a listing process after
            newlines are replaced with &lt;br&gt;</h2>
        <p>Removed newlines after they have been "replaced" with the "&lt;br&gt;" tag within the listing
            description of the place a listing process.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Category name not stripslashed and urldecoded properly within the category choice page
            of the place a listing process</h2>
        <p>Fixed how the data is de-coded when gotten from the database. Affects multi-word categories during listing process.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Current subscription does not affect the price plan used within the place a listing process</h2>
        <p>Fixed bug where the current price plan id did not always get set correctly under certain circumstances, within the place a listing process.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Category count not updated when there is no charge for auction placement</h2>
        <p>Fixed code to update category count properly.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Auction id and ad id not updated properly when using site balance</h2>
        <p>Fixed it so that transaction types are now properly listed within the site balance
            transactions client side admin tool.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Current user's price plan data not retrieved during renewal process</h2>
        <p>Added code to get current user's price plan data before use within certain
            instances of the renewal process. This only affects some configurations.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - All current totals not updated within renewal process after it has been approved by the client</h2>
        <p>Added code to set the current renewal transaction totals within the renewal process after the
            client has approved the renewal. </p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - "object doesn't exist" error within the renewal process.</h2>
        <p>Fixed code to remove the "object does not exist" error within the renewal process.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- BUGFIX - Newlines are not removed from listing description within the edit a listing process after newlines are replaced with &lt;br&gt;</h2>
        <p>Removed newlines after they have been "replaced" with the "&lt;br&gt;" tag within the listing description of the edit a listing process.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- Included older Release Notes</h2>
        <p>There were previous Release Notes that were not included when the release was made.
            Added those release notes
            to this version. The release notes that are known to be for an older release are marked
            with "<strong>Existing</strong>" below.</p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- Category Display Module - Add the ability to display subcategories</h2>
        <p>When using a category navigation module you can now make it display each categories'
            subcats as links below the parent.
            <br /><br /><strong>Existing</strong>
        </p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- Email check in registration fixed for domains with 4 letters like .info</h2>
        <p>Improved email format check to include 4 letter top level domain within the notify
            seller, notify friend, registration and client side user information editing.
            <br /><br /><strong>Existing</strong>
        </p>

        <h2 id="2.0.8b.<?php $noteId++;
                        echo $noteId; ?>">- FEATURE - Final fee conversion from currency auction sold in to currency site accepts</h2>
        <p>- Added a conversion rate to the currency type table, and the ability to set the setting
            in the admin section.<br />- Made it so that the final fee is based on the final bid price *
            conversion rate.&nbsp; So if final bid is 5, and the conversion rate is 10, then it treats
            it like the final bid is 5*10=50.
            <br><br><strong>Existing</strong>
        </p>


        <!-- Version 2.0.7b --><?php $noteId = 0; ?>
        <h1 id="2.0.7b">October 24, 2006 - 2.0.7b (BETA) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="2.0.7b.<?php $noteId++;
                        echo $noteId; ?>">- CRITICAL - Proxy bids not being inserted into database</h2>
        <p>Fixed sql query inserting proxy bid into database.&nbsp; The array that passes the correct information into the query did not contain the correct information.<br><br>
            This bug first appeared in 2.0.2b</p>

        <h2 id="2.0.7b.<?php $noteId++;
                        echo $noteId; ?>">- CRITICAL - Cannot Edit User Info within My Account Pages</h2>
        <p>Fixed the bug where users could not edit their own info.<br><br>
            This bug first appeared in 2.0.2b</p>

        <h2 id="2.0.7b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Geo Zip - Geozip installation script breaks if short tags are turned off.</h2>
        <p>Fixed short tag bug in Geo Zip Module</p>

        <h2 id="2.0.7b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Geo API - Change persistent connection handling in the API</h2>

        <p>Fixed the &quot;API re-use database connection&quot; bug.</p>

        <h2 id="2.0.7b.<?php $noteId++;
                        echo $noteId; ?>">- Logout Cookie bug</h2>
        <p>Fixed the cookie bug, where cookies were not properly un-set when a user logs out, or when a session expires. Other
            cookie related bugs should be fixed too.</p>

        <h2 id="2.0.7b.<?php $noteId++;
                        echo $noteId; ?>">- Email Greetings not consistent</h2>
        <p>Made all e-mail greetings use the settings from the admin.</p>

        <!-- Version 2.0.6b --><?php $noteId = 0; ?>
        <h1 id="2.0.6b">October 16, 2006 - 2.0.6b (BETA) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>


        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Changed product licensing system.</h2>
        <p>The software licensing is now integrated with a new Software Shopping Cart. The new system allows the user to log into the client area of the cart at GeodesicSolutions.com, and view their current purchased products, their license keys, download installation files, etc.<br><br>
            The cart is still being worked on, but is fully functional. Note that this is not something that is part of the Geodesic software, this is a feature on the GeodesicSolutions.com website.<br><br>
            New licensing procedure:</p>
        <ol type="1">
            <li>Product is purchased. Once admin verifies the purchase, the installation and upgrade files can be downloaded directly from the client area of the cart.</li>
            <li>Software is installed/upgraded. The first time that the admin logs into the admin side, it prompts for the new license key. The key is found in the client area of the cart, or in the e-mail sent when the purchase was made.</li>
            <li>When the license key is entered, the software verifies the license using the license server, and locks that license key to the installation's domain name and folder location. The software then gets the "license data" from the license server to store locally,
                so that it does not have to contact the license server to verify the license on every page load.</li>
        </ol>


        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Storefront newsletter archive</h2>
        <p>In the Storefront module, added the ability to view past newsletters, and ability to delete them.</p>


        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Storefront: New Manager tool box width</h2>
        <p>Fixed bug, on pages with WYSIWYG editor for storefront, fixed the editor's width.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Category Template "Subcategories Also" bug</h2>
        <p>Fixed the bug where, when assigning category template, if "Subcategory Also" is checked, it does not set the subcategories templates correctly.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Add ability for * in banned ip's</h2>
        <p>The use of * as a wildcard in banned ip's is now supported, to allow things like banning a while subnet, like 192.168.*</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Bugs in bookkeeping</h2>
        <p>Fixed price plan expire bug in bookkeeping.php</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Ability to change redirection method.</h2>
        <p>Added ability to change the method used to redirect, the new settings can be found in config.extra_settings.php</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Registration Confirm Bug</h2>
        <p>Fixed bug where, on some servers, the Registration Confirmation link sent out in e-mails produces a Fatal Error when visited.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Change category template bug</h2>
        <p>Fixed bug affecting category template changing.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Template attachment during upgrade</h2>
        <p>Changed to not show template attachment option as there is only one page that will need assignment. More easily handled in the admin.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Auction removal permissions check</h2>
        <p>Fixed to allow appropriate user deletion of auctions based upon admin setting. Also made it so that if the user is the admin, it shows them the delete button, even if that setting is set to not allow deletion by the user, and it lets them delete it.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Category Image not editable</h2>
        <p>Added the &quot;category image&quot; back to the category edit page in the admin.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Reset category template not possible</h2>

        <p>Added the ability to change a category template back to the site default, after it has been changed from the site default.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Time shift not working correctly.</h2>
        <p>Fixed the time shift bug, so that the server properly shifts the time.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Display price choice should be available in the Auction configuration also</h2>
        <p>Fixed bug when in auctions only configuration the price field was not available for turning off in browsing results.</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Search when set to just classifieds</h2>
        <p>Removed choices for selecting the type of listing when classifieds or auctions only</p>

        <h2 id="2.0.6b.<?php $noteId++;
                        echo $noteId; ?>">- Font problem on final fee display after upgrade to new code set</h2>
        <p>Fixed the css issue upon upgrade</p>


        <!-- Version 2.0.2b --><?php $noteId = 0; ?>
        <h1 id="2.0.2b">September 22, 2006 - 2.0.2b (BETA) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Changed location of documentation.</h2>
        <p>Moved all documentation to the docs/ folder.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Changed directory structure for all modules.</h2>
        <p>Moved each of the module's documentation into their own sub folder in the docs/ folder.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Compatibility fixes</h2>
        <p>Made significant compatibility changes for all add-on modules, so that they are compatible with 2.0.x software. If you have any add-on modules, be sure to get the latest version from Geodesic Solutions.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - Upgrade script changes</h2>
        <p>The changes needed in the database for each module, is now done as part of the main upgrade script. So now, to install a new add-on module, all that is required is to upload the files for that module, and no extra "install script" steps are needed.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- ADD-ON Modules - GEO API not logging in to other sites</h2>
        <p>Fixed the api module, to properly sign users in to sites that use the new 2.0.X (beta) code base, and to be able to handle the new password hashing. (see next release note)</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- SECURITY - Passwords now scrambled in the database.</h2>
        <p>Passwords are now stored in hashed form in the database. By "hashed", that means the passwords are scrambled in such a way that it <strong>is not possible to un-scramble the password</strong>. The password can only be checked to see if it equals another password.
            <br /><br />This ensures that even if the database is compromised, <strong>a "hacker" cannot find out the current password</strong> for any of the users by looking at the database table (including the admin user).
            <br /><br />Since the current password cannot be retrieved, when a user forgets their password and requests their password to be sent to them, the password is reset to a randomly generated password, and the new password is sent to the user's e-mail address.
        </p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- SECURITY - New Admin Password Reset tool</h2>
        <p>Since passwords are now "hashed" in the database, it is imposible to retrieve the current admin password if it is forgotten.
            <br /><br />Because of this, we have created a new tool, <strong>reset_admin_password.php</strong>. This tool only works when "turned on" by editing the file. For security, while the file is "turned on", it does not allow the admin to log in. This prevents the admin user from forgetting to turn the tool back off when they are done.<br /><br />
            As long as the tool is "turned off", there is no way for it to be used to reset the admin password. <strong>See the file reset_admin_password.php for more details</strong> on how to use the new tool.
        </p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- SECURITY - Continuation of software security audit</h2>
        <p>We have made more progress on the security audit, going through each file and checking the SQL queries to identify security vulnerabilities and fix them before they become a problem. This will be an ongoing task, since it takes time to go through every single database query.<br /><br />So far, all files in the root folder are checked and fixed, and we have gone through more of the files in the classes folder.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Update the installation text file for software changes</h2>
        <p>Updated the installation manual to include the short install instructions. More detailed instructions are to be in the user manual only.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- New Requirement Test tool</h2>
        <p>There is a new tool <a href="upgrade/requirement_test.php">upgrade/requirement_test.php</a>, that can be uploaded to the upgrade folder and used as a standalone tool, used to check for Zend, and check for the most common problems (like not uploading the encoded files in BINARY mode). The tests are also used in the first steps of the upgrade and setup scripts.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Editing images problem</h2>
        <p>Fixed image editing issue where image display was problematic.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- PHP memory limit problem for upgrade.</h2>
        <p>Fixed it so that during upgrades and installs, if the memory limit is lower than 32M, it uses ini_set to change the memory limit to 32M.</p>


        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Adding listing duration to a category error message missing</h2>
        <p>Corrected so error message displays and changed error message itself to better explain the error.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Minimum bid equal to buy now bug</h2>
        <p>Fixed so that if the user sets a minimum bid and buy now equal to each other the auction becomes buy now only.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Category Count display problem</h2>
        <p>Fixed a bug where, if category count is turned off, the count still displays for the first column of sub categories.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Rename all app_top files.</h2>
        <p>Renamed all app_top files to the naming scheme: app_top.usage_name.php&nbsp; (for instance, the register app_top is now named app_top.register.php)</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Search module alignment issue</h2>

        <p>The form tags for the search module were outside of the scope of the table. Moved to within the scope of the table.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Duplicate setting for registration email address</h2>
        <p>Moved setting for notifying admin when listing edited to the email setup. Removed redundant registration email setting.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- PHP 5 Compatibility : does not translate templates correctly</h2>
        <p>Fixed compatibility issues in PHP 5 where modules do not get parsed properly.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Rearrange the files in various modules</h2>

        <p>Reorganized text documents in all modules as needed</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Registration cancellation page</h2>
        <p>Corrected name of the information collection page to also represent the cancellation page.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Extra field on Listing Details Collection in Admin</h2>
        <p>Extra text for the listing detail collection page. Removed from the database.</p>

        <h2 id="2.0.2b.<?php $noteId++;
                        echo $noteId; ?>">- Bid error bug when category name is changed</h2>
        <p>The bid error bug that happens when a category name is changed, has been fixed.</p>


        <!-- Version 2.0.1b --><?php $noteId = 0; ?>
        <h1 id="2.0.1b">September 8, 2006 - 2.0.1b (BETA) &nbsp;<a href="#" class="mini_button top_link">Back to Top</a></h1>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Improved publishing of release notes</h2>
        <p>Description: First release notes for the ClassAuctions. Notes for this version include all previous release notes for all previous beta versions. (Not all changes occurred between 2.0.0&nbsp;&gt;&nbsp;2.0.1&nbsp;)</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - New Database Access</h2>
        <p>Created a new database access class, that is used to connect to the database. It allows us to check for security holes, and identify parts of the code that can be optimized</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Module Loading optimized</h2>
        <p>With the help of the new Database Access tools, we optimized the loading of modules on every page. We have also made improvements to speed in many other areas, significantly improving page load times.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Started software security audit</h2>
        <p>We have started going through every single file, to identify security vulnerabilities and fix them before they become a problem. This will be an ongoing task, since it takes time to go through every single database query.<br /><br />So far, all files in the root folder are checked and fixed, and we have started on files in the classes folder.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Improvements to Session security</h2>
        <p>As part of the security audit, we have greatly increased the security of sessions, making it significantly harder to "steal" a user's session.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Using Zend to encode core files that do not affect functionality.</h2>
        <p><strong>Technical Details:</strong> We have used Zend to encode 2 core files: products.php and DataAccess.class.php. This means that users can not view or edit the source code for those files. This will allow us to use the same file set for all versions of the software, by making it a lot harder to enable features that do not come with the software product that is purchased.<br /><br />
            No existing files will ever be encoded that are not currently encoded.<br /><br />
            Since users can not view or edit the source code on those files, we make sure to keep anything that might affect what the site looks like or how the site works outside of those files. Any "functionality" that might ever need to be edited or customized is kept out of the encoded files. We have created developer's release notes, that are available upon request, that go into much more technical details concerning the DataAccess.class.php file, along with other technical details on development changes between 1.0.5b and 2.0.0b</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Created developer release notes</h2>
        <p>There are developer release notes available upon request, which go over the technical details of development changes between version 1.0.5b and 2.0.0b.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Created XSS fix specifically for new releases.</h2>
        <p>Version 2.0.0b (and some later snapshots of 1.0.5b) have it's own xss security fix, customized for this software, called clean_inputs.php. The <strong>xss_filter_inputs.php file is not needed</strong> for this software.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Add ability to send email through SMTP directly</h2>
        <p>Added ability to connect directly to the smtp server to send email</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Consolidated non-functional code into products.php</h2>
        <p>Consolidated non-functional code into a single products.php file. Improved licensing and code structure.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Extra cost field</h2>
        <p>-Added "adds cost" checkbox to the optional fields table.&nbsp; When
            checked, the seller can specify extra costs that add on to the final
            bid price, for example if a seller wants to add a shipping and handling
            cost.<br>- Fixed the closing e-mail system that sends out closing e-mails to bidders and sellers for dutch auctions.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Add functionality to check the existence of all extensions needed to run Paypal Pro</h2>
        <p>The admin section for PayPal Pro now displays PASSED or FAILED next to each server requirement.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Authorize.net extensions check</h2>
        <p>Added the extension test to check all Authorize.net required extensions for the server.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Individual mapping fields need to be displayed within Printer Friendly Display page</h2>
        <p>Added display of individual address, city, state, country and zip mapping fields to printer friendly display page</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Date ends and time remaining not in ad detail and printer friendly ad detail</h2>
        <p>Added display of end date and time remaining can now be displayed within classified ad detail and printer friendly display</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Added structure for licenses with hyphens and sub-domains</h2>
        <p>The licensing structure has been modified to allow for use on a number of sub-domains. Special cases of hyphens in the sub-domain and
            sub-domain.sub-domain.domain instances accounted for now.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Storefront subscription edit/insert ability within admin tool</h2>
        <p>Added ability to edit user storefront subscriptions within admin tool.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Zip Code Module data updated to latest zip data</h2>
        <p>Updated zip code data in the Geo_Zip module to include the 2006 updates.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Added "yes" radio button missing in "charge a percentage of final bid at end
            of auction"</h2>
        <p>The "yes" radio button was missing in "charge a percentage of final bid at
            end of auction" admin switch within PRICE PLAN &gt; COST SPECIFICS
            admin tool so that the above setting could not be changed to "yes". Radio is now added.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Parse error in Featured Ads Pic 1</h2>
        <p>A parse error potentially existed when using the Featured Ads Pic Level 1
            module. This was due to a commented line that some versions of php
            ignore the comment and parse the line anyway. Removed this line
            completely.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Thumbnails not displaying properly</h2>
        <p>The script was unnecessarily getting information on thumbnail image twice
            from the database.&nbsp; The queries are now optimized.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Certain variables not moved to new auction from old auction during renewal process</h2>
        <p>During auction renewal process fixed population of these fields within the new auction from the old auction data:<br>1. Price<br>2. Duration (used current renewal session variable)<br>3. Search Text<br>4. EMAIL<br>5. PRICE_PLAN_ID</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Database error</h2>
        <p>- Fixed sql queries that were causing errors in the search transaction admin facility</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Opening aff.php (affiliate side) closes the Admin session (logs out)</h2>
        <p>Fixed proper time used within the affiliate file to close sessions.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Nonexistent function call in admin_site_class.php to get_auction_data() appears when viewing user data</h2>
        <p>Fixed function call error to non-existent get_auction_data.&nbsp; Changed
            function call from get_auction_data to get_classified_data.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Admin logged out when client browse the client side</h2>
        <p>Fixed the bug in some cases where admin goes to client side, they were logged out of the admin panel.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Fix table layout for 'Paid Invoices'</h2>
        <p>Improved the layout for 'Paid Invoices'</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Error in renew/upgrade process within Auction only configuration</h2>
        <p>Changed code to properly set auction price plan id within upgrade/renewal session</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Error in subscription renewal when in auction only configuration</h2>
        <p>Changed code to properly set auction price plan id when renewing a subscription</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - The geodesic_feedbacks table created wrong within Classifieds to ClassAuction upgrade</h2>
        <p>- Fixed geodesic_feedbacks create table sql statement used within upgrade
            from Enterprise Classifieds (older code base) to ClassAuctions (new
            code base)</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Registration Approval admin settings confusing</h2>
        <p>Moved admin setting "Admin approves all registrations" to be part of the setting: <br><br>Admin &gt; E-Mail Setup &gt; Notification E-Mail Settings &gt; Registration Verification System</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Remove descriptions from admin</h2>
        <p>Removed most of the page descriptions in the admin. Instruction will be
            consolidated in the user manuals and tutorials to reduce incorrect
            information due to duplications.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Class Ent &gt; Max Word Width Bug</h2>
        <p>Fixed "no max word width setting" bug.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Mod rewrite bug on some urls</h2>
        <p>SEF bug relating to URL conversion fixed.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Continuous Redirecting problem</h2>
        <p>Added session cookie checks (no more redirect loops if client has cookies turned off)</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Editing an auction</h2>
        <p>Improved the edit auction protection. Changed the code to not allow url query
            string access to still allow the client to edit an auctions details
            after the auction has received bids if the admin has allowed the client
            to edit the auction details through the following admin tool setting:<br><br>LISTING &gt; CONFIGURATION &gt; GENERAL &gt; "switch for editing after auction has begun"</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Multiple price plans in group error when deleting</h2>
        <p>Fixed that appeared when an admin would remove an attached price plan from a
            user group when the admin deletes an attached price plan</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Affiliate templates not used to display affiliate data</h2>
        <p>Changed the field name used within the affiliate template sql queries to pull
            the correct ad detail, checkbox and extra checkbox template id's from
            the geodesic_pages_templates_affiliates database table. </p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - CSS and header text missing for past final fees to be charged in transaction details page</h2>
        <p>Within the transaction details page of the place a listing process the past
            final fees to be charged were not display properly with css and a
            header row to label the columns of information was missing.&nbsp; Text
            was added for the column header row and css is properly used now.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - HTML title module does not display current category or current listing title</h2>
        <p>Made changes in the module_title_ads.php file to display the category name
            while browsing category or the listing title when displaying the
            listing details page</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Memory limit exceeded when saving templates</h2>
        <p>- Improved module attachment routine called after saving&nbsp; a template.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Total registered users module reporting wrong registered user count</h2>
        <p>Changed sql query that selects the count of registered users to better report the number of registered users on the site</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Previous final fees pending not displayed with listing cost on transaction details page of place a listing process</h2>
        <p>Fixed code to display pending final fees within place a listing process</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Renewed auction values cannot be edited as the auction appears to have been bid on</h2>
        <p>When renewing an auction changed code to NOT populate the current_bid field
            so the renewed auction would not appear to have been bid on yet...and
            still editable</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Display order of question dropdowns do not default to alphabetical within the edit ad process</h2>
        <p>Added alphabetical as the second default ordering scheme when pulling the
            dropdown question values from the database within the edit listing
            process.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Zip distance filter value not set correctly within extra pages</h2>
        <p>Fixed variable name reference within extra_pages.php file to correctly set
            zip filter distance value correctly within extra pages.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - File types that use icons were not displaying within the place a listing process</h2>
        <p>Fixed display of file types that require file icons within place a listing process.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Auction start time not setting properly within place a listing process</h2>
        <p>Fixed code to set auction start time properly within the place a listing process</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Final fee transactions do not have auction title/id reference within balance transaction history</h2>
        <p>Fixed display of auction information for final fee transactions within the
            balance transaction history list for an individual client on the client
            side</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - HTML within descriptions messing up columns within affiliate browsing</h2>
        <p>Added strip_tags to partial description displayed while browsing affiliate ads</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Category count not updated after a listing is renewed using site balance/invoice payment option</h2>
        <p>Fixed it so that category count is updated when a listing is renewed.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Adding additional price plans to a user group (name and description fields)</h2>
        <p>Corrected problem when attaching multiple price plans to one user group. The name
            and description given were not required so the place a listing process
            would show no choices. Made the name required.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - API not setting installation types correctly to different installations</h2>
        <p>Fixed api calls to pass the correct installation type to the api</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - The "mark as unpaid link" within invoice detail</h2>
        <p>Fixed link data for "mark as unpaid" link within the invoice detail so that
            it does not return an error and correctly changes the status of the
            invoice</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Subcategory navigation modules not functioning properly</h2>
        <p>- Fixed display of category description within subcategory navigation modules <br>- Fixed category links within subcategory navigation module </p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Problem assigning price plan id to price plan that doesn't exist in renewal</h2>
        <p>Added check to only assign price plan id if price plan itself existed.&nbsp; If the price plan
            assigned to the listing itself does not exist do not override the user
            assigned price plan id.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Buy now and bid buttons not appearing within auction detail when user logged out</h2>
        <p>- Changed code to display the buy now and make bid links when user logged
            out, but push to login procedure, and then to bidding or buy now page
            once logged in.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - SSL state set within registration admin tool is not saved within the registration code form</h2>
        <p>Fixed it to use the proper ssl/non-ssl url within the registration code
            form of the registration process according to the "ssl" setting in the
            registration admin tool.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - When deleting image in position 1 (thumbnail) the script does not replace it.</h2>
        <p>Added code within the edit image process to check if the first image has been removed and make sure it is replaced if not</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Mime type not set with images when client adds a new image after listing has already been placed</h2>
        <p>Fixed issue where images inserted within the edit images process were not displaying on the site</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Multiple term checkbox questions were not returning results within searches</h2>
        <p>Fixed query language when searching category specific questions to search
            multiple term category specific questions better as checkbox value
            searches were returning no results.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Multiple search terms in different orders return different results</h2>
        <p>Made it strip empty spaces from each of multiple search terms
            so that each term is searched equally no matter the order they are
            entered</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Seller ratings not displayed within auction detail within auction only configuration</h2>
        <p>Changed code to properly display seller ratings within auction only configuration</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Photo count bug</h2>
        <p>Fixed "no image count limit" bug when editing an ad in a category that has a category specific price plan attached. </p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Sql error within renewal query of Linkpoint payment handler</h2>
        <p>Fixed sql error within query that insert the Linkpoint renewal query into the Linkpoint transaction database table</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Credit expirations set on a fixed date within registration freebies does not set proper date</h2>
        <p>Fixed the update function for the registration freebies admin tool of
            the user groups admin tool to properly set the fixed expiration date
            for user credits upon registration</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Within search function if optional fields are searched but return no results an sql error is caused</h2>
        <p>Fixed search function query to return no search results properly if there are no site wide optional search results</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Change valign=center to valign=middle within all featured ad pic modules</h2>
        <p>Corrected the HTML to change "valign=center" to "valign=middle" within all featured ad pic modules.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Zip filter has no effect on the next and previous links in the listing detail display</h2>
        <p>Fixed sql query that selects next and previous listings used within the
            listing detail page.&nbsp; The zip filter values now have an effect on
            the listings chosen for these links.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - CSS class tags missing from &lt;td&gt; that surrounds optional registration field labels in user information edit form</h2>
        <p>moved css class tags within the &lt;tr&gt; tag to the &lt;td&gt; that
            surrounds optional registration field labels in user information edit
            form</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - User group error on creation</h2>
        <p>Corrected problem when a user group was created and the name and description were
            not entered. The name is now required to ensure data validity.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Multiple search terms within admin text search tool returned no results</h2>
        <p>Fixed admin text search tool to work better with multiple term searches</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Price plan id of old auction not moved to new auction when the old auction is renewed</h2>
        <p>Changed sql query in copy_old_auction_to_new function of
            renew_upgrade_sellers_ads.php file to move old price plan id into new
            auction data when an auction is renewed.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Field associations and Filters not checked properly</h2>
        <p>- Added checks when deleting filters to eliminate associations being active after a filter is deleted.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Bad HTML on the choose a category page</h2>
        <p>Fixed on the initial choose a category page, HTML was not correct so if an
            external stylesheet was used the font management from the admin could
            be overlooked.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Precurrency, Postcurrency, Money Format Display</h2>
        <p>Corrected precurrency, postcurrency and money values to display properly and show
            the correct number format for American, European, Japanese, etc.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - CSS issue in the storefront</h2>
        <p>Photo column in the category browsing within the storefront was incorrectly displaying the table border for that column.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Improve language delete facility</h2>
        <p>Made improvements to language delete facility to verify removal of all language specific data from database</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Expired ads HTML display is out of alignment</h2>
        <p>Moved closing &lt;/table&gt; placement within list_expired_ads function of
            user_management_expired_ads.php file to properly display expired ads</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Search form does not "turn off" classifieds/auctions if one of them happens to be turned off</h2>
        <p>Fixed search form to not display auction/classified specific search if one or the other functionality is turned off.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Classified/Auction pricing still displays when turned off in admin tool within user data display on client side</h2>
        <p>Fixed it so that on the client side, on the "My Account" page, it only
            shows the price plans for the listing types allowed.&nbsp; If only
            allow auctions site wide only display auctions price plan...same for
            classifieds.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - MySQL 5 compatibility fixes</h2>
        <p>Corrected errors and added compatibility for MySQL 5</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Credit card expiration not sent properly within Paypal pro payment handler</h2>
        <p>- Changed code to properly get credit card expiration data within the Paypal Pro payment handler</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Category count is not updated when renewing through the Authorize.net SIM payment method</h2>
        <p>- Added code to update category count when renewing through the Authorize.net SIM payment method</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Paging links within display user feedback feature do not link to other pages properly</h2>
        <p>Fixed pagination links within display user feedback facility top properly link to next page</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - User data not displayed within transaction data sent to payment gateway while adding to site balance</h2>
        <p>Created user data variable to pass user information data to payment gateway correctly while adding to site balance</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Hebrew language search terms improperly encoded and return no search results</h2>
        <p>Created beta switch to not encode search terms if character (such as
            Hebrew) will not return any search results from database if they are
            urlencoded.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Registrations approved within the admin tool while using the api tool generates an api error</h2>
        <p>Registrations approved through the admin tool while using the api were
            not sending the proper information to the api tool.&nbsp; Changed code
            to pass necessary information to the api properly</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - The "d" variable passed through query string/post conflicting with "d" cookie set on clients domain</h2>
        <p>Clients domain/host was setting a "d" cookie variable that interfering
            with "d" variable used within the admin/index.php.&nbsp; Changed code
            that passes "d" value to check whether it is passed by "get" or "post"
            and use variable from "$_GET" or "$_POST" properly instead of
            "$_REQEST" where the cookie was overriding variable.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Slashes in admin messaging history title, subject and message</h2>
        <p>Added stripslashes to display of title, subject and message body of past emails sent within the admin messaging history tool.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Newest ads page HTML formatting not displaying properly</h2>
        <p>Placed a missing HTML (&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;) after the display
            of the "ads" within the newest listing page to properly display the ads
            section</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Phone 2 field missing from registration complete email to admin</h2>
        <p>Changed code that creates the body of the registration complete email to admin
            to correctly display the phone 2 data.&nbsp; This data was previously
            missing from that email.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Auction title not displayed within balance transaction history page for final fee entry</h2>
        <p>Changed code to display auction title correctly for final fee only transactions in the balance transaction history page.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Eliminate the requirement for short tags in php</h2>
        <p>Eliminated the need to use short tags in php.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Admin Delete Button not working</h2>
        <p>Fixed client side admin delete function to properly check and remove classifieds/auction data correctly</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Not Saving State Filter</h2>
        <p>Fixed State Filter Bug</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Sold column in active listings still displays when not in use</h2>
        <p>Fix active listing table to not display sold column if sold icon not in use</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Copied categories are not urldecoded</h2>
        <p>Changed code to not urlencode category name data when copying from one category to a new one</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - When no search results for id search the result page has no HTML table around results</h2>
        <p>Added HTML table tags around "no id results" text when searching for a listing id within search tool.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Comment out the "setting moved" lines in the admin</h2>
        <p>Commented out old setting locations that contained text stating that the setting
            had actually moved. Unnecessary display of change.</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Initial site balance could be added more than once at registration</h2>
        <p>Fixed code to properly check whether initial site balance has been added at registration</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Payment amount not passed properly to idev affiliate while using standard Paypal.com payment handler</h2>
        <p>Changed code to properly pass correct transaction amount to idev affiliate</p>

        <h2 id="2.0.1b.<?php $noteId++;
                        echo $noteId; ?>"> - Price plan display on admin home page</h2>
        <p>Fixed price plan count on the home page for the classifieds. Showed an extra count for the admin user.</p>


        <div id="FogBugzFooter">Produced by <a href="http://www.fogcreek.com/FogBugz">FogBugz</a></div>
    </div>

</body>

</html>
