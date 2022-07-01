@extends('layouts.app')
@yield('content')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">{{ __('statistics') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($data as $data)
                            <h6 style="display: inline-block">Number of visitors to the registration page : </h6>
                            <h6 style="display: inline-block">{{ $data[0] }} </h6>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
