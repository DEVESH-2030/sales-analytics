
<!DOCTYPE html>
<html>

<head>
    <title>Sales Analytics Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .dashboard-container {
            padding: 20px;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        .chart-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="container dashboard-container">
            <h1 class="text-center mb-4">Sales Analytics Dashboard</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card chart-card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Total Sales Over Time</h2>
                            <canvas id="salesChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card chart-card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Top-Selling Products</h2>
                            <canvas id="topSellingProductsChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card chart-card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Sales by Category</h2>
                            <canvas id="salesByCategoryChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card chart-card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Order Status</h2>
                            <canvas id="orderStatusChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card chart-card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Revenue Trends</h2>
                            <canvas id="revenueTrendsChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card chart-card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Customer Acquisition</h2>
                            <canvas id="customerAcquisitionChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.layout.chart-js')

</body>

</html>
