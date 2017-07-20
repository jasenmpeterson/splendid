<?php
/* Smarty version 3.1.30, created on 2017-07-20 17:24:15
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970e73f949270_23810799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c99c2184fe82f0c6efae2a742eff86368689769' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/header.tpl',
      1 => 1500571452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970e73f949270_23810799 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="FlexContainer">
  <section class="row">
    <section class="column logocontainer">
      <a href="<?php echo $_smarty_tpl->tpl_vars['homeURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SiteLogo']->value;?>
</a>
    </section>
    <section class="column navigationcontainer">
       <nav>
         <?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displayPrimaryMenu(array(),$_smarty_tpl);?>

       </nav>
    </section>
  </section>
</header>
<section class="pagewrap">
<?php }
}
