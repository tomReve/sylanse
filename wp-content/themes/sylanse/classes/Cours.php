<?php

class Cours
{
    public static function get($id = null) {
        return pods('cours', (empty($id) ? get_the_ID() : $id));
    }

    public static function all($args = []) {
        $pods = pods('cours')->find([
            'orderby' => !empty($args['order']) ? $args['order'] : 'post_date ASC',
            'limit' => !empty($args['limit']) ? $args['limit'] : -1,
            'where' => !empty($args['where']) ? $args['where'] : [],
        ]);

        return $pods;
    }
}
