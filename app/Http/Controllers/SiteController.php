<?php

namespace App\Http\Controllers;
use App\Mail\MailClass;
use Illuminate\Http\Request;
use App\Http\Requests\SiteRequest;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;
// use App\Product;



class SiteController extends Controller
{
    public function  index(){
        return view('site.catalog', ['data' => Product::all()]);
    }
    public function  company(){
        return view('site.company');
    }
    public function  contact(){
        return view('site.contact');
    }
    //обработчик обратного звонка
    // public function submit(SiteRequest $req){
        
    //     return $req->input('phone');
        
    // }
    public function send_form(Request $request){
        // $name = $request->name;
        $name = $request->input('name');
        $phone = $request->input('phone');
        Mail::to('igortananakin2017@gmail.com')->send(new MailClass($name,$phone));
        return view('send_form');

    }
    // public function send(){
    //     Mail::send(['text'=>'mail'],['name','Wsdvsd'],function($message){
    //         $message->to('igortananakin2017@gmail.com','eeee')->subject('Новый клиент');
    //         $message->from('igortananakin2017@gmail.com','Новая заявка');

    //     });
    // }
    public function  basket(){
        return view('basket');
    }

    //функция для добавления продукции
    // public function submit(ProductRequest $req){
    //     $product =  new Product();
    //     $product->name = $req->input('name');
    //     $contact->save();
    //     return redirect()->route('/contact');
    // }
    //функия для отображения продукции
   
}
