<?php
    $skillset_copy = get_field('skillset_copy');
    $skillset_tags = get_field('skillset_tags');
?>

<section class="skillset pt-5 pb-5" id="mySkills">
    <div class="skillset-inner site-bounds d-flex align-items-center flex-md-row pt-5 pb-5">
        <div class="skillset-left"><?php echo $skillset_copy;?></div>
        <div class="skillset-right d-flex flex-wrap h-100 align-items-center jusitify-content-center"><div class="skillset-tags"><?php echo $skillset_tags; ?></div></div>
    </div> 
</section>