@extends('user.includes.master')
@section('title', 'Change Password')
@section('addStyle')
<link rel="stylesheet" href="{{URL::to('/public/admin')}}/plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Setting > Password</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Current Password</label>
                                                    <input type="password" id="lastName" class="form-control form-control-danger" placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">New Password</label>
                                                    <input type="password" id="lastName" class="form-control form-control-danger" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="password" id="lastName" class="form-control form-control-danger" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                        </div>                            
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