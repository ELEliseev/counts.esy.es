<head>
	<meta charset="utf-8"/>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="https://code.highcharts.com/stock/highstock.js"></script>
	<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
      <?php
 session_start();
  if($_SESSION['auth']!=true){
?>
 <p>  ВЫ НЕ АВТОРИЗОВАНЫ ! </p>
  <?php
  header('Location: index.php');
  exit;
}
else{
	
?> 
  
  <p>Здравствуйте, <b><?php echo $_SESSION['login'];?></b>!</p>
   
</head>
<body>
 <?php
	function parsedata($year,$week) {
    $data = ((($year-1970)*31556926)+(($week)*604800));          
      
		return $data;		    	   
            }
	include ('connectcount.php');
	 $sql = "SELECT YEAR(date) AS year, WEEK(date,3) AS week, SUM(deltacold) AS deltacold, SUM(deltahot) AS deltahot FROM `count` GROUP BY WEEK(date,3), YEAR(date)";
     $query = mysqli_query($dbase, $sql);  
	 while ($row = mysqli_fetch_array($query)) { 
	extract ($row);
	$date = 1000*(parsedata($year,$week));
	$datacold[] ="[$date,$deltacold]";
	$datahot[] ="[$date,$deltahot]";
	
	   
	 }
	?>
    <form action="/index.php" >
    <button type="submit" class="home">Домой</button>
</form>
	<div id="container" style="height: 400px; min-width: 310px"></div>
<?php
}
?>   
</body>
<script type="text/javascript">
$(function() {
  //new Date(2016, 8, 9, 10) - это равно 1473404400000
  Highcharts.setOptions({
    global: {
      useUTC: false
    } // это чтобы график понимал время как московское
  });
  // Create the chart
  hot_data = [ <?php  echo join ($datahot,',')  ?>];
    
  cold_data = [ <?php  echo join ($datacold,',')  ?>];
    
 
  $('#container').highcharts('StockChart', {
    chart: {
      type: 'column'
    },
    timezoneOffset: 180,

    rangeSelector: {
      buttons: [{
        type: 'week',
        count: 1,
        text: 'неделя'
      }, {
        type: 'all',
        count: 1,
        text: 'все'
      }],
      selected: 1
    },

    title: {
      text: 'Показания приборов водосчетчиков за неделю'
    },

    series: [{
      name: 'Холодная вода',
      data: cold_data,
      color: '#7cb5ec',
      tooltip: {
        valueDecimals: 0
      }
    }, {
      name: 'Горячая вода',
      data: hot_data,
      color: '#f15c80',
      tooltip: {
        valueDecimals: 0
      }
    }]
  });

});
</script>

