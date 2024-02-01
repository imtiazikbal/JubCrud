<table class="table">
    <thead>
      <tr>
        <th scope="col">s/n</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product qty</th>
        <th scope="col">Product Cat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($data as $data )
     <tr>
        <th scope="row">1</th>
        <td>{{ $data->name }}</td>
        <td>{{ $data->price }}</td>
        <td>{{ $data->qty }}</td>
        <td>{{ $data->category->name}}</td>
        <td><a href="dataForEdit/{{ $data->id }}">Edit</td>
            <td>
                <form action="{{ 'delteProduct/'.$data->id }}" method="post">{{ csrf_field() }}">
                <button type="submit">Delete</button>
                </form>
            </td>
        
      </tr>
     @endforeach
   

    </tbody>
  </table>