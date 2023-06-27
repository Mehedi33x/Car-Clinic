@extends('backend.master')
@section('content')

<div class="container mt-3">
    <h2 style="font-size: 35px; margin-bottom:20px">Service List</h2>

    <div>
        <a href="{{route('center.add')}}">
            <button type="submit" class="btn btn-success" style="margin-bottom: 20px">Add New Service</button>
        </a>
    </div>
    <table class="table table-bordered" style="border: 2px solid black">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Center Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($center as $key=>$item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->contact}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>

                <td>
                        {{-- <a href=""><i class="fa-solid fa-eye"></i></a>

                        <a href=""><i class="fa-solid fa-pen-to-square"></i></a>

                        <a href="" onclick="return confirm('Are you sure to Delete?')"><i class="fa-solid fa-trash-can"></i></a> --}}

                        <div class="container">
                            <div class="dropdown">
                              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fas fa-user"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i>Delete</a>
                              </div>
                            </div>
                          </div>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table> <br>
    {{$center->links()}}
</div>


@endsection