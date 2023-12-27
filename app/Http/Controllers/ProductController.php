<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\ReviewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Validator;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
       
       //return view('mainPage', ['products', $this->get_all_products()]);
       $reviews = new ProductModel();
       $products = $reviews->paginate(8);
        return view('mainPage', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function reviews()
    {
        return view('reviews');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function order_basket()
    {
        return view('order_basket');
    }

    public function search(Request $request)
    {
        //$orders =  Order::search($request->search)->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        if(Auth::user()->email == 'admin@mail.ru'){
        $review = new ProductModel();

        $review->brand_name = $request->input('brand_name');
        $review->car_model_id = $request->input('car_model_id');
        $review->color_id = $request->input('color_id');
        $review->price = $request->input('price');
        $review->presence_id = $request->input('presence_id');
        $path = $request->file('image')->store('uploads', 'public'); //папка и диск
        $review->fileUrl = $path;
        //$review->filename = $path;

        $review->save();
        //return redirect()->route('store_view');
        return back()->with('message', 'Товар успешно добавлен');
        }
        else 
        return redirect('/');
    }

    public function store_view()
    {
        if(Auth::user()->email == 'admin@mail.ru'){
        return view('Admin/addProduct');
        }
        else 
        return redirect('/');
    }

    public function review_submit(Request $request)
    {   
        $messages = array(
            'required' => 'Поле :attribute должно быть заполнено',
        );
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:20',
            'email' => 'required|min:3|max:50',
            'subject' => 'required|min:3|max:50',
            'message' => 'required|min:10|max:500'
          ], $messages);

          if ($validator->fails()) {
            return redirect('/reviews')
              ->withInput()
              ->withErrors($validator);
          }

        $review = new ReviewModel();

        $review->name = $request->input('name');
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();
        return redirect()->route('show_reviews');
    }
    /**
     * Display the specified resource.
     */
    public function show_reviews()
    {   
        $reviews = new ReviewModel();
        return view('reviews', ['reviews' => $reviews->orderBy('id', 'desc')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function get_all_products()
    {
        $reviews = new ProductModel();
        return $reviews->get();
    }

    public function edit(string $id)
    {
        return "Edit page";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
