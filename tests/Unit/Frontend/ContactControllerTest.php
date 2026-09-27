<?php

namespace Tests\Unit\Frontend;

use Tests\TestCase;
use App\Http\Controllers\Frontend\ContactController;
use Illuminate\View\View;

class ContactControllerTest extends TestCase
{
    /**
     * Test that ContactController index method returns the correct view
     *
     * @return void
     */
    public function test_index_returns_contact_view()
    {
        $controller = new ContactController();
        $response = $controller->index();
        
        $this->assertInstanceOf(View::class, $response);
        $this->assertEquals('frontend.contact', $response->getName());
    }
    
    /**
     * Test that ContactController extends BaseController
     *
     * @return void
     */
    public function test_contact_controller_extends_base_controller()
    {
        $controller = new ContactController();
        $this->assertInstanceOf(\App\Http\Controllers\Frontend\BaseController::class, $controller);
    }
}