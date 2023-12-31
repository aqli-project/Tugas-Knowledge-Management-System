@extends('layouts.app')

@section('content')

<div class="container">
  
    <!---->
    <div class="py-5">
        @include('layouts.appcontact')
    </div>
    <!---->
    
    <!--arrow-->
    <div>
        @include('partials.arrow')
    </div>
    <!--end arrow-->

    <!--footer-->    
    <div>
        @include('partials.footer')
    </div>
     <!--end footer--> 
    
</div>

@endsection