<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'video',
        'price',
        'module_id',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'enrollments')->withTimestamps();
    }
}
