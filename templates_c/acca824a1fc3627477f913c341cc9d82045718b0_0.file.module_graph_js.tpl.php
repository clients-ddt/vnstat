<?php
/* Smarty version 3.1.39, created on 2021-07-06 16:03:01
  from '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/module_graph_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e470a57a6c57_58142913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acca824a1fc3627477f913c341cc9d82045718b0' => 
    array (
      0 => '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/module_graph_js.tpl',
      1 => 1625583522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e470a57a6c57_58142913 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php echo '<script'; ?>
 type="text/javascript">
        google.charts.load('current', { packages: [ 'bar' ] });
        google.charts.load("current", { packages: [ 'corechart' ] });
        
        google.charts.setOnLoadCallback(drawHourlyChart);
        google.charts.setOnLoadCallback(drawDailyChart);
        google.charts.setOnLoadCallback(drawMonthlyChart);

        function drawHourlyChart()
        {
            var data = new google.visualization.DataTable();

            data.addColumn('date', 'Hour');
            data.addColumn('number', 'Traffic In');
            data.addColumn('number', 'Traffic Out');
            data.addColumn('number', 'Total Traffic');

            data.addRows([
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hourlyGraphData']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                [new <?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['rx'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['tx'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['total'];?>
],
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ]);

            let options = {
                title: 'Hourly Network Traffic',
                orientation: 'horizontal',
                legend: { position: 'right' },
                explorer: { 
                    axis: 'horizontal',
                    maxZoomIn: 4.0,
                    maxZoomOut: 3.0
            	},
                vAxis: {
                    title: 'Data',
                    format: '##.## <?php echo $_smarty_tpl->tpl_vars['hourlyLargestPrefix']->value;?>
'
                },
                hAxis: {
                    title: 'Hour',
                    format: 'HH:mm',
                    direction: -1,
                    ticks: [
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hourlyGraphData']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        new <?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
,
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ]
                }
            };
            
            var formatDate = new google.visualization.DateFormat({ pattern: 'dd/MM/yyyy HH:mm' });
            formatDate.format(data, 0);
            
            var formatNumber = new google.visualization.NumberFormat({ pattern: '##.## <?php echo $_smarty_tpl->tpl_vars['hourlyLargestPrefix']->value;?>
' });
            formatNumber.format(data, 1);
            formatNumber.format(data, 2);
            formatNumber.format(data, 3);

            let chart = new google.visualization.BarChart(document.getElementById('hourlyNetworkTrafficGraph'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        function drawDailyChart()
        {
            var data = new google.visualization.DataTable();

            data.addColumn('date', 'Day');
            data.addColumn('number', 'Traffic In');
            data.addColumn('number', 'Traffic Out');
            data.addColumn('number', 'Total Traffic');

            data.addRows([
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dailyGraphData']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                [new <?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['rx'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['tx'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['total'];?>
],
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ]);
            
            let options = {
                title: 'Daily Network Traffic',
                orientation: 'horizontal',
                legend: { position: 'right' },
                explorer: { 
                    axis: 'horizontal',
                    maxZoomIn: 4.0,
                    maxZoomOut: 3.0
            	},
                vAxis: {
                    title: 'Data',
                    format: '##.## <?php echo $_smarty_tpl->tpl_vars['dailyLargestPrefix']->value;?>
'
                },
                hAxis: {
                    title: 'Day',
                    format: 'dd/MM/YYYY',
                    direction: -1
                }
            };
            
            var formatDate = new google.visualization.DateFormat({ pattern: 'dd/MM/yyyy' });
            formatDate.format(data, 0);
            
            var formatNumber = new google.visualization.NumberFormat({ pattern: '##.## <?php echo $_smarty_tpl->tpl_vars['dailyLargestPrefix']->value;?>
' });
            formatNumber.format(data, 1);
            formatNumber.format(data, 2);
            formatNumber.format(data, 3);

            let chart = new google.visualization.BarChart(document.getElementById('dailyNetworkTrafficGraph'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        function drawMonthlyChart()
        {
            var data = new google.visualization.DataTable();

            data.addColumn('date', 'Month');
            data.addColumn('number', 'Traffic In');
            data.addColumn('number', 'Traffic Out');
            data.addColumn('number', 'Total Traffic');

            data.addRows([
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['monthlyGraphData']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                [new <?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['rx'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['tx'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['total'];?>
],
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ]);

            let options = {
                title: 'Monthly Network Traffic',
                orientation: 'horizontal',
                legend: { position: 'right' },
                explorer: { 
                    axis: 'horizontal',
                    maxZoomIn: 4.0,
                    maxZoomOut: 3.0
            	},
                vAxis: {
                    title: 'Data',
                    format: '##.## <?php echo $_smarty_tpl->tpl_vars['monthlyLargestPrefix']->value;?>
'
                },
                hAxis: {
                    title: 'Month',
                    format: 'MMMM YYYY',
                    direction: -1
                }
            };
            
            var formatDate = new google.visualization.DateFormat({ pattern: 'MMMM YYYY' });
            formatDate.format(data, 0);
            
            var formatNumber = new google.visualization.NumberFormat({ pattern: '##.## <?php echo $_smarty_tpl->tpl_vars['monthlyLargestPrefix']->value;?>
' });
            formatNumber.format(data, 1);
            formatNumber.format(data, 2);
            formatNumber.format(data, 3);

            let chart = new google.visualization.BarChart(document.getElementById('monthlyNetworkTrafficGraph'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    <?php echo '</script'; ?>
>
<?php }
}
