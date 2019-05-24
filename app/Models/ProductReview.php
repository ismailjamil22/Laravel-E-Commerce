<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;
Use DB;

class ProductReview extends Model
{

    protected $fillable = ['description', 'rating'];

    
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public function images()
    {
        return $this->belongsToMany('App\Models\Image', 'product_images');
    }


}
