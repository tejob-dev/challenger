@extends('layouts.app')

@section("styled")
<link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <div class="col-md-6">
                <!-- <form>
                    <div class="input-group">
                        <input
                            id="indexSearch"
                            type="text"
                            name="search"
                            placeholder="{{ __('crud.common.search') }}"
                            value="{{ $search ?? '' }}"
                            class="form-control"
                            autocomplete="off"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>
                    </div>
                </form> -->
            </div>
            <div class="col-md-6 text-right">
                @can('create', App\Models\Challengerpro::class)
                <a
                    href="{{ route('challengerpros.create') }}"
                    class="btn btn-primary"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <!-- <h4 class="card-title">
                    @lang('crud.challengers_pro.index_title')
                </h4> -->
            </div>

            <div class="table-responsive">
                <table id="table1" class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                ID
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.nomentr')
                            </th>
                            <th class="text-left">
                                Type d'entreprise
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.telephone')
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.creation')
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.nompredirig')
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.typeprog')
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.objectif')
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.messagacquis')
                            </th>
                            <th class="text-left">
                                @lang('crud.challengers_pro.inputs.rdventre')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @forelse($challengerpros as $challengerpro)
                        <tr>
                            <td>{{ $challengerpro->nomentr ?? '-' }}</td>
                            <td>{{ $challengerpro->telephone ?? '-' }}</td>
                            <td>{{ $challengerpro->creation ?? '-' }}</td>
                            <td>{{ $challengerpro->nompredirig ?? '-' }}</td>
                            <td>{{ $challengerpro->typeprog ?? '-' }}</td>
                            <td>{{ $challengerpro->objectif ?? '-' }}</td>
                            <td>{{ $challengerpro->messagacquis ?? '-' }}</td>
                            <td>{{ $challengerpro->rdventre ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $challengerpro)
                                    <a
                                        href="{{ route('challengerpros.edit', $challengerpro) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $challengerpro)
                                    <a
                                        href="{{ route('challengerpros.show', $challengerpro) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $challengerpro)
                                    <form
                                        action="{{ route('challengerpros.destroy', $challengerpro) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse -->
                    </tbody>
                    <tfoot>
                        <!-- <tr>
                            <td colspan="9">
                                {!! $challengerpros->render() !!}
                            </td>
                        </tr> -->
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@section("scripted")
<!-- <script src="/js/jquery.min.js"></script> -->
<script src="/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script> -->

<script src="/js/jquery.dataTables.min.js"></script>
<!--  <script src="https://cdn.datatables.net/plug-ins/1.10.12/sorting/datetime-moment.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.19/dataRender/datetime.js"></script> 
<script src="/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/dataTables.responsive.min.js"></script>
<script src="/js/responsive.bootstrap4.min.js"></script>
<script src="/js/dataTables.buttons.min.js"></script>
<script src="/js/buttons.bootstrap4.min.js"></script>
<script src="/js/jszip.min.js"></script>
<script src="/js/pdfmake.min.js"></script>
<script src="/js/vfs_fonts.js"></script>
<script src="/js/buttons.html5.min.js"></script>
<script src="/js/buttons.print.min.js"></script>
<script src="/js/buttons.colVis.min.js"></script>

<script type="text/javascript">
  $(function () {
    //$.fn.dataTable.render.moment('Do-MMM-YYYY')
    var table = $('#table1').DataTable({
        dom: 'Bfrtip',
        initComplete: function () {
            var api = this.api();

            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="..." style="min-width: 40px;width: 100%;border: 1px solid #c1bdbd;border-radius: 7px;" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
        processing: true,
        serverSide: true,
        ajax: "{{ route('challengers.list', ['single'=>0]) }}",
        /* columnDefs: [ 
            {
                targets: 3,
                
            } 
        ], */
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nomentr', name: 'nomentr'},
            {data: 'typeentr', name: 'typeentr'},
            {data: 'telephone', name: 'telephone'},
            {data: 'creation', name: 'creation', render: function(data, type, full, meta) {
                    console.log(data)
                    const maDate = new Date(data.split("T")[0])
                    return maDate.toLocaleDateString("fr")
                }},
            {data: 'nompredirig', name: 'nompredirig'},
            {data: 'typeprog', name: 'typeprog'},
            {data: 'objectif', name: 'objectif'},
            {data: 'messagacquis', name: 'messagacquis'},
            {data: 'rdventre', name: 'rdventre', render: function(data, type, full, meta) {
                    console.log(data)
                    const maDate = new Date(data.split("T")[0])
                    return maDate.toLocaleDateString("fr")
                }},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json',
        },
        buttons: ["copy", "excel", "print"],
        searching: true,
        ordering: true,
        // responsive: true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)').enable();
    
  });
</script>

@endsection