<?php
include('../connection.php');
include('header.php');
$count="SELECT * FROM `rooms` ";
$count1=mysqli_query($conn,$count);
$total=mysqli_num_rows($count1);
$booked="SELECT * FROM `rooms` where `status`='Booked' ";
$booked1=mysqli_query($conn,$booked);
$booked_room=mysqli_num_rows($booked1);
$vecant="SELECT * FROM `rooms` where `status`='vecant' ";
$vecant1=mysqli_query($conn,$vecant);
$vecant_room=mysqli_num_rows($vecant1);

$query1="SELECT * FROM `orders` ORDER BY 'booking_date' ";
$run1=mysqli_query($conn,$query1);


?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
            google.charts.load('current', {'packages':['piechart']});
            google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('date', 'booking_date');
        data.addColumn('number', 'room_id');

        data.addRows([
          <?php 
       if ($run1==TRUE)
         {
       while($data=mysqli_fetch_array($run1))
       { 

        ?>
        [new Date("<?php echo date('Y-m-d', strtotime("+1 day", strtotime($data['booking_date']))) ; ?>"), <?php echo $data['room_id']; ?>],
            
<?php  
}
       
     }

     ?>
          
        ]);


        var options = {
          title: 'Booking Graphical Representation',
         
          hAxis: {
            format: 'MMM dd, yyyy',
            gridlines: {count: 15}
          },
          vAxis: {
            gridlines: {color: 'none'},
            minValue: 0
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));

        chart.draw(data, options);

       

        
      }

  
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Total_rooms',    <?php echo $total;?>],
          ['Booked_rooms',     <?php echo $booked_room ; ?>],
          ['Vacant_rooms',  <?php echo $vecant_room ; ?>],
        ]);

        var options = {
          title: 'Hotel Graphical Representation '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
 

<div id="chart_div1" style="width: 60%; height: 500px;float: left; margin-top: 80px;"></div>
<div id="piechart" style="width: 35%; height: 500px;float: right;margin-top: 90px;"></div>
