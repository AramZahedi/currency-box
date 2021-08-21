@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="badge-info p-3 d-flex justify-content-center align-items-center
                    flex-column justify-content-around position-relative" style="min-height: 180px;">
                    <div style="top: 50%; right: 3rem; opacity: 30%; transform: translateY(-50%)"
                         class="position-absolute">
                        <i style="font-size: 7rem"
                           class="fa fa-dollar"></i>
                    </div>
                    <div class="text-center">
                        <h2 class="font-weight-bold mb-0">
                            USD
                        </h2>
                        <div>
                            (United States Dollar)
                        </div>
                    </div>

                    <div class="text-center mt-3"
                         style="font-size: 1rem">
                        @if ($usd)
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                {{ number_format($usd->price) }}
                            </span>
                            <br>
                            Tomans
                            <br>
                            Last update:
                            {{ $usd->created_at->diffForHumans() }}
                        @else
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                -
                            </span>
                            <br>
                            Tomans
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="badge-danger p-3 d-flex justify-content-center align-items-center
                    flex-column justify-content-around position-relative" style="min-height: 180px;">
                    <div style="top: 50%; right: 3rem; opacity: 30%; transform: translateY(-50%)"
                         class="position-absolute">
                        <i style="font-size: 7rem"
                           class="fa fa-euro"></i>
                    </div>
                    <div class="text-center">
                        <h2 class="font-weight-bold mb-0">
                            EUR
                        </h2>
                        <div>
                            (Euro)
                        </div>
                    </div>

                    <div class="text-center mt-3"
                         style="font-size: 1rem">
                        @if ($eur)
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                {{ number_format($eur->price) }}
                            </span>
                            <br>
                            Tomans
                            <br>
                            Last update:
                            {{ $eur->created_at->diffForHumans() }}
                        @else
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                -
                            </span>
                            <br>
                            Tomans
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="badge-primary p-3 d-flex justify-content-center align-items-center
                    flex-column justify-content-around position-relative" style="min-height: 180px;">
                    <div style="top: 50%; right: 3rem; opacity: 30%; transform: translateY(-50%)"
                         class="position-absolute">
                        <i style="font-size: 7rem"
                           class="fa fa-gbp"></i>
                    </div>
                    <div class="text-center">
                        <h2 class="font-weight-bold mb-0">
                            GBP
                        </h2>
                        <div>
                            (UK Pound)
                        </div>
                    </div>

                    <div class="text-center mt-3"
                         style="font-size: 1rem">
                        @if ($gbp)
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                {{ number_format($gbp->price) }}
                            </span>
                            <br>
                            Tomans
                            <br>
                            Last update:
                            {{ $gbp->created_at->diffForHumans() }}
                        @else
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                -
                            </span>
                            <br>
                            Tomans
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="badge-success p-3 d-flex justify-content-center align-items-center
                    flex-column justify-content-around position-relative" style="min-height: 180px;">
                    <div style="top: 50%; right: 3rem; opacity: 30%; transform: translateY(-50%)"
                         class="position-absolute">
                        <i style="font-size: 7rem"
                           class="fa fa-money"></i>
                    </div>
                    <div class="text-center">
                        <h2 class="font-weight-bold mb-0">
                            AED
                        </h2>
                        <div>
                            (UAE Dirham)
                        </div>
                    </div>

                    <div class="text-center mt-3"
                         style="font-size: 1rem">
                        @if ($aed)
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                {{ number_format($aed->price) }}
                            </span>
                            <br>
                            Tomans
                            <br>
                            Last update:
                            {{ $aed->created_at->diffForHumans() }}
                        @else
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                -
                            </span>
                            <br>
                            Tomans
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="badge-warning p-3 d-flex justify-content-center align-items-center
                    flex-column justify-content-around position-relative" style="min-height: 180px;">
                    <div style="top: 50%; right: 3rem; opacity: 30%; transform: translateY(-50%)"
                         class="position-absolute">
                        <i style="font-size: 7rem"
                           class="fa fa-cny"></i>
                    </div>
                    <div class="text-center">
                        <h2 class="font-weight-bold mb-0">
                            CNY
                        </h2>
                        <div>
                            (Chinese Yuan)
                        </div>
                    </div>

                    <div class="text-center mt-3"
                         style="font-size: 1rem">
                        @if ($cny)
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                {{ number_format($cny->price) }}
                            </span>
                            <br>
                            Tomans
                            <br>
                            Last update:
                            {{ $cny->created_at->diffForHumans() }}
                        @else
                            <span class="font-weight-bold"
                                  style="font-size: 1.4rem; font-family: 'Nunito', 'tahoma', sans-serif">
                                -
                            </span>
                            <br>
                            Tomans
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
