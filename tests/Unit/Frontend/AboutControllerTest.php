<?php

namespace Tests\Unit\Frontend;

use Tests\TestCase;
use App\Http\Controllers\Frontend\AboutController;
use Illuminate\View\View;

class AboutControllerTest extends TestCase
{
    /**
     * Test that AboutController index method returns the correct view
     *
     * @return void
     */
    public function test_index_returns_about_view()
    {
        $controller = new AboutController();
        $response = $controller->index();
        
        $this->assertInstanceOf(View::class, $response);
        $this->assertEquals('frontend.about', $response->getName());
    }
    
    /**
     * Test that AboutController extends BaseController
     *
     * @return void
     */
    public function test_about_controller_extends_base_controller()
    {
        $controller = new AboutController();
        $this->assertInstanceOf(\App\Http\Controllers\Frontend\BaseController::class, $controller);
    }
}