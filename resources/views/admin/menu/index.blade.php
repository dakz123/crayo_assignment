@extends('layouts.backend')
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="{{route('menu.create')}}" class="btn btn-primary">Add Menu</a></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed table-striped text-nowrap">
                  <thead>
                    <tr>
                      
                      <th>Name</th>
                      <th>Custom Link</th>
                      <th>Menu Parent</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($menus as $menu)
                     <tr>
                        <td>{{$menu->page_name}}</td>
                        <td>{{$menu->page_link}}</td>
                        <td></td>
                        <td> <form action="{{route('menu.destroy',$menu->id)}}" method="POST">
                                 @csrf
                               @method('DELETE')
                            <a href="{{route('menu.edit',$menu->id)}}" class="btn btn-success">Edit</a>
                            <button type="submit" class="card-link btn btn-danger">Delete</button>
                             </form>
                        </td>
                        </tr>   
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
@endsection
