<?php /* Smarty version Smarty-3.1.7, created on 2020-06-06 00:20:12
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPVoipIntegration/Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8234277175edab70cd61390-51884966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c63705589c2b7b7a8deef9e4db5dababab9027' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPVoipIntegration/Edit.tpl',
      1 => 1591234396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8234277175edab70cd61390-51884966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'PROVIDER' => 0,
    'PROVIDER_NAME' => 0,
    'DEFAULT_PROVIDER' => 0,
    'FIELDS_INFO' => 0,
    'PROVIDER_FIELDS_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5edab70cd7c67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edab70cd7c67')) {function content_5edab70cd7c67($_smarty_tpl) {?><div class="container-fluid"><div class="widget_header row"><div class="col-sm-12"><h4><?php echo vtranslate('LBL_SP_VOIP_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div></div><hr><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marginTop15px"><?php $_smarty_tpl->tpl_vars['DEFAULT_PROVIDER'] = new Smarty_variable(Settings_SPVoipIntegration_Record_Model::getDefaultProvider(), null, 0);?><form id="voipEditFrom" class="form-horizontal" data-detail-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewUrl();?>
"><input type="hidden" name="module" value="SPVoipIntegration"/><input type="hidden" name="action" value="SaveAjax"/><input type="hidden" name="parent" value="Settings"/><div class="pull-left" style="width: 100%;"><label class="pull-left marginRight10px marginTop5px"><?php echo vtranslate('LBL_DEFAULT_PROVIDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><select name="default_provider" class="select2" style="min-width: 150px;"><?php  $_smarty_tpl->tpl_vars['PROVIDER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROVIDER_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PROVIDER']->value['existing_providers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROVIDER_NAME']->key => $_smarty_tpl->tpl_vars['PROVIDER_NAME']->value){
$_smarty_tpl->tpl_vars['PROVIDER_NAME']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PROVIDER_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_PROVIDER']->value==$_smarty_tpl->tpl_vars['PROVIDER_NAME']->value){?> selected<?php }?>><?php echo ucfirst(vtranslate($_smarty_tpl->tpl_vars['PROVIDER_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</option><?php } ?></select></div><?php  $_smarty_tpl->tpl_vars['PROVIDER_FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROVIDER_FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['PROVIDER_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROVIDER_FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['PROVIDER_FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['PROVIDER_FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['PROVIDER_NAME']->value = $_smarty_tpl->tpl_vars['PROVIDER_FIELDS_INFO']->key;
?><div class="widget_header row-fluid providerData <?php if ($_smarty_tpl->tpl_vars['PROVIDER_NAME']->value!=$_smarty_tpl->tpl_vars['DEFAULT_PROVIDER']->value){?> hide <?php }?>" data-provider="<?php echo $_smarty_tpl->tpl_vars['PROVIDER_NAME']->value;?>
"><div class="pull-left width100per"><h3><?php echo vtranslate('LBL_VOIP_PROVIDER_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo ucfirst(vtranslate($_smarty_tpl->tpl_vars['PROVIDER_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</h3></div><table class="table table-bordered table-condensed themeTableColor"><tbody><?php  $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PROVIDER_FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_INFO']->key => $_smarty_tpl->tpl_vars['FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['FIELD_INFO']->_loop = true;
?><tr><td width="25%"><label class="muted pull-right marginRight10px"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_INFO']->value['field_label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td style="border-left: none;"><input class="inputElement" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value['field_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value['field_value'];?>
" /></td></tr><?php } ?></tbody></table><?php if ($_smarty_tpl->tpl_vars['PROVIDER_NAME']->value=='zebra'){?><div class="col-lg-12 marginBottom10px"><button id='registerWebhooks' class="btn btn-default pull-right" type="button"><strong><?php echo vtranslate('LBL_REGISTER_WEBHOOKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }?></div><?php } ?><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-toolbar"><div class="pull-right"><button class="btn btn-success saveButton" type="submit" title="<?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a type="reset" class="cancelLink" title="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div></form></div><?php }} ?>