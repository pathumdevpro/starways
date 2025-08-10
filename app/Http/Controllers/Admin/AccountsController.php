<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    /**
     * Display login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('app.admin.accounts.login');
    }

    /**
     * Display logut page.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        return view('app.authentication.logout.index');
    }

    /**
     * Display profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('app.authentication.profile.index');
    }
}
