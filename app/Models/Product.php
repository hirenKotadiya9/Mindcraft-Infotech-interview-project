<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];

    // Accessor for getting the full URL of the image
    public function getImageUrlAttribute()
    {
        return asset('images/' . $this->image);
    }

    // Mutator for setting the status
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = (int) $value; // Ensure status is stored as an integer
    }

    // Example relationship
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
