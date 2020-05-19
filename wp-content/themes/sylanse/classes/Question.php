<?php

class Question
{
    public static function getByIds($ids) {
        $pods = pods('question')->find([
            'limit' => !empty($args['limit']) ? $args['limit'] : -1,
            'where' => 'id IN ('.$ids.')'
        ]);

        return $pods;
    }
}
