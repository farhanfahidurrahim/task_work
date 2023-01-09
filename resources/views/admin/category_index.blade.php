@extends('layouts.app_admin')
@section('admin_content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                <h3 class="card-title">All Category DataTable with default features</h3>
                <a href="{{ route('category.create') }}" class="btn btn-primary" style="float:right;">Add Category</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
	                  <tr>
	                    <th>SL</th>
	                    <th>Category Name</th>
	                    <th>Action</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($data as $key=>$row)
	                  <tr>
	                    <td>{{++$key}}</td>
	                    <td>{{$row->category_name}}</td>
	                    <td>
	                    	<a href="{{ route('category.edit',$row->id) }}" class="btn btn-info">Edit</a>
	                    	<a href="{{ route('category.delete',$row->id) }}" class="btn btn-danger">Delete</a>
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