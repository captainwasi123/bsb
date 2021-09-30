@extends('vendor.includes.master')
@section('title', 'Membership Plan')
@section('content')

                <div class="row el-element-overlay ">
                    <div class="col-md-12 p-b-20">
                        <h3 class="card-title">Virtual > Membership Plan</h3></div>
                        @foreach ($data as $key => $val )
                        <div class="col-lg-3 col-md-6">



                            <div class="card">
                                <div class="el-card-item">
                                    <div class="row">

                                        <div class="col-md-8 p-l-20 p-r-0">

                                            <div class="package">
                                                <h3>{{ $val->package_name }}</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="package">
                                                <h3 class="gold-c">${{ $val->package_price }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="background: #cb8819;">
                                    <div class="el-card-content">
                                        <p><span><a><i class="fa fa-check">&nbsp;</i></a> {{ $val->keyword }} Keywords</span></p>

                                        <hr style="background: #cb8819;">
                                        <p>
                                            <input type="checkbox" id="basic_checkbox_1" class="filled-in" checked />
                                            <label for="basic_checkbox_1">BSB {{@$val->category->name}}</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                            <label for="basic_checkbox_2">BSB {{@$val->product->title}}</label>
                                        </p>

                                       <button type="submit" class="btn btn-success gold-b"> Buy Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                            @if(count($data) == '0')
                            <div class="col-md-12">
                               <h4 class="not-found">No Membership Package Available.</h4>
                            </div>
                         @endif
                </div>

@endsection
