<?php /* Smarty version Smarty-3.1.7, created on 2020-06-12 12:13:37
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SPPDFTemplates/DetailViewPDFTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8157668535ee347417c8824-38543539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b3c5af47fb033299c3ff7a8403e2c3d9fe0bc0' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SPPDFTemplates/DetailViewPDFTemplate.tpl',
      1 => 1591234394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8157668535ee347417c8824-38543539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ee347417e38d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee347417e38d')) {function content_5ee347417e38d($_smarty_tpl) {?>

<div class="container-fluid">  
        <div class="widget_header">
                <h3><b><a href="index.php?module=SPPDFTemplates&view=List"><?php echo vtranslate('LBL_TEMPLATE_GENERATOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> &gt; <?php echo vtranslate('LBL_VIEWING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('name');?>
&quot; </b></h3>
        </div>
        <hr>
        <br>
        
        <table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
            <tr>
                    <td><strong><?php echo vtranslate('LBL_PROPERTIES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('name');?>
&quot; </strong></td>
                    <td class="small" align=right>&nbsp;&nbsp;
                      <button class="btn btn-success" onclick="location.href='index.php?module=SPPDFTemplates&view=Edit&templateid=<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getId();?>
'"><?php echo vtranslate('LBL_EDIT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
                      <button class="btn addButton" onclick="location.href='index.php?module=SPPDFTemplates&view=Edit&isDuplicate=true&templateid=<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getId();?>
'"><?php echo vtranslate('LBL_DUPLICATE_BUTTON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
                    </td>
            </tr>
        </table>
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"> 
        <tr>
            <td align="left" valign="top">
                <div style="diplay:block;" id="properties_div">       
                    <table class="table table-bordered">                        
                        <tr>
                            <td width=25% class="small cellLabel"><strong><?php echo vtranslate('LBL_TEMPLATE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td>
                            <td width=75% class="small cellText"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('name');?>
</td>
                        </tr>
                        <tr>
                            <td valign=top class="small cellLabel"><strong><?php echo vtranslate('LBL_MODULENAMES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td>
                            <td class="cellText small" valign="top"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODEL']->value->get('module'));?>
</td>      						
                        </tr>    					
                        <tr>
                            <td width=25% class="small cellLabel"><strong><?php echo vtranslate('LBL_HEADER_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td>
                            <td width=75% class="small cellText"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('header_size');?>
</td>
                        </tr>
                        <tr>
                            <td width=25% class="small cellLabel"><strong><?php echo vtranslate('LBL_FOOTER_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td>
                            <td width=75% class="small cellText"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('footer_size');?>
</td>
                        </tr>
                        <tr>
                            <td valign=top class="small cellLabel"><strong><?php echo vtranslate('LBL_PAGE_ORIENTATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td>
                           
                                <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->get('page_orientation')=="P"){?>
                                     <td class="cellText small" valign="top"><?php echo vtranslate("Portrait");?>
</td>
                                <?php }else{ ?>
                                     <td class="cellText small" valign="top"><?php echo vtranslate("Landscape");?>
</td>
                                <?php }?>      						
                        </tr>    
                        <tr> 
                            <td valign=top class="small cellLabel"><strong><?php echo vtranslate('LBL_COMPANY','Settings:Vtiger');?>
:</strong></td> 
                            <td class="cellText small" valign=top><?php echo vtranslate($_smarty_tpl->tpl_vars['MODEL']->value->get('spcompany'),'Settings:Vtiger');?>
</td> 
                        </tr> 
                    </table>              
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2" valign=top class="cellText small">
                <br>
                 <table class="thickBorder table-bordered" width="100%"  border="0" cellspacing="0" cellpadding="5" >
                    <tr>
                      <td colspan="2" valign="top" class="small" style="background-color:#cccccc"><strong><?php echo vtranslate('LBL_PDF_TEMPLATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td>
                    </tr>

                    <tr>
                      <td valign="top" class="cellLabel small"><?php echo vtranslate('LBL_BODY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
                      <td class="cellText  small"><?php echo decode_html($_smarty_tpl->tpl_vars['MODEL']->value->get('template'));?>
</td>
                    </tr>

                 </table>
            </td>
        </tr>

    </table>		
</div>
<?php }} ?>