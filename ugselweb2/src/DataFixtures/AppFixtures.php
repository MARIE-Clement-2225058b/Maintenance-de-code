<?php

namespace App\DataFixtures;

use App\Entity\Department;
use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpClient\HttpClient;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Fetch the region data from the API
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://geo.api.gouv.fr/regions');
        $regionsData = $response->toArray();

        // Create and persist Region entities
        $regions = [];
        foreach ($regionsData as $regionData) {
            $region = new Region();
            $region->setName($regionData['nom']);
            $manager->persist($region);
            $regions[$regionData['code']] = $region;
        }

        // Fetch the department data from the API
        $response = $client->request('GET', 'https://geo.api.gouv.fr/departements');
        $departmentsData = $response->toArray();

        // Create and persist Department entities
        foreach ($departmentsData as $departmentData) {
            $department = new Department();
            $department->setName($departmentData['nom']);
            $department->setRegionID($regions[$departmentData['codeRegion']]);
            $manager->persist($department);
        }

        // Flush to save the data
        $manager->flush();
    }
}