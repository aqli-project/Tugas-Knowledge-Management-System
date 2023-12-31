@extends('layouts.app')

@section('content')

<div class="">
    <!--carousel-->
    <div class="container">
        @include('partials.carousel')
    </div>
    <!--end carousel-->

    <!--main-->
    <div class="">
        @include('layouts.mainindex')
        @include('partials.arrow')
    </div>
     <!--end main-->

    <!--footer-->    
        <div class="container">
             @include('partials.footer')
        </div>
    <!--end-->

</div>

@endsection