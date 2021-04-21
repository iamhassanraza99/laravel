@extends('admin/layout/layout')
@section('page_title','New Post')
@section('container')
<div class="page-title">
						<div class="title_left">
							<h3>New Posts</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_content">
									<br />
									<form method="post" action="{{url('admin/post/submit')}}" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" required="required" class="form-control" name="title" placeholder="title">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="slug" required="required" class="form-control" name="slug" placeholder="slug">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="short-desc">Short Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="short_desc" id="short-desc" class="form-control"></textarea>
											</div>
										</div>
                    					<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="long-desc">Long Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="long_desc" id="long-desc" class="form-control"></textarea>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="author">Author <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="author" id="author" class="form-control"></textarea>
											</div>
										</div>
                    					<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="image"  name="image">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="date">Date <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="date" class="date-picker form-control" name="post_date" placeholder="dd-mm-yyyy" type="date" required="required" >
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success" name="submit">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
@endsection