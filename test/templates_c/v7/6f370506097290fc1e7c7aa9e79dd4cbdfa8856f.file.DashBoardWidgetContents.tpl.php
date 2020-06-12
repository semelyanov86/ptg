<?php /* Smarty version Smarty-3.1.7, created on 2020-06-05 21:00:05
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177974465eda88250d5997-82792238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f370506097290fc1e7c7aa9e79dd4cbdfa8856f' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl',
      1 => 1523977544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177974465eda88250d5997-82792238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5eda88250db8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eda88250db8d')) {function content_5eda88250db8d($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input class="yAxisFieldType" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" /><div class="row" style="margin:0px 10px;"><div class="col-lg-11"><div class="widgetChartContainer" name='chartcontent' style="height:220px;min-width:300px; margin: 0 auto"></div><br></div><div class="col-lg-1"></div></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }?><?php }} ?>