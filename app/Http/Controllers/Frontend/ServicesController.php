<?php

namespace App\Http\Controllers\Frontend;

/**
 * ServicesController handles the services page display for the VIREXA Digital website
 * 
 * This controller manages the services showcase page, providing visitors
 * with detailed information about VIREXA Digital's web development,
 * digital marketing, and other professional services.
 */
class ServicesController extends BaseController
{
    /**
     * Display the services page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.services');
    }
}