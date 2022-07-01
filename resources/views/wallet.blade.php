@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">{{ __('Wallet Information') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($wallet as $wallet)
                            @if ($wallet->wallet != 1)
                                {{-- Start checkBox for not active wallet --}}
                                <h5 class="font-weight-normal">Wallate Status</h5>
                                <span class="notify-text">If the wallet is not activated, you will not be able to take full
                                    advantage
                                    of the site . </span>


                                <div class="mt-2 col-md-5">

                                    <div class="form-check form-switch">

                                        <input class="form-check-input" type="checkbox" id="walletstatust" value="0">
                                        <label class="form-check-label" for="walletstatust">Active Wallet</label>

                                    </div>
                                </div>
                                {{-- End checkBox for not active wallet --}}
                            @else
                                {{-- Start checkBox for  active wallet --}}
                                <h5 class="font-weight-normal">Wallate Status</h5>
                                <span class="notify-text">If the wallet is not activated, you will not be able to take
                                    full
                                    advantage
                                    of the site . </span>


                                <div class="mt-2 col-md-5">

                                    <div class="form-check form-switch">

                                        <input class="form-check-input" type="checkbox" id="walletstatust" value="0"
                                            checked>
                                        <label class="form-check-label" for="walletstatust">Active Wallet</label>

                                    </div>
                                </div>
                                {{-- End checkBox for  active wallet --}}

                                {{-- Start Income --}}
                                <h5 class="font-weight-normal">Income</h5>
                                <span class="notify-text">Please enter all information correctly to get the most benefit
                                    .
                                </span>
                                <div class="form-row">
                                    <div class="col-3">
                                        <input type="number" id="salary" class="form-control"
                                            value="{{ $wallet->salary }}" placeholder="Salary">
                                    </div>
                                    <div class="col-3">
                                        <input type="number" id="bounse" class="form-control"
                                            value="{{ $wallet->bounses }}" placeholder="Bonuses">
                                    </div>
                                    <div class="col-3">
                                        <input type="number" id="overtime"
                                            class="form-control"value="{{ $wallet->overtime }}" placeholder="overtime">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" id="total"
                                            class="form-control"value="{{ $wallet->total_income }}" placeholder="Total"
                                            readonly>
                                    </div>
                                </div>
                                {{-- End Income --}}
                                {{-- Start Expenses --}}
                                <h5 class="font-weight-normal">Expenses</h5>
                                <span class="notify-text">Please enter all information correctly to get the most benefit
                                    .
                                </span>
                                <div class="form-row">
                                    <div class="col-3">
                                        <input type="number" id="Food"value="{{ $wallet->food }}"
                                            class="form-control" placeholder="Food">
                                    </div>
                                    <div class="col-3">
                                        <input type="number" id="Drinks"value="{{ $wallet->Drinks }}"
                                            class="form-control" placeholder="Drinks">
                                    </div>
                                    <div class="col-3">
                                        <input type="number" id="Shopping"
                                            value="{{ $wallet->shopping }}"class="form-control" placeholder="Shopping">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" id="totalm"value="{{ $wallet->total_expeses }}"
                                            class="form-control" placeholder="Total" readonly>
                                    </div>
                                </div>
                                {{-- End Expenses --}}
                                <h5 class="font-weight-normal" style="display: inline-block">Wallet balance : </h5>
                                <input type="text" id="balance" value="{{ $wallet->balance }}" class="form-control"
                                    placeholder="Total" readonly>
                            @endif
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
@endsection
