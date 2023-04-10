
<!-- Modal -->
<div class="modal fade" id="startMenuModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-bg">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="exampleModalLabel">MENU <br>
            <small class="text-warning"> Check Our Tasty Menu</small> </h5>
            <button type="button" class="close text-warning" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="navbar">
                <ul class="d-flex ul-flex-header">
                    <li class="list-items">
                        <a href="{{url('all-menu')}}">All</a>
                    </li>
                    <li class="list-items">
                        <a href="{{url('starter-menu')}}">Starters</a>
                        </li>
                    <li class="list-items">
                        <a href="{{url('salad-menu')}}">Salads</a>
                    </li>
                    <li class="list-items">
                        <a href="{{url('specialty-menu')}}">Specialty</a>
                    </li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 form-group ">
                        <ul class="list-group">
                            <li class="list-items d-flex justify-content-around align-items-center m-2">
                                <img src="{{asset('assets/img/menu/bread-barrel.jpg')}}" class="img w-25 rounded" alt="">
                                <h5 class="text text-light px-3 mt-3">Lobster Bisque... <small class="text-light">$20.00</small>
                                    <p class="text-warning text-justify text-wrap font-weight-light" style="font-size: 15px">Lorem, deren, trataro, filede, nerada
                                        <small><button class="btn btn-outline-warning p-2 mt-2 text-light text-captilize">Place Order</button></small>
                                    </p>
                                </h5>
                            </li>  
                            <li class="list-items d-flex justify-content-around align-items-center m-2">
                                <img src="{{asset('assets/img/menu/cake.jpg')}}" class="img w-25 rounded" alt="">
                                <h5 class="text text-light px-3 mt-3">Lobster Bisque... <small class="text-light">$20.00</small>
                                    <p class="text-warning text-justify text-wrap font-weight-light" style="font-size: 15px">Lorem, deren, trataro, filede, nerada
                                        <small><button class="btn btn-outline-warning p-2 mt-2 text-light text-captilize">Place Order</button></small>
                                    </p>
                                </h5>
                            </li> 
                            <li class="list-items d-flex justify-content-around align-items-center m-2">
                                <img src="{{asset('assets/img/menu/greek-salad.jpg')}}" class="img w-25 rounded" alt="">
                                <h5 class="text text-light px-3 mt-3">Lobster Bisque... <small class="text-light">$20.00</small>
                                    <p class="text-warning text-justify text-wrap font-weight-light" style="font-size: 15px">Lorem, deren, trataro, filede, nerada
                                        <small><button class="btn btn-outline-warning p-2 mt-2 text-light text-captilize">Place Order</button></small>
                                    </p>
                                </h5>
                            </li>                        
                        </ul>  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group ">
                        <ul class="list-group">
                            <li class="list-items d-flex justify-content-around align-items-center m-2">
                                <img src="{{asset('assets/img/menu/lobster-bisque.jpg')}}" class="img w-25 rounded" alt="">
                                <h5 class="text text-light px-3 mt-3">Lobster Bisque... <small class="text-light">$20.00</small>
                                    <p class="text-warning text-justify text-wrap font-weight-light" style="font-size: 15px">Lorem, deren, trataro, filede, nerada
                                        <small><button class="btn btn-outline-warning p-2 mt-2 text-light text-captilize">Place Order</button></small>
                                    </p>
                                </h5>
                            </li> 
                            <li class="list-items d-flex justify-content-around align-items-center m-2">
                                <img src="{{asset('assets/img/menu/spinach-salad.jpg')}}" class="img w-25 rounded" alt="">
                                <h5 class="text text-light px-3 mt-3">Lobster Bisque... <small class="text-light">$20.00</small>
                                    <p class="text-warning text-justify text-wrap font-weight-light" style="font-size: 15px">Lorem, deren, trataro, filede, nerada
                                        <small><button class="btn btn-outline-warning p-2 mt-2 text-light text-captilize">Place Order</button></small>
                                    </p>
                                </h5>
                            </li>  
                            <li class="list-items d-flex justify-content-around align-items-center m-2">
                                <img src="{{asset('assets/img/menu/tuscan-grilled.jpg')}}" class="img w-25 rounded" alt="">
                                <h5 class="text text-light px-3 mt-3">Lobster Bisque... <small class="text-light">$20.00</small>
                                    <p class="text-warning text-justify text-wrap font-weight-light" style="font-size: 15px">Lorem, deren, trataro, filede, nerada
                                        <small><button class="btn btn-outline-warning p-2 mt-2 text-light text-captilize">Place Order</button></small>
                                    </p>
                                </h5>
                            </li>                    
                        </ul>    
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>