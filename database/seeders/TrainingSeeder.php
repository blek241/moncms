<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Training;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainings = [
            [
                'title' => 'Angular',
                'slug'  => 'angular',
                'image' =>  'angular.png',
            ],
            [
                'title' => 'Spring Boot',
                'slug'  =>  'spring-boot',
                'image' =>  'spring-boot.png',
            ],
        ];

        foreach ($trainings as $trainingsData) {
            Training::factory()->create($trainingsData);
        }
    }
}
