<?php
    $image = wp_get_attachment_image_src(get_field('page_background_image'), 'full');
?>

<header class="na-page-header" style="background-image: url('<?php echo $image[0]; ?>');">
</header>