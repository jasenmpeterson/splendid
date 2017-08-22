<?php
/* Smarty version 3.1.30, created on 2017-08-22 15:28:09
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599c4d89563858_29661688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '482a1154dc08cb090cf16081d41d49c6181c9c4c' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/page.tpl',
      1 => 1503415542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599c4d89563858_29661688 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featuredImage" style="background: url(<?php echo $_smarty_tpl->tpl_vars['featuredImage']->value;?>
)"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h4>
</section>

<?php if (!empty($_smarty_tpl->tpl_vars['pageContent']->value)) {?>
  <section class="interiorPageContent">

      <?php echo $_smarty_tpl->tpl_vars['pageContent']->value;?>


  </section>
<?php }
}
}
