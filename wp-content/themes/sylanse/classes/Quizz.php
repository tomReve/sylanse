<?php

class Quizz
{
    public static function get($id = null) {
        return pods('quizz', (empty($id) ? get_the_ID() : $id));
    }
}
