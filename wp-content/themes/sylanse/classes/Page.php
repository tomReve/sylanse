<?php

class Page
{
    public static function get($id = null) {
        return pods('page', (empty($id) ? get_the_ID() : $id));
    }

    public static function getChildren($id = null){
        $id = empty($id) ? get_the_ID() : $id;

        $children = [];

        $locations = get_nav_menu_locations();
        $menu = get_term($locations['menu_header'], 'nav_menu');
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        if (count($menu_items)) {
            $current_menu = false;
            foreach ($menu_items as $m) {
                if ($m->object_id == $id) {
                    $current_menu = $m->ID;
                    break;
                }
            }

            if (!empty($current_menu)) {
                foreach ($menu_items as $m) {
                    if ($m->menu_item_parent == $current_menu) {
                        if ($m->object == "page"){
                            $children[$m->object_id] = nc_master(
                                (int)$m->object_id,
                                [
                                    "p.post_title",
                                    "p.post_excerpt" => ["removeHTML" => true, "crop" => 100],
                                    "p.post_content" => ["removeHTML" => true, "crop" => 100],
                                    "p.url",
                                ]
                            )["posts"][$m->object_id];
                        } else {
                            $children[$m->object_id] = [
                                "post_title" => $m->title,
                                "url" => $m->url
                            ];
                        }

                    }

                }
            }
        }

        return $children;
    }
}
