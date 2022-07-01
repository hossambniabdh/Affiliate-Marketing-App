@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable({{ Js::from($result) }});

            var options = {
                chart: {
                    title: 'Website Performance',
                    subtitle: 'Registration in the last 14 days',
                },
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>


    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
@endsection
