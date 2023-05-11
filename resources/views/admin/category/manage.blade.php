@extends('admin.master')

@section('body')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Table</h4>
            <h6 class="card-subtitle">Data table example</h6>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-striped border">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Category Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($categories as $category)
                    <tr>

                        <td>{{ $i++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->image }}</td>
                        <td>{{ $category->status }}</td>
                        <td class="me-3">
                            <a href="" class="btn btn-success btn-sm" >
                                <i class="ti-eraser"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-sm" >
                                <i class="ti-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
