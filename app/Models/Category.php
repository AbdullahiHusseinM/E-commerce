<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subcategory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description'
    ];

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }
}
