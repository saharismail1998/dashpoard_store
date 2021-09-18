@extends('layouts.dashpord')
@section('content')
<body>
    <form class="form-group" action="/admin/category/{{$category->id}}" method="post">
    @csrf
    @method('put')

    @include('admin.categories.-form')


    
    
    
    </form>
</body>
@endsection('content')