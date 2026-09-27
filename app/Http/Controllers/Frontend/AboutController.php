<?php

namespace App\Http\Controllers\Frontend;

/**
 * AboutController handles the about page display for the VIREXA Digital website
 * 
 * This controller manages the about page, providing visitors with
 * information about VIREXA Digital's company history, team members,
 * mission, vision, and core values.
 */
class AboutController extends BaseController
{
    /**
     * Display the about page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.about');
    }
}