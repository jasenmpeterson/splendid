<?php
/* Smarty version 3.1.30, created on 2017-06-23 18:11:17
  from "/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/post/insights.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594d59c5c940c3_24531839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf7333234a29473d5324642b4e82a54b5d362aa' => 
    array (
      0 => '/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/post/insights.tpl',
      1 => 1498241475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_594d59c5c940c3_24531839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>'PageBannerAlternate Generic'), 0, false);
?>


<section class="FlexContainer InsightArticle GenericPage">

  <!-- ROW -->
  <section class="row">

    <!-- COLUMN -->
    <section class="column Content">
      <h1><?php echo $_smarty_tpl->tpl_vars['postTitle']->value;?>
</h1>
      <span class="PostDate"><?php echo $_smarty_tpl->tpl_vars['PageDate']->value;?>
</span>
      <span class="PageAuthor">by <?php echo $_smarty_tpl->tpl_vars['PageAuthor']->value;?>
</span>
      <?php echo $_smarty_tpl->tpl_vars['PageContent']->value;?>

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column ContactContactSubscribe">
      <section class="box">
        <h1>Subscribe</h1>
        <?php echo $_smarty_tpl->tpl_vars['Subscribe']->value;?>

      </section>
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

</section>
<?php }
}
