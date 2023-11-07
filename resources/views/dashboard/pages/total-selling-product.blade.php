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
            <div class="row">
                <div class="col-md-8">
                    <div class="card chart-card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Top-Selling Products</h2>
                            <canvas id="topSellingProductsChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        var totalSellingProducts = <?php echo json_encode($totalSellingProducts); ?>;

        var productName = totalSellingProducts.map(item => item.product)
        var productSaled = totalSellingProducts.map(item => item.total_sale)

        function topSellingProductChart () {

            var topSellingProductsData = {
                labels: productName,
                datasets: [{
                    label: 'Units Sold',
                    data: productSaled,
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            };


            // Chart.js configurations for each chart
            var chartOptions = {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            new Chart(document.getElementById('topSellingProductsChart').getContext('2d'), {
                type: 'bar',
                data: topSellingProductsData,
                options: chartOptions
            });
        }

        topSellingProductChart()
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
