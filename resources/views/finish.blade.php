
    <!doctype html>
<html lang="en">
<head>
    <title>Колесо компетенций</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav>
    <nav class="navbar" style="background-color: #ff4d00">
        <div style="height: 70px">
            <img src="{{URL::asset('/images/bilim.png')}}" width="50%" style="margin-top: 15px;" ;>
        </div>
    </nav>
</nav>
<div class="container p-5">
        <h4 class="text-center">У Вас склонность к направлению: </h4>
        <h2 class="text-center">{{$points->descriptions->description}}</h2>
</div>
    <div id="piechart" style="min-height: 600px;" class="text-center"></div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Product Name', 'Sales', 'Quantity'],

            @php
                foreach($result as $res ) {
                    echo "['".$res->questions->short_name."', ".$res->points->id.", ".$res->points->name."],";
                }
            @endphp
        ]);

        var options = {
            // title: 'Колесо компетенций',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<style>

</style>
</body>
</html>
