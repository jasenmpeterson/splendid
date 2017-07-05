<?php
/* Smarty version 3.1.30, created on 2017-06-26 21:44:29
  from "/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/insights.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5951803d769f45_47421251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44239292d2773a6750dedb3796f31a0d0a5c117f' => 
    array (
      0 => '/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/insights.tpl',
      1 => 1498513466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_5951803d769f45_47421251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>'PageBannerAlternate'), 0, false);
?>


<section class="AlternateDescriptionModules FlexContainer insights">

  <!-- ROW -->
  <section class="row">

    <?php $_smarty_tpl->_assignInScope('cols', 4);
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['InsightsPostObject']->value['insight_article'], 'Insight', false, 'k');
$_smarty_tpl->tpl_vars['Insight']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['Insight']->value) {
$_smarty_tpl->tpl_vars['Insight']->iteration++;
$__foreach_Insight_0_saved = $_smarty_tpl->tpl_vars['Insight'];
?>

    <!-- COLUMN -->
    <section class="column">

      <a href="<?php echo $_smarty_tpl->tpl_vars['Insight']->value['URL'];?>
" class="BoxLink">

        <section class="box .FlexContainer">

          <!-- ROW -->
          <section class="row">

            <!-- COLUMN -->
            <section class="column Image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['Insight']->value['Insights']['Thumbnail'][0]['image']['url'];?>
)">
            </section>
            <!-- /COLUMN -->

            <!-- COLUMN -->
            <section class="column SectionLabel">
              <section class="Label">
                <h1><?php echo $_smarty_tpl->tpl_vars['Insight']->value['Title'];?>
</h1>
                <span class="PostDate"><?php echo $_smarty_tpl->tpl_vars['Insight']->value['Date'];?>
</span>
                <span class="PostAuthor"><?php echo $_smarty_tpl->tpl_vars['Insight']->value['Author'];?>
</span>
              </section>
            </section>
            <!-- /COLUMN -->

          </section>
          <!-- /ROW -->

        </section>

      </a>

    </section>
    <!-- /COLUMN -->

    <?php if (!($_smarty_tpl->tpl_vars['Insight']->iteration % $_smarty_tpl->tpl_vars['cols']->value)) {?>
      </section><section class="row">
    <?php }?>

    <?php
$_smarty_tpl->tpl_vars['Insight'] = $__foreach_Insight_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  </section>
  <!-- /ROW -->

</section>
<?php }
}
