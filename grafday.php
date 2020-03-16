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
	include ('connectcount.php');
	 $sql = "SELECT UNIX_TIMESTAMP(DATE(date)) AS dataunix, SUM(deltacold) AS deltacold, SUM(deltahot) AS deltahot FROM `count` GROUP BY UNIX_TIMESTAMP(DATE(date))";
     $query = mysqli_query($dbase, $sql);  
	 while ($row = mysqli_fetch_array($query)) { 
	extract ($row);
	$datacold[] ="[($dataunix*1000),$deltacold]";
	$datahot[] ="[($dataunix*1000),$deltahot]";
	
	  
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
        type: 'day',
        count: 1,
        text: 'день'
      }, {
        type: 'all',
        count: 1,
        text: 'все'
      }],
      selected: 1
    },

    title: {
      text: 'Показания приборов водосчетчиков за сутки'
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
