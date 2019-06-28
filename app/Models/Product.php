<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use DB;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class Product extends Model
{
    // protected $fillable = array('user_id', 'name', 'description', 'price', 'image_url', 'video_url', 'created_at', 'updated_at');
    protected $fillable = ['name', 'description', 'price'];

    public function categories(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function images()
    {
        return $this->belongsToMany('App\Models\Image', 'product_images');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\ProductReview', 'product_id');
    } 

    public function orderProducts($order_by)
    {
        $query = DB::table('products');
        
        if ($order_by == 'best_seller')
    	{
    		$query  ->leftJoin('order_items', 'order_items.product_id','=','products.id')
                    ->select(DB::raw('sum(order_items.quantity) as quantity, products.*'))
                    ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','products.category_id','products.created_at','products.updated_at','products.view_count')
                    ->orderBy('quantity','desc');
    	}

        else if ($order_by == 'terbaik')
        {
            $query  ->leftJoin('product_reviews', 'product_reviews.product_id','=','products.id')
            ->select(DB::raw('avg(product_reviews.rating) as rating, products.*'))
            ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','products.category_id','products.created_at','products.updated_at','products.view_count')
            ->orderBy('rating','desc');
        }

    	else if ($order_by == 'terbaru')
    	{
    		$query->orderBy('created_at','desc');
    	}
    	else if ($order_by == 'termurah')
    	{
    		 $query->orderBy('price','asc');
    	}
    	else if ($order_by == 'termahal')
    	{
            $query->orderBy('price','desc');
        }
        else if ($order_by == 'anime')
    	{
            $query->where('category_id',1);
        }
        else if ($order_by == 'books')
    	{
            $query->where('category_id',2);
        }
        else if ($order_by == 'electronics')
    	{
            $query->where('category_id',3);
        }
        else if ($order_by == 'views')
    	{
    		$query->orderBy('view_count','desc');
    	}
        return $query->paginate(3);
    }


    public function orderProductAdmin($order_by, $user_id)
    {
         $query = DB::table('products');
        
        if ($order_by == 'best_seller')
        {
            $query   ->leftJoin('order_items', 'order_items.product_id','=','products.id')
                        ->select(DB::raw('sum(order_items.quantity) as quantity, products.*'))
                        ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','products.category_id','products.created_at','products.updated_at')
                        ->orderBy('quantity','desc');
                    
        }

        else if ($order_by == 'terbaik')
        {
          $query  ->leftJoin('product_reviews', 'product_reviews.product_id','=','products.id')
                    ->select(DB::raw('avg(product_reviews.rating) as rating, products.*'))
                    ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','products.category_id','products.created_at','products.updated_at')
                    ->orderBy('rating','desc');
        }

        else if ($order_by == 'terbaru')
        {
           $query->orderBy('created_at','desc');
        }

        else if ($order_by == 'termurah')
        {
           $query->orderBy('price','asc');
        }

        else if ($order_by == 'termahal')
        {
            $query->orderBy('price','desc');
        }
       return $query->where('products.user_id', $user_id)->get();
    }
 
   
    
}
