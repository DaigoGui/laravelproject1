@extends('books.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
           <h1>Add New Book</h1> 
        </div>
        <div class="pull-right">
            <a href="" class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
        </div>
    </div>
</div>


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
@csrf 


<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Book Title:</strong>
       <input type="text" name="Title" class="form-control" placeholder="Book Title">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Book author:</strong>
       <input type="text" name="Author" class="form-control" placeholder="Book author">
    </div>
</div> 
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Book covers:</strong>
        <input type="file" name="Book_Covers" class="form-control" accept="image/*">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Book genre:</strong>
       <input type="text" name="Genre" class="form-control" placeholder="Book genre">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Book Discription:</strong>
        <Textarea class="form-control" style="height:150px" name="Description" placeholder="Discription"></Textarea>
    </div>
</div>
<div class="col-xs-12 col-sm-12 cpl-md-12 text-center">
    <button class="btn btn-primary">Submit</button>
</div>




</div>

</form>
@endsection