@extends('layouts.app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Credit Cards</h1>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Your Credit Cards</h6>
        <a href="#" class="btn btn-sm btn-primary">
            <i class="fas fa-plus"></i> Add Credit Card
        </a>
    </div>

    <div class="card-body">
        @if($cards->isEmpty())
            <div class="text-center text-muted">
                No credit cards found.
            </div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Bank</th>
                        <th>Card Name</th>
                        <th>Network</th>
                        <th>Limit</th>
                        <th>Annual Fee</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cards as $card)
                        <tr>
                            <td>{{ $card->bank_name }}</td>
                            <td>{{ $card->card_name }}</td>
                            <td>{{ $card->network ?? '-' }}</td>
                            <td>₹ {{ number_format($card->credit_limit ?? 0) }}</td>
                            <td>
                                {{ $card->annual_fee ? '₹ '.number_format($card->annual_fee) : 'Free' }}
                            </td>
                            <td>
                                @if($card->is_active)
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
