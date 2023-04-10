@extends('layouts.admin.admin_app')

@section('content')

  <section>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">News Letter Subscribers</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>E-MAIL</th>
                                <th>DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?=$sn = 1;?>
                            @foreach($list_subscriber as $sub)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{$sub->subscriber_email}}</td>
                                <td>{{$sub->created_at}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
  </section>
@endsection
