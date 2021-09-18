@extends('layouts.dashpord')
@section('content')
<body>
<div class = "container">
<h2>category details </h2>
<table class="table"> 
<thead>
<tr>

<th>ID</th>
<th>Name</th>
<th>Slug</th>
<th>Parent</th>
<th>Created At</th>
<th> Status</th>



</tr>



</thead>
<tbody>


    <tr>
    <td> {{$category->id }}</td>
    <td>{{$category->name}}</td>
    <td>{{$category->slug}}</td>
    <td> {{ $category->parent_id}}</td>
    <td>{{$category->created_at}}</td>
    <td>{{$category->status}}</td>




    </tr>

</tr>

</tbody>

</table>

</div>
</body>
@endsection('content')