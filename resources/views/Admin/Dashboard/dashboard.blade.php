@extends("Admin/admin_layout")
@section('content')

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Today's Expense</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="{{$today_expense}}" ><span class="percent">{{$today_expense}}</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
						<h4>Yesterday's Expense</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="{{$yesterday_expense}}" ><span class="percent">{{$yesterday_expense}}</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Last 7day's Expense</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="{{$weak_expense}}">
							<span class="percent">{{$weak_expense}}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Last 30day's Expenses</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="{{$month_expense}}" ><span class="percent">{{$month_expense}}
							
						</span>
					</div>
					</div>
				</div>
			</div>
		
		</div><!--/.row-->
			<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
						<h4>Current Year Expenses</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="{{$year_expense}}" >
							<span class="percent">{{$year_expense}}
							
							</span>
						</div>
					</div>
				
				</div>

			</div>


		<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
				
					<div class="panel-body easypiechart-panel">
						<h4>Total Expenses</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="{{$total_expense}}" ><span class="percent">
							{{$total_expense}}</span>
						</div>
					</div>
				
				</div>

			</div>


		</div>
		
		<!--/.row-->
	</div>	<!--/.main-->
	
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

@endsection