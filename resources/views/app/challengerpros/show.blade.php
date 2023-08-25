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
                        
                    </tbody>
                    <tfoot>
                        
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
        dom: 'B',
        processing: true,
        serverSide: true,
        ajax: "{{ route('challengers.list', ['single'=>$challengerpro->id]) }}",
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
        buttons: ["copy", "csv", "excel", "pdf", "print"],
        searching: true,
        ordering: true,
        responsive: true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)').enable();
    
  });
</script>

@endsection