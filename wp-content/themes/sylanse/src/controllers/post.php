<?php

function sylanse_post_list() {
    $podPage = Page::get();

    $page = [];

    if ($podPage->exists()){
        $page = [
            'ID' => $podPage->field('ID'),
            'post_title' => $podPage->field('post_title'),
            'post_excerpt' => $podPage->field('post_excerpt')
        ];
    }

    $podsPosts = Post::all([
        'order' => 'post_date DESC',
        'limit' => 9
    ]);

    $posts = [];

    if ( $podsPosts->total() > 0 ) {
        while ( $podsPosts->fetch() ) {
            $posts[] = [
                'ID' => $podsPosts->field('ID'),
                'post_title' => $podsPosts->field('post_title'),
                'post_date' => $podsPosts->field('post_date'),
                'image' => get_the_post_thumbnail_url($podsPosts->field('ID'), 'liste-item'),
                'post_content' => $podsPosts->field('post_content'),
                'category' => $podsPosts->display('category')
            ];
        }
    }

    $pagination = '';

    if ($podsPosts->total_found() > 9){
        $pagination = $podsPosts->pagination([
            'first_last'=> false,
            'prev_text' => '<i class="fas fa-arrow-left"></i>',
            'next_text' => '<i class="fas fa-arrow-right"></i>'
        ]);
    }

    render('post/list',[
        'page' => $page,
        'posts' => $posts,
        'pagination' => $pagination
    ]);
}

function sylanse_post_single() {
    $pod = Post::get();

    $post = [];

    if ($pod->exists()){
        $post = [
            'ID' => $pod->field('ID'),
            'post_title' => $pod->field('post_title'),
            'post_date' => $pod->field('post_date'),
            'image' => get_the_post_thumbnail_url($pod->field('ID'), 'detail-item'),
            'post_content' => $pod->display('post_content'),
            'post_excerpt' => $pod->field('post_excerpt'),
            'category' => $pod->display('category')
        ];
    }

    render('post/single',[
        'post' => $post
    ]);
}
