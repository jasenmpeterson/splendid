<?php
/* Smarty version 3.1.30, created on 2017-06-22 19:58:32
  from "/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594c21680ccd83_69844528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a726a3d38f6bececcf6bb53bbda16cf7ffcfada1' => 
    array (
      0 => '/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/home.tpl',
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
function content_594c21680ccd83_69844528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>'home','Class'=>''), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../global/pagePortal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PagePortals'=>$_smarty_tpl->tpl_vars['PagePortals']->value,'PageSlug'=>'home'), 0, false);
?>

<?php }
}
