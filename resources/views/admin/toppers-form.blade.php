@extends('admin.master')
	@section('toppers-form', 'active')
	@section('content')

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Add Topper</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="/admin/topper_create" method="post" enctype="multipart/form-data">
                            
                            <div class="form-row">
                                <!-- <div class="col-12">
                                    <div class="font-weight-semi-bold h5 mb-3">Update </div>
                                </div> -->
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Topper Name</label>
                                    <input required type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="class">Class Number</label>
                                        <select required name="class" id="class" class="form-control">
                                            <option value="">--Select Class--</option>
                                            <option value="1">Class 1</option>
                                            <option value="2">Class 2</option>
                                            <option value="3">Class 3</option>
                                            <option value="4">Class 4</option>
                                            <option value="5">Class 5</option>
                                            <option value="6">Class 6</option>
                                            <option value="7">Class 7</option>
                                            <option value="8">Class 8</option>
                                            <option value="9">Class 9</option>
                                            <option value="10">Class 10</option>
                                            <option value="11">Class 11</option>
                                            <option value="12">Class 12</option>
                                        </select>
                                    
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="image">Topper Image</label>
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
       