<?php
/* Smarty version 3.1.30, created on 2017-07-25 18:11:13
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597789c16658f9_96318462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d86db72ccab372cde5b4b6754fd8124cf38499' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/footer.tpl',
      1 => 1501006227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597789c16658f9_96318462 (Smarty_Internal_Template $_smarty_tpl) {
?>
</section><!--/.pagewrap-->
<footer>
  <section class="FlexContainer">
    <section class="row">
      <section class="column logocontainer">
        <?php if (!empty($_smarty_tpl->tpl_vars['FooterSiteLogo']->value)) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['homeURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FooterSiteLogo']->value;?>
</a>
        <?php } else { ?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['homeURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SiteLogo']->value;?>
</a>
        <?php }?>
      </section>
      <section class="column address">
        <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

      </section>
    </section>
  </section>
</footer>
<?php }
}
