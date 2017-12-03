<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:35:14
         compiled from "/var/www/html/adminjc/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5700926805a0073228783f0-84279231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da32864f55e053d647834a58e18799da59b2c256' => 
    array (
      0 => '/var/www/html/adminjc/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1507998296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5700926805a0073228783f0-84279231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00732287e354_84816131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00732287e354_84816131')) {function content_5a00732287e354_84816131($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
