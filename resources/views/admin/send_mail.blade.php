@extends('layouts.admin.admin_app')

@section('content')

  <section>
    <div class="container justify-content-center  d-flex mt-5">
          <form>
                <div class="form-group col-lg-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
    
                <div class="form-group  col-lg-12">
                  <label>How many subscribers do you want to recieve this mail</label>
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
    
                <div class="form-group  col-lg-12">
                    <label >Upload Image</label>
                    <input type="file" class="form-control-file" >
                  </div>

                  <button type="button" class="btn btn-primary btn-lg btn-block save_data" data-url="{{route(store.job)}}">SEND <i class="fas fa-arrow-right"></i></button>
          </form>
    </div>
  </section>
@endsection
