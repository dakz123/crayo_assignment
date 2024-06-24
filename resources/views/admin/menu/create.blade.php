@extends('layouts.backend')
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('menu.index')}}">Manage Menu</a></li>
              <li class="breadcrumb-item active">Add Menu</li>
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
                <h3 class="card-title">Add Menu</h3>

               
              </div>
               @if (session('success'))
               <div class="alert alert-success">{{session('success')}}</div>   
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('menu.store')}}" method="POST">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="page_name">Page Name</label>
                    <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page name">
                  </div>
                  <div class="form-group">
                    <label for="menu_name">Menu Name</label>
                    <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Menu name">
                  </div>
                  <div class="form-group">
                    <label for="page_link">Page Link</label>
                    <input type="text" class="form-control" id="page_link" name="page_link" placeholder="Page Link">
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description">
                  </div>
                   <div class="form-group">
                        <label for="meta_keywords">Meta Keyword</label>
                        <textarea class="form-control" rows="3" name="meta_keywords" placeholder="Meta Keywords"></textarea>
                      </div>
                  <div class="form-group">
                    <label for="sort_order">Sort Order</label>
                    <input type="text" class="form-control" id="sort_order" name="sort_order" placeholder="Sort order">
                  </div>
                  <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="status" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                    
                  </select>
                  
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
@endsection

