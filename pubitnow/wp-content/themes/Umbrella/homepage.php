<?php
/**
Template name:Homepage
 *
 * @package Fabthemes
 */

get_header(); ?>


<!-- Slider -->

<div id="home-slider" class="home-slider-section clearfix">
    <?php
        $slideid = ft_of_get_option('fabthemes_slider','2');
        $slide_entries = get_post_meta($slideid, 'fab_group_demo', true );
        echo '<ul class="slides">';
        foreach ( (array) $slide_entries as $key => $slide_entry ) {
        $img = $title = $desc = $caption = '';
        if ( isset( $slide_entry['title'] ) )
            $title = esc_html( $slide_entry['title'] );
        if ( isset( $slide_entry['description'] ) )
            $desc = wpautop( $slide_entry['description'] );
        if ( isset( $slide_entry['image'] ) ) {
            $img = esc_html( $slide_entry['image'] );
        }
        $link = isset( $slide_entry['link'] ) ? esc_html( $slide_entry['link'] ) : '';
     ?>

        <li>
            <a href="<?php echo $link;?>">    <img src="<?php echo aq_resize( $img, 1920, 600, true,true,true );?>" alt=""> </a>
            <div class="slide-caption">
                <div class="row">
                    <div class="column small-8">

                        <div class="animask"><h2><?php  echo $title; ?> </h2></div>
                        <div class="animask"><p><?php  echo $desc; ?> </p></div>

                    </div>
                </div>
            </div>
        </li>

    <?php  }
    echo '</ul>';
    ?>

</div>

<!-- Services -->

<div id="home-services" class="home-section">

<div class="row">
    <div class="column small-12">
        <div class="section-title">
            <h2> <?php _e('Our Expertise','fabthemes');?> </h2>
            <p> <?php _e('Listed are our Expertise','fabthemes');?> </p>
        </div>
    </div>
</div>


<div class="row">
    <?php
    $services_count = ft_of_get_option('fabthemes_service_count','3');
    $args = array( 'post_type' => 'fab_service', 'posts_per_page' => $services_count );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="columns medium-4">
            <div class="home-service-item">
                <?php $service_icon = get_post_meta( $post->ID, 'fab_icon', true ); ?>
                <?php if($service_icon){ ?> <span> <i class="fa <?php echo $service_icon; ?>"></i></span> <?php } ?>
                <h3> <?php the_title(); ?> </h3>
                <p> <?php echo excerpt('20'); ?> </p>

            </div>
        </div>
    <?php endforeach;
    wp_reset_postdata();?>
</div>

</div>

<!-- CTA -->

<div id="home-cta" class="home-section">
<div class="row">
    <div class="column small-12">
        <div class="cta-content">
            <p> <?php echo ft_of_get_option('fabthemes_ctatext'); ?> </p>
            <?php $contact_page = ft_of_get_option('fabthemes_appointment');?>
        </div>
    </div>
</div>
</div>


<!-- Blog -->


<!-- Testimonials -->



<?php get_footer();