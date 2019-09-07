<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Session;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(9);
        return view('admin.products.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'image'=>'required',
            'description'=>'required'
        ]);

        $image= $request->file('image'); //get the input
        $image_new_name=time().trim($image->getClientOriginalName());//set anew name
        $image->move('uploads/products',$image_new_name); //upload the image to the new path

        Product::create([
            'name'          => $request->input('name'),
            'price'         => $request->input('price'),
            'image'         => 'uploads/products/'.$image_new_name,
            'description'   => $request->input('description')
        ]);

        Session::flash('success','Inserted Successfully');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.products.edit',compact('products'));
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
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'image'=>'required|image',
            'description'=>'required'
        ]);

        $product = Product::find($id);

        if($request->hasFile('image')){
            # image handling
            $image= $request->file('image'); //get the input
            $image_new_name=time().trim($image->getClientOriginalName());//set anew name
            $image->move('uploads/products/',$image_new_name); //upload the image to the new
            $product->image = 'uploads/products/'.$image_new_name;
        }


        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();

        Session::flash('success','Updated Successfully');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->destroy($id);
        Session::flash('success','Deleted Successfully');
        return redirect()->route('products.index');
    }
}
