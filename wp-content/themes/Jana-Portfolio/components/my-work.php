<?php
$row_1_title = get_field('row_1_work_title');
$row_1_description = get_field('row_1_work_description');
$row_1_image = get_field('row_1_image');

$row_2_title = get_field('row_2_work_title');
$row_2_description = get_field('row_2_work_description');
$row_2_image = get_field('row_2_image');

$row_3_title = get_field('row_3_work_title');
$row_3_description = get_field('row_3_work_description');
$row_3_image = get_field('row_3_image');
?>

<section id="sectionTwo" class="my-work d-flex flex-column site-bounds pt-5">
    <div class="my-work-inner d-flex flex-row justify-content-center align-items-center">
        <div class="col-left">
            <div class="img"><img src="<?php echo $row_1_image['url']; ?>"></div>
        </div>
        <div class="col-right d-flex justify-content-center align-items-start flex-column">
            <h2><?php echo $row_1_title; ?></h2>
            <?php echo $row_1_description; ?>
            <?php 
            $link1 = get_field('row_1_link');
            if( $link1 ): 
                $link1_url = $link1['url'];
                $link1_title = $link1['title'];
                $link1_target = $link1['target'] ? $link1['target'] : '_self';
                ?>
                <a class="button pink-button" href="<?php echo esc_url( $link1_url ); ?>" target="<?php echo esc_attr( $link1_target ); ?>"><?php echo esc_html( $link1_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="my-work-inner d-flex flex-row justify-content-center align-items-center">
        <div class="col-left">
            <div class="img"><img src="<?php echo $row_2_image['url']; ?>"></div>
        </div>
        <div class="col-right d-flex justify-content-center align-items-start flex-column">
            <h2><?php echo $row_2_title; ?></h2>
            <?php echo $row_2_description; ?>
            <?php 
            $link2 = get_field('row_2_link');
            if( $link2 ): 
                $link2_url = $link2['url'];
                $link2_title = $link2['title'];
                $link2_target = $link2['target'] ? $link2['target'] : '_self';
                ?>
                <a class="button pink-button" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="my-work-inner d-flex flex-row justify-content-center align-items-center">
        <div class="col-left">
            <div class="img"><img src="<?php echo $row_3_image['url']; ?>"></div>
        </div>
        <div class="col-right d-flex justify-content-center align-items-start flex-column">
            <h2><?php echo $row_3_title; ?></h2>
            <?php echo $row_3_description; ?>
            <?php 
            $link3 = get_field('row_3_link');
            if( $link3 ): 
                $link3_url = $link3['url'];
                $link3_title = $link3['title'];
                $link3_target = $link3['target'] ? $link3['target'] : '_self';
                ?>
                <a class="button pink-button" href="<?php echo esc_url( $link3_url ); ?>" target="<?php echo esc_attr( $link3_target ); ?>"><?php echo esc_html( $link3_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>