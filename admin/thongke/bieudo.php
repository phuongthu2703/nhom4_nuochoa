<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Thống kê</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Biểu đồ</h6>
        </nav>
        </div>

        <div class="container-fluid py-4">
<div class="row">
<div class="col-12">
<div class="card mb-4">
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
  $tongdm=count($listthongke);
  $i=1;
  foreach ($listthongke as $thongke) {
    extract($thongke);
    if($i==$tongdm) $dauphay=""; else $dauphay=",";
    echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
    $i+=1;
  }
  ?>
  
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':1100, 'height':800};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div></div>
</div></div>