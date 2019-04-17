<?php

namespace App\Http\Controllers;
use DB;
use App\Productmodel;
use App\ModelProductType;
use App\user;
use Auth;
use App\BookModel;
use Carbon;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //for fetchning tables
    {
        $product=new ModelProductType();
        $product=$product->get();
        $viewproduct= new Productmodel();
        $viewproduct=$viewproduct->get();

        return view('Admin.Insertproduct',compact('product','viewproduct'));
      }
           
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view ('Admin.Insertproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productm=new Productmodel();

        $pictureInfo = $request->file('image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "ProductImages/";

        $pictureInfo->move($folder,$picName);

        $picUrl = $folder.$picName;
        
        

        $productm->name=$request->name;
        $productm->cc=$request->cc;
        $productm->fuel=$request->fuel;
        $productm->gear=$request->gear;
        $productm->speed=$request->speed;
        $productm->technology=$request->technology;
        $productm->tyre=$request->tyre;
        $productm->price=$request->price;
        $productm->img=$picUrl;
        $productm->stroke=$request->stroke;
        $productm->Clutch=$request->clutch;
        $productm->warranty=$request->warranty;
        $productm->producttypeid=$request->category;
        $productm->save();
        return redirect()->to ('/Insertproduct'); 
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
        $Productmodel=Productmodel::find($id);

         $Productmodel->delete();
         return redirect()->to('/Insertproduct')->withSuccess('Product deleted successfully !');
    }
    public function getProductType() //for combo box fetchning
    {
        $modelproducttype = new ModelProductType();
        $modelproducttype = $modelproducttype->get();

        $product = DB::table('product')
        ->join('productcat','productcat.producttypeid','=','product.producttypeid')  
        ->select('productcat.*','product.*') 
        ->get();     
        return view('Admin.Insertproduct',compact('modelproducttype','product'));
    }

    public function category()
    {
        $product=DB::table('productcat')//table with fk
        ->select('productcat.*')//from db
        ->get();

        $getproduct = DB::table('product') //product table
        ->join('productcat','productcat.producttypeid','=','product.producttypeid')
        ->select('*')
        ->get()
        ->toArray();
        return view('ProductCategory',compact('product','getproduct')); 
    }

    public function description($id)
    {
        $product=DB::table('productcat')//table with fk
        ->select('productcat.*')//from db
        ->get();

        $getproduct = DB::table('product') //product table
        ->join('productcat','productcat.producttypeid','=','product.producttypeid')
        ->select('*')
        ->where('product.productid',$id)
        
        ->get()
        ->toArray();
        return view('Description',compact('product','getproduct')); 
    }

    public function book(Request $request)
    {
        $book=new BookModel();
        $book->bookingdate=Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i');
        $book->id=$request->userid;
        $book->productid=$request->productid;
        $book->save();
        return redirect()->back()->with('booking Success','Booking is Done'); 
        // dd($book);
    }

    
}
