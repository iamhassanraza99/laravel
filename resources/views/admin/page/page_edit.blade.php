@extends('admin/layout/layout')
@section('page_title','Edit Page')
@section('container')
<div class="page-title">
						<div class="title_left">
							<h3>Edit Page</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_content">
									<br />
									<form method="post" action="{{url('/admin/pages/page_update/').'/'.$PageArr[0]->id}}" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Page Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" required="required" class="form-control" name="name" value="{{$PageArr[0]->name}}">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="slug" id="slug" class="form-control">{{$PageArr[0]->slug}}</textarea>
											</div>
										</div>
                    					<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="description" id="description" class="form-control" >{{$PageArr[0]->description}}</textarea>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="date">Date <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="date" class="date-picker form-control" name="post_date" placeholder="dd-mm-yyyy" type="date" required="required" value="{{$PageArr[0]->post_date}}" >
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