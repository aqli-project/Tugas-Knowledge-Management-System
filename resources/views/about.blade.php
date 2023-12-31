@extends('layouts.app')

@section('content')

<div class="container">

    <!---->
    <div>
        @include('layouts.appabout')
    </div>
    <!---->

    <!--footer-->    
    <div>
        @include('partials.footer')
    </div>
    <!--end footer-->

</div>

@endsection