<?php
if (have_rows('what_people_are_saying')):
    while (have_rows('what_people_are_saying')): the_row();
        $heading = get_sub_field('heading');
        $content = get_sub_field('content');
        ?>
        <div class="what_people_are_saying common-padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-12">
                        <div class="content-wrap">
                            <div class="heading">
                                <?php echo $heading; ?>
                            </div>

                            <div class="content">
                                <?php echo $content; ?>
                            </div>

                            <div class="people_saying">
                                <?php
                                if (have_rows('videos')):
                                    while (have_rows('videos')) : the_row();
                                        $video_image = get_sub_field('video_image');
                                        $video_link = get_sub_field('video_link');
                                        ?>
                                        <div class="slick-slide">
                                            <div class="main-video-wrap" data-iframe='<?php echo $video_link; ?>'>
                                                <div class="image-wrap">
                                                    <img src="<?php echo $video_image; ?>" alt="video-image" class="video-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" alt="play" class="play-icon">
                                                </div>

                                                <div class="iframe-wrap">

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
endif;
?>

<script>
    jQuery(document).ready(function ($) {
        jQuery('.main-video-wrap').on('click', function (ev) {
            jQuery('.main-video-wrap').removeClass('iframevideo');
            jQuery('.iframe-wrap iframe').remove();
            jQuery(this).addClass('iframevideo');
            console.log(jQuery(this).attr("data-iframe"));
            jQuery(this).children('.iframe-wrap').html(jQuery(this).attr("data-iframe"));
        });
    });
</script>