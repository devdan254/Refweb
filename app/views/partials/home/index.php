<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 class="text-info">THE DASHBORD</h4>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""> <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-chart-content">
                                    <div class=" rounded">
                                        <div class=" bg-warning"></div>
                                        <i><img src='<?php echo SITE_ADDR."assets/images/earnings.png"; ?>'></i></div>
                                        <div class="widget-numbers">
                                            <span>3M</span>
                                        </div>
                                        <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                            Total  Earnings
                                        </div>
                                        <div class="widget-description opacity-8">
                                            <span class="text-danger pr-1">
                                                <i class="fa fa-angle-down"></i>
                                                <span class="pl-1">+ 3%</span>
                                            </span>
                                            down last 30 days
                                        </div>
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparklines-simple-1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-chart-content">
                                        <div class=" rounded">
                                            <div class=" bg-warning"></div>
                                            <i><img src='<?php echo SITE_ADDR."assets/images/stock.png"; ?>'></i></div>
                                            <div class="widget-numbers"><span>1M</span></div>
                                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-danger font-weight-bold">
                                                Invested Dividents
                                            </div>
                                            <div class="widget-description opacity-8">
                                                Earned on Dailly Basis
                                                <span class="text-info pl-1">
                                                    <i class="fa fa-angle-down"></i>
                                                    <span class="pl-1">3%</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="widget-chart-wrapper">
                                            <div id="dashboard-sparklines-simple-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-xl-4">
                                    <div class="card mb-3 widget-chart">
                                        <div class="widget-chart-content">
                                            <div class=" rounded">
                                                <div class=" bg-warning"></div>
                                                <i><img src='<?php echo SITE_ADDR."assets/images/atm.png"; ?>'></i></div>
                                                <div class="widget-numbers text-danger"><span>$294</span></div>
                                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-info font-weight-bold">
                                                    Withdrawals
                                                </div>
                                                <div class="widget-description opacity-8">
                                                    Down by
                                                    <span class="text-success pl-1">
                                                        <i class="fa fa-angle-down"></i>
                                                        <span class="pl-1">21.8%</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="widget-chart-wrapper">
                                                <div id="dashboard-sparklines-simple-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 comp-grid">
                            <div class=""> <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-night-fade">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-uppercase">Total Referals</div>
                                                <div class="widget-subheading">Since <?php echo get_active_user("date"); ?></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span class="ml-1 mb-1">18</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-arielle-smile">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-uppercase">Earning Level</div>
                                                <div class="widget-subheading">Bronze Investment Plan</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span class="ml-1 mb-1">ONE</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-happy-green">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-uppercase">Netflix License</div>
                                                <div class="widget-subheading">Total licenses</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span class="ml-1 mb-1">8</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <div class=""><div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="card-shadow-primary card-border mb-3 card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image opacity-4"
                                            style="background-image: url('<?php echo SITE_ADDR."assets/images/abstract.jpg"; ?>');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title text-capitalize mb-0 fsize-3">UPGRADE NOW TO <i>SILVER</i></h5>
                                                <h6 class="menu-header-subtitle mb-3 text-uppercase"><span class="badge badge-secondary text-white"><i><?php echo USER_NAME ;?></i></span> KEEP GOING YOU ARE ALMOST THERE!!!</h6>
                                                <div role="group" class="mb-0 btn-group">
                                                    <button type="button"
                                                        class="btn-pill pl-3 pr-3  btn btn-warning">LEVEL
                                                    </button>
                                                    <button type="button"
                                                        class="pl-3 pr-3  btn btn-warning">
                                                        1
                                                    </button>
                                                    <button type="button"
                                                        class="btn-pill pl-3 pr-3  btn btn-warning">
                                                        <b>BRONZE</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="p-0 list-group-item">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class=" card">
                                                        <div class="card-body">
                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                <div class="widget-chat-wrapper-outer">
                                                                    <div class="widget-chart-content">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="widget-numbers mt-0">
                                                                                <div class="widget-chart-flex">
                                                                                    <div>
                                                                                        <span><small><i>Ksh</i></small> 20,000</span>
                                                                                    </div>
                                                                                    <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                                        <b>TO UPGRADE TO SILVER</b>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                        <div id="dashboard-sparkline-carousel-3"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-chart">
                                                        <div class="widget-chart-content">
                                                            <div class="widget-numbers mt-0 text-danger">
                                                                <small>Ksh</small>
                                                                1450
                                                                <small class="opacity-5 pl-2">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </small>
                                                            </div>
                                                            <div class="widget-subheading">Earnings Today</div>
                                                        </div>
                                                    </div>
                                                    <div class="divider mt-0 mb-0 mr-2"></div>
                                                    <div class="widget-chart">
                                                        <div class="widget-chart-content">
                                                            <div class="widget-numbers mt-0 text-primary">
                                                                <small>Ksh</small>
                                                                300
                                                                <small class="opacity-5 pl-2">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </small>
                                                            </div>
                                                            <div class="widget-subheading">Earned Today From Referals
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class=" ">
                                                <div class=" row ">
                                                    <div class="mx-auto">
                                                        <div class="p-1 col-sm-12 col-md-12 col-lg-12">
                                                            <button class=" btn-shadow-lg btn btn-dark btn-wide btn-lg">
                                                                <span class="mr-2 opacity-7">
                                                                    <i><img src='<?php echo SITE_ADDR."assets/images/p.png"; ?>'/></i>
                                                                    </span>
                                                                    <span class="mr-1"><b>UPGRADE</b> <i class="fa fa-arrow-up text-success"></i> </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="text-primary">
                <div class="container">
                    <div class="page-header"><h4>YOUR REFERALS DATA</h4></div>
                    <div class="row ">
                        <div class="col-md-8 comp-grid">
                            <div class=" ">
                                <?php  
                                $this->render_page("referals/list?limit_count=10" , array( 'show_header' => false,'show_footer' => false )); 
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 comp-grid">
                            <div class=""><div class=" card bg-white shadow-lg comp-grid mt-n4">
                                <div class="mt-2"><div class=" justify-content-center">
                                    <div class="card-body mt-n3" style="width:auto ; height:208px;" id="piechart">
                                    </div>
                                </div>
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script>
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);
                                    function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                    ['COMPARISON', 'INFORMATION'],
                                    ['INCOME',     <?php echo 75 ; ?>],
                                    ['REFERALS',      <?php echo 25  ?>],
                                    ]);
                                    var options = {
                                    // title: 'My Daily Activities'
                                    };
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                    chart.draw(data, options);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
