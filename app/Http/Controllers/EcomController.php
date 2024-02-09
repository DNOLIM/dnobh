<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecom;

class EcomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Ecom::all();
        return view('admin.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ecom= new Ecom();
        $ecom ->name = $request -> name;
        $ecom ->code = $request -> code;
        $ecom ->price = $request -> price;
        $ecom ->description = $request -> description;
        $ecom ->phone = $request -> phone;
        $image =$request->img;
        $imageextension=$image->getClientOriginalExtension();
        $imagefilename= time().".".$imageextension;
        $image->move(('images'),$imagefilename);
        $ecom->image=$imagefilename;
        $ecom->save();
        return redirect('/admin/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ecom = Ecom::find($id);
        return view('admin.pages.products.edit',compact('ecom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ecom=Ecom::find($id);
        if($request->img){
            $request->validate([
                'image'=>'image|mines:jpg:png:jpeg:web,gif|max:5000'
            ]);
        $image =$request->img;
        $imageextension=$image->getClientOriginalExtension();
        $imagefilename= time().".".$imageextension;
        $image->move(('images'),$imagefilename);
        $ecom->image=$imagefilename;
        }
        $ecom ->name = $request -> name;
        $ecom ->code = $request -> code;
        $ecom ->price = $request -> price;
        $ecom ->description = $request -> description;
        $ecom ->phone = $request -> phone;
        $ecom->save();
        return redirect('/admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteproduct = Ecom::find($id);
        $deleteproduct->destroy($id);
        return redirect('/admin/dashboard');
    }
}
    