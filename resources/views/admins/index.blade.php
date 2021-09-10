@extends('layouts.admin')

<div class="wrapper">

    @section('content')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-md-8">
          <div class="col">
            
            <!-- <h1>Bienvenue</h1> -->
            <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Vous etes connecte en tant que administrateur') }} -->
                    <br><br>

                    <h1>La liste des demandes</h1>
                    <table class="table table-bordered  table-striped datatable" style="width:960px">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th width="180px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
</div>


@endsection
<!-- <script src="{{ asset('jquery/jquery.js') }}"></script>  -->
<script src="{{ asset('js/app.js') }}"></script> 
<script src="{{ asset('jquery/jquery.validate.js') }}"></script> 
<script src="{{ asset('DataTables/DataTables-1.10.24/js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('DataTables/DataTables-1.10.24/js/dataTables.bootstrap.min.js') }}"></script> 


<script type="text/javascript">
  $(function () {
    
    var table = $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admins.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'prenom', name: 'prenom'},
            {data: 'nom', name: 'nom'},
            {data: 'email', name: 'email'},
            
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });


  // delete
  $('body').on('click', '.deletePS', function (){
            var admins_id = $(this).data("id");
            var result = confirm("Are You sure want to delete !");
            if(result){
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admins.store') }}"+'/'+admins_id,
                    success: function (data) {
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }else{
                return false;
            }
        });
  
</script>


