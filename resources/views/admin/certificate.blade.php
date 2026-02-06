@extends('admin.master')
	@section('certificate', 'active')
	@section('content')

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Transfer Certificate</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="/admin/upload_certificate" method="post" enctype="multipart/form-data">
                            
                            <div class="form-row">
                                <!-- <div class="col-12">
                                    <div class="font-weight-semi-bold h5 mb-3">Update </div>
                                </div> -->
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Student Name</label>
                                    <input required type="text" class="form-control" id="name" name="name" placeholder="Enter student name">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="tcNumber">Registration Number</label>
                                    <input required type="text" class="form-control" id="tcNumber" name="tcNumber" placeholder="Enter TC number">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="certificate">Upload Certificate</label>
                                    <input required type="file" class="form-control" id="topper_image" name="file">
                                </div>
                            </div>
                            <p style="text-align: center; color: green;">{{ $msg ?? ''}}</p>
                            <p style="text-align: center; color: red;">{{ $err_msg ?? ''}}</p>
                            @error('tcNumber')
                            <p style="text-align: center; color: red;">{{ $message ?? ''}}</p>
                            @enderror
                            {{ csrf_field()}}
                            <button type="submit" class="btn btn-primary float-right">Upload</button>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>


        </div>
@endsection
       