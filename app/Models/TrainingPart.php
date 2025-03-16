<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TrainingPart extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'training_id'
    ];

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }

    public function training_content_parts(): HasMany
    {
        return $this->hasMany(TrainingContentPart::class);
    }
}
