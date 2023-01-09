@extends('layouts.app_admin')
@section('admin_content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Post</h3>
                <a href="{{ route('post.index') }}" class="btn btn-success" style="float:right;">All Post</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Name</label>
                    <input type="text" name="post_name" class="form-control" placeholder="Enter Post Name" required>
                  </div>
                  <div class="form-group">
                  	<label for="exampleInputEmail1">Post Category</label>
                    <select class="form-control" name="category_id" required>
                    	<option disabled selected value="">Select Category</option>
                    	@foreach($data as $row)
                    		<option value="{{$row->id}}">{{$row->category_name}}</option>
                    	@endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Image</label>
                    <input type="file" name="post_image" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Description</label>
                    <textarea id="summernote" name="description" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Tags</label>
                    <input type="text" name="tags" class="form-control" placeholder="Enter Tags" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Date</label>
                    <input type="date" name="post_date" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Creator Name</label>
                    <input type="text" name="creator_name" class="form-control" placeholder="Enter Post Creator Name" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
            </div>
            </div>
        </section>
    </div>

@endsection