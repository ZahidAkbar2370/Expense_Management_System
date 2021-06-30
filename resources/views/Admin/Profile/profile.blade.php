@extends('Admin/admin_layout')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
				
	<div class="panel panel-default">
		<div class="panel-heading">Profile</div>
			<div class="panel-body">
				<p style="font-size:16px; color:red" align="center"></p>
				<div class="col-md-12">
					<form role="form" method="post" action="{{URL::to('update-profile',$edit_user->id)}}">
						@csrf
						<div class="form-group">
							<label>Full Name</label>
							<input class="form-control" type="text" value="{{$edit_user->full_name}}" name="full_name" required="true">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" value="{{$edit_user->email}}" required="true" readonly="true">
						</div>
								
						<div class="form-group">
							<label>Mobile Number</label>
							<input class="form-control" type="text" value="{{$edit_user->mobile_no}}" required="true" name="mobile_no" maxlength="10">
						</div>

						<div class="form-group">
							<label>Registration Date</label>
							<input class="form-control" name="regdate" type="text" value="{{$edit_user->created_at}}" readonly="true">
						</div>
								
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Update</button>
								</div>
								
								
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->

@endsection