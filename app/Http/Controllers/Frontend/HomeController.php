<?php

namespace App\Http\Controllers\Frontend;

/**
 * HomeController handles the homepage display for the VIREXA Digital website
 * 
 * This controller manages the main landing page of the website,
 * providing visitors with an overview of VIREXA Digital's services
 * and company information.
 */
class HomeController extends BaseController
{
    /**
     * Display the homepage
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.home');
    }
}