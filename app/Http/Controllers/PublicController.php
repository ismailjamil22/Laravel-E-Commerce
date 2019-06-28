<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\ProductReview; 
use Auth;
use App\User;
use DB;






class PublicController extends Controller
{

  

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $product = Product::all();
    //     return view('show', compact('product'));
    // }

    public function index(Request $request)
    {   
        $productInstance= new Product();
        
     
        
        $product=$productInstance->orderProducts($request->get('order_by'))->all();
      
        // $product = Product::all();
        if ($request->ajax()) {
            return response()->json($product,200);
          }
        return view('public.public-user', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if ($request->ajax()) {
            $productReview = new ProductReview();
            $productReview->user_id = Auth::user()->id;
            $productReview->product_id = $request->post('product_id');
            $productReview->description = $request->post('description');
            $productReview->rating = $request->post('rating');
            if ($productReview->rating > 5) {
                return redirect('/')->with('error', 'Rating must be 1 - 5');
            }
            return response()->json($productReview,200);
        }else{
           return("NOT WORKING");
        }

        $productReview->save(); 
        return back();
        // return redirect('/')->with('success', 'Product allready saved');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $products = Product::find($id);
        $views = $products->increment('view_count');
        $rating = $products->reviews()->avg('rating');  
         
       
                      
        // $descriptions = ProductReview::where('user_id', '=', Auth::user()->id)->get();

        $descriptions =DB::table('product_reviews')
                    ->join('users','product_reviews.user_id','=','users.id')
                    ->join('products','product_reviews.product_id','=','products.id')
                    ->select('product_reviews.description','product_reviews.created_at','users.name')
                    ->where('product_reviews.product_id','=',$id)                  
                    ->get();
        
                    return view('public.detail', compact('products', 'rating','descriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
