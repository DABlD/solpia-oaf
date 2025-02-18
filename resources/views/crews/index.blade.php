@extends('layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-table mr-1"></i>
                            List
                        </h3>

                        @include('crews.includes.toolbar')
                    </div>

                    <div class="card-body table-responsive">
                    	<table id="table" class="table table-hover" style="width: 100%;">
                    		<thead>
                    			<tr>
                    				<th>ID</th>
                    				<th>FName</th>
                    				<th>MName</th>
                    				<th>Lname</th>
                    				<th>Actions</th>
                    			</tr>
                    		</thead>

                    		<tbody>
                    		</tbody>
                    	</table>
                    </div>
                </div>
            </section>
        </div>
    </div>

</section>

@endsection

@push('styles')
	<link rel="stylesheet" href="{{ asset('css-bak/datatables.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css-bak/datatables.bundle.min.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('css-bak/datatables.bootstrap4.min.css') }}"> --}}
	{{-- <link rel="stylesheet" href="{{ asset('css-bak/datatables-jquery.min.css') }}"> --}}
@endpush

@push('scripts')
	<script src="{{ asset('js-bak/datatables.min.js') }}"></script>
	<script src="{{ asset('js-bak/datatables.bundle.min.js') }}"></script>
	{{-- <script src="{{ asset('js-bak/datatables.bootstrap4.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('js-bak/datatables-jquery.min.js') }}"></script> --}}

	<script>
		$(document).ready(()=> {
			var table = $('#table').DataTable({
				ajax: {
					url: "{{ route('datatable.crew') }}",
                	dataType: "json",
                	dataSrc: "",
					data: {
						select: "*",
					}
				},
				columns: [
					{data: 'id'},
					{data: 'fname'},
					{data: 'mname'},
					{data: 'lname'},
					{data: 'actions'},
				],
        		pageLength: 25,
        		order: [[0, 'desc']],
				// drawCallback: function(){
				// 	init();
				// }
			});
		});

		function exportForm(id){
			let data = {};
			data.id = id;
			
			window.open(`{{ route('crew.exportForm') }}?` + $.param(data), '_blank');
		}
	</script>
@endpush