@extends('backend.master')
@section('content')

<div class="container mt-3">
    <h2 style="font-size: 35px; margin-bottom:20px">Car Category List</h2>
    <div>
        <a href="{{route('add.category')}}" class="btn btn-success" style="margin-bottom: 20px">+ Category</a>
    </div>
    <table class="table table-bordered" style="border: 2px solid black">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key=>$item )
            <tr>
                <th scope="row">{{$category->firstitem()+$key}}</th>
                <td>
                    <img style="width: 50px;" src="{{url('/uploads/category/'.$item->image)}}" alt="">
                  </td>

                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td class="text-capitalize">{{$item->status}}</td>
                <td>
                        <div class="container">
                            <div class="dropdown">
                              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i>Edit</a>
                                <a class="dropdown-item" href="#" onclick="return confirm('Are you sure to Delete?')"><i class="fa-solid fa-trash"></i>Delete</a>
                              </div>
                            </div>
                          </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$category->links()}}
</div>


@endsection
