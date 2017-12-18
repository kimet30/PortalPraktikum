<body>
 <div id="container">
  <h1>Hasil</h1>
  <div id="body">
<?php
foreach($result as $data) {
    echo $data->title . " - " . $data->slug . "<br>";
}
?>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div>
</body>