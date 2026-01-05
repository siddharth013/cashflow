<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Cashflow</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('bank.accounts') }}">
            <i class="fas fa-fw fa-university"></i>
            <span>Bank Accounts</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('credit.cards') }}">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Credit Cards</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-exchange-alt"></i>
            <span>Transactions</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

</ul>
