<?php
/* Smarty version 3.1.30, created on 2017-08-21 16:18:03
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599b07bb610df4_18403484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c99c2184fe82f0c6efae2a742eff86368689769' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/header.tpl',
      1 => 1503332276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599b07bb610df4_18403484 (Smarty_Internal_Template $_smarty_tpl) {
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
    </section>
  </section>
</header>
<section class="Navigation Mobile">
    <section class="close">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480" class="AjaxCloseButton">
            <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
        </svg>
    </section>
    <?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displayPrimaryMenu(array(),$_smarty_tpl);?>

</section>
<section class="pagewrap">
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
    <!--/Hamburger Menu--><?php }
}
