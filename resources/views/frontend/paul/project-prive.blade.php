@extends('layouts.frontend-paul')

@section('head_and_title')
    <meta name="description" content="Paul Prive">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PAUL MARC - PAUL PRIVE</title>
@endsection

@section('content')
    <!-- Tab Header -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 left-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <a href="{{ route('frontend.paul.prives') }}"><img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-10.png') }}" height="50" alt="header"/></a>
                    </div>
                </div>
                <div class="col-lg-4 middle-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">

                        <a href="{{ route('frontend.paul.lanes') }}"><img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-11.png') }}" height="40" alt="header"/></a>
                    </div>
                </div>
                <div class="col-lg-4 right-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-12.png') }}" height="40" alt="header"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-t-40 m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-top-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-13.jpg') }}');"></div>
    </section>

    <!-- DESKTOP -->
    <section class="bg-0 p-t-40 p-b-10 d-none d-md-block">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/paul-prive/paul-prive-1.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-11 custom-font-2" style="font-weight: 500;">Paul Marc Condovilla</h3>
                    <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-10.png') }}" height="50" alt="header"/>
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11">
                        Prestigious and inviting, Paul & Prive is the ideal Condovilla to be sought after.
                        Placed strategically, designed for comfort and laced with natural beauty, these
                        living spaces cater for the hustlers and the laid backs.
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- MOBILE -->
    <section class="bg-0 p-b-10 d-block d-md-none">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 m-b-50 text-center">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-25 p-t-50 custom-font-2">Paul Marc Condovilla</h3>
                    <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-10.png') }}" height="50" alt="header"/>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-14.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                    <h5 class="t1-s-1 cl-3 txt-center m-b-11 p-t-50">
                        Prestigious and inviting, Paul & Prive is the ideal Condovilla to be sought after.
                        Placed strategically, designed for comfort and laced with natural beauty, these
                        living spaces cater for the hustlers and the laid backs.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-40 p-b-0">
        <div class="container">
            <!-- Title section -->
            <div class="row pb-3">
                <div class="flex-col-c-c p-b-0 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-0 custom-font-2" style="font-weight: 500;">Condovilla</h3>
                    <h1 class="t1-m-4 cl-3 txt-center m-b-0 custom-font-2" style="font-size: 40px;">THE PLANS</h1>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;width:100%;"></div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="prive-slider d-block d-md-none py-5">
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-01.png') }}" style="height:100vh;" /></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-02.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-03.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-04.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-05.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-06.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-07.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-08.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-09.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-10.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-11.png') }}" style="height:100vh;"/></div>
                        <div><img class="mx-auto w-auto" src="{{ asset('images/paulmarc/paul-prive/paul prive mobile-12.png') }}" style="height:100vh;"/></div>
                    </div>
                    <div class="prive-slider d-none d-md-block">
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-01.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-02.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-03.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-04.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-05.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-06.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-07.jpg') }}"/></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-08.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-09.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-10.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-11.jpg') }}" /></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-12.jpg') }}"/></div>
                        <div><img class="mx-auto w-100" src="{{ asset('images/paulmarc/paul-prive/paul prive plan-13.jpg') }}" /></div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid black;width:100%;"></div>
        </div>
    </section>

{{--    <section class="bg-0 p-t-0 p-b-10">--}}
{{--        <div class="container">--}}
{{--            <!-- Title section -->--}}
{{--            <div class="row">--}}
{{--                <div class="p-b-50 col-md-12 col-sm-12 col-xs-12 col-lg-12">--}}
{{--                    <!-- Tab02 -->--}}
{{--                    <div class="p-t-20 text-center">--}}
{{--                        <!-- Nav tabs -->--}}
{{--                        <ul class="nav nav-tabs" role="tablist">--}}
{{--                            <li class="nav-item col-md-4 p-0 tab-nav">--}}
{{--                                <a class="nav-link active text-dark" data-toggle="tab" href="#siteplan" role="tab">SITE PLAN</a>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item col-md-4 p-0 tab-nav">--}}
{{--                                <a class="nav-link text-dark" data-toggle="tab" href="#floorplan" role="tab" id="tabFloor">FLOOR PLAN</a>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item col-md-4 p-0 tab-nav">--}}
{{--                                <a class="nav-link text-dark" data-toggle="tab" href="#unitplan" role="tab" id="tabUnit">UNIT PLAN</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <!-- Tab panes -->--}}
{{--                        <div class="tab-content" style="border-bottom: none; border-left: none; border-right: none;">--}}
{{--                            <!-- - -->--}}
{{--                            <div class="tab-pane fade show active" id="siteplan" role="tabpanel">--}}
{{--                                <div class="p-rl-30 p-t-25 p-b-0 d-none d-md-block">--}}
{{--                                    <div class="container">--}}
{{--                                        <!-- Title section -->--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">--}}
{{--                                                <img src="{{ asset('images/paulmarc/projects/Paul & Prive - Site Plan (Tower A)-04.jpg') }}" height="100%" width="200%" alt="header"/>--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">--}}
{{--                                                --}}{{-- <h3 class="t1-s-2 cl-3 txt-center m-b-11 p-t-20">--}}
{{--                                                    Paul & Prive <br/>--}}
{{--                                                    <b style="font-size: 40px;">SITE PLAN</b>--}}
{{--                                                </h3>--}}
{{--                                                <h5 class="t1-s-2 cl-3 txt-center m-b-11 p-t-50">--}}
{{--                                                    Total Land Area <b>14,000 sqm</b>--}}
{{--                                                </h5>--}}
{{--                                                <div class="row" style="font-size: 10px; width: 59%;">--}}
{{--                                                    <div class="col-md-6 tab-left">--}}
{{--                                                        Total Unit <b>239 units</b>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6 tab-right">--}}
{{--                                                        Total Parking <b>240 lots</b>--}}
{{--                                                    </div>--}}
{{--                                                </div> --}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="p-t-25 p-b-0 d-block d-md-none m-b-120">--}}
{{--                                    <div class="container">--}}
{{--                                        <!-- Title section -->--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">--}}
{{--                                                <img src="{{ asset('images/paulmarc/siteplan/PAUL MARC MOBILE UNIT-01-final.jpg') }}" height="120%" width="100%" alt="header"/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- - -->--}}
{{--                            <div class="tab-pane" id="floorplan" role="tabpanel">--}}
{{--                                <div class="row d-none d-md-block">--}}
{{--                                    <div class="col-12 pt-4 m-t-20">--}}
{{--                                        <div class="floor-slider">--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower A)-01.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower A)-02.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower A)-03.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower B)-01.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower B)-02.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower B)-03.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower C)-01.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower C)-02.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower C)-03.jpg') }}" height="400"/></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}



{{--                                <!-- Mobile -->--}}
{{--                                <div class="row d-block d-md-none mx-2">--}}
{{--                                    <div class="col-12 pt-2">--}}
{{--                                        <div class="floor-slider">--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-02.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-03.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-04.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-05.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-06.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-07.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-08.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-09.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/floorplan/mobile/PAUL MARC MOBILE UNIT-10.jpg') }}" style= "height:900px;"/></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- - -->--}}
{{--                            <div class="tab-pane" id="unitplan" role="tabpanel">--}}
{{--                                <div class="row d-none d-md-block mx-2">--}}
{{--                                    <div class="col-12 pt-4">--}}
{{--                                        <div class="unit-slider mx-3">--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-01.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-02.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-03.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-04.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-05.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-06.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-07.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-08.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-09.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-10.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-11.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower A)-12.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-01.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-02.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-03.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-04.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-05.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-06.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-07.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-08.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-09.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-10.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower B)-11.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-01.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-02.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-03.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-04.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-05.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-06.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-07.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-08.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-09.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-10.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-11.jpg') }}" height="400"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/Paul & Prive - Unit Plan (Tower C)-12.jpg') }}" height="400"/></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- Mobile -->--}}
{{--                                <div class="row d-block d-md-none mx-2">--}}
{{--                                    <div class="col-12 pt-4">--}}
{{--                                        <div class="unit-slider">--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-11.jpg') }}" style="height:100%;"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-12.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-13.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-14.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-15.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-16.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-17.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-18.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-19.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-20.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-21.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-22.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-23.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-24.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-25.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-26.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-27.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-28.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-29.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-30.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-31.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-32.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-33.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-34.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-35.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-36.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-37.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-38.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-39.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-40.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-41.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-42.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-43.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-44.jpg') }}"/></div>--}}
{{--                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/unitplan/mobile/PAUL MARC MOBILE UNIT-45.jpg') }}"/></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="bg-0 pt-5 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/paul-prive/paul-prive-2.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/paul-prive/paul-prive-3.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-40 p-b-20">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="flex-col-c-c p-b-0 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-0 custom-font-2" style="font-weight: 500;">Condovilla</h3>
                    <h1 class="t1-m-4 cl-3 txt-center m-b-0 custom-font-2" style="font-size: 40px;">FACILITIES</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-18.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                50 m Lap Pool
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-19.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Basketball Court
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-20.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Clubhouse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-21.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Kid’s Pool
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-20 p-b-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-22.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Playground
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-23.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Barbeque Pit
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-24.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Outdoor Gym
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-25.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Yoga Space
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="bg-0 p-t-0 p-b-10">--}}
{{--        <div class="container">--}}
{{--            <div class="flex-col-c-c">--}}
{{--                <div class="size-a-2 bg-3" style="width: 100%; height: 1px;"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    @include('partials.frontend._back-marc')--}}
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>


    <style type="text/css">

        .slick-prev:before {

            color: black;

            }

            .slick-next:before {

            color: black;

            }

        .carousel-control-prev-icon{
            z-index: 99999;
        }

        .carousel-control-prev {
            filter: invert(100%);
        }
        .carousel-control-next {
            filter: invert(100%);
        }
        .tab-content > .tab-pane,

        .pill-content > .pill-pane {

        display: block;     /* undo display:none          */

        height: 0;          /* height:0 is also invisible */

        overflow-y: hidden; /* no-overflow                */

        }

        .tab-content > .active,

        .pill-content > .active {

        height: auto;       /* let the content decide it  */

        overflow-y: visible;

} /* bootstrap hack end */
        @media (max-width: 576px) {
            .slick-next {
                right: -16px;
            }
            .slick-prev {
                left: -16px;
            }
            .header-top-img{
                min-height: 150px;
            }

            .header-img{
                min-height: 350px;
                background-size: 100%;
                background-repeat: no-repeat;
                height: 100%;
            }

            .left-menu{
                border-bottom: 1px solid #333;
            }

            .middle-menu{
                border-bottom: 1px solid #333;
            }

            .right-menu{
                border-bottom: 1px solid #333;
            }
        }

        @media (min-width: 768px) {
            .left-menu{

            }

            .middle-menu{
                border-bottom: 1px solid #333;
            }

            .right-menu{
                border-bottom: 1px solid #333;
            }

            .left-menu{
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .header-top-img{
                min-height: 350px;
                background-size: 100%;
                background-repeat: no-repeat;
                height: 100%;
            }

            .header-img{
                min-height: 350px;
                background-size: 100%;
                background-repeat: no-repeat;
                height: 100%;
            }

            .left-menu{
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .tab-left{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
                border-right: 1px solid #333;
            }

            .tab-right{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .four-box{
                height: 100px;
                text-align: center;
                vertical-align: middle;
                line-height: 90px;
            }

            .tab-nav{
                border: 1px solid #333;
            }
        }

        @media (min-width: 1200px) {
            .left-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .right-menu{
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .four-box{
                text-align: center;
                vertical-align: middle;
                line-height: 90px;
            }

            .header-img{
                min-height: 400px;
            }
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $(".prive-slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            arrows: true

        });

        $('#tabFloor').on('show.bs.tab', function (e) {
            $('.floor-slider').slick('refresh');

        })

        $("#tabFloor").click(function(){
            $('.floor-slider').slick('refresh');
        });

        $(".unit-slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            arrows: true
        });

        $('#tabUnit').on('show.bs.tab', function (e) {
            $('.unit-slider').slick('refresh');

        })

        $("#tabUnit").click(function(){
            $('.unit-slider').slick('refresh');
        });
    </script>
@endsection
