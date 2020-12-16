@extends('admin.newlayout.layout')
@section('title', 'About')
@section('page')
    <div class="card">
        <div class="card-body text-center">
            <img src="{!! get_option('site_logo') !!}">
            <div class="h-10"></div>
            <h3>DidAcademy</h3>
            <h4>Version: 2.4</h4>
            <div class="h-10"></div>
            <h5><p>Estudia a tu ritmo <a href="#">DidAcademy</a></p></h5>
            <!--<p><a href="mailto:prodevelopersteam@gmail.com">Contact support</a></p>-->
        </div>
    </div>
@endsection
