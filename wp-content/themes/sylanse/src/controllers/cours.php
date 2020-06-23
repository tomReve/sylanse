<?php

function sylanse_cours_list(){
    $podPage = Page::get();
    $page = [];

    if ($podPage->exists()){
        $page = [
            'post_title' => $podPage->field('post_title'),
            'post_content' => $podPage->field('post_content')
        ];
    }

    $pods = Cours::all();
    $cours = [];

    if ($pods->total() > 0){
        while ($pods->fetch()){
            $cours[] = [
                'ID' => $pods->field('ID'),
                'post_title' => $pods->field('post_title'),
                'post_content' => $pods->field('post_content'),
                'image' => get_the_post_thumbnail_url($pods->field('ID'), 'liste-item'),
                'cat_cours' => $pods->display('cat_cours')
            ];
        }
    }

   render('cours/list', [
       'page' => $page,
       'cours' => $cours
   ]);
}

function sylanse_cours_single(){
    $pod = Cours::get();
    $cours = [];

    if ($pod->exists()){
        $cours = [
            'post_title' => $pod->field('post_title'),
            'post_content' => $pod->field('post_content'),
            'image' => get_the_post_thumbnail_url($pod->field('ID'), 'detail-item'),
            'lecons' => $pod->field('lecons'),
            'cat_cours' => $pod->display('cat_cours'),
            'difficulte' => $pod->display('difficulte'),
            'duree' => $pod->display('duree')
        ];
    }

    render('cours/single', [
        'cours' => $cours
    ]);
}
