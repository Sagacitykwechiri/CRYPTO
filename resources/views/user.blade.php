<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Crypto Investment</a>
            <form class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Earnings Balance</h5>
                        <p class="card-text">${{ auth()->user()->earnings_balance }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Deposit</h5>
                        <p class="card-text">${{ auth()->user()->total_deposit }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Withdrawals</h5>
                        <p class="card-text">${{ auth()->user()->total_withdrawal }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Referral Earnings</h5>
                        <p class="card-text">${{ auth()->user()->referral_earnings }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forms for Deposit, Withdraw, Referral -->
    <div class="container mt-4">
        <div class="row">
            <!-- Deposit Form -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Deposit</h5>
                        <form action="{{ route('deposit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="depositAmount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="depositAmount" name="amount" min="1" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Deposit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Withdraw Form -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Withdraw</h5>
                        <form action="{{ route('withdraw') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="withdrawAmount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="withdrawAmount" name="amount" min="1" required>
                            </div>
                            <button type="submit" class="btn btn-danger">Withdraw</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Referral Earnings Form -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Referral Earnings</h5>
                        <form action="{{ route('referral-earnings') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="referralAmount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="referralAmount" name="amount" min="1" required>
                            </div>
                            <button type="submit" class="btn btn-success">Add Referral</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-4 bg-dark text-white text-center py-3">
        &copy; 2024 Crypto Investment. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
