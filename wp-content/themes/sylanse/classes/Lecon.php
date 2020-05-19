<?php

class Lecon
{
    public static function get($id = null) {
        return pods('lecon', (empty($id) ? get_the_ID() : $id));
    }
}
