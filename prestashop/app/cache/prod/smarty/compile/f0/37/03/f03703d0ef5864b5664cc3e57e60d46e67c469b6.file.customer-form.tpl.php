<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:33:32
         compiled from "/var/www/html/themes/classic/templates/checkout/_partials/customer-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7191248255a0072bc9660f0-90544033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f03703d0ef5864b5664cc3e57e60d46e67c469b6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/customer-form.tpl',
      1 => 1507998297,
      2 => 'file',
    ),
    '3989156dd2d188686170a3125355d057b186d20e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/customer-form.tpl',
      1 => 1507998297,
      2 => 'file',
    ),
    '1e6922d812b650ce093e07ecdd0778377e75f6e6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/form-errors.tpl',
      1 => 1507998297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7191248255a0072bc9660f0-90544033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'hook_create_account_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0072bc98f148_37502039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0072bc98f148_37502039')) {function content_5a0072bc98f148_37502039($_smarty_tpl) {?>

  
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '7191248255a0072bc9660f0-90544033');
content_5a0072bc96e904_61479364($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>
  

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
  <?php if ($_smarty_tpl->tpl_vars['field']->value['name']==='password'&&$_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p>
        <span class="font-weight-bold"><?php echo smartyTranslate(array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span> <span class="font-italic"><?php echo smartyTranslate(array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <br>
        <span class="text-muted"><?php echo smartyTranslate(array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
      </p>
      
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
  <?php } else { ?>
    
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
  <?php }?>

      <?php } ?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    
  </section>

  
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      
    <button
      class="continue btn btn-primary float-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

    </button>

    </footer>
  

</form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:33:32
         compiled from "/var/www/html/themes/classic/templates/_partials/form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0072bc96e904_61479364')) {function content_5a0072bc96e904_61479364($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    
      <ul>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php } ?>
      </ul>
    
  </div>
<?php }?>
<?php }} ?>
