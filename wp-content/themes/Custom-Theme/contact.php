<?php
/**
 * Template Name: Contact
 */

get_header();
?>

<div class="contact-div">
<h1>Contact me!</h1>
    <?php
    echo do_shortcode(
        '[contact-form-7 id="34" title="Contact"]'
    );
    ?>
</div>


<?php
get_footer();
?>