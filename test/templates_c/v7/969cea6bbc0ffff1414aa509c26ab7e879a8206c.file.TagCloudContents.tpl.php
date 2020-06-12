<?php /* Smarty version Smarty-3.1.7, created on 2020-06-05 21:00:05
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloudContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6596687775eda8825107b38-62459384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969cea6bbc0ffff1414aa509c26ab7e879a8206c' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloudContents.tpl',
      1 => 1523977544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6596687775eda8825107b38-62459384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAGS' => 0,
    'TAG_MODEL' => 0,
    'TAG_LABEL' => 0,
    'TAG_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5eda882510e29',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eda882510e29')) {function content_5eda882510e29($_smarty_tpl) {?>

<div class="tagsContainer" id="tagCloud"><?php  $_smarty_tpl->tpl_vars['TAG_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAG_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAG_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAG_MODEL']->key => $_smarty_tpl->tpl_vars['TAG_MODEL']->value){
$_smarty_tpl->tpl_vars['TAG_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAG_ID']->value = $_smarty_tpl->tpl_vars['TAG_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['TAG_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName(), null, 0);?><span class="tag" title="<?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><span class="tagName display-inline-block textOverflowEllipsis cursorPointer" data-tagid="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
</span></span><?php } ?></div><?php }} ?>