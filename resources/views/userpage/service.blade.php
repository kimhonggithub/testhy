@extends('layout.master')
<title>Service</title>
<style>
    #container1 {
        background-color: #203D4A;
        /* green background */
    }

    #services a {
        color: aqua;
        text-decoration: underline;
    }
</style>
@section('content')

<div id="container1">
    <div class="container py-5">
        <div class="row">
            <div class="text-center">
                <img src="/images/white-logo.png" alt="apple" width="170" height="100"><br>
                <h1 class="text-white pb-4">The easy, reliable way to take care of your home.</h1>
                <div class="mx-auto form-outline col-8">
                    <input type="search" id="form1" class="form-control rounded" placeholder=" &#xf002; Search company or service that you need..." aria-label="Search" style="font-family: FontAwesome;" />
                </div><br>
                <div class="row pb-5">
                    <div class="d-flex justify-content-center">
                        <div class="mx-2">
                            <button class="btn py-1 px-3" style="background-color: aqua; border-radius: 200px; color: #203D4A;">All Service</button>
                        </div>
                        <div class="mx-2">
                            <button class="btn py-1 px-3" style="border-radius: 200px; color: #203D4A; background-color: #DEDEDE;">Handyman</button>
                        </div>
                        <div class="mx-2">
                            <button class="btn py-1 px-3" style="border-radius: 200px; color: #203D4A; background-color: #DEDEDE;">Plumbing</button>
                        </div>
                        <div class="mx-2">
                            <button class="btn py-1 px-3" style="border-radius: 200px; color: #203D4A; background-color: #DEDEDE;">Electrical</button>
                        </div>
                        <div class="mx-2">
                            <button class="btn py-1 px-3" style="border-radius: 200px; color: #203D4A; background-color: #DEDEDE;">Cleaning</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        
    @foreach ($servicedetail as $service)
        <div class="col-sm-4 my-3">
            <div class="card">
                <img class="card-img-top" src="/images/repair.jpg" width="30" height="100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h6 class="card-title">{{$service->service_name}}</h6>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button class="btn py-1 px-3" style="border-radius: 200px; background-color: aqua;">{{$service->category}}</button>
                        </div>
                    </div>
                    <div class="d-flex">
                        <span class="fa fa-star star-checked pt-2"></span>
                        <span class="px-2 py-1"><b>4.2</b></span>
                        <p class="py-1 text-muted">(37 People rate this)</p>
                    </div>
                    <div>
                        <p>from <b>៛{{number_format($service->service_price)}}</b></p>
                        <div class="d-flex">
                            <p><b>Service by </b><a href="/company_detail" style="color:#1383b5;">FixMeHome</a></p>
                            <div class="flex-shrink-0">
                                <img src="/images/fixmelogo.png" alt="Generic placeholder image" class="img-fluid rounded-circle p-1" style="width: 30px;">
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="move-right"><a href="/service_detail" class="link-offset-2 link-underline link-underline-opacity-0" style="color:#1383b5;">Book Service <span style='font-size:20px;'>&#8594;</span></a></p>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


@stop