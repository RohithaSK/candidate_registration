@extends('root.master_page')

@section('form_layout_header_links')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
@endsection

@section('navbar')

@include('user.navbar')

@endsection

@section('content')
<div class="container">

<div class="col-md-12">
    <div class="card" style="font-size:16px;   border: 2px solid rgb(54, 102, 27);">
        <div class="card-header">
            <div class="text-center">
           <h2><b>Candidate Registration</b></h2>
        </div>
    </div>
        <div class="card-body">

            <!--alert-->
            {{-- @if (session('status'))
            <div class="text-center">
              <div class="alert alert-success" role="alert">
                    {{ session('status') }}
              </div>
            </div>
            @endif --}}
            <!--alert-->

            <form  method="POST" action="/save" enctype="multipart/form-data">
                {{csrf_field()}}

              
              

                <div class="row">
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4" style="font-size:16px">Job title</label>
                        <input type="text" name="job_title" class="form-control my-colorpicker1" placeholder="Job title">
                        @if($errors->has('job_title'))
                            <div class="error"><span style="color:red">{{ $errors->first('job_title') }}</span></div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4" style="font-size:16px">First name</label>
                        <input type="text" name="fname" class="form-control my-colorpicker1" placeholder="First name">
                        @if($errors->has('fname'))
                            <div class="error"><span style="color:red">{{ $errors->first('fname') }}</span></div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4" style="font-size:16px">Last Name</label>
                        <input type="text" name="lname" class="form-control my-colorpicker1" placeholder="Last name">
                        @if($errors->has('lname'))
                            <div class="error"><span style="color:red">{{ $errors->first('lname') }}</span></div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4" style="font-size:16px">Date of birth</label>
                        <input type="date" name="dob" class="form-control my-colorpicker1" placeholder="Name">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4" style="font-size:16px">Email</label>
                        <input type="text" name="email" class="form-control my-colorpicker1" placeholder="email">
                        @if($errors->has('email'))
                            <div class="error"><span style="color:red">{{ $errors->first('email') }}</span></div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4" style="font-size:16px">Contact No.</label>
                        <input type="text" name="contact_no" class="form-control my-colorpicker1" placeholder="tel">
                        @if($errors->has('contact_no'))
                            <div class="error"><span style="color:red">{{ $errors->first('contact_no') }}</span></div>
                        @endif
                    </div>
                </div>




                <div class="row">
                    <div class="mb-3 col-md-6">
                        <a href="/common_dashboard" type="submit" class="btn btn-secondary btn-block ">Back</a>
                    </div>

                    <div class="mb-3 col-md-6">
                        <button type="submit" class="btn btn-success btn-block ">Save</button>
                    </div>
                </div>










            </form>
        </div>
    </div>
</div>
</div>
@endsection


@section('form_layout_links')
<script type="text/javascript">
    $('.product-list').on('change', function() {
        $('.product-list').not(this).prop('checked', false);  
    });
  </script>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
@endsection



