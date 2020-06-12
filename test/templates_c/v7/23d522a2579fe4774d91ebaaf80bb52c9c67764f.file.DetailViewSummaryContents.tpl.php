<?php /* Smarty version Smarty-3.1.7, created on 2020-06-06 01:28:46
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16143199475edac71e1673d1-50399907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d522a2579fe4774d91ebaaf80bb52c9c67764f' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl',
      1 => 1508495595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16143199475edac71e1673d1-50399907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5edac71e16921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edac71e16921')) {function content_5edac71e16921($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>