<?php
require '../bootload.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GeoCoreCE: Downloads, Documentation, and Other Resources</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php template('analytics') ?>
</head>
<body>
    <?php template('header') ?>
    <main>
        <div class="hero">
            <h1 class="hero__title">Downloads, Documentation, and Other Resources</h1>
            <p class="hero__description">This page includes links to software downloads, documentation and discussion forums.</p>
        </div>
        <h2 id="info">Info:</h2>
        <ul>
            <li>
                <a href="/wiki">wiki</a>
            </li>

            <li>
                <a href="https://github.com/geodesicsolutions-community/geocore-community/discussions">Community Discussion</a>
            </li>

            <li>
              <a href="https://github.com/geodesicsolutions-community/geocore-community/releases">Release Changelogs</a> -
                From v20.0.0 forward.
            </li>

            <li>
              <a href="/update-instructions">Legacy "Full Upgrade Instructions"</a> - dynamic based on version
                you are updating from. Up to and including v18.02.
            </li>

            <li>
              <a href="/changelog">Legacy Changelog</a> - Up to and including v18.02.
            </li>

            <li>
                <a href="https://www.facebook.com/GeoCoreCE/">GeoCoreCE Facebook page</a> - Major announcements will be posted here. Please follow and like.
            </li>
        </ul>
        <h2 id="software">Software:</h2>
        <article class="container">
            <strong>18.02.0 Patch</strong> -
            <button
                onclick="downloadPatch('/patches/unencoded_unlicense_patch_18.02.0.bff354dbba748dd30c1d9a7d1ccc7dd61a1b95fc.zip')"
                class="button"
            >
                download 18.02.0 Unlicense patch
            </button>
            <br><br>
            <strong>Use for:</strong> 18.02.0 released by the old company. Not needed for the new open source version.
            (This was made with permission from one of the previous owners, see <a href="/about.php">about</a>)
            <ol>
                <li>Download and unzip the patch file</li>
                <li>Before you upload any of these, if you already have the .unenc version of the files (not
                    common), rename them so you have a backup of the old file.
                </li>
                <li>
                    Upload <span class="code code--inline">products.unenc.php</span> to
                    <span class="code code--inline">classes/php5_classes/</span> folder
                </li>
                <li>
                    Upload <span class="code code--inline">DataAccess.class.unenc.php</span> to
                    <span class="code code--inline">classes/php5_classes/</span> folder
                </li>
                <li>
                    Ignore <span class="code code--inline">updateFactory.unenc.php</span>!  Unless you are trying to
                    update to the last GeoCore version licensed under the old company 18.02.0, in which case, upload
                    it to <span class="code code--inline">upgrades/</span> folder
                </li>
            </ol>
        </article>
        <article class="container">
            <strong>20.0.0</strong> - Full Release - Community Edition:
            <ul>
                <li>PHP 7.4 / 8.0 / 8.1 required</li>
                <li>Fully open source</li>
                <li><a href="/update-instructions">Full Update Instructions Here</a></li>
                <li><a href="/wiki/installation/zipped/start">New Installation Instructions Here</a></li>
            </ul>
            <button
                onclick="downloadRelease('https://github.com/geodesicsolutions-community/geocore-community/releases/download/v20.0.0/geocore-ce.zip', '20.0.0')"
                class="button"
            >
                Download 20.0.0
            </button>
            <br>
            <br>

            <strong>Extra Template Sets for 20.0.0:</strong>
            <br>
            <button
                onclick="downloadTemplateSet('https://github.com/geodesicsolutions-community/geocore-community/releases/download/v20.0.0/fusion.zip')"
                class="button"
            >
                Download Fusion Template Set
            </button>
            <br>
            <button
                onclick="downloadTemplateSet('https://github.com/geodesicsolutions-community/geocore-community/releases/download/v20.0.0/marquee.zip')"
                class="button"
            >
                Download Marquee Template Set
            </button>
            <br>
            <button
                onclick="downloadTemplateSet('https://github.com/geodesicsolutions-community/geocore-community/releases/download/v20.0.0/tempo.zip')"
                class="button"
            >
                Download Tempo Template Set
            </button>

        </article>
        <article class="container">
            Source Code:  see the <a href="https://github.com/geodesicsolutions-community/geocore-community/">
            <i class="fa fa-github"></i> Github Repo</a>
        </article>
    </main>
    <footer class="footer">
        If you came here looking for domes, sorry, this is not the page you are looking for! This is for the classified
        and auction software known as GeoCore.
    </footer>
</body>

</html>
