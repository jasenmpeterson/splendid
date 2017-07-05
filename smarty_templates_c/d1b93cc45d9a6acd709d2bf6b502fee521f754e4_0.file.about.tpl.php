<?php
/* Smarty version 3.1.30, created on 2017-06-22 19:48:26
  from "/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594c1f0a86da30_76720025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b93cc45d9a6acd709d2bf6b502fee521f754e4' => 
    array (
      0 => '/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/pages/about.tpl',
      1 => 1498160905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_594c1f0a86da30_76720025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>''), 0, false);
?>

<section class="InteriorPageWrap <?php echo $_smarty_tpl->tpl_vars['pageSlug']->value;?>
 FlexContainer">

  <!-- ROW -->
  <section class="row FirstContentBlock">

    <!-- COLUMN -->
    <section class="column">

      <section class="SectionLabel">
        <section class="Label"><?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['SectionLabel'];?>
</section>
        <section class="OffSetBackground"></section>
      </section>

      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['FirstContentBlock'];?>


    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['FirstContentBlockImage'];?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row SecondContentBlock">

    <!-- COLUMN -->
    <section class="column">

      <img src="<?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['SecondContentBlockImage']['url'];?>
" alt="$AboutContent.SecondContentBlockImage.alt">

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['SecondContentBlock'];?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row ThirdContentBlock">

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['ThirdContentBlock'];?>

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <img src="<?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['ThirdContentBlockImage']['url'];?>
" alt="$AboutContent.ThirdContentBlockImage.alt">
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row FourthContentBlock">

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['FourthContentBlock'];?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->


</section>
<?php }
}
