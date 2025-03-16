<?php

namespace Database\Seeders;

use App\Models\TrainingContentPart;
use App\Models\TrainingPart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TrainingContentPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nbTrainingParts = 4;
        $this->createContentPart(1, 1);
        $this->createContentPart(2, 1);

        $this->createContentPart(1, 2);
        $this->createContentPart(2, 2);

        $this->createContentPart(1, 3);
        $this->createContentPart(2, 3);

        $this->createContentPart(1, 4);
        $this->createContentPart(2, 4);
    }

    protected function createContentPart(int $id, int $training_part_id):void{

        $contentId = "content {$training_part_id} {$id}";
        TrainingContentPart::factory()->create([
            'title'       => $contentId,
            'seo_title'   => $contentId,
            'slug'        => Str::of($contentId)->slug('-'),
            'image'       => "img-{$training_part_id}-{$id}.png}",
            'training_part_id' => $training_part_id,
        ]);
    }
}
