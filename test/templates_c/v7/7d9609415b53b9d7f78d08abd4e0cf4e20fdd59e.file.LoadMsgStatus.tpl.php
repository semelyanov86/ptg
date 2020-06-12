<?php /* Smarty version Smarty-3.1.7, created on 2020-06-06 01:35:17
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SPSocialConnector/LoadMsgStatus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20419878785edac8a541f7e8-74534501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9609415b53b9d7f78d08abd4e0cf4e20fdd59e' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SPSocialConnector/LoadMsgStatus.tpl',
      1 => 1591234390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20419878785edac8a541f7e8-74534501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MSG_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5edac8a542697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edac8a542697')) {function content_5edac8a542697($_smarty_tpl) {?>
<div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" onClick="self.close()" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><div class="pull-left"><?php ob_start();?><?php echo vtranslate('Import result',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('Messages',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php echo (((((("<h4>").($_tmp1)).("</h4>")).("<h3>".($_smarty_tpl->tpl_vars['MSG_COUNT']->value)."</h3>")).("<br>")).($_tmp2)).("<br>");?>
</div></div></div><div class="modal-footer"><div class=" pull-left cancelLinkContainer"><button class="btn btn-success" onClick="self.close()"><strong><?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div><?php }} ?>