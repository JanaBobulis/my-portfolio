<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>

<main id="primary" class="wrapper content-area front-page" role="main">
    <div class="content-rows site-bounds">
        <section id="sectionOne">About me</section>
        <section id="sectionTwo">My Work</section>
        <section id="mySkills">My Skills</section>
        <section id="sectionThree">Contact</section>
    </div>
</main>

<?php
get_footer();