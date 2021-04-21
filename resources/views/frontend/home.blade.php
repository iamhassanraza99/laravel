@extends('frontend/layout/layout')

@section('page_title','Home')
@section('page_name','Home')

@section('container')

      @foreach($result as $post)
        <div class="post-preview">
          <a href="{{url('/post/'.$post->slug)}}">
            <h2 class="post-title">
              {{$post->title}}
            </h2>
            <h3 class="post-subtitle">
              {{ substr($post->short_desc,0,100) }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{$post->author}}</a>
            on {{$post->post_date}}</p>
        </div>
        <hr>
      @endforeach
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
@endsection