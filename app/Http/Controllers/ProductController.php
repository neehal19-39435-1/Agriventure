<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;

use App\Models\Product;
use App\Models\Farmer;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProducts(Request $request){
           
        $validate=$request->validate([
            "pname"=>'required|max:20',
             "pprice"=>'required',
             "quantity"=>'required|max:13',
             "desc"=>'required',
             "category"=>'required',
             "image"=>'required',
            
        ],
    
        ['pname.required'=>'Field cannot be empty',
         'pprice.required'=>'Field cannot be empty',
        'quantity.required'=>'Field cannot be empty',
        'desc.required'=>'Field cannot be empty']
    
    );
            $image = $request->file('image')->getClientOriginalName();
            $product= new Product();
            $product->user_id=session()->get("id");
            $product->pname=$request->pname;
            $product->pprice=$request->pprice;
            $product->quantity=$request->quantity;
            $product->desc=$request->desc;
            $product->category=$request->category;
            $product->image=$image;
            $res=$product->save();
    
            if($res){
               
                $folder = $request->file('image')->move(public_path('img').'/',$image);
                return redirect()->back()->with('success', 'Post added');
            }
            else{
                return redirect()->back()->with('failed', 'Failed');
            }
        }
        public function card(){
            $cards = Product::where('user_id',session()->get('id'))->paginate(3);
            return view('Farmer.Viewproduct')->with('cards', $cards);
        }
        public function Balcony(){
            $cards = Product::where('user_id',session()->get('id'))->where('category',"Balcony")->paginate(3);
            return view('Farmer.Viewproduct')->with('cards', $cards);
        }
        public function Rooftop(){
            $cards = Product::where('user_id',session()->get('id'))->where('category',"Rooftop")->paginate(3);
            return view('Farmer.Viewproduct')->with('cards', $cards);
        }
        public function Money_plant(){
            $cards = Product::where('user_id',session()->get('id'))->where('category',"Money-plant")->paginate(3);
            return view('Farmer.Viewproduct')->with('cards', $cards);
        }
        public function Agricultural_equipments(){
            $cards = Product::where('user_id',session()->get('id'))->where('category',"Agricultural equipments")->paginate(3);
            return view('Farmer.Viewproduct')->with('cards', $cards);
        }
        public function ProductdelList(){
            $cards = Product::where('user_id',session()->get('id'))->paginate(3);
            return view('Farmer.Deleteproduct')->with('cards', $cards);
        }
        public function productdel(Request $request){
            $cards = Product::where('id',$request->id)->first();
            $cards->delete();
        
            return redirect()->route('delete');
        }
        public function updatelist(){
            $cards = Product::where('user_id',session()->get('id'))->paginate(3);
            return view('Farmer.Updateproduct')->with('cards', $cards);
        }
        public function productUp(Request $request){

            $card = Product::where('id',$request->id)->first();
            return view('Farmer.UpProductinfo')->with('card', $card);
        }

        public function prodInfoUp(Request $request){

            $validate = $request->validate([
                  "pname"=>'required',
                  "pprice"=>'required',
                  "quantity"=>'required',
                  "category"=>"required",
                  'desc'=>'required',
                  'image'=>'required',

              ]
          );

              $image = $request->file('image')->getClientOriginalName();
              $product = Product::where('id',$request->pid)->first();
              $product->pname = $request->pname;
              $product->pprice = $request->pprice;
              $product->quantity = $request->quantity;
              $product->category = $request->category;
              $product->desc = $request->desc;
              $product->oprice = $request->oprice;
              $product->image = $image;
              $result = $product->save();

              if($result){
                $folder = $request->file('image')->move(public_path('img').'/',$image);
                return redirect()->back()->with('success', 'Product Info successfully uploaded');
              }
              else{
                  return redirect()->back()->with('failed', 'Product Info uploading Failed');
              }
            }
}
