<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HomeControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/home');

        self::assertResponseIsSuccessful();
    }

    public function testIndexWithInvalidRoute(): void
    {
        $client = static::createClient();
        $client->request('GET', '/invalid-route');

        self::assertResponseStatusCodeSame(404);
    }

}
