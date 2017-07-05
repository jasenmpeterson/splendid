<?php
/* Smarty version 3.1.30, created on 2017-07-05 18:42:18
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595d330a36a6a2_05728291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b987721da92f63663e47d60340a605a274c20413' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/home.tpl',
      1 => 1498160904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
    'file:../global/pagePortal.tpl' => 1,
  ),
),false)) {
function content_595d330a36a6a2_05728291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>'home','Class'=>''), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../global/pagePortal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PagePortals'=>$_smarty_tpl->tpl_vars['PagePortals']->value,'PageSlug'=>'home'), 0, false);
?>

<?php }
}
