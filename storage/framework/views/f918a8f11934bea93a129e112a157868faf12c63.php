<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>

    </head>
    <body>
        <div id="app">
            <?php echo $chart->container(); ?>

        </div>
        <script src="https://unpkg.com/vue"></script>
        <script>
            var app = new Vue({
                el: '#app',
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" charset=utf-8></script>
        <?php echo $chart->script(); ?>

    </body>
</html><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/paquetes/chart.blade.php ENDPATH**/ ?>