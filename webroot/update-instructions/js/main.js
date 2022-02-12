/**
 * Geo Builing Tools, Internal use only.
 * Located in repo, at UTILITIES/build/
 *
 * $Id: main.js 24320 2012-08-08 21:43:22Z jonyo $
 */
//Main JS file for update instruction script

//make is to when selection changes

jQuery(document).ready (function () {
    //Newer jquery stuff
    jQuery('.show_hide_link').click(function () {
        jQuery(jQuery(this).attr('href')).toggle('slow');
        return false;
    });
});

jQuery(window).load (function () {
    //add ID to each top level list item so can be linked with hash
    jQuery('ol.top').children('li:visible').each(function (index) {
        index++;
        jQuery(this).attr('id','step'+index);
    });

    if (window.location.hash && jQuery(window.location.hash).length) {
        var topOffset = jQuery(window.location.hash).offset().top - 5;
        if (topOffset>0) {
            jQuery('html, body').animate({
                scrollTop : topOffset
            }, 2000);
        }
    }

    jQuery('p.copy').click(function () {
        //hidden thingy...  if copyright is clicked on, make it do stuff
        jQuery('ol.top').children('li:visible').click(function () {
            window.location.hash = '#'+jQuery(this).attr('id');
        });
    });
});

Event.observe(window,'load',function () {
    if ($('product')) {
        $('product').observe('change', function () {
            $('productForm').submit();
        });
    }
    if ($('edition')) {
        $('edition').observe('change', function () {
            $('productForm').submit();
        });
    }

    if ($('tplUpdateText')) {
        $('tplUpdateSelect').observe('change',function () {
            $('tplUpdate').setValue(this.getValue());
            $('productForm').submit();
        } );
        $('tplUpdateText').observe('click', toggleTplUpdate)
            .setStyle ({cursor: 'pointer'});
    }

    if ($('adjustStylesToggle')) {
        $('adjustStylesToggle').observe('click', toggleStylesInstructions)
        .setStyle ({cursor: 'pointer', color: 'blue'});
    }
    if ($('applyTextToggle')) {
        $('applyTextToggle').observe('click', function () {
            $('applyTextToggle').hide();
            $('applyTextInstructions').show();
        }).setStyle ({cursor: 'pointer', color: 'blue'});
    }
    if ($('adjustPHPToggle')) {
        $('adjustPHPToggle').observe('click', function () {
            $('adjustPHPToggle').hide();
            $('adjustPHPInstructions').show();
        }).setStyle ({cursor: 'pointer', color: 'blue'});
    }

    if ($('purchaseUpdateToggle')) {
        $('purchaseUpdateToggle').observe('click', function () {
            $('purchaseUpdateToggle').hide();
            $('purchaseUpdateInstructions').show();
        }).setStyle ({cursor: 'pointer', color: 'blue'});
    }

    if ($('geoRegionsToggle')) {
        $('geoRegionsToggle').observe('click', function () {
            $('geoRegionsToggle').hide();
            $('geoRegionsInstructions').show();
        }).setStyle ({cursor: 'pointer', color: 'blue'});
    }
});
function toggleTplUpdate ()
{
    $('tplUpdateText').hide();
    $('tplUpdateSelectBox').show();
}

function toggleStylesInstructions ()
{
    $('adjustStylesToggle').hide();
    $('adjustStylesInstructions').show();
}
