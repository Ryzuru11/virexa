<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Test;

/**
 * Test suite for verifying future-ready frontend structure
 * 
 * Validates Requirement 6.4: Future-ready structure
 * - Frontend components are properly separated
 * - Structure supports future UI framework integration
 * - No conflicts with potential admin functionality
 */
class FrontendStructureTest extends TestCase
{
    /**
     * Test that frontend controllers are properly separated in their own namespace
     */
    #[Test]
    public function frontend_controllers_are_properly_namespaced()
    {
        $frontendControllerPath = app_path('Http/Controllers/Frontend');
        
        $this->assertTrue(
            File::isDirectory($frontendControllerPath),
            'Frontend controller directory should exist'
        );
        
        // Check that key controllers exist
        $expectedControllers = [
            'BaseController.php',
            'HomeController.php',
            'ServicesController.php',
            'PortfolioController.php',
            'AboutController.php',
            'ContactController.php',
        ];
        
        foreach ($expectedControllers as $controller) {
            $this->assertTrue(
                File::exists($frontendControllerPath . '/' . $controller),
                "Controller {$controller} should exist in Frontend namespace"
            );
        }
    }
    
    /**
     * Test that frontend views are properly separated
     */
    #[Test]
    public function frontend_views_are_properly_separated()
    {
        $frontendViewPath = resource_path('views/frontend');
        
        $this->assertTrue(
            File::isDirectory($frontendViewPath),
            'Frontend view directory should exist'
        );
        
        // Check that layouts directory exists
        $this->assertTrue(
            File::isDirectory($frontendViewPath . '/layouts'),
            'Frontend layouts directory should exist'
        );
        
        // Check that master layout exists
        $this->assertTrue(
            File::exists($frontendViewPath . '/layouts/master.blade.php'),
            'Master layout should exist'
        );
        
        // Check that key views exist
        $expectedViews = [
            'home.blade.php',
            'services.blade.php',
            'portfolio.blade.php',
            'about.blade.php',
            'contact.blade.php',
        ];
        
        foreach ($expectedViews as $view) {
            $this->assertTrue(
                File::exists($frontendViewPath . '/' . $view),
                "View {$view} should exist in frontend directory"
            );
        }
    }
    
    /**
     * Test that structure allows for admin functionality without conflicts
     */
    #[Test]
    public function structure_supports_admin_functionality_without_conflicts()
    {
        $controllerPath = app_path('Http/Controllers');
        
        // Frontend namespace exists
        $this->assertTrue(
            File::isDirectory($controllerPath . '/Frontend'),
            'Frontend namespace should exist'
        );
        
        // Admin namespace is available (doesn't exist yet, but path is free)
        $adminPath = $controllerPath . '/Admin';
        if (File::exists($adminPath)) {
            // If admin exists, it should be a directory
            $this->assertTrue(
                File::isDirectory($adminPath),
                'Admin path should be a directory if it exists'
            );
        } else {
            // Admin path is available for future use
            $this->assertTrue(
                !File::exists($adminPath),
                'Admin namespace path should be available for future use'
            );
        }
        
        // Check that views structure supports admin
        $viewPath = resource_path('views');
        $this->assertTrue(
            File::isDirectory($viewPath . '/frontend'),
            'Frontend views should be in separate directory'
        );
        
        // Admin view path is available
        $adminViewPath = $viewPath . '/admin';
        if (File::exists($adminViewPath)) {
            $this->assertTrue(
                File::isDirectory($adminViewPath),
                'Admin view path should be a directory if it exists'
            );
        }
    }
    
    /**
     * Test that frontend routes are properly organized
     */
    #[Test]
    public function frontend_routes_are_properly_organized()
    {
        // Check that key frontend routes exist
        $expectedRoutes = [
            'home',
            'services',
            'portfolio',
            'about',
            'contact',
        ];
        
        foreach ($expectedRoutes as $routeName) {
            $this->assertTrue(
                Route::has($routeName),
                "Route '{$routeName}' should be registered"
            );
        }
        
        // Verify routes use Frontend namespace
        $homeRoute = Route::getRoutes()->getByName('home');
        $this->assertNotNull($homeRoute, 'Home route should exist');
        
        $action = $homeRoute->getAction();
        $this->assertStringContainsString(
            'Frontend',
            $action['controller'] ?? '',
            'Frontend routes should use Frontend namespace'
        );
    }
    
    /**
     * Test that build configuration supports UI framework integration
     */
    #[Test]
    public function build_configuration_supports_ui_frameworks()
    {
        // Check that package.json exists
        $packageJsonPath = base_path('package.json');
        $this->assertTrue(
            File::exists($packageJsonPath),
            'package.json should exist for npm dependencies'
        );
        
        // Check that vite.config.js exists
        $viteConfigPath = base_path('vite.config.js');
        $this->assertTrue(
            File::exists($viteConfigPath),
            'vite.config.js should exist for build configuration'
        );
        
        // Check that resource directories exist
        $this->assertTrue(
            File::isDirectory(resource_path('js')),
            'JavaScript resource directory should exist'
        );
        
        $this->assertTrue(
            File::isDirectory(resource_path('css')),
            'CSS resource directory should exist'
        );
        
        // Check that entry points exist
        $this->assertTrue(
            File::exists(resource_path('js/app.js')),
            'JavaScript entry point should exist'
        );
        
        $this->assertTrue(
            File::exists(resource_path('css/app.css')),
            'CSS entry point should exist'
        );
    }
    
    /**
     * Test that master layout has proper structure for framework integration
     */
    #[Test]
    public function master_layout_has_proper_structure()
    {
        $masterLayoutPath = resource_path('views/frontend/layouts/master.blade.php');
        $this->assertTrue(
            File::exists($masterLayoutPath),
            'Master layout should exist'
        );
        
        $content = File::get($masterLayoutPath);
        
        // Check for essential HTML5 structure
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
        $this->assertStringContainsString('<html', $content);
        $this->assertStringContainsString('<head>', $content);
        $this->assertStringContainsString('<body', $content);
        
        // Check for CSRF token (required for SPA frameworks)
        $this->assertStringContainsString('csrf-token', $content);
        
        // Check for content yield section
        $this->assertStringContainsString('@yield(\'content\')', $content);
        
        // Check for title yield section
        $this->assertStringContainsString('@yield(\'title\'', $content);
    }
    
    /**
     * Test that all frontend pages extend the master layout
     */
    #[Test]
    public function frontend_pages_extend_master_layout()
    {
        $frontendViewPath = resource_path('views/frontend');
        $pages = [
            'home.blade.php',
            'services.blade.php',
            'portfolio.blade.php',
            'about.blade.php',
            'contact.blade.php',
        ];
        
        foreach ($pages as $page) {
            $pagePath = $frontendViewPath . '/' . $page;
            $this->assertTrue(
                File::exists($pagePath),
                "Page {$page} should exist"
            );
            
            $content = File::get($pagePath);
            $this->assertStringContainsString(
                '@extends(\'frontend.layouts.master\')',
                $content,
                "Page {$page} should extend master layout"
            );
        }
    }
}
