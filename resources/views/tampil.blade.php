<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel Highcharts Demo</title>
</head>
<body>
    <h1>Highcharts in Laravel Example</h1>
    <div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var userData = <?php echo json_encode($datas['chart'])?>;
    Highcharts.chart('container', {
        chart: {
        // type: 'bar'
        // type: 'pie' -err
        // type: 'spline'
        type: 'column'

    },
        title: {
            text: 'New User Growth, 2020'
        },
        subtitle: {
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
</html>