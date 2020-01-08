<?php

class Post
{
    public static function get($id = null) {
        return pods('post', (empty($id) ? get_the_ID() : $id));
    }

    public static function all($args = []) {
        $pods = pods('post')->find([
            'orderby' => !empty($args['order']) ? $args['order'] : 'post_date ASC',
            'limit' => !empty($args['limit']) ? $args['limit'] : -1,
        ]);

        return $pods;
    }
}
