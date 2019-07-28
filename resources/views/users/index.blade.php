@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.body')
    <div class="container-fluid mt--6">
            <div class="row">
                    <div class="col">
        
                            <div class="card">
                                    <div class="card-header border-0">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 class="mb-0">{{ __('Usuarios') }}</h3>
                                                    <p class="text-sm mb-0">
                                                            Lista de todos los usuarios registrados
                                                        </p>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Agregar Usuario') }}</a>
                                                </div>
                                            </div>
                                    </div>                            
                
                                    <div class="col-12 mt-2">                                
                                        @if (session('status'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('status') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    
                                                
                
                                    <div class="table-responsive py-4">                                
                                            <table class="table align-items-center table-flush dataTable no-footer" id="datatable-basic" role="grid" aria-describedby="datatable-basic_info">
                                                <thead class="thead-light">
                                                    <tr role="row">                                                
                                                        <th scope="col">{{ __('Foto') }}</th>
                                                        <th scope="col">{{ __('Nombres') }}</th>
                                                        <th scope="col">{{ __('Correo Electrónico') }}</th>
                                                        <th scope="col">{{ __('Rol') }}</th>
                                                        <th scope="col">{{ __('Fecha Creación') }}</th>
                                                        <th scope="col"></th> 
                                                    </tr>
                                                </thead>
                                            <tbody> 
                                                    @foreach ($users as $user)
                                                    <tr>
                                                        <td>
                                                            <span class="avatar avatar-sm rounded-circle">
                                                                <img src="{{URL::to("/img/prof/".$user->avatar)}}" alt="" style="max-width: 100px; border-radiu: 25px">
                                                            </span>
                                                        </td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>
                                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                                        </td>
                                                        <td>{{ $user->description }}</td>
                                                        <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                                        <td class="text-right">
                                                            <div class="dropdown">
                                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                    @if ($user->id != auth()->id())
                                                                        <form action="{{ route('user.destroy', $user) }}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            
                                                                            <a class="dropdown-item" href="{{ route('user.edit', $user) }}">{{ __('Editar') }}</a>
                                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                                {{ __('Eliminar') }}
                                                                            </button>
                                                                        </form>    
                                                                    @else
                                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Editar') }}</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer py-4">
                                            <nav class="d-flex justify-content-end" aria-label="...">
                                                {{ $users->links() }}
                                            </nav>
                                        </div>
                                </div>
                                </div>
                                    </div>      
    
            @include('layouts.footers.auth')
         </div>
    
            
        
    
@endsection
@push('js')
<!-- Optional JS-->
<script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script>
//
// Datatable
//

'use strict';

var DatatableBasic = (function() {

	// Variables

	var $dtBasic = $('#datatable-basic');


	// Methods

	function init($this) {

		// Basic options. For more options check out the Datatables Docs:
		// https://datatables.net/manual/options

		var options = {
			keys: !0,
			select: {
				style: "multi"
			},
			language: {
				paginate: {
					previous: "<i class='fas fa-angle-left'>",
					next: "<i class='fas fa-angle-right'>"
				},               
                sProcessing:     "Procesando...",
                sLengthMenu:     "Mostrar _MENU_ registros",
                sZeroRecords:    "No se encontraron resultados",
                sEmptyTable:     "Ningún dato disponible en esta tabla",
                sInfo:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                sInfoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
                sInfoFiltered:   "(filtrado de un total de _MAX_ registros)",
                sInfoPostFix:    "",
                sSearch:         "Buscar:",
                sUrl:            "",
                sInfoThousands:  ",",
                sLoadingRecords: "Cargando...",
                oAria: {
                    sSortAscending:  ": Activar para ordenar la columna de manera ascendente",
                    sSortDescending: ": Activar para ordenar la columna de manera descendente"
                }
			},
		};

		// Init the datatable

		var table = $this.on( 'init.dt', function () {
			$('div.dataTables_length select').removeClass('custom-select custom-select-sm');

	    }).DataTable(options);
	}


	// Events

	if ($dtBasic.length) {
		init($dtBasic);
	}

})();

//
// Buttons Datatable
//

var DatatableButtons = (function() {

// Variables

var $dtButtons = $('#datatable-buttons');


// Methods

function init($this) {

    // For more options check out the Datatables Docs:
    // https://datatables.net/extensions/buttons/

    var buttons = ["copy", "print"];

    // Basic options. For more options check out the Datatables Docs:
    // https://datatables.net/manual/options

    var options = {

        lengthChange: !1,
        dom: 'Bfrtip',
        buttons: buttons,
        // select: {
        // 	style: "multi"
        // },
        language: {
            paginate: {
                previous: "<i class='fas fa-angle-left'>",
                next: "<i class='fas fa-angle-right'>"
            }
        }
    };

    // Init the datatable

    var table = $this.on( 'init.dt', function () {
        $('.dt-buttons .btn').removeClass('btn-secondary').addClass('btn-sm btn-default');
    }).DataTable(options);
}


// Events

if ($dtButtons.length) {
    init($dtButtons);
}

})();
</script>    
@endpush