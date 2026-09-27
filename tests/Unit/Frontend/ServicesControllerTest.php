<?php

namespace Tests\Unit\Frontend;

use Tests\TestCase;
use App\Http\Controllers\Frontend\ServicesController;
use Illuminate\View\View;

class ServicesControllerTest extends TestCase
{
    /**
     * Test that ServicesController index method returns the correct view
     *
     * @return void
     */
    public function test_index_returns_services_view()
    {
        $controller = new ServicesController();
        $response = $controller->index();
        
        $this->assertInstanceOf(View::class, $response);
        $this->assertEquals('frontend.services', $response->getName());
    }
    
    /**
     * Test that ServicesController extends BaseController
     *
     * @return void
     */
    public function test_services_controller_extends_base_controller()
    {
        $controller = new ServicesController();
        $this->assertInstanceOf(\App\Http\Controllers\Frontend\BaseController::class, $controller);
    }
}