@extends('layouts.dashpord')
@section('content')

<body>
    <div >
       <div>
        <h2>categories List </h2>
        <br>
        <div class="table-toolbar mb-4">
        <a href="/admin/category/create" class="btn btn-sm btn-primary" >Create</a>
        </div>
    </div>
       <x-flash_message />
       <x-alert type="danger" >

       <h1>Alert message</h1>
       <p>Message is danger</p>
       </x-alert>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Parent</th>
                    <th>Created At</th>
                    <th> Status</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(count($entries)>0)
                @foreach($entries as $category)
                <tr>
                    <td> {{$category->id }}</td>
                    <td><a href="/admin/category/{{$category->id}}">{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td> {{ $category->parent_id}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->status}}</td>
                    <td><a href="/admin/category/{{$category->id}}/edit" class="btn btn-sm btn-primary" >Edit</a>
                    </td>
                    <td>
                        <form action="/admin/category/{{$category->id}}" method="post">
                            @csrf
                            @method('delete')
                            <!-- OR
    <input type="hidden" name="_method" value="delete"> -->
                            <button type="submit">Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6"> NO Categories</td>
                </tr>
                @endif
            </tbody>

        </table>

        </div>
        <div class="container">
        {{$entries->links()}}
        </div>
</body>
@endsection('content')