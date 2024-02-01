

<h1>Create Category</h1>
<form action="createCategory" method="post">
    @csrf
    <label for="">Category Name</label>
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>