@extends('books.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Books Read</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('books.create') }}" class="btn btn-success">Enter New Book</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>covers</th>
        <th>Description</th>
        <th width="250px">Action</th>
    </tr>

    @foreach ($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->Title}}</td>
        <td>{{$book->Author}}</td>
        <td>{{$book->Genre}}</td>
        <td>{{$book->Book_Covers}}</td>
        <td>{{$book->Description}}</td>
        <td>
            <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                <a href="{{ route('books.show',$book->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('books.edit',$book->id) }}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $books -> links() }}
@endsection
