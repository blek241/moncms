<?php

namespace Database\Seeders;

use App\Models\TrainingPart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TrainingPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nbTrainings = 2;
        $this->createPart(1, 1);
        $this->createPart(2, 1);

        $this->createPart(1, 2);
        $this->createPart(2, 2);
    }

    protected function createPart(int $id, int $training_id):void{

        $trainingPart = "training part {$training_id} {$id}";
        TrainingPart::factory()->create([
            'title' => $trainingPart,
            'slug' => Str::of($trainingPart)->slug('-'),
            'image' => "img-{$training_id}-{$id}.png",
            'training_id' => $training_id,
        ]);
    }
}
