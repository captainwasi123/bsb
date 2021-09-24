<div class="modal fade" id="becomeVenderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
      {{--  modal sa --}}
  
  
      <div class="container profile-container">
          <div class="login-screen-head m-b-20">
            <img src="{{URL::to('/public/storage/vendor/logo/Screenshot_1.png')}}" width="60px">
             <h3 class="col-white upper"> PROFILE INFO </h3>
          </div>
          <div class="login-screen-content">
             <form>
                <div class="row">
                   <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Name </h6>
                         <input type="text" class="form-field5" name="">
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Last Name </h6>
                         <input type="text" class="form-field5" name="">
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Email  </h6>
                         <input type="email" class="form-field5" name="">
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Phone number </h6>
                         <input type="number" class="form-field5" name="">
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Business Name </h6>
                         <input type="text" class="form-field5" name="">
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Website Link </h6>
                         <input type="text" class="form-field5" name="">
                      </div>
                   </div>
                   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Address </h6>
                         <input type="text" class="form-field5" name="">
                      </div>
                   </div>
                   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                      <div class="form-label5">
                         <h6 class="col-white"> Business Description </h6>
                         <textarea class="form-field5"></textarea>
                      </div>
                   </div>
                </div>
                <div class="form-label5 m-t-20">
                   <input type="submit" style="width: 150px;" value="SUBMIT" class="submit-btn3" name="">
                </div>
             </form>
          </div>
       </div>
  
      {{--  sa  --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>