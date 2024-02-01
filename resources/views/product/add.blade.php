

<h1>Create Product</h1>
<form action="createProduct" method="post">
    @csrf
    <label for="">Product Name Name</label>
    <input type="text" name="name">
    <label for="">Product Category</label>
    <select name="category_id" id="">
        @foreach ($category as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <label for="">Product Price</label>
    <input type="text" name="price" id="">
    <label for="">Product Qty</label>
    <input type="text" name="qty" id="">
    <button type="submit">Submit</button>
</form>