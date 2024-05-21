<?php
    $contactCopy = get_field('contact_copy');
?>
<section class="contact">
    <div class="contact-inner d-flex flex-md-row site-bounds">
        <div class="contact-left"><?php echo $contactCopy; ?></div>
        <div class="contact-right"><?php echo do_shortcode('[forminator_form id="63"]'); ?></div>
    </div>
</section>
