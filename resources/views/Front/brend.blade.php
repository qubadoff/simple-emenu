@extends('Front.Layouts.app2')

@section('title') {{ siteInfo()->name }} @endsection

@section('content')

    <div class="bg-white shadow-sm p-3">
        <div class="d-flex align-items-center">
            <div class="gap-3 d-flex align-items-center">
                <a href="{{ route("index") }}"><i class="bi bi-arrow-left d-flex text-danger h2 m-0 back-page"></i></a>
                <h3 class="fw-bold m-0">{{ siteInfo()->name }}</h3>
            </div>
            <div class="ms-auto gap-3 d-flex align-items-center">
                <a class="toggle osahan-toggle text-dark m-0" href="#"><i class="bi bi-list d-flex m-0 h1"></i></a>
            </div>
        </div>
    </div>

    <div class="p-3">
        <div>
            <img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" style="height: 300px; width: 350px; justify-content: center;">
        </div>
        <hr>
        <div class="pb-4">
            <div class="h3 fw-bold">{!! siteInfo()->description !!}</div>
        </div>
        <div class="accordion-body">

            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div>
                            <h3 class="fw-bold mb-1">Wifi şifrəsi : {{ siteInfo()->wifi_password }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">Email : {{ siteInfo()->email }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">Telefon : {{ siteInfo()->phone }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">Ünvan : {{ siteInfo()->location }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">İş saatları : {{ siteInfo()->working_hours }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">Facebook səhifəsi : {{ siteInfo()->facebook_page }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">İnstagram səhifəsi : {{ siteInfo()->instagram_page }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">Tiktok səhifəsi : {{ siteInfo()->tiktok_page }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">Linkedin səhifəsi : {{ siteInfo()->linkedin_page }}</h3>
                            <hr>
                            <h3 class="fw-bold mb-1">Twitter səhifəsi : {{ siteInfo()->twitter_page }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
