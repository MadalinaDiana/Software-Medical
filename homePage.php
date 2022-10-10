<php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acasa</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage">
<?php include("includes/header.php");?>
  <br>

  <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <align justify>
<blockquote><b style="font-size:30px">De interes public:</b></blockquote>
<br><br>
<blockquote><a href="https://www.cnscbt.ro/index.php/info-populatie">Institutul Național de Sănătate Publică-Informații pentru populație</a></blockquote>
<blockquote><a href="https://stirioficiale.ro/informatii">Grupul de Comunicare Strategic - Stiri Oficiale</a></blockquote>
<blockquote><a href="https://vaccinare-covid.gov.ro/">Platforma nationala de informare cu privire la vaccinarea impotriva COVID-19</a></blockquote>
<br>
<br>
<blockquote><h6> Aplicația Conexiunea Medicală contribuie la accelerarea digitalizării în sistemul de sănătate și facilitează traseul parcurs de  pacient pentru accesarea <br> serviciilor medicale. Aplicația a fost creată pentru a realiza o conexiune între medicii de familie și medicii specialiști,  această conexiune fiind în beneficiul pacienților deoarece crește eficiența și performanța actului medical. </h6></blockquote>
                                </align>
<center>
<h2 class="tm-block-title">Calendar</h2>
                        <div id="calendar"></div>
                        <div class="row mt-4">
                            <div class="col-12 text-right">
                            <input type="date" name="calendar" class="form-control form-control-sm" required>
                            </div>
                        </div>
</center>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
</body>
</html>