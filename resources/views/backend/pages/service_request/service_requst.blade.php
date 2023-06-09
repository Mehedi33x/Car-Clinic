@extends('backend.master')
@section('content')

<div class="container mt-3">
    <h2 style="font-size: 35px; margin-bottom:20px">Service Request List</h2>
    <div>
        <a href="">
            <button type="submit" class="btn btn-success" style="margin-bottom: 20px">+ Service Request</button>
        </a>
    </div>
    <table class="table table-bordered" style="border: 2px solid black">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Service Name</th>
                <th scope="col">Description</th>
                <th scope="col">Service Cost</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>dxvd</td>
                <td>dxvd</td>
                <td>dxvd</td>
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

        </tbody>
    </table>
</div>


@endsection
