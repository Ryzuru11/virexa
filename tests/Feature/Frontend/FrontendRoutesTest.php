<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

class FrontendRoutesTest extends TestCase
{
    /**
     * Test that the home route returns a successful response
     *
     * @return void
     */
    public function test_home_route_returns_successful_response()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        $response->assertViewIs('frontend.home');
        $response->assertSee('VIREXA Digital');
        $response->assertSee('Professional Web Development Services');
    }
    
    /**
     * Test that the services route returns a successful response
     *
     * @return void
     */
    public function test_services_route_returns_successful_response()
    {
        $response = $this->get('/services');
        
        $response->assertStatus(200);
        $response->assertViewIs('frontend.services');
        $response->assertSee('Our Services');
        $response->assertSee('Web Development');
        $response->assertSee('Digital Marketing');
    }
    
    /**
     * Test that the portfolio route returns a successful response
     *
     * @return void
     */
    public function test_portfolio_route_returns_successful_response()
    {
        $response = $this->get('/portfolio');
        
        $response->assertStatus(200);
        $response->assertViewIs('frontend.portfolio');
        $response->assertSee('Our Portfolio');
        $response->assertSee('E-commerce Platform');
        $response->assertSee('Corporate Website');
    }
    
    /**
     * Test that the about route returns a successful response
     *
     * @return void
     */
    public function test_about_route_returns_successful_response()
    {
        $response = $this->get('/about');
        
        $response->assertStatus(200);
        $response->assertViewIs('frontend.about');
        $response->assertSee('About VIREXA Digital');
        $response->assertSee('Our Mission');
        $response->assertSee('Our Vision');
    }
    
    /**
     * Test that the contact route returns a successful response
     *
     * @return void
     */
    public function test_contact_route_returns_successful_response()
    {
        $response = $this->get('/contact');
        
        $response->assertStatus(200);
        $response->assertViewIs('frontend.contact');
        $response->assertSee('Contact Us');
        $response->assertSee('Get in touch with VIREXA Digital');
    }
    
    /**
     * Test that all routes have proper route names
     *
     * @return void
     */
    public function test_all_routes_have_proper_names()
    {
        // Test route names are properly registered
        $this->assertEquals(url('/'), route('home'));
        $this->assertEquals(url('/services'), route('services'));
        $this->assertEquals(url('/portfolio'), route('portfolio'));
        $this->assertEquals(url('/about'), route('about'));
        $this->assertEquals(url('/contact'), route('contact'));
    }
    
    /**
     * Test that all routes use clean, SEO-friendly URLs
     *
     * @return void
     */
    public function test_routes_use_clean_seo_friendly_urls()
    {
        $routes = [
            '/' => 'home',
            '/services' => 'services',
            '/portfolio' => 'portfolio',
            '/about' => 'about',
            '/contact' => 'contact'
        ];
        
        foreach ($routes as $url => $description) {
            $response = $this->get($url);
            $response->assertStatus(200);
            
            // Ensure URLs don't contain query parameters or complex structures
            $this->assertStringNotContainsString('?', $url);
            $this->assertStringNotContainsString('&', $url);
            $this->assertStringNotContainsString('=', $url);
        }
    }
}