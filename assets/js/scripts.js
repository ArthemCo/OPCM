(function() {
    jQuery(document).ready(function() {

        // Makes sure last grid item floats left
        jQuery('.archive-grid .columns').last().addClass('end');

        // Adds Flex Video to YouTube and Vimeo Embeds
        jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
            if (jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5) {
                jQuery(this).wrap("<div class='widescreen flex-video'/>");
            } else {
                jQuery(this).wrap("<div class='flex-video'/>");
            }
        });

    });

}());