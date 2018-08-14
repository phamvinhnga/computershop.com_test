<?php

namespace Corals\Foundation\Http\Controllers;

class AuthBaseController extends BaseController
{


    /**
     * AuthBaseController constructor.
     */
    public function __construct()
    {
        if (!\Settings::get('confirm_user_registration_email', false) && session()->has('confirmation_user_id')) {
            session()->forget('confirmation_user_id');
        }

        parent::__construct();
    }

    public function setTheme()
    {
        $auth_theme = \Filters::do_filter('auth_theme', \Settings::get('active_admin_theme', config('themes.corals_admin')));

        \Theme::set($auth_theme);
    }


}