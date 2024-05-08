<?php
$title = get_field('row_1_work_title');
$description = get_field('row_1_work_description');
$row_1_image = get_field('row_1_image');
?>

<section id="sectionTwo" class="my-work">
    <div class="my-work-inner d-flex flex-row justify-content-center align-items-center site-bounds">
        <div class="col-left">
            <div class="img"><img src="<?php echo $row_1_image['url']; ?>"></div>
        </div>
        <div class="col-right d-flex justify-content-center align-items-center flex-column">
            <h2><?php echo $title; ?></h2>
            <?php echo $description; ?>
        </div>
    </div>
</section>