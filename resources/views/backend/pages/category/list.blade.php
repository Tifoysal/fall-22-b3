@extends('backend.master')
@section('content')
<div class="container">
    <div class="mx-auto">
        <a href="{{ route('category.form') }}" class="btn btn-primary">Create Category</a>
    </div>
</div>
<h1>Category List</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

  @foreach($categories as $singleCategory)
    <tr>
      <th scope="row">{{$singleCategory->id}}</th>
      <td>{{$singleCategory->category_name}}</td>
      <td>{{$singleCategory->category_details}}</td>

      <td>
          <a class="btn btn-warning" href="">Edit</a>
          <a class="btn btn-success"  href="">View</a>
          <a class="btn btn-danger"  href="">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
