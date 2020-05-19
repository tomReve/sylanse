<?php

class Page
{
    public static function get($id = null) {
        return pods('page', (empty($id) ? get_the_ID() : $id));
    }
}
