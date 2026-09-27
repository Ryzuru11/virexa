<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

/**
 * Comprehensive checkpoint test for Task 6 - Test all routes and views
 * 
 * This test class provides a summary of all the verification checks
 * performed for the VIREXA frontend structure checkpoint.
 */
class CheckpointSummaryTest extends TestCase
{
    /**
     * Test that all 5 routes are properly configured and accessible
     *
     * @return void
     */
    public function test_all_five_routes_are_accessible()
    {
        $routes = [
            '/' => 'home',
            '/services' => 'services', 
            '/portfolio' => 'portfolio',
            '/about' => 'about',
            '/contact' => 'contact'
        ];
        
        foreach ($routes as $url => $routeName) {
            $response = $this->get($url);
            $response->assertStatus(200, "Route {$url} should return HTTP 200");
            $response->assertViewIs("frontend.{$routeName}", "Route {$url} should use correct view");
        }
        
        $this->assertTrue(true, "All 5 routes (home, services, portfolio, about, contact) are accessible and return successful HTTP responses");
    }
    
    /**
     * Test that all views render without errors
     *
     * @return void
     */
    public function test_all_views_render_without_errors()
    {
        $views = [
            'frontend.home',
            'frontend.services', 
            'frontend.portfolio',
            'frontend.about',
            'frontend.contact'
        ];
        
        foreach ($views as $viewName) {
            try {
                $view = view($viewName);
                $content = $view->render();
                $this->assertNotEmpty($content, "View {$viewName} should render content");
                $this->assertStringContainsString('VIREXA Digital', $content, "View {$viewName} should contain VIREXA Digital");
            } catch (\Exception $e) {
                $this->fail("View {$viewName} failed to render: " . $e->getMessage());
            }
        }
        
        $this->assertTrue(true, "All templates render without errors");
    }
    
    /**
     * Test that all views extend master layout correctly
     *
     * @return void
     */
    public function test_all_views_extend_master_layout_correctly()
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
            
            // Verify master layout structure
            $this->assertStringContainsString('<!DOCTYPE html>', $content, "View {$viewName} should have DOCTYPE from master layout");
            $this->assertStringContainsString('<html lang="id">', $content, "View {$viewName} should have html tag from master layout");
            $this->assertStringContainsString('<header>', $content, "View {$viewName} should have header section from master layout");
            $this->assertStringContainsString('<main>', $content, "View {$viewName} should have main section from master layout");
            $this->assertStringContainsString('<footer>', $content, "View {$viewName} should have footer section from master layout");
        }
        
        $this->assertTrue(true, "All views extend master layout correctly");
    }
    
    /**
     * Test that all controllers are properly implemented
     *
     * @return void
     */
    public function test_all_controllers_are_properly_implemented()
    {
        $controllers = [
            'App\Http\Controllers\Frontend\HomeController',
            'App\Http\Controllers\Frontend\ServicesController',
            'App\Http\Controllers\Frontend\PortfolioController', 
            'App\Http\Controllers\Frontend\AboutController',
            'App\Http\Controllers\Frontend\ContactController'
        ];
        
        foreach ($controllers as $controllerClass) {
            $this->assertTrue(class_exists($controllerClass), "Controller {$controllerClass} should exist");
            
            $controller = new $controllerClass();
            $this->assertTrue(method_exists($controller, 'index'), "Controller {$controllerClass} should have index method");
            $this->assertInstanceOf(\App\Http\Controllers\Frontend\BaseController::class, $controller, "Controller {$controllerClass} should extend BaseController");
        }
        
        $this->assertTrue(true, "All controllers are properly implemented");
    }
    
    /**
     * Test that the frontend structure follows Laravel best practices
     *
     * @return void
     */
    public function test_frontend_structure_follows_laravel_best_practices()
    {
        // Check directory structure exists
        $this->assertDirectoryExists(app_path('Http/Controllers/Frontend'), 'Frontend controllers directory should exist');
        $this->assertDirectoryExists(resource_path('views/frontend'), 'Frontend views directory should exist');
        $this->assertDirectoryExists(resource_path('views/frontend/layouts'), 'Frontend layouts directory should exist');
        
        // Check master layout exists
        $this->assertFileExists(resource_path('views/frontend/layouts/master.blade.php'), 'Master layout should exist');
        
        // Check all view files exist
        $viewFiles = [
            'home.blade.php',
            'services.blade.php', 
            'portfolio.blade.php',
            'about.blade.php',
            'contact.blade.php'
        ];
        
        foreach ($viewFiles as $viewFile) {
            $this->assertFileExists(resource_path("views/frontend/{$viewFile}"), "View file {$viewFile} should exist");
        }
        
        $this->assertTrue(true, "Frontend structure follows Laravel best practices");
    }
}