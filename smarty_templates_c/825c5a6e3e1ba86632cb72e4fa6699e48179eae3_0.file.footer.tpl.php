<?php
/* Smarty version 3.1.30, created on 2017-08-15 17:31:09
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59932fddd221f7_30914159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '825c5a6e3e1ba86632cb72e4fa6699e48179eae3' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/footer.tpl',
      1 => 1502818263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59932fddd221f7_30914159 (Smarty_Internal_Template $_smarty_tpl) {
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
      
        
      
    </section>
  </section>
</footer>
<?php }
}
