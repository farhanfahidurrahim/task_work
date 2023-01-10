@extends('layouts.app_admin')
@section('admin_content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Post DataTable with default features</h3>
                <a href="{{ route('post.create') }}" class="btn btn-primary" style="float:right;">Add Post</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
	                  <tr>
	                    <th>SL</th>
	                    <th>Name</th>
	                    <th>Category</th>
	                    <th>Image</th>
	                    <th>Description</th>
	                    <th>Tags</th>
	                    <th>Date</th>
	                    <th>Creator Name</th>
	                    <th>Admin</th>
	                    <th>Action</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($data as $key=>$row)
	                  <tr>
	                    <td>{{++$key}}</td>
	                    <td>{{$row->post_name}}</td>
	                    <td>{{$row->category_name}}</td>
	                    <td><img src="{{asset($row->post_image)}}" height="75" width="75"></td>
	                    <td>{{ substr($row->description,0,100) }}</td>
	                    <td>{{$row->tags}}</td>
	                    <td>{{$row->post_date}}</td>
	                    <td>{{$row->creator_name}}</td>
	                    <td>{{Auth::user()->name}}</td>
	                    <td>
	                    	<a href="{{ route('post.edit',$row->id) }}" class="btn btn-info">Edit</a>
	                    	<a href="{{ route('post.delete',$row->id) }}" class="btn btn-danger">Delete</a>
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
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection