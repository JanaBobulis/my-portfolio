<?php
$copy = get_field('hero_copy');
$image = get_field('hero_image');
?>

<section class="hero" id="sectionOne">
    <div class="hero-inner d-flex flex-row justify-content-center align-items-center site-bounds p-5">
        <div class="hero-copy">
            <?php echo $copy; ?>
            <?php 
            $link = get_field('link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
        <div class="hero-image"><img src="<?php echo $image['url']; ?>" alt="Jana Bobulis"></div>
    </div>
</section>