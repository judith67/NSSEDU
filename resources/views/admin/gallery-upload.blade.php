@extends('admin.master')
	@section('gallery-upload', 'active')
	@section('content')

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Gallery Upload</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="/admin/gallery_create" method="post" enctype="multipart/form-data" >
                            
                            <div class="form-row">
                                <!-- <div class="col-12">
                                    <div class="font-weight-semi-bold h5 mb-3">Update </div>
                                </div> -->
                                
                                <div class="form-group col-12 col-md-4">
                                    <label for="topper_image">Upload Image</label>
                                    <input required type="file" class="form-control" id="image" name="image">
                                </div>
                                
                            </div>
                            <p style="text-align: center; color: green;">{{ $msg ?? ''}}</p>
                            <p style="text-align: center; color: red;">{{ $err_msg ?? ''}}</p>
                            {{ csrf_field()}}
                            <button type="submit" class="btn btn-primary float-right">Upload</button>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>


        </div>
@endsection
       