<?php
/**
 * Main analytics code.
 *
 * @todo look into alternates
 */
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PRN1NWC8N6"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-PRN1NWC8N6');
    var downloadPatch = function(url) {
        gtag('event', 'click', {
            'event_category': 'Patch Download Click',
            'event_label': url,
            'transport_type': 'beacon',
            'event_callback': function(){document.location = url;}
        });
    }
</script>
