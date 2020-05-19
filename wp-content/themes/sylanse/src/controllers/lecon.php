<?php

function sylanse_lecon_single()
{
    $pod = Lecon::get();
    $lecon = [];
    $quizz = [];
    $questions = [];

    if ($pod->exists()) {
        $lecon = [
            'ID' => $pod->field('ID'),
            'post_title' => $pod->field('post_title'),
            'post_content' => $pod->field('post_content'),
            'image' => get_the_post_thumbnail_url($pod->field('ID'), 'liste-item'),
            'quizz' => $pod->field('quizz')
        ];

        if (!empty($lecon['quizz'])) {
            $podQuizz = Quizz::get($lecon['quizz']['ID']);
            if ($podQuizz->exists()) {
                $quizz = [
                    'ID' => $podQuizz->field('ID'),
                    'post_title' => $podQuizz->field('post_title'),
                    'questions' => $podQuizz->field('questions')
                ];
            };
        }

        $questionsIds = [];
        if (!empty($quizz) && !empty($quizz['questions'])) {
            foreach ($quizz['questions'] as $id => $question) {
                $questionsIds[] = $question['id'];
            }

            if (!empty($questionsIds)){
                $questionsIds = implode(', ', $questionsIds);
                $podQuestions = Question::getByIds($questionsIds);

                if ($podQuestions->total() > 0){
                    while ($podQuestions->fetch()){
                        $questions[] = [
                            'libelle' => $podQuestions->field('libelle'),
                            'reponses_possibles' => $podQuestions->field('reponses_possibles'),
                            'bonne_reponse' => $podQuestions->field('bonne_reponse')
                        ];
                    }

                    $quizz['questions'] = $questions;
                }
            }
        }
    }

    render('lecon/single', [
        'lecon' => $lecon,
        'quizz' => $quizz
    ]);
}
