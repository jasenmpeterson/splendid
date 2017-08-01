<?php
/* Smarty version 3.1.30, created on 2017-08-01 15:02:52
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5980981c29b025_10953759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c99c2184fe82f0c6efae2a742eff86368689769' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/header.tpl',
      1 => 1501599764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5980981c29b025_10953759 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="FlexContainer">
  <section class="row">
    <section class="column logocontainer">
      <a href="<?php echo $_smarty_tpl->tpl_vars['homeURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SiteLogo']->value;?>
</a>
    </section>
    <section class="column navigationcontainer">
       <nav class="primaryNav">
         <?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displayPrimaryMenu(array(),$_smarty_tpl);?>

       </nav>
        <section class="HamburgerContainer">
            <section class="HamburgerMenuTitle">
                Menu
            </section>
            <section class="Hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </section>
        </section>
        <!--/Hamburger Menu-->
    </section>
  </section>
</header>
<section class="Navigation Mobile">
    <?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displayPrimaryMenu(array(),$_smarty_tpl);?>

    <section class="close">Close Menu</section>
</section>
<section class="pagewrap"><?php }
}
