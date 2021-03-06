<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookModel;
use App\user;
use DB;
use Carbon;
use App\OrderModel;

use App\Productmodel;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }
    
    
   

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user=auth()->user();
        $book=DB::table('booking')
        ->join('product', 'product.productid','=','booking.productid')
        ->where('booking.id','=',$user->id)
        ->get();
        return view('Booking',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {   
        $user=Auth()->user();
        $new= new OrderModel;
        $new->bookingid=$request->id;
        $new->uid= $user->id;
        $new->save();

        $data=DB::table('order')
        ->join('booking','booking.bookingid','=','order.bookingid')
        ->join('product','product.productid','=','booking.productid')
        ->select('product.*','booking.bookingdate')
        ->where('order.uid','=',$user->id)
        ->get();
       
        DB::table('booking')->where('bookingid',$request->id)->update(['status'=>"yes"]);
        return view('/Order',compact('data')); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $user=Auth()->user();
            $book=DB::table('booking')
            ->Join('product','product.productid','=','booking.productid')
            ->Join('users','users.id','=','booking.id')
            ->select('product.name','product.price','users.email','booking.bookingdate','product.img') 
            ->get();

            return view('Admin.Viewbooking',compact('book'));
        
     
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
        DB::table('order')->where('bookingid',$id)->delete();
        DB::table('booking')->where('bookingid',$id)->update(['status'=>"no"]);
        return redirect()->to('/Booking')->withSuccess('Order cancelled successfully !');
    }
}
