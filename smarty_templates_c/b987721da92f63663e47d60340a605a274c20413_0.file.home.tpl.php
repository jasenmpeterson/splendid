<?php
/* Smarty version 3.1.30, created on 2017-07-20 20:06:46
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59710d56b5afa9_88242226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b987721da92f63663e47d60340a605a274c20413' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/home.tpl',
      1 => 1500581204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pagePortal.tpl' => 1,
  ),
),false)) {
function content_59710d56b5afa9_88242226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="siteintro">
  <?php echo $_smarty_tpl->tpl_vars['siteIntro']->value;?>

</section>
<?php $_smarty_tpl->_subTemplateRender("file:../global/pagePortal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageportal'=>$_smarty_tpl->tpl_vars['PagePortal']->value,'pageslug'=>'home'), 0, false);
?>

<?php }
}
