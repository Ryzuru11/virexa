<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

class HomeViewTest extends TestCase
{
    /**
     * Test that the home view can be rendered without errors
     *
     * @return void
     */
    public function test_home_view_renders_successfully()
    {
        $view = view('frontend.home');
        $content = $view->render();
        
        $this->assertStringContainsString('VIREXA Digital', $content);
        $this->assertStringContainsString('Professional Web Development Services', $content);
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
    }
}