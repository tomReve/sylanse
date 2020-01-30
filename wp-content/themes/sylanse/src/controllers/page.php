<?php

function sylanse_page_single() {
    render('page/single');
}

function sylanse_home(){
    global $REDUX;

    var_dump($REDUX);

    $articles = [];

    for($i = 1; $i < 3; $i++){
        if (!empty($REDUX["home-article-".$i])){
            $podArticle = pods('post', (int)$REDUX["home-article-".$i]);
            if ($podArticle->exists()){
                $articles[] = [
                    "ID" => $podArticle->display('ID'),
                    "post_title" => $podArticle->display("post_title"),
                    "image" => get_the_post_thumbnail_url($podArticle->field('ID')),
                    "post_excerpt" => $podArticle->field('post_excerpt'),
                    "post_content" => $podArticle->display("post_content"),
                ];
            }
        }
    }

    var_dump($articles);

    $testimonies = [];

    for($i = 1; $i < 4; $i++){
        if (!empty($REDUX["home-testimony-".$i])){
            $podTestimony = pods('testimony', (int)$REDUX["home-testimony-".$i]);
            if ($podTestimony->exists()){
                $testimonies[] = [
                    "ID" => $podTestimony->display('ID'),
                    "post_title" => $podTestimony->display("post_title"),
                    "image" => get_the_post_thumbnail_url($podTestimony->field('ID')),
                    "post_excerpt" => $podTestimony->field('post_excerpt'),
                    "age" => $podTestimony->field('age'),
                    "note" => $podTestimony->field('note'),
                ];
            }
        }
    }

    var_dump($testimonies);

    render('page/home');
}
