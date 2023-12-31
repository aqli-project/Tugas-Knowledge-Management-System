@extends('layouts.app')

@section('content')

<div class="container">

    <div class="text-center py-5">
        <h2>FAQ</h2>
        <P>Berikut telah kami rangkum beberapa pertanyaan yang sering ditanyakan client terkait layanan kami.</P>
    </div>

    <!-- search-->
    <div>
        @include('partials.search')
    </div>
    <!-- search-->
    
        <!--main-->
        <div class="py-5">
            @include('layouts.appfaq')
            @include('partials.arrow')
        </div>
        <!--end main-->


    <!--footer-->    
    <div>
        @include('partials.footer')
    </div>
</div>

@endsection