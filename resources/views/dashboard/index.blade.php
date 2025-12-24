@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    {{-- KPI Cards --}}

    <div class="row">

    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Monthly Expenses Trend
                </h6>
            </div>
            <div class="card-body text-center text-muted">
                Chart will appear here
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Expense Split
                </h6>
            </div>
            <div class="card-body text-center text-muted">
                Pie chart will appear here
            </div>
        </div>
    </div>

</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Recent Transactions
        </h6>
    </div>

    <div class="card-body">
        <div class="text-center text-muted">
            No transactions available yet.
        </div>
    </div>
</div>



    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Expenses (This Month)
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        ₹ 0.00
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Income (This Month)
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        ₹ 0.00
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Credit Utilisation
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        0 %
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Uncategorized Transactions
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        0
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
