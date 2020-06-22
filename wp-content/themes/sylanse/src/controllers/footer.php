<?php

function sylanse_footer() {
    global $REDUX;
    render('footer', [
        'redux' => $REDUX
    ]);
}
