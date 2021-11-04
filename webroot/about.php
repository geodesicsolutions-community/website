<?php
require '../bootload.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <?php template('analytics') ?>
</head>
<body>
    <?php template('header') ?>
    <main>
        <div class="hero">
            <h1 class="hero__title">About</h1>
            <p class="hero__description">A brief history of how this project came to be</p>
        </div>
        <p>
            This is an open source classifieds and auctions software project, maintained by the community.
        </p>
        <p>
            We welcome any help you can give! Or if you just want to use the software, that's fine too.  The software
            is completely open source and free to use under the MIT license.
        </p>
        <p>
            The software was originally sold and had licensing restrictions in place.  The company has since closed,
            confirmed by one of the owners. That owner also gave permission to use the software since the company was
            closed.  Since there was still interest in the software, a community was formed to maintain and bring
            the software forward.
        </p>
        <h2>geodesicsolutions.org vs .com</h2>
        <p>
            The original website <em>geodesicsolutions.com</em> expired in July 2021.  We noticed that the .org domain
            was available, so decided to use .org to create and maintain an open source version of the software.
            This website is not affiliated with or endorsed by the former Geodesic Solutions LLC. in any way.
        </p>
        <h2>Community administrator:</h2>
        <p>
            This site and the source code on it are run by a former employee (known in Geo community as jonyo) who did
            more recent contract work for the company before it shut down.  As result of that contract work, he still
            had full access to the latest un-encoded source code, along with a backup copy of the wiki.  He was able to
            contact one of the owners to confirm that the company is indeed shut down, and as such, has permission to
            release the source code free and un-encoded.
        </p>
        <p>
            While he currently runs the website, he leaves a lot of the work to volunteers.  His wish is to just
            be one of the community, not the main person running the show.  So we re-iterate, if you would like to
            donate your time, we have plenty to do!  :)
        </p>
    </main>
    <footer class="footer">
        If you came here looking for domes, sorry, this is not the page you are looking for! This is for the classified
        and auction software known as GeoCore.
    </footer>
</body>

</html>
