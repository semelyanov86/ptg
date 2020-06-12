<?php /* Smarty version Smarty-3.1.7, created on 2020-06-06 22:14:15
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/RecycleBin/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6497315615edbeb07baf942-02047044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d6b33418788f9021a0e66189af632a04dad8463' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/RecycleBin/partials/SidebarHeader.tpl',
      1 => 1591234406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6497315615edbeb07baf942-02047044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5edbeb07bb397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edbeb07bb397')) {function content_5edbeb07bb397($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    
    
    <div class="row" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
    
        <span class="app-indicator-icon fa fa-trash"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>