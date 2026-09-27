<?php

namespace App\Http\Controllers\Frontend;

/**
 * PortfolioController handles the portfolio page display for the VIREXA Digital website
 * 
 * This controller manages the portfolio showcase page, providing visitors
 * with examples of VIREXA Digital's completed projects, case studies,
 * and demonstrations of technical capabilities and design expertise.
 */
class PortfolioController extends BaseController
{
    /**
     * Display the portfolio page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.portfolio');
    }

    /**
     * Display E-Commerce gallery
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function ecommerce()
    {
        return view('frontend.portfolio.ecommerce');
    }

    /**
     * Display Web Portfolio gallery
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function webPortfolio()
    {
        return view('frontend.portfolio.web-portfolio');
    }

    /**
     * Display Mobile App gallery
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function mobileApp()
    {
        return view('frontend.portfolio.mobile-app');
    }
}