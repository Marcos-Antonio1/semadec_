<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Menu Lateral -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <!-- <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/> -->
                            <span class="block m-t-xs font-bold">SEMADEC</span>
                            <span class="text-muted text-xs block">IFRN - Campus Currais Novos</span>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    
                    <?php
                        if(!Yii::$app->user->isGuest)
                        {
                            echo '<li class="active landing_link">
                                <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>
                            </li>';
                        }
                    ?>
                    
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Programação</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Eventos</span><span class="label label-info float-right">NEW</span></a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Classificação</span></a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Jogos</span></a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- Fim Menu Lateral -->

        <!-- Page -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <!-- Menu Topo fixo -->
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                            <i class="fa fa-bars"></i> 
                        </a>

                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>

                    <ul class="nav navbar-top-links navbar-right">
                        <li style="padding: 20px">
                            <span class="m-r-sm text-muted welcome-message"><?= Yii::t('app', 'Welcome to Semadec.'); ?></span>
                        </li>
                    
                        <li>
                            <?php if (Yii::$app->user->isGuest)
                            {
                                echo Html::a('Login', ['site/login']);
                            } 
                            else
                            {
                                echo Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm();
                            }
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Fim Menu Topo fixo -->

            <!-- Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                            <div class="row">
                            <?= $content ?>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Fim Content -->
            
            <!-- Footer -->
            <div class="footer">
                <div class="float-right">
                    Projeto <strong>Semadec.</strong>
                </div>
                <div>
                    <strong>Copyright</strong> Marcos & Westefns &copy; 2018
                </div>
            </div>
            <!-- Fim Footer -->
        </div>
        <!-- Fim Page -->
    </div>
    <!-- Wrapper -->
<?php $this->endBody() ?>
    <!-- Script inspinio -->
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4625583-2', 'webapplayers.com');
        ga('send', 'pageview');

    </script>
    <!-- Script inspinio -->
</body>
</html>
<?php $this->endPage() ?>
