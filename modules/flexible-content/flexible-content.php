<?php
/*
*   Flexible Content
*
*   Includes files for different content types
*/


// $image_bg = '';
// if(get_field('image_bg')) {
//     $image_bg = 'style="background-image: url('. get_field('image_bg') .')"';
// }

// echo '<div '. $image_bg .' class="flexible__content">';
// //flexible__content give it css properties

// Tabs scrollbar
if(get_field('fc_tab_scroller')) {
    require('templates/_fc-tabs-scrollbar.php');
}

if(have_rows('fc_content_types')):

    $row_count = 1;

    echo '<div class="flexible__content">';

    while(have_rows('fc_content_types')) : the_row();

        // open section - see fc-functions.php
        $open = fc_field_section(get_row_layout(), 'open');

        if(!$open['skip_open']) {
            echo $open['html'];
        }

        if(get_row_layout() === 'fc_accordion'):

            // Accordion
            require('templates/fc-accordion.php');

        elseif(get_row_layout() === 'fc_buttons'):

            // Button
            require('templates/fc-buttons.php');

        elseif(get_row_layout() === 'fc_apf_branches_map'):

            // APF Branches Map
            require('templates/fc-apf-branches-map.php');

        elseif(get_row_layout() === 'fc_cta'):

            // Call to action
            require('templates/fc-call-to-action.php');

        elseif(get_row_layout() === 'fc_carousel_images'):

            // Carousel
            require('templates/fc-carousel.php');

        elseif(get_row_layout() === 'fc_contact'):

            // Contact
            require('templates/fc-contact.php');

        elseif(get_row_layout() === 'fc_feature'):

            // Feature
            require('templates/fc-feature.php');

        elseif(get_row_layout() === 'fc_feature_boxes'):

            // Feature Boxes
            require('templates/fc-feature-boxes.php');

        elseif(get_row_layout() === 'fc_feature_boxes_persona'):

            // Feature Boxes Persona
            require('templates/fc-feature-boxes-persona.php');

        elseif(get_row_layout() === 'fc_free_text'):

            // Free Text
            require('templates/fc-free-text.php');

        elseif(get_row_layout() === 'fc_gallery'):

            // Gallery
            require('templates/fc-gallery.php');

        elseif(get_row_layout() === 'fc_grid_boxes'):

            // Grid Boxes
            require('templates/fc-grid-boxes.php');

        elseif(get_row_layout() === 'fc_icon_grid'):

            // Grid icons
            require('templates/fc-grid-icons.php');

        elseif(get_row_layout() === 'fc_grid_links'):

            // Grid links
            require('templates/fc-grid-links.php');

        elseif(get_row_layout() === 'fc_masonry'):

            // Masonry
            require('templates/fc-masonry.php');

        elseif(get_row_layout() === 'fc_properties'):

            // Properties
            require('templates/fc-properties.php');

        elseif(get_row_layout() === 'fc_tabs'):

            // Tabs
            require('templates/fc-tabs.php');

        elseif(get_row_layout() === 'fc_table'):

            // Table
            require('templates/fc-table.php');

        elseif(get_row_layout() === 'fc_timeline'):

            // Timeline
            require('templates/fc-timeline.php');

        elseif(get_row_layout() === 'fc_team'):

            // Team (Custom)
            require('templates/fc-team.php');

        elseif(get_row_layout() === 'fc_team_full'):

            // Team (Full)
            require('templates/fc-team-full.php');

        elseif(get_row_layout() === 'fc_testimonials'):

            // Testimonials
            require('templates/fc-testimonials.php');

        elseif(get_row_layout() === 'fc_video'):

            // Video
            require('templates/fc-video.php');
            
        elseif(get_row_layout() === 'fc_circle_masonry'):

            // Masonry Circles
            require('templates/fc-masonry-circles.php');

        elseif(get_row_layout() === 'fc_featured_testimonials'):

            // Featured Testimonials
            require('templates/fc-featured-testimonials.php');
        
        endif;

        // close section - see fc-functions.php
        $close = fc_field_section(get_row_layout(), 'close');

        if(!$close['skip_close']) {
            echo $close['html'];
        }

    $row_count++; endwhile;

    echo '</div><!-- flexible__content -->';

endif;
?>
