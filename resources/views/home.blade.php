@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">LaraBlog Newest Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <!-- Main Content -->
                     @foreach ($posts as $post)
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="/posts/view/{{ $post->id }}">
              <h2 class="post-title">
              {{ $post->title }}
    
              </h2>
              <h3 class="post-subtitle">
              {{ str_limit($post->description , $limit = 50, $end = '...') }}               </h3>
            </a>
            <br>
            <a href="#"><img src="/uploads/{{$post->photo }}" style="width:400px;height:320px" ></a>
            <br>

            <p class="post-meta">Posted by:
            {{ $post->user->name }}<br>
              <a href="#"></a>
               on {{ date('M j, Y', strtotime( $post->created_at )) }}</p>
          </div>
          <hr>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination justify-content-center"> {{ $posts->links() }}</div>
 
</div>
@endsection
