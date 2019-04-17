<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\ModelProductType;


class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=new ModelProductType();
        $product=$product->get();
        $viewproduct= new ModelProductType();
        $viewproduct=$viewproduct->get();

        return view('Admin.InsertProductCategory',compact('product','viewproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.InsertProductCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelproducttype=new ModelProductType();
        $modelproducttype->producttypename=$request->p_type;
        $modelproducttype->save();
     
        return redirect()->to ('/InsertProductCategory'); 
        
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
        $product= ModelProductType::find($id);
        return view('admin.EditProductCategory',[
        'productcat'=>$product
        ]);
    }

   


    public function update(Request $request, $id)
    {
        // $this->validate(request(),[
        //     'producttypename'=>'required|max:150'


        // ]);

        $product=ModelProductType::find($id);
        $product->producttypename=$request->p_type;
        $product->save();
        return redirect()->back()->with('success','Product Category Updated');
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
