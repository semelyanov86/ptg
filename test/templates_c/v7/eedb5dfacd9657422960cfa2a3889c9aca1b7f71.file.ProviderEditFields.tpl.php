<?php /* Smarty version Smarty-3.1.7, created on 2020-06-10 22:10:00
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SMSNotifier/ProviderEditFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12006582515ee130082daae3-76102980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eedb5dfacd9657422960cfa2a3889c9aca1b7f71' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SMSNotifier/ProviderEditFields.tpl',
      1 => 1591234394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12006582515ee130082daae3-76102980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE_NAME' => 0,
    'RECORD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ee130082e55c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee130082e55c')) {function content_5ee130082e55c($_smarty_tpl) {?>

<div class="col-lg-12"><div class="form-group"><div class = "col-lg-4"><label for="username"><?php echo vtranslate('username',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label></div><div class = "col-lg-6"><input type="text" class="form-control" name="username" data-rule-required="true" id="username" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('username');?>
" /></div></div></div><div class="col-lg-12"><div class="form-group"><div class = "col-lg-4"><label for="password"><?php echo vtranslate('password',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label></div><div class = "col-lg-6"><input type="password" class = "form-control" data-rule-required="true" name="password" id ="password" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('password');?>
" /></div></div></div><br><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('BaseProviderEditFields.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_MODEL'=>$_smarty_tpl->tpl_vars['RECORD_MODEL']->value), 0);?>
<?php }} ?>