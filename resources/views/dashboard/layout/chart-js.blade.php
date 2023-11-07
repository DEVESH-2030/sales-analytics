<script>

    // get total sale dynamic data
    var sales = <?php echo json_encode($sales); ?>;
    var months = sales.map(item => item.month)
    var salesAmountAndRevenue = sales.map(item => item.amount)


    // get order status dynamic data
    var users = <?php echo json_encode($users); ?>;
    var useMonths = users.map(item => item.month)
    var totalUsers = users.map(item => item.total_user)


    // get customer AcquisitionData dynamic data
    var orders = <?php echo json_encode($orders); ?>;
    var orderStatus = orders.map(item => item.status)
    var totalOrders = orders.map(item => item.total_orders)


    // get total selling products dynamic data
    var totalSellingProducts = <?php echo json_encode($totalSellingProducts); ?>;
    var productName = totalSellingProducts.map(item => item.product)
    var productSaled = totalSellingProducts.map(item => item.total_sale)

    // get total sele by categiry dynamic data
    var salesByCategory = <?php echo json_encode($salesByCategory); ?>;
    var categoryName = salesByCategory.map(item => item.category)
    var totalSaleByCategory = salesByCategory.map(item => item.total_sale_products)


    // get total sale dynamic data
    var salesData = {
        labels: months,
        datasets: [{
            label: 'Total Sales',
            data: salesAmountAndRevenue,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var topSellingProductsData = {
        labels: productName,
        datasets: [{
            label: 'Units Sold',
            data: productSaled,
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
            borderWidth: 1
        }]
    };

    var salesByCategoryData = {
        labels: categoryName,
        datasets: [{
            data: totalSaleByCategory,
            backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
            borderWidth: 1
        }]
    };

    // get total revenue dynamic
    var revenueTrendsData = {
        labels: months,
        datasets: [{
            label: 'Revenue',
            data: salesAmountAndRevenue,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // get order status dynamic data
    var orderStatusData = {
        labels: orderStatus,
        datasets: [{
            data: totalOrders,
            backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
            borderWidth: 1
        }]
    };

    // get customer AcquisitionData dynamic data
    var customerAcquisitionData = {
        labels: useMonths,
        datasets: [{
            label: 'New Customers',
            data: totalUsers,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
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

    new Chart(document.getElementById('salesChart').getContext('2d'), {
        type: 'line',
        data: salesData,
        options: chartOptions
    });

    new Chart(document.getElementById('topSellingProductsChart').getContext('2d'), {
        type: 'bar',
        data: topSellingProductsData,
        options: chartOptions
    });

    new Chart(document.getElementById('salesByCategoryChart').getContext('2d'), {
        type: 'doughnut',
        data: salesByCategoryData,
        options: chartOptions
    });

    new Chart(document.getElementById('revenueTrendsChart').getContext('2d'), {
        type: 'line',
        data: revenueTrendsData,
        options: chartOptions
    });

    new Chart(document.getElementById('orderStatusChart').getContext('2d'), {
        type: 'doughnut',
        data: orderStatusData,
        options: chartOptions
    });

    new Chart(document.getElementById('customerAcquisitionChart').getContext('2d'), {
        type: 'bar',
        data: customerAcquisitionData,
        options: chartOptions
    });
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
