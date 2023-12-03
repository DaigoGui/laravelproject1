@extends('books.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Selected Book Info</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>
            <br>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $book->Title }}
        </div>
        <div class="form-group">
            <strong>Author:</strong>
            {{ $book->Author }}
        </div>
        <div class="form-group">
            <strong>Genre:</strong>
            {{ $book->Genre }}
        </div>
        <div class="form-group">
            <strong>Covers:</strong>
            {{ $book->Book_Covers }}
        </div>
        <div class="form-group">
            <strong>Description:</strong>
            {{ $book->Description }}
        </div>     
      
    </div>
</div>

@endsection

