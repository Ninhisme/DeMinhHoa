@extends('layout.app')

@section('title', 'EDIT a new Product')

@section('content')

<div class="container">
    <h1 class="text-justify">EDIT STUDENT</h1>

    <form method="post" action="">
       

        {{-- @method('PUT')    --}}

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input value="{{$student->fullname}}" name="txtFullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Birthday</label>
          <input value="{{$student->birthday}}" type="date" name="dtBirthday" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Adrress</label>
          <input value="{{$student->address}}" name="txtAdress" class="form-control" id="exampleInputPassword1">
        </div>

        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </form>
    
</div>


@endsection