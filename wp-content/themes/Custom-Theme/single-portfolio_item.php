<?php

get_header();

$title = get_field('portfolio_title');
$description = get_field('portfolio_description');
$link = get_field('portfolio_link');
$imageArray = get_field('portfolio_image');
if($imageArray){
    $image = $imageArray['sizes']['large'];
}
$file = get_field('portfolio_zip');
?>
<div class="container">
    <div class="row title-div">
        <h1 class="title-text"><?php echo $title ?></h1>
    </div>
    <div class="row description-div">
        <p class="description-text"><?php echo $description ?></p>
    </div>
    <div class="row image-div">
    <?php if($imageArray) : ?>
        <img src="<?php echo $image ?>" alt="" class="image-frontpage">
        <?php endif; ?>
    </div>
    <div class="row link-div">
        <?php if($link['target'] == '_blank') : ?>
            <a href="<?php echo $link ['url']; ?>" target="_blank" class="link-frontpage"><?php echo $link['title'] ?></a>
        <?php else : ?>
            <a href="<?php echo $link ['url']; ?>" class="link-frontpage"><?php echo $link['title'] ?></a>
        <?php endif; ?>
    </div>
    <div class="row link-div">
        <?php if( $file ): ?>
        <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
        <?php endif; ?>
    </div>
</div>
<?php

get_footer();

?>