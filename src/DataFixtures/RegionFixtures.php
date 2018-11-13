<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RegionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $regions = [
            'Northland' => [
                'latitude' => '-35.092332964',
                'longitude' => '173.486164722',
            ],
            'Auckland' => [
                'latitude' => '-36.8999964',
                'longitude' => '174.7833302',
            ],
            'Waikato' => [

            ],
            'Bay of Plenty' => [

            ],
            'Gisborne' => [

            ],
            'Hawke\'s Bay' => [

            ],
            'Taranaki' => [

            ],
            'Manawatu-Wanganui' => [

            ],
            'Wellington' => [

            ],
            'Tasman' => [

            ],
            'Nelson' => [

            ],
            'Marlborough' => [

            ],
            'West Coast' => [

            ],
            'Canterbury' => [

            ],
            'Otago' => [

            ],
            'Southland' => [
                
            ]
        ];
        $manager->flush();
    }
}
