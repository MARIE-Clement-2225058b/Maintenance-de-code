<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HomeControllerTest extends WebTestCase
{
    public function testWelcomeTextIsPresentOnHomePage(): void
    {
        $client = static::createClient();

        // Access the /home route
        $client->request('GET', '/home');

        // Check that the HTTP response is successful (status code 200)
        $this->assertResponseIsSuccessful();

        // Verify that the welcome message is present
        $this->assertSelectorTextContains('.welcome-text', 'Bienvenue dans UGSEL Web');
    }
}