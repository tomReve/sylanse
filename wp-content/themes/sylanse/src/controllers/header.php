<?php

function sylanse_header() {
    global $REDUX;

    render('header', [
        'redux' => $REDUX
    ]);
}
