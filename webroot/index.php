<?php
require '../bootload.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geodesic Solutions Community</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php template('analytics') ?>
</head>
<body>
    <?php template('header') ?>
    <main>
        <div class="hero">
            <h1 class="hero__title">Geodesic Solutions Community</h1>
            <p class="hero__description">Community supported open source classifieds and auctions software</p>
        </div>

        <p>
            <strong>What:</strong> This website is a new home for the former geodesicsolutions.com community, and a
            place to get the latest GeoCore software download for free and unencoded.
            The website is still being set up, and we welcome any volunteers that would like to help!
        </p>
        <p>As time allows, we will work on adding to this site:</p>
        <br>
        <h2>Todo List (help needed for any of these items):</h2>
        <ul>
            <li>Browse the wiki, check for other broken things caused by older dokuwiki plugins.  Things like
                the lists plugin (no new version since 2008) and tip plugin (no new version since 2004 or something).
            </li>
            <li><strong>Partially complete (still in testing stages)</strong>: Full source code for latest version,
                open source, no encoding at all, with licensing checks removed.
                <ul>
                    <li>This includes unreleased updates for a "next version" that was never officially released.
                        Includes: PHP 7.* fixes, update to stripe payments.</li>
                    <li>It uses a github repo, see the link in the header of this website!</li>
                    <li>Help needed in the code:  See the <em>issues</em> section of the github repo.  We welcome
                        pull requests!</li>
                </ul>
            </li>
            <li>Look for references to the old geodesicsolutions.com in the wiki and update as applicable.</li>
            <li>This website needs work!  And it is also open source, anyone can help with changes.
                See <a href="https://github.com/geodesicsolutions-community/website">website github repo</a>
            </li>
        </ul>
    </main>
    <footer class="footer">
        If you came here looking for domes, sorry, this is not the page you are looking for! This is for the classified
        and auction software known as GeoCore.
    </footer>
</body>

</html>
