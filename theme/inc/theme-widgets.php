<?php

/**
 * Widget: Front Page Box
 */
class Theme_Front_Page_Box extends WP_Widget {

    function __construct() {
        parent::__construct(
            'theme_front_page_content_widget',
            __( 'Front Page Content Box (Theme)'),
            array(
                'description' => __('Content box to display in front page')
            )
        );
    }

    // Theme / Front-end: Display widget
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        if (!empty($instance['content'])) {
            echo $instance['content'];
        }
        echo $args['after_widget'];
    }

    // Back-end:  Widget form.
    public function form($instance) {
        $title   = (!empty($instance['title']))   ? $instance['title']   : '';
        $content = (!empty($instance['content'])) ? $instance['content'] : '';

        $output  = '<p>';
        $output .= '<label for="' . esc_attr($this->get_field_id('title')) . '">' . esc_attr('Title:') .'</label>';
        $output .= '<input class="widefat" id="' . esc_attr($this->get_field_id('title')) . '" name="' . $this->get_field_name('title') .'" type="text" value="' . esc_attr($title) .'">';
        $output .= '</p>';
        $output .= '<p>';
        $output .= '<label for="' . esc_attr($this->get_field_id('content')) . '">' . esc_attr('Content:') .'</label>';
        $output .= '<textarea class="widefat" id="' . esc_attr($this->get_field_id('content')) . '" name="' . $this->get_field_name('content') .'">' . esc_attr($content) . '</textarea>';
        $output .= '</p>';
        echo $output;
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title']   = (!empty($new_instance['title']))   ? strip_tags($new_instance['title'])   : '';
        $instance['content'] = (!empty($new_instance['content'])) ? strip_tags($new_instance['content']) : '';

        return $instance;
    }

}

function theme_widget_front_page_box_register() {
    register_widget( 'Theme_Front_Page_Box' );
}

add_action('widgets_init', 'theme_widget_front_page_box_register');
