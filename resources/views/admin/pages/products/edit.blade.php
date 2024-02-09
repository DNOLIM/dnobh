@extends('admin.layouts.master')
@section('content')
<style>
    form{
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
    }
</style>
<form action="/updateproduct/{{$ecom->id}}" enctype="multipart/form-data" method="post">
@csrf

<label for="">Name</label>
<input type="text" name="name" value="{{$ecom->name}}">
<br><br>

<label for="">Price</label>
<input type="text" name="price" value="{{$ecom->price}}">
<br><br>

<label for="">Description</label>
<input type="text" name="description" value="{{$ecom->description}}">
<br><br>

<label for="">Code</label>
<input type="text" name="code" value="{{$ecom->code}}">
<br><br>

<label for="">Phone</label>
<input type="text" name="phone" value="{{$ecom->phone}}">
<br><br>
<label for='product image'></label>
<input type='file' name='img'>
<button type="submit">Update Product</button>
</form>
@endsection