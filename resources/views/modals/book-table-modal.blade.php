<!-- Modal -->
<div class="modal fade" id="bookTableModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-bg">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="exampleModalLabel">RESERVATION <br>
            <small class="text-warning"> Book a Table</small> </h5>
            <button type="button" class="close text-warning" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <form action="">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="fullname" class="form-control" placeholder="Your Full Name">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email Address">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Contact">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="number" name="number" min="1" class="form-control" placeholder="Number of People">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="time" name="time" class="form-control" placeholder="Time">
                        </div>
                        <div class="col-lg-12 col-md-6 form-group">
                            <textarea name="comment" id=""  class="form-control"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-6 form-group">
                            <button class="btn btn-warning btn-block form-control text-light">Book Your Table <i class="fas fa-arrow-right ml-2"></i></button>>
                        </div>
                       
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>