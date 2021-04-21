@extends('frontend/layout/layout')

@section('page_title',$result[0]->title)
@section('page_name',$result[0]->title)

@section('container')
<p>{{$result[0]->long_desc}}</p>
<!-- <p>Placeholder text by
  <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
  <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p> -->
@endsection