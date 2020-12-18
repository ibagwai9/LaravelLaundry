<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ ENV('APP_TITLE') }}</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no" />
  	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="{{ ENV('description') }}">
	<meta name="keywords" content="{{ ENV('keywords') }}">

 	<meta name="theme-color" content="#ffffff">
	<!-- Main style -->
	<link rel="stylesheet" href="{{ mix('/css/dashboard.css') }}">
	<link rel="stylesheet" href="{{ mix('/css/dashboard_resources.css') }}">

</head>

<body id="page-top">

	<div id="wrapper">

		@include('dashboard.common.navbar')

		<div id="content-wrapper" class="d-flex flex-column">

			<div id="content">

				@include('dashboard.common.topbar')

				<div class="container-fluid">

					@yield('content')

				</div>
			</div>

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; {{date('Y')}}</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>



  <script src="{{ mix('/js/dashboard.js') }}"></script>
	<script src="{{ mix('/js/dashboard_resources.js') }}"></script>
	@include('dashboard.common.message')

  @yield('js-validation')
  @yield('js-scripts')

	<script type="text/javascript">

			$(document).ready(function() {
					$('#datatable-responsive').DataTable({
							dom: 't',
							bDestroy: true,
							language: {
									"sProcessing":     "Processing...",
									"sLengthMenu":     "Show _MENU_ records",
									"sZeroRecords":    "No results found",
									"sEmptyTable":     "No data available in this table",
									"sInfo":           "Showing records from _START_ to _END_ out of a total of _TOTAL_ records",
									"sInfoEmpty":      "Showing records from 0 to 0 out of a total of 0 records",
									"sInfoFiltered":   "(filtering a total of _MAX_ records)",
									"sInfoPostFix":    "",
									"sSearch":         "Look for:",
									"sUrl":            "",
									"sInfoThousands":  ",",
									"sLoadingRecords": "Loading...",
									"oPaginate": {
											"sFirst":    "First",
											"sLast":     "Last",
											"sNext":     "Next",
											"sPrevious": "Previous"
									},
									"oAria": {
											"sSortAscending":  ": Enable to sort the column in ascending order",
											"sSortDescending": ": Activate to sort the column in descending ordere"
									}
							},
							pageLength: 10
					});

					$(".select2").css({width:'100%'}).select2({
							allowClear: true,
							placeholder: {
									id: '',
									text: 'Select an option...'
							},
							minimumResultsForSearch: 6
					});

					$('#name').blur(function(event){
							$.get('/dashboard/common/slug/'+$('#name').val(), function(data){
									$('#slug').val(data);
							});
					});

					$('#display_name').blur(function(event){
							$.get('/dashboard/common/slug/'+$('#display_name').val(), function(data){
									$('#name').val(data);
							});
					});
			});
	</script>
</body>

</html>
