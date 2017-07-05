<?php
/* Smarty version 3.1.30, created on 2017-05-23 21:28:57
  from "/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5924a999e841a2_52594409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3871c771090133fde81b82f2e400157f922de1' => 
    array (
      0 => '/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/pages/home.tpl',
      1 => 1495574935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
    'file:../global/carousel.tpl' => 1,
  ),
),false)) {
function content_5924a999e841a2_52594409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBannerImage'=>$_smarty_tpl->tpl_vars['PageBanner']->value['url'],'PageSlug'=>'home'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../global/carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Carousel'=>$_smarty_tpl->tpl_vars['Carousel']->value,'PageSlug'=>'home'), 0, false);
}
}
