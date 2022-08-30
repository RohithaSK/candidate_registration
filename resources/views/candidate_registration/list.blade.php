@extends('root.master_page')

@section('title')
<title>View_Fishfood_list</title>
@endsection




@section('datatablestyle')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<script src="//code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<link href="css/app.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="assets/css/feather.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/feather-icons"></script>
@endsection


@section('navbar')

@include('user.navbar')

@endsection


@section('content')


    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="text-center">
                <span style="font-size:25px;font-color:black"><strong>Candidate List</strong></span>
              </div>

            <!--DELETE MODAL-->
  <!-- Modal -->
        <div class="modal fade" id="candidate_delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deleting Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="delete_cand_modal_form" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                <div class="modal-body">
                    <div class="text-center">

                <p style="font-size:25px">Are you sure? </p> <p style="font-size:15px">Once deleted, you will not be able to recover this data!</p>
                        <input type="hidden" id="id">
            </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger btn-sm" >Yes.Delete it.</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        <!--DELETE MODAL-->





                


          <br>
            <div class="col">
                <div class="form-group">
                    <div class="text-right">
            <a href="/form" class="btn btn-success btn-sm  button1"  role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;New registration</a>
                    </div>
            </div>
            </div>





            <div class="card-body">
                <div class="container">
                    <div class="box">

                        <table id="candidate_list" class="display table-striped table-bordered ">
                            <thead>
                                <tr>
                    <th style="width:20px">ID</th>
                    <th >Job title</th>
                    <th>First name</th>
                    <th style="width:20px">Last name</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Tel</th>
                   
                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach($display_data as $value)
                                <tr>
                                  <td style="width:20px">
                                  {{$value->id}}
                                 </td>
                                 <td>
                                  {{$value->job_title}}
                                 </td>
                                 <td>
                                 {{$value->fname}}
                                 </td>
                                 <td style="width:20px">
                                 {{$value->lname}}
                                 </td>
                                 <td>
                                 {{$value->dob}}
                                 </td>
                                 <td>
                                 {{$value->email}}
                                 </td>
                                 <td>
                                 {{$value->contact_no}}  
                                 </td>
                                 <td>
                               
                                    <a href="/edit_data/{{$value->id}}" class="btn btn-primary btn-sm"><i data-feather="edit"></i></a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm deletebtn"><i data-feather="trash-2"></i></a>
                                 </td>
                                </tr>
                            @endforeach
                            </tbody>
                           
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


    @endsection


    @section('datatablescripts')
    <script>
        $(document).ready(function() {
          $('#prod_list').DataTable();
      } );
       </script>

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!--SWEET ALERT LINKS-->
<script src="js/sweetalert.min.js"></script>
<script>
    @if (session('status'))
swal({
  title: '{{session('status')}}',
  icon: '{{session('statuscode')}}',
  button: "OK",
});
@endif
</script>
<!--SWEET ALERT LINKS-->

<!--SWEET ALERT LINKS-->
<script src="js/sweetalert.min.js"></script>
<script>
    @if (session('status'))
swal({
  title: '{{session('status')}}',
  icon: '{{session('statuscode')}}',
  button: "OK",
});
@endif
</script>
<!--SWEET ALERT LINKS-->
<!--DELETE MODAL SCRIPTS-->
<script>
    $(document).ready(function() {
      $('#candidate_list').DataTable();

        //query for deletion
        $('#candidate_list').on('click','.deletebtn',function(){
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            //console.log(data);

            $('#id').val(data[0]);

            $('#delete_cand_modal_form').attr('action','/delete_candidate_data/'+data[0]);

            $('#candidate_delete_modal').modal('show');

        });

  } );
   </script>
<!--DELETE MODAL SCRIPTS-->



@endsection
