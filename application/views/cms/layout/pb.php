<!-- page content -->
<div class="right_col" role="main">
<!-- top tiles -->
<div class="row tile_count">
 
</div>
<!-- /top tiles -->




    <div class="col-sm-6 col-sm-6">

    
    <script src="<?php echo base_url() ?>assets\cms\production\js/bundle.js"></script>
    <script src="<?php echo base_url() ?>assets\cms\production\js/utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
     </div>



    <div style="width:50%;">
        <canvas id="canvas"></canvas>
    </div>
  
    <script>
    var randomScalingFactor = function() {
        return Math.ceil(Math.random() * 10.0) * Math.pow(10, Math.ceil(Math.random() * 5));
    };

    var config = {
        type: 'line',
        data: {
            labels: ["2011", "2012", "2013", "2014", "2015", "2016", "2017"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                fill: false,
                data: [
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
            }, {
                label: "My Second dataset",
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                fill: false,
                data: [
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'Panas Bumi'
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    type: 'logarithmic',
                }]
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });

        });

        window.myLine.update();
    });
    </script>



</style>
<script src="<?php echo base_url() ?>assets\cms\production\js/ini.js"></script>
<script src="<?php echo base_url() ?>assets\cms\production\js/ini2.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages': ['bar']});
google.charts.setOnLoadCallback(function() {
    $('.service-usage-graph').each(function() {

        var table = new google.visualization.DataTable();
        table.addColumn('string', 'Year');
        table.addColumn('number', 'Rencana Investasi PLTS Rooftop');
        table.addColumn('number', 'Rencana Investasi Pabrikan');
        table.addColumn('number', 'Rencana Investasi Power Producer');
        table.addColumn('number', 'Realisasi Investasi PLTS Rooftop');
        table.addColumn('number', 'Realisasi Investasi Pabrikan');
        table.addColumn('number', 'Realisasi Investasi Power Producer');
        
        table.addRow(['2012', 100, 90, 200,180, 1000,800]);
        table.addRow(['2013', 156, 140, 300,264, 1500,1450]);
        table.addRow(['2014', 200,188, 321, 200, 1300,1280]);
        table.addRow(['2015', 190,175, 350, 340, 1400,1350]);
        table.addRow(['2016', 400,375, 430, 420, 2000,1890]);
        table.addRow(['2017', 500,450, 450,450,2500,2400]);
        var chart = new google.charts.Bar(this);
        var options = google.charts.Bar.convertOptions({
            isStacked: true,
            series: {
                1: { targetAxisIndex: 1 },
                2: { targetAxisIndex: 1 },
                3: { targetAxisIndex: 1 }
            },
            vAxis: {
              viewWindow: {
               /* max: 3000,*/
              }   
            }   
        });
        chart.draw(table, options);
    });
});
</script>

            


