@extends('vendor.includes.master')
@section('title', 'Membership Plan')
@section('content')

                <div class="row el-element-overlay ">
                    <div class="col-md-12 p-b-20">
                        <h3 class="card-title">Virtual > Membership Plan</h3>
                        <div class="row">
                                    <div class="col-md-6">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        @if(session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                     </div>


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
                                    @foreach($val->VedorMPDescr as $key => $value)
                                         <p><span><a><i class="fa fa-check">&nbsp;</i></a> {{ @$value->description}} Keywords</span></p>
                                        <hr style="background: #cb8819;">
                                    @endforeach
                                     
                                       
                                       
                                     <div class="product-btn2">
                                 @if(Auth::check())
                           <a href="javascript:void(0)" class="btn btn-success gold-b vendorbuypackage" data-id="{{base64_encode($val->id)}}"> Buy Now </a>
                              @endif
                              </div>

                                       {{--  <button type="submit" class="btn btn-success gold-b"> Buy Now</button>  --}}
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
