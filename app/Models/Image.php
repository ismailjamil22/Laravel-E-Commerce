<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image_title',
        'image_src',
        'image_desc',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
