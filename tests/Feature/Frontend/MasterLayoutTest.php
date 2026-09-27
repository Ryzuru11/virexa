<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

class MasterLayoutTest extends TestCase
{
    /**
     * Test that all frontend views extend the master layout correctly
     *
     * @return void
     */
    public function test_all_views_extend_master_layout()
    {
        $views = [
            'frontend.home',
            'frontend.services',
            'frontend.portfolio',
            'frontend.about',
            'frontend.contact'
        ];
        
        foreach ($views as $viewName) {
            $view = view($viewName);
            $content = $view->render();
            
            // Check that each view has the proper HTML structure from master layout
            $this->assertStringContainsString('<!DOCTYPE html>', $content, "View {$viewName} should have DOCTYPE");
            $this->assertStringContainsString('<html lang="id">', $content, "View {$viewName} should have html tag with lang");
            $this->assertStringContainsString('<meta charset="UTF-8">', $content, "View {$viewName} should have charset meta");
            $this->assertStringContainsString('<meta name="viewport"', $content, "View {$viewName} should have viewport meta");
            $this->assertStringContainsString('<header>', $content, "View {$viewName} should have header section");
            $this->assertStringContainsString('<main>', $content, "View {$viewName} should have main section");
            $this->assertStringContainsString('<footer>', $content, "View {$viewName} should have footer section");
            $this->assertStringContainsString('VIREXA Digital', $content, "View {$viewName} should contain VIREXA Digital");
        }
    }
    
    /**
     * Test that master layout has proper HTML5 structure
     *
     * @return void
     */
    public function test_master_layout_has_proper_html5_structure()
    {
        // Test with a simple view to check master layout structure
        $view = view('frontend.home');
        $content = $view->render();
        
        // Check HTML5 document structure
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
        $this->assertStringContainsString('<html lang="id">', $content);
        $this->assertStringContainsString('<head>', $content);
        $this->assertStringContainsString('<body>', $content);
        $this->assertStringContainsString('</html>', $content);
        
        // Check required meta tags
        $this->assertStringContainsString('<meta charset="UTF-8">', $content);
        $this->assertStringContainsString('<meta name="viewport" content="width=device-width, initial-scale=1.0">', $content);
        
        // Check semantic HTML5 elements
        $this->assertStringContainsString('<header>', $content);
        $this->assertStringContainsString('<main>', $content);
        $this->assertStringContainsString('<footer>', $content);
    }
    
    /**
     * Test that master layout supports dynamic title and description
     *
     * @return void
     */
    public function test_master_layout_supports_dynamic_content()
    {
        $views = [
            'frontend.home' => [
                'title' => 'VIREXA Digital - Professional Web Development Services',
                'description' => 'VIREXA Digital - Professional Web Development Services'
            ],
            'frontend.services' => [
                'title' => 'Services - VIREXA Digital',
                'description' => 'Professional web development, digital marketing, and technology services by VIREXA Digital'
            ],
            'frontend.portfolio' => [
                'title' => 'Portfolio - VIREXA Digital',
                'description' => 'Explore VIREXA Digital&#039;s portfolio of successful web development projects, case studies, and client solutions'
            ],
            'frontend.about' => [
                'title' => 'About Us - VIREXA Digital',
                'description' => 'Learn about VIREXA Digital&#039;s mission, vision, team, and commitment to delivering exceptional web development services'
            ],
            'frontend.contact' => [
                'title' => 'Contact Us - VIREXA Digital',
                'description' => 'Contact VIREXA Digital for professional web development services. Get in touch with our team.'
            ]
        ];
        
        foreach ($views as $viewName => $expectedContent) {
            $view = view($viewName);
            $content = $view->render();
            
            $this->assertStringContainsString("<title>{$expectedContent['title']}</title>", $content, "View {$viewName} should have correct title");
            $this->assertStringContainsString("content=\"{$expectedContent['description']}\"", $content, "View {$viewName} should have correct description");
        }
    }
    
    /**
     * Test that master layout doesn't include CSS or JavaScript assets
     *
     * @return void
     */
    public function test_master_layout_has_no_assets()
    {
        $view = view('frontend.home');
        $content = $view->render();
        
        // Ensure no CSS or JavaScript assets are included as per requirements
        $this->assertStringNotContainsString('<link rel="stylesheet"', $content);
        $this->assertStringNotContainsString('<style>', $content);
        $this->assertStringNotContainsString('<script>', $content);
        $this->assertStringNotContainsString('.css', $content);
        $this->assertStringNotContainsString('.js', $content);
    }
}