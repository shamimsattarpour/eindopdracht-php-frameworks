<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Light extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'type_id',
        'is_featured',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}