<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
// use Symfony \ Component \ HttpFoundation \ File \ UploadedFile;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('admin.product.index', [
            'product' => $product
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->img = $request->img;
        $data = $request->all();
        // $filename    = $data['img']->getClientOriginalName();

        $product->text = $request->text;
        $product->cat_id = $request->cat_id;
        $product->save();

        //Сохраняем оригинальную картинку
        // $request->img->move(Storage::path('/image/product/').'origin/',$filename);

       //Создаем миниатюру изображения и сохраняем ее
    //    $thumbnail = Image::make(Storage::path('/image/product/').'origin/'.$filename);
    //    $thumbnail->fit(300, 300);
    //    $thumbnail->save(Storage::path('/image/product/').$filename);
        




       if ($request->hasFile('img')) {
        $filename1 = "";
        $file = $request->file('img');
        $store_filename = time() . '-' . $file->getClientOriginalName();

        $file->move(public_path() . 'uploads/', $store_filename);

        $filename1 = 'uploads/' . $store_filename;

        $product->img = $filename1;
    } else {
        $product->img = 'noImage';
    }




    $product->save();
        return redirect()->back()->withSuccess('Товар был успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('admin.product.edit', [
            'categories' => $categories,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->img = $request->img;
        
        $product->text = $request->text;
        $product->cat_id = $request->cat_id;
        $product->save();

        return redirect()->back()->withSuccess('Товар был успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->withSuccess('Товар был успешно удален!');
    }
}
