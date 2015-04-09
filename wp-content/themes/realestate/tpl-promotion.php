<?php
$i = 0;
$args = array(
    'post_type' 	 => 'promotion',
    'posts_per_page' => $posts_per_page ,
    'order'			 => 'asc'
);
$queryRows = get_posts($args);
?>

<div class="row" style="display: table; width: 100%">
    <?php
    foreach ($queryRows as $row) {
        //print_r($row);
        $i++;
        $urlimage = wp_get_attachment_url(get_post_thumbnail_id($row->ID));
        $urllink = get_the_permalink($row->ID);
        //

        $description = get_post_meta($row->ID,'tt_description',true);
        //echo $row->post_content;
        ?>

        <div class="span4 gap15" style="display: table-cell;">
            <div class="pic"><a class=""><img src="<?php echo $urlimage; ?>" style="visibility: visible; opacity: 1;"></a> <a href="<?php echo $urllink;?>" class="zoom img-circle"> </a> </div>
            <h3><a href="<?php echo $urllink;?>"><?php echo $row->post_title;?></a></h3>
            <p><?php echo $description;?></p>
            <a class="btn-homepage-menu btnpromotion" href="<?php echo $urllink;?>">LEARN MORE</a>
        </div>
    <?php }?>

</div>
