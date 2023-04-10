@extends('layouts.app')

@section('content')

<div class="home-background">
<div class="main-content">
    <div class="text">
        <h1 style="text-shadow:2px 2px 2px rgba(234, 167, 10, 0.6);">Welcome to <span style="text-transform: uppercase; text-shadow:2px 2px 2px rgba(246, 246, 246, 0.6);">modest kitchen</span></h1>
        <p><small>Delivering great food for more than 10 years!</small> </p>
        <button class="btn btn-outline-warning p-2 text-light text-uppercase" data-toggle="modal" data-target="#bookTableModal">Book A Table</button> <button class="btn btn-outline-warning p-2 text-light text-uppercase" data-toggle="modal" data-target="#contactModal">Contact Us</button>
    </div>
    <div class="play-button">
        <button>
            <i class="fas fa-play"></i>
        </button>
    </div>
</div>
</div>

{{-- all modals includes --}}
@include('modals.book-table-modal')
@include('modals.contact-modal')
@include('modals.menus.ourmenu-modal')
@include('modals.menus.starter-modal')
@include('modals.menus.salad-modal')
@include('modals.menus.specialty-modal')
@include('modals.auth.register-modal')
@include('modals.auth.login-modal')

@endsection
