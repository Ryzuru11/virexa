<?php

namespace Tests\Feature\Frontend;

use Tests\TestCase;

class ContactViewTest extends TestCase
{
    /**
     * Test that the contact view can be rendered without errors
     *
     * @return void
     */
    public function test_contact_view_renders_successfully()
    {
        $view = view('frontend.contact');
        $content = $view->render();
        
        $this->assertStringContainsString('VIREXA Digital', $content);
        $this->assertStringContainsString('Contact Us', $content);
        $this->assertStringContainsString('Get in touch with VIREXA Digital', $content);
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
    }
}