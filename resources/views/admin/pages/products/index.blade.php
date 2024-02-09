<table border="2">
    <thread>
        <tr>
            <th>S.N</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Description</th>
            <th>Product Code</th>
            <th>Product Phone</th>
            <th>Image</th>
            <th>Action
</tr>
</thread>
<tbody>
    @foreach($products as $key=>$product)
    
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->code}}</td>
        <td>{{$product->phone}}</td>
        <td><img src="{{asset('/images/'.$product->image)}}" width="200px;">
    </td>
        <td>
            <a href="/editproduct/{{$product->id}}">Edit</a>
            <a href="/deleteproduct/{{$product->id}}">Delete</a>
</td>
</tr>
    @endforeach
</tbody>
</table>
