<?php

class sylanseWalker extends Walker_Nav_Menu
{

    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        switch ($depth) {
            case 0:
                $output .= '<ul class="conteneur-niveau-2">';
                break;
            case 1:
                $output .= '<ul class="conteneur-niveau-3">';
                break;
            default:
                $output .= '';
                break;
        }
    }

    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        switch ($depth) {
            case 0:
                $output .= "</ul>";
                break;
            case 1:
                $output .= "</ul>";
                break;
            default:
                $output .= "";
                break;
        }
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);


        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);


        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        if (empty($title) && !empty($item->post_title)) {
            $title = $item->post_title;
        }
        switch ($depth) {
            case 0:
                $classes = "niveau-1";
                $item_output = '<span class="titre-niveau-1">
                                    '.$title.'
                                </span>
                                <div class="dropdown">
                                    <div class="container">
                                        <strong class="parent">'.$title.'</strong>';
                break;
            case 1:
                $classes = "niveau-2";
                $item_output = '<a href="'.$atts["href"].'" title="Accéder à la page '.$title.'" class="titre-niveau-2">
                                    '.$title.'
                                </a>
                                <button class="btn-dropdown">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <div class="dropdown-niveau-2">
                                    <div class="container">
                                        <strong class="parent">'.$title.'</strong>';
                break;
            case 2:
                $classes = "niveau-3";
                $item_output = '<a href="'.$atts["href"].'" title="Accéder à la page '.$title.'" class="titre-niveau-3">
                                    '.$title.'
                                </a>';
                break;
            default:
                $classes = "";
                $item_output = '';
                break;
        }

        $output .= '<li class="' . $classes . '">';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        switch ($depth) {
            case 0:
                $output .= "</div></div></li>";
                break;
            case 1:
                $output .= "</div></div></li>";
                break;
            case 2:
                $output .= "</li>";
                break;
            default:
                $output .= "</li>";
        }

    }
}
