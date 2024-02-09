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
<form action="/formsaver" method="post" enctype="multipart/form-data">
@csrf

<label for="">Name</label>
<input type="text" name="name">
<br><br>

<label for="">Price</label>
<input type="text" name="price">
<br><br>

<label for="">Description</label>
<input type="text" name="description">
<br><br>

<label for="">Code</label>
<input type="text" name="code">
<br><br>

<label for="">Phone</label>
<input type="text" name="phone">
<br><br>
<label for='product image'></label>
<input type='file' name='img'>
<button type="submit">Add Product</button>
</form>
@endsection