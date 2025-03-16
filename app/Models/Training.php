<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Training extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image'
    ];

    public function training_parts(): HasMany
    {
        return $this->hasMany(TrainingPart::class);
    }
}
