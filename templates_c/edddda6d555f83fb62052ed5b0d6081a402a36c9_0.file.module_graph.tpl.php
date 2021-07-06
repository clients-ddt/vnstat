<?php
/* Smarty version 3.1.39, created on 2021-07-06 16:31:56
  from '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/module_graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e4776c386db3_23005625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edddda6d555f83fb62052ed5b0d6081a402a36c9' => 
    array (
      0 => '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/module_graph.tpl',
      1 => 1625585508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e4776c386db3_23005625 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<ul class="nav nav-tabs" id="graphTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="hourly-graph-tab" data-toggle="tab" href="#hourly-graph" role="tab" aria-controls="hourly-graph" aria-selected="true">Hourly Graph</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="daily-graph-tab" data-toggle="tab" href="#daily-graph" role="tab" aria-controls="daily-graph" aria-selected="false">Daily Graph</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="monthly-graph-tab" data-toggle="tab" href="#monthly-graph" role="tab" aria-controls="monthly-graph" aria-selected="false">Monthly Graph</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" id="hourly-graph" role="tabpanel" aria-labelledby="hourly-graph-tab">
        <div id="hourlyNetworkTrafficGraph" style="height: 300px;"></div>
    </div>

    <div class="tab-pane fade" id="daily-graph" role="tabpanel" aria-labelledby="daily-graph-tab">
        <div id="dailyNetworkTrafficGraph" style="height: 300px;"></div>
    </div>

    <div class="tab-pane fade" id="monthly-graph" role="tabpanel" aria-labelledby="monthly-graph-tab">
        <div id="monthlyNetworkTrafficGraph" style="height: 300px;"></div>
    </div>
</div>
<?php }
}
