<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

class AboutViewTest extends TestCase
{
    /**
     * Test that the about view can be rendered without errors
     *
     * @return void
     */
    public function test_about_view_renders_successfully()
    {
        $view = view('frontend.about');
        $content = $view->render();
        
        $this->assertStringContainsString('VIREXA Digital', $content);
        $this->assertStringContainsString('About VIREXA Digital', $content);
        $this->assertStringContainsString('Our Mission', $content);
        $this->assertStringContainsString('Our Vision', $content);
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
    }
    
    /**
     * Test that the about view extends the master layout correctly
     *
     * @return void
     */
    public function test_about_view_extends_master_layout()
    {
        $view = view('frontend.about');
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
     * Test that the about view contains expected company information
     *
     * @return void
     */
    public function test_about_view_contains_company_information()
    {
        $view = view('frontend.about');
        $content = $view->render();
        
        // Check for company information sections
        $this->assertStringContainsString('Our Values', $content);
        $this->assertStringContainsString('Our Team', $content);
        $this->assertStringContainsString('Innovation:', $content);
        $this->assertStringContainsString('Quality:', $content);
        $this->assertStringContainsString('Integrity:', $content);
        $this->assertStringContainsString('Collaboration:', $content);
    }
}