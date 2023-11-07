<?php

return [

     /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'floting_value' => 10, 2,

    'sort_months' => "FIELD(month, 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec')",

    'sales_raw_query' => "DATE_FORMAT(sale_date, '%b') as month, SUM(total_amount) as amount",
    
];
