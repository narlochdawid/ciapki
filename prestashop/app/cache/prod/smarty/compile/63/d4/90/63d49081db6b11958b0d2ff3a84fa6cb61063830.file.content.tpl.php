<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:29:24
         compiled from "/var/www/html/adminjc/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4125553125a0071c44c4337-95529236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d49081db6b11958b0d2ff3a84fa6cb61063830' => 
    array (
      0 => '/var/www/html/adminjc/themes/default/template/content.tpl',
      1 => 1507998296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4125553125a0071c44c4337-95529236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0071c44c81f3_00388208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0071c44c81f3_00388208')) {function content_5a0071c44c81f3_00388208($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
