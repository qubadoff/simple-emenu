<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'cat_id',
        'sort',
        'color',
        'image'
    ];

    protected $guarded = [];

    protected $casts = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
