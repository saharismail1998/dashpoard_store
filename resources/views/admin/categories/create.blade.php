@extends('layouts.dashpord')
@section('content')
<body>
    <form action="/admin/category" method="POST" class="form-group">
  
      @csrf
    @include('admin.categories.-form')
    
    </form>
</body>
@endsection