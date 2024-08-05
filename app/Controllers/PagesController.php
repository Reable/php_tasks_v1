<?php 

namespace App\Controllers;

use App\Services\Page;

class PagesController
{
    public static function step_1()
    {
        header("HelpText: Oh, and who's the smartest one here?) Wrong route, try another one)");
        header("Route: 011100100110010101100111011010010111001101110100011100100110000101110100011010010110111101101110");

        Page::render('auth/login');
        die();
    }

    public function step_1_bad_request()
    {
        header("HelpText: Oh, and who's the smartest one here?) Wrong route, try another one)");
        header("Route: 011100100110010101100111011010010111001101110100011100100110000101110100011010010110111101101110");

        $msg = "Oh, sorry, this URL is invalid at the moment, and it will always be invalid. Do you want to register? Try to figure it out.";
        Page::render('auth/login', $msg);
        die();
    }

    public function auth_login_form()
    {
        header("HelpText: Oh, and who's the smartest one here?) Wrong route, try another one)");
        header("Route: 011100100110010101100111011010010111001101110100011100100110000101110100011010010110111101101110");

        $msg = "Well, any fool can click on the send button) Maybe you should try to register first?";
        Page::render('auth/login', $msg);
        die();
    }

    public function step_2()
    {
        header("Caeser: I came, I saw, I won. But in war, hiding information also plays an important role, so we encrypted important information in a secret way");
        Page::render('auth/registration');
    }

    // Step #3
    public function step_3()
    {
        Page::render("step_3");
    }

    // Step #4 XSS атака     !!!придумать задание
    public function step_4()
    {
        Page::render("step_4");
    }

    // Step #5 SQL иньекция  !!!придумать задание
    public function step_5()
    {
        Page::render("step_5");
    }
}