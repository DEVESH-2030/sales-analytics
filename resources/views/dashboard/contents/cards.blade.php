{{-- Count and total cards here --}}
<div class="row">

    {{-- total money --}}
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Today's Money
                            </p>
                            <h5 class="font-weight-bolder">
                                {{ 0 }}
                            </h5>
                            {{-- <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                                since yesterday
                            </p> --}}
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- total users --}}
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Total User's
                            </p>
                            <h5 class="font-weight-bolder">
                                <?php
                                $users = App\Models\User::count();
                                ?>
                                {{ $users ?? 0 }}
                            </h5>
                            {{-- <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+3%</span>
                                since last week
                            </p> --}}
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- total products --}}
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Total Products
                            </p>
                            <h5 class="font-weight-bolder">
                                <?php
                                $products = App\Models\Product::count();
                                ?>
                                {{ $products ?? 0 }}
                            </h5>
                            {{-- <p class="mb-0">
                                <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                since last quarter
                            </p> --}}
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- total sale --}}
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Todal Sales
                            </p>
                            <h5 class="font-weight-bolder">
                                ${{ $sales->count() }}
                            </h5>
                            {{-- <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+5%</span>
                                than last month
                            </p> --}}
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- end total count data section --}}
