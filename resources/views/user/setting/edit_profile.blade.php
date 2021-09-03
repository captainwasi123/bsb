@extends('user.includes.master')
@section('title', 'Edit Profile')
@section('addStyle')
<link rel="stylesheet" href="{{URL::to('/public/admin')}}/plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Setting > Profile</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="email" class="form-control" placeholder="Address">
                                                </div>
                                            </div>                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Country</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Country" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">City</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a City" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">State</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a State" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Zip</label>
                                                    <input type="text" class="form-control" placeholder="Enter Product URL">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">               
                                                <div class="form-group">
                                                    <label for="input-file-now">Upload Profile Picture</label>
                                                    <input type="file" id="input-file-now" class="dropify" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success gold-b"> Update</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>

@endsection
@section('addScript')
<script src="{{URL::to('/public/admin')}}/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

    });
    </script>
@endsection