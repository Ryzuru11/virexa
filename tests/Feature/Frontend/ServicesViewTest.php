<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

class ServicesViewTest extends TestCase
{
    /**
     * Test that the services view can be rendered without errors
     *
     * @return void
     */
    public function test_services_view_renders_successfully()
    {
        $view = view('frontend.services');
        $content = $view->render();
        
        $this->assertStringContainsString('VIREXA Digital', $content);
        $this->assertStringContainsString('Our Services', $content);
        $this->assertStringContainsString('Web Development', $content);
        $this->assertStringContainsString('Digital Marketing', $content);
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
    }
}