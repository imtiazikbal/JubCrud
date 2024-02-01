

<h1>Create Product</h1>
<form action="{{ 'updateproduct/'.$data->id }}" method="post">
    @csrf
    <label for="">Product Name Name</label>
    <input type="text" name="name" value="{{ $data->name }}">
    <label for="">Product Category</label>
    <select name="category_id" id="">
       
            <option value="{{$data->category->id }}">{{ $data->category->name }}</option>
   
    </select>
    <label for="">Product Price</label>
    <input type="text" name="price" id="" value="{{ $data->price }}">
    <label for="">Product Qty</label>
    <input type="text" name="qty" id="" value="{{ $data->qty }}">
    <button type="submit">Submit</button>
</form>