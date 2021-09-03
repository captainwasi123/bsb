@extends('user.includes.master')
@section('title', 'Membership Plan')
@section('content')

<style type="text/css">
    [type=checkbox].filled-in:checked+label:after {
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #cb8819;
    background-color: #cb8819;
    z-index: 0;
}
</style>

                <div class="row el-element-overlay ">
                    <div class="col-md-12 p-b-20">
                        <h3 class="card-title">Membership > Plan</h3>
                     </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="row">
                                    <div class="col-md-8 p-l-20 p-r-0">
                                        <div class="package">
                                            <h3>Basic Package</h3>
                                        </div>                                         
                                    </div>
                                    <div class="col-md-4">
                                        <div class="package">
                                            <h3 class="gold-c">$200</h3>
                                        </div>                                         
                                    </div>                                    
                                </div>                                
                                <hr style="background: #cb8819;">                             
                                <div class="el-card-content">
                                    <p><span><a><i class="fa fa-check">&nbsp;</i></a> 15 - 25 Keywords</span></p>
                                    <p><span><a><i class="fa fa-check">&nbsp;</i></a> 15 - 25 Keywords</span></p> 
                                    <hr style="background: #cb8819;"> 
                                    <p>
                                        <input type="checkbox" id="basic_checkbox_1" class="filled-in" checked />
                                        <label for="basic_checkbox_1">BSB Product Tester</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                        <label for="basic_checkbox_2">BSB T-Shirt</label>
                                    </p>
                                    
                                   <button type="submit" class="btn btn-success gold-b"> Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   
@endsection