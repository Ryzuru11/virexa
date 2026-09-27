<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Base controller for all frontend controllers
 * 
 * This controller serves as the foundation for all public-facing
 * website controllers, providing common functionality and ensuring
 * consistent structure across the frontend.
 */
class BaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Common frontend controller initialization can be added here
    }
}