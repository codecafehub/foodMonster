<!-- Modal -->
<div class="modal fade" id="formRegistrModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-bg">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="exampleModalLabel">MK<i class="fas fa-utensils"></i> <br>
            <small class="text-warning">Sign Up With Us</small> </h5>
            <button type="button" class="close text-warning" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="username" class="form-control" placeholder="Choose Username">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email Address">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="password" name="password" class="form-control" placeholder="Choose Your Password">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="password" name="confrim_password" class="form-control" placeholder="Confirm Your Password">
                        </div>
                        <div class="col-lg-12 col-md-6 form-group">
                            <button class="btn btn-warning btn-block form-control text-light save_data" data-url="{{route('admin.register')}}">Submit<i class="fas fa-arrow-right ml-2"></i></button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>