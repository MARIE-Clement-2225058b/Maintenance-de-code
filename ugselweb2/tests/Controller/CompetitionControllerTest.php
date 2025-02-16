<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class CompetitionControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/competitions');

        self::assertResponseIsSuccessful();
    }

    public function testNew(): void
    {
        $client = static::createClient();
        $client->request('GET', '/competition/new');

        self::assertResponseIsSuccessful();
    }

    /**
    public function testInsertNewCompetition(): void
    {
        $client = static::createClient();
        $client->request('POST', '/competition/new', [
            'competition' => [
                'nom' => 'Test Competition',
                'startDate' => '2021-01-01',
                'endDate' => '2021-01-02',
                'location' => 'Test Location',
                'sportID' => 1,
            ],
        ]);

        self::assertResponseRedirects('/competitions');
    }
     *
     */
}