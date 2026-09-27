<?php

namespace Tests\Unit\Frontend;

use Tests\TestCase;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\View\View;

class HomeControllerTest extends TestCase
{
    /**
     * Test that HomeController index method returns the correct view
     *
     * @return void
     */
    public function test_index_returns_home_view()
    {
        $controller = new HomeController();
        $response = $controller->index();
        
        $this->assertInstanceOf(View::class, $response);
        $this->assertEquals('frontend.home', $response->getName());
    }
    
    /**
     * Test that HomeController extends BaseController
     *
     * @return void
     */
    public function test_home_controller_extends_base_controller()
    {
        $controller = new HomeController();
        $this->assertInstanceOf(\App\Http\Controllers\Frontend\BaseController::class, $controller);
    }
}