<?php
/* Smarty version 3.1.30, created on 2017-06-22 16:27:32
  from "/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/services.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594beff4ecedb4_03466999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '994f028e2223bfc9e96f2fc597fa1437636b85e5' => 
    array (
      0 => '/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/services.tpl',
      1 => 1498148849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_594beff4ecedb4_03466999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>'PageBannerAlternate'), 0, false);
?>


<section class="AlternateDescriptionModules FlexContainer services">

  <!-- ROW -->
  <section class="row">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ServicesPostObject']->value['service_article'], 'Service', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['Service']->value) {
?>

    <!-- COLUMN -->
    <section class="column">

      <a href="<?php echo $_smarty_tpl->tpl_vars['Service']->value['URL'];?>
" class="BoxLink">

        <section class="box .FlexContainer">

          <!-- ROW -->
          <section class="row">

            <!-- COLUMN -->
            <section class="column Icon">
              <?php echo $_smarty_tpl->tpl_vars['Service']->value['Services']['Icon'];?>

            </section>
            <!-- /COLUMN -->

            <!-- COLUMN -->
            <section class="column SectionLabel">
              <section class="Label"><?php echo $_smarty_tpl->tpl_vars['Service']->value['Services']['Label'];?>
</section>
            </section>
            <!-- /COLUMN -->

          </section>
          <!-- /ROW -->

        </section>

      </a>

    </section>
    <!-- /COLUMN -->

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  </section>
  <!-- /ROW -->

</section>
<?php }
}
