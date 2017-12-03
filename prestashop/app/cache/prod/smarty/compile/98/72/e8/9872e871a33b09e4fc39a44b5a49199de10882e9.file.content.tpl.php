<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:31:25
         compiled from "/var/www/html/adminjc/themes/default/template/controllers/themes_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14560493875a00723d789192-84884464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9872e871a33b09e4fc39a44b5a49199de10882e9' => 
    array (
      0 => '/var/www/html/adminjc/themes/default/template/controllers/themes_catalog/content.tpl',
      1 => 1507998296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14560493875a00723d789192-84884464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00723d79a3d4_07720257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00723d79a3d4_07720257')) {function content_5a00723d79a3d4_07720257($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
