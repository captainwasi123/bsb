@extends('vendor.includes.master')
@section('title', 'Add Product')
@section('addStyle')
<link rel="stylesheet" href="{{URL::to('/public/admin')}}/plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Product > Add New</h3>
                                        <hr>
                                        
                  
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">ID</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" placeholder="Enter Price">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Catagory</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>URL</label>
                                                    <input type="url" class="form-control" placeholder="Enter Product URL">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">               
                                            <div class="form-group">
                                                <label for="input-file-now">Upload Product Image</label>
                                                <input type="file" id="input-file-now" class="dropify" />
                                            </div>
                                        </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Discription</label>
                                                    <textarea class="form-control" rows="5" cols="40"></textarea>
                                                </div>
                                            </div>
                                            <!--/span-->
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