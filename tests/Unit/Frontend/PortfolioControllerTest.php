<?php

namespace Tests\Unit\Frontend;

use Tests\TestCase;
use App\Http\Controllers\Frontend\PortfolioController;
use Illuminate\View\View;

class PortfolioControllerTest extends TestCase
{
    /**
     * Test that PortfolioController index method returns the correct view
     *
     * @return void
     */
    public function test_index_returns_portfolio_view()
    {
        $controller = new PortfolioController();
        $response = $controller->index();
        
        $this->assertInstanceOf(View::class, $response);
        $this->assertEquals('frontend.portfolio', $response->getName());
    }
    
    /**
     * Test that PortfolioController extends BaseController
     *
     * @return void
     */
    public function test_portfolio_controller_extends_base_controller()
    {
        $controller = new PortfolioController();
        $this->assertInstanceOf(\App\Http\Controllers\Frontend\BaseController::class, $controller);
    }
}