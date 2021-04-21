@extends('admin/layout/layout')
@section('page_title','Edit Post')
@section('container')
<div class="page-title">
						<div class="title_left">
							<h3>Edit Post</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_content">
									<br />
									<form method="post" action="{{url('/admin/posts/post_update/').'/'.$PostArr[0]->id}}" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" required="required" class="form-control" name="title" value="{{$PostArr[0]->title}}">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="slug" required="required" class="form-control" name="slug" value="{{$PostArr[0]->slug}}">
											</div>
										</div>
										@error('slug')
											{{$message}}
										@enderror
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="short-desc">Short Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="short_desc" id="short-desc" class="form-control">{{$PostArr[0]->short_desc}}</textarea>
											</div>
										</div>
                    					<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="long-desc">Long Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="long_desc" id="long-desc" class="form-control" >{{$PostArr[0]->long_desc}}</textarea>
											</div>
										</div>
                    					<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="image" name="image">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="date">Date <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="date" class="date-picker form-control" name="post_date" placeholder="dd-mm-yyyy" type="date" required="required" value="{{$PostArr[0]->post_date}}" >
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success" name="submit">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
@endsection