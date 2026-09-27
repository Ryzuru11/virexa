<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

class PortfolioViewTest extends TestCase
{
    /**
     * Test that the portfolio view can be rendered without errors
     *
     * @return void
     */
    public function test_portfolio_view_renders_successfully()
    {
        $view = view('frontend.portfolio');
        $content = $view->render();
        
        $this->assertStringContainsString('VIREXA Digital', $content);
        $this->assertStringContainsString('Our Portfolio', $content);
        $this->assertStringContainsString('Discover our successful projects and client solutions', $content);
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
        $this->assertStringContainsString('Portfolio - VIREXA Digital', $content);
    }
    
    /**
     * Test that the portfolio view extends the master layout correctly
     *
     * @return void
     */
    public function test_portfolio_view_extends_master_layout()
    {
        $view = view('frontend.portfolio');
        $content = $view->render();
        
        // Check that it has the proper HTML structure from master layout
        $this->assertStringContainsString('<html lang="id">', $content);
        $this->assertStringContainsString('<meta charset="UTF-8">', $content);
        $this->assertStringContainsString('<meta name="viewport"', $content);
        $this->assertStringContainsString('<header>', $content);
        $this->assertStringContainsString('<main>', $content);
        $this->assertStringContainsString('<footer>', $content);
    }
    
    /**
     * Test that the portfolio view contains expected portfolio content
     *
     * @return void
     */
    public function test_portfolio_view_contains_portfolio_content()
    {
        $view = view('frontend.portfolio');
        $content = $view->render();
        
        // Check for portfolio project examples
        $this->assertStringContainsString('E-commerce Platform', $content);
        $this->assertStringContainsString('Corporate Website', $content);
        $this->assertStringContainsString('Mobile Application', $content);
        $this->assertStringContainsString('Web Application', $content);
        $this->assertStringContainsString('Technologies:', $content);
    }
}