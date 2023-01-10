@extends('layouts.app_frontend')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Details</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Blog Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{asset($data->post_image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ route('blog.post',$data->id) }}">{{$data->post_name}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$data->creator_name}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$data->post_date}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                	@php
                		$showcat=DB::table('categories')->where('id',$data->category_id)->first();
                	@endphp
                  <li><a href="#">{{$showcat->category_name}}</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">{{$data->tags}}</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-comments">

              <h4 class="comments-count">Comments Section</h4>

              <div id="comment-1" class="comment">
              	@foreach($comment as $row)
		            <div class="d-flex">
	                  <div>
	                    <h5><a href="">{{$row->name}}</a></h5>
	                    <p>
	                      {{$row->comment}}
	                    </p>
	                  </div>
		            </div>
                @endforeach
              </div><!-- End comment #1 -->

              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>

                <form action="{{ route('comment.store') }}" method="post">
                	@csrf
                	<input type="hidden" name="post_id" value="{{$data->id}}">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>

              </div>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          @include('layouts.frontend_sidebar')

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection
