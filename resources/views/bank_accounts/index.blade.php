@extends('layouts.app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Bank Accounts</h1>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Your Bank Accounts</h6>
        <a href="#" class="btn btn-sm btn-primary">
            <i class="fas fa-plus"></i> Add Bank Account
        </a>
    </div>

    <div class="card-body">
        @if($accounts->isEmpty())
            <div class="text-center text-muted">
                No bank accounts found.
            </div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Bank</th>
                        <th>Account Name</th>
                        <th>Type</th>
                        <th>Last 4 Digits</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td>{{ $account->bank_name }}</td>
                            <td>{{ $account->account_name }}</td>
                            <td>{{ ucfirst($account->account_type) }}</td>
                            <td>{{ $account->account_number_last4 ?? '-' }}</td>
                            <td>
                                @if($account->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
