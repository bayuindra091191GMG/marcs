@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Masterplan">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD - MASTERPLAN</title>
@endsection

@section('styles')
    <style type="text/css">

        @media (max-width: 576px) {
            .map-img{
                min-height: 1000px;
                background-size: contain;
            }

            .min-img{
                background-size: 96% 100%;
                min-height: 150px;
            }

            .build-img{
                background-size: contain;
                min-height: 150px;
            }

            .header-img{
                background-size: 100% 75%;
                min-height: 50px;
                background-position: center bottom;
            }
        }

        @media (min-width: 768px) {
            .map-img{
                background-size:contain;
            }
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .map-img{
                height: 515px;
                background-size:contain;
            }

            .min-img{
                background-size: 684px 400px;
                min-height: 400px;
            }

            .build-img{
                /*background-size: 684px 400px;*/
                min-height: 515px;
            }

            .header-img{
                background-size: 100% 100%;
                min-height: 200px;
            }
        }

        @media (min-width: 1200px) {
            .map-img{
                height: 740px;
                background-size:contain;
            }

            .min-img{
                height: 500px;
                background-size:contain;
            }

            .build-img{
                width:100%;
                height:auto;
                /*background-size:contain;*/
            }

            .header-img{
                background-size: 100% 100%;
                min-height: 350px;
            }
        }

        @media (min-width: 1900px){
            .build-img{
                height: 720px;
                width: auto;
            }
        }
    </style>
@endsection

@section('content')

    <!-- Masterplan -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="container">
            <div class="row">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-35.jpg') }}');"></div>
            </div>
        </div>
    </section>


    <!-- Why chosse us -->
    <section class="bg-0 p-t-40 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-5">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11 custom-font-2">
                    MASTERPLAN
                </h3>
            </div>
        </div>
    </section>

    {{--<!-- Mobile -->--}}
    <section class="bg-0 p-t-15 p-b-30 d-block d-md-none">
        <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-3" style="height: 2px;"></div>
            <div class="col-1"></div>
        </div>
        </div>
    </section>

    <section class="bg-0 d-block d-md-none">
        <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-img2 respon-3" style="background-image: url('{{ asset('images/marc/masterplan/marcs-masterplan-update.jpg') }}'); background-position : left top;"></div>
            <div class="col-1"></div>
        </div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-block d-md-none">
        <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-1"></div>
        </div>
        </div>
    </section>

    {{--<section class="bg-0 flex-wr-s-st m-b-15-sr991 d-block d-md-none">--}}
        {{--<div class="row">--}}
            {{--<div class="col-1"></div>--}}
            {{--<div class="col-10 size-a-18 bg-img2 respon-3 map-img" style="background-image: url('{{ asset('images/marc/masterplan/MARCS Website Mobile med-07.jpg') }}');"></div>--}}
            {{--<div class="col-1"></div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--<section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-block d-md-none">--}}
        {{--<div class="row">--}}
            {{--<div class="col-1"></div>--}}
            {{--<div class="col-10 bg-3" style="width: 100%; height: 2px;"></div>--}}
            {{--<div class="col-1"></div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="bg-0 p-t-15 p-b-30 d-block d-md-none">
        <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-img2 respon-3 build-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-38.jpg') }}'); "></div>
            <div class="col-1"></div>
        </div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-block d-md-none">
        <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-1"></div><br/>
        </div>
        {{-- <div class="row">
                        <div class="col-12 text-center">
                            <a href="{{ route('frontend.paul.introduction') }}" class="btn btn-dark w-full t1-m-1 bg-custom-dark" style="border-radius: 30px;">back to<br/>
                                <img src="{{ asset('images/marc/marc-back.png') }}"width="200">
                            </a>
                        </div>
        </div> --}}
        </div>
    </section>

    <!-- Mobile Finish -->

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-15 p-b-30 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 size-a-18 bg-img2 respon-3 build-img" style="background-image: url('{{ asset('images/marc/masterplan/marcs-masterplan-update.jpg') }}');"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    {{-- <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2 col-sm-1"></div>
            <div class="col-lg-8 col-sm-10 size-a-18 bg-img2 respon-3 map-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-37.jpg') }}');"></div>
            <div class="col-lg-2 col-sm-1"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-lg-2"></div>
        </div>
    </section> --}}

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-none d-md-block">
        <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 size-a-18 bg-img2 respon-3 min-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-38.jpg') }}');"></div>
            <div class="col-lg-2"></div>
        </div>
        </div>
    </section>

    @include('partials.frontend._back-marc')

@endsection

@section('scripts')
    <script>
    </script>
@endsection
