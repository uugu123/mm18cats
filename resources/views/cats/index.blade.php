@extends('layouts.default')

@section('title', 'Cats')

@section('content')
    <div class="container pt-3">
        <a href="{{route('cats.create')}}" class="btn btn-primary">Add new</a>
        {{$cats->links('partials.pagination')}}

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>created at</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->created_at}}</td>
                        <td>
                            <a class="btn btn-primary">view</a>
                            <a class="btn btn-warning">edit</a>
                            <a class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$cats->links('partials.pagination')}}
    </div>
@endsection
