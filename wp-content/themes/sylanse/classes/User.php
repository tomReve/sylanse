<?php

class User
{
    public static function get($id = null) {
        if ( !empty($id) ) return get_user_by('ID', $id);
        return wp_get_current_user();
    }

    public static function isLogged() {
        return is_user_logged_in();
    }
}
