<?php 

get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$imageArray = get_field('page_image');
$image = $imageArray['sizes']['large'];
?>

<div class="container">
    <div class="row title-div">
        <h1 class="title-text"><?php echo $title ?></h1>
    </div>
    <div class="row description-div">
        <p class="description-text"><?php echo $description ?></p>
    </div>
    <div class="row image-div">
        <img src="<?php echo $image ?>" alt="" class="image-frontpage">
    </div>
    <div class="row link-div">
        <a href="<?php echo $link ['url']; ?>" class="link-frontpage"><?php echo $link['title'] ?></a>
    </div>
</div>

<?php

get_footer();