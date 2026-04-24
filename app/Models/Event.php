<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    ////
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'date',
        'location',
        'price',
        'stock',
        'poster_path',
    ];

    protected $casts = [
        'date' => 'datetime',
        'price' => 'integer',
        'stock' => 'integer',
    ];

    /**
     * Get the category for the event.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

