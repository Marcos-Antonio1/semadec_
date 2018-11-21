<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/inspinio/css/bootstrap.min.css',
        'assets/inspinio/fontawesome/css/all.min.css',

        // Toastr style
        'assets/inspinio/css/plugins/toastr/toastr.min.css',

        // Gritter
        'assets/inspinio/js/plugins/gritter/jquery.gritter.css',

        'assets/inspinio/css/animate.css',
        'assets/inspinio/css/style.css',
    ];
    public $js = [
        // Mainly scripts
        'assets/inspinio/js/jquery-3.3.1.min.js',
        'assets/inspinio/js/popper.min.js',
        'assets/inspinio/js/bootstrap.js',
        'assets/inspinio/js/plugins/metisMenu/jquery.metisMenu.js',
        'assets/inspinio/js/plugins/slimscroll/jquery.slimscroll.min.js',

        // Flot
        'assets/inspinio/js/plugins/flot/jquery.flot.js',
        'assets/inspinio/js/plugins/flot/jquery.flot.tooltip.min.js',
        'assets/inspinio/js/plugins/flot/jquery.flot.spline.js',
        'assets/inspinio/js/plugins/flot/jquery.flot.resize.js',
        'assets/inspinio/js/plugins/flot/jquery.flot.pie.js',

        // Peity
        'assets/inspinio/js/plugins/peity/jquery.peity.min.js',
        'assets/inspinio/js/demo/peity-demo.js',

        // Custom and plugin javascript
        'assets/inspinio/js/inspinia.js',
        'assets/inspinio/js/plugins/pace/pace.min.js',

        // jQuery UI
        'assets/inspinio/js/plugins/jquery-ui/jquery-ui.min.js',

        // GITTER
        'assets/inspinio/js/plugins/gritter/jquery.gritter.min.js',

        // Sparkline
        'assets/inspinio/js/plugins/sparkline/jquery.sparkline.min.js',

        // Sparkline demo data
        'assets/inspinio/js/demo/sparkline-demo.js',

        // ChartJS
        'assets/inspinio/js/plugins/chartJs/Chart.min.js',

        // Toastr
        'assets/inspinio/js/plugins/toastr/toastr.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
