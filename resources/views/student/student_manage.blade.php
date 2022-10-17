@extends('layout.app')

@section('title', 'HomePage')

@section('content')
   
    @if (count($students)<=0) I have a zero record! 
    @else 
   
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one m-5">MANAGE STUDENT</h1>
                <div class="text-left"><a href="student/create" class="btn btn-outline-primary">Add new
                    product</a></div>
    
                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">FullName Student</th>
                            <th scope="col" class="pr-5">Birthday</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <td>{!! $student->fullname !!}</td>
                            <td class="pr-5 text-right">{!! $student->birthday !!}</td>
                            <td>{!! $student->address !!}</td>
                            <td>
                                <a href="student/edit/{!! $student->id !!}"
                                class="btn btn-outline-primary">Edit</a>
                                {{-- <button type="button" class="btn btn-outline-danger ml-1"
                                    onClick='showModel({!! $student->id !!})'>Delete</button></td> --}}
                                <a href="delete-student/{!! $student->id !!}"
                                        class="btn btn-outline-danger ml-1">Delete</a>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No products found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
    @endif
@endsection