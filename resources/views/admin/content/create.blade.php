@extends('layouts.backend')
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Page Content</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Page Content</li>
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
                <h3 class="card-title">Manage Page Contents</h3>

              
              </div>
              @if (session('success'))
               <div class="alert alert-success">{{session('success')}}</div>   
              @endif
              <!-- /.card-header -->
              <div class="card-body ">
                <form action="{{route('content.store')}}" method="POST">
                  @csrf
                  <div class="mb-1">
<textarea name="content"></textarea>
                  </div>
                <div class="mb-1">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    


@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
                        CKEDITOR.replace( 'content' );
                </script>
@endsection

