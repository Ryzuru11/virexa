<?php

namespace App\Http\Controllers\Frontend;

/**
 * ContactController handles the contact page display for the VIREXA Digital website
 * 
 * This controller manages the contact page where visitors can find
 * contact information and potentially submit contact forms in future
 * development stages.
 */
class ContactController extends BaseController
{
    /**
     * Display the contact page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }
}