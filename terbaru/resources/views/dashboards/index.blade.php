@extends('template')

@section('content')
<div id="aturtoko">
    <h2> Aturtoko</h2>
<head>
    <title>Make Google Pie Chart in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
   var analytics = <?php echo $jenis_kelamin; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Percentage of Male and Female Employee',
     is3D: true,};
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart_3d'));
    chart.draw(data, options);
   }
</script>

</head>
<body>
<div class="panel-body">
     <div id="pie_chart_3d" style="width:750px; height:450px;">

     </div>
    </div>
    </body>
@stop

@section('footer')
<div id="aturtoko">
    <h2> Aturtoko</h2>
    </div>
@stop