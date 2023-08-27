@extends('Front.Layouts.app')

@section('title') {{ $cat->name }} @endsection

@section('content')

    <div class="p-3">
        <div class="row gy-3">
            @forelse($products as $item)
                <div class="col-12 col-md-4">
                    <div class="card rounded-4 shadow border-0 overflow-hidden">
                        <div class="position-relative">
                            <div class="product-back"><img src="{{ url('/') }}/storage/{{ $item->image }}" alt class="img-fluid rounded-top"></div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="h4 fw-bold">
                                    {{ $item->name }}
                                </div>
                                <div class="h4 fw-bold">
                                    Qiymət : {{ $item->price }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-muted h6 m-0 fw-normal">
                                <div>
                                    {!! $item->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-warning" role="alert">
                    No Data !
                </div>
            @endforelse
        </div>
    </div>

@endsection
