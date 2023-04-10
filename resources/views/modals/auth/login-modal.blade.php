<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true ">
    <div class="modal-dialog " role="document">
        <div class="modal-content modal-bg">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="exampleModalLabel">MK<i class="fas fa-utensils"></i> <br>
            <small class="text-warning">Login</small> </h5>
            <button type="button" class="close text-warning" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 form-group">
                            <input type="text" name="username" class="form-control" placeholder="Entr Username Or Email">
                        </div>
                        <div class="col-lg-12 col-md-12 form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        </div>
                        <div class="col-lg-12 col-md-6 form-group">
                            <button class="btn btn-warning btn-block form-control text-light">Submit<i class="fas fa-arrow-right ml-2"></i></button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>