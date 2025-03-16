<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrainingContentPart extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'image',
        'training_part_id',
        'seo_title',
        'meta_description',
        'meta_keywords',
    ];



    public function training_part(): BelongsTo
    {
        return $this->belongsTo(TrainingPart::class);
    }
}
