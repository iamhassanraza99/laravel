@extends('admin/layout/layout')
@section('page_title','Posts')
@section('container')
<div class="page-title">
              <div class="title_left">
                <h3>Posts</h3>
              </div>
              
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
                    <h2><a href="/admin/post_add" class="badge badge-primary">New Post</a></h2>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{session('msg')}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Author</th>
                                    <th>Image</th>
                                    <th>Post Date</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($PostArr as $PageData)
                                  <tr>
                                    <td>{{$PageData->id}}</td>
                                    <td>{{$PageData->title}}</td>
                                    <td>{{$PageData->short_desc}}</td>
                                    <td>{{$PageData->author}}</td>
                                    <td><img src="{{asset('storage/post/'.$PageData->image)}}" width="100px" alt="image"></td>
                                    <td>{{$PageData->post_date}}</td>
                                    <td>
                                      <a href="{{url('/admin/posts/post_edit/'.$PageData->id)}}" class="badge badge-primary">Edit</a>
                                      <a href="{{url('/admin/posts/delete/delete/'.$PageData->id)}}" class="badge badge-danger">Delete</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                  
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
            </div>
                </div>
              </div>
            </div>
@endsection