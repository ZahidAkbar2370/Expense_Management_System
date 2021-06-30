@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Expense</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Expense</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">
							
			<form role="form" method="post" action="{{URL::to('save-add-expense')}}">
				@csrf
				
				<div class="form-group">
					<label>Date of Expense</label>
					<input class="form-control" type="date" value="" name="expense_date" required="true">
				</div>

				<div class="form-group">
					<label>Item</label>
					<input type="text" class="form-control" name="expense_item" value="" required="true">
				</div>
								
				<div class="form-group">
					<label>Cost of Item</label>
					<input class="form-control" type="number" value="" required="true" name="expense_cost">
				</div>
																
				<div class="form-group has-success">
					<button type="submit" class="btn btn-primary" name="submit">Add Expense</button>
				</div>
								
			</form>
					
		</div>
								
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->

@endsection