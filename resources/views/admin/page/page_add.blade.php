@extends('admin/layout/layout')
@section('page_title','New Page')

@section('container')
<div class="page-title">
						<div class="title_left">
							<h3>New Page</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_content">
									<br />
									<form method="post" action="{{url('admin/page/submit')}}" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Page Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" required="required" class="form-control" name="name" placeholder="name">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="slug" id="slug" class="form-control"></textarea>
											</div>
											@error('slug')
											{{$message}}
											@enderror
										</div>
                    					<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="desc">Description 
											</label>
											<div class="col-md-6 col-sm-6 ">
                        						<textarea name="description" id="desc" class="form-control"></textarea>
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