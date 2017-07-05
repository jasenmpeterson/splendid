<?php
/* Smarty version 3.1.30, created on 2017-06-19 17:40:10
  from "/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/global/pagePortal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59480c7aad06d8_09637157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae9651d572a236dbdc9d61758ea9d959928ca4a' => 
    array (
      0 => '/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacabra/smarty_templates/global/pagePortal.tpl',
      1 => 1497894009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59480c7aad06d8_09637157 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PagePortals']->value, 'PagePortal', false, 'PagePortalKey', 'PagePortal', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PagePortalKey']->value => $_smarty_tpl->tpl_vars['PagePortal']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_PagePortal']->value['iteration']++;
?>
<section class="PagePortal FlexContainer <?php echo $_smarty_tpl->tpl_vars['PageSlug']->value;?>
">

  <!-- ROW -->
  <section class="row <?php if (!(1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_PagePortal']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_PagePortal']->value['iteration'] : null))) {?>row-reverse PagePortalEven<?php } else { ?>PagePortalOdd<?php }?>">
      <!-- COLUMN -->
      <div class="column PagePortalImage">
          <section class="box">
              <img src="<?php echo $_smarty_tpl->tpl_vars['PagePortal']->value[0][0]['image']['url'];?>
"/>
          </section>
      </div>
      <!-- /COLUMN -->

      <!-- COLUMN -->
      <div class="column PagePortalContent">

         <section class="FlexContainer">
           
              <!-- ROW -->
              <section class="row <?php if (!(1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_PagePortal']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_PagePortal']->value['iteration'] : null))) {?>row-reverse PagePortalEven<?php }?>">

                  <!-- COLUMN -->
                  <div class="column PagePortalTitle">
                      <div class="TitleWrap"><h2><?php echo $_smarty_tpl->tpl_vars['PagePortal']->value[0][0]['title'];?>
</h2></div>
                  </div>
                  <!-- /COLUMN -->

                  <!-- COLUMN -->
                  <div class="column PagePortalIcon">
                      <?php echo $_smarty_tpl->tpl_vars['PagePortal']->value[0][0]['icon'];?>

                  </div>
                  <!-- /COLUMN -->

              </section>
              <!-- /ROW -->

          </section>

          <h1><?php echo $_smarty_tpl->tpl_vars['PagePortal']->value[0][0]['sub_title'];?>
</h1>

          <?php echo $_smarty_tpl->tpl_vars['PagePortal']->value[0][0]['content'];?>


          <a href="<?php echo $_smarty_tpl->tpl_vars['PagePortal']->value[0][0]['page_link'];?>
" class="btn GoldBorder">
              Learn More About Our <?php echo $_smarty_tpl->tpl_vars['PagePortal']->value[0][0]['title'];?>

          </a>

      </div>
      <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

</section>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
