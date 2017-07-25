<?php
/* Smarty version 3.1.30, created on 2017-07-24 23:47:33
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/services.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59768715a73f88_74881242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dc5e3fbb4e7a3b8e8ad5949c013c17dda0d8baf' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/services.tpl',
      1 => 1500940050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59768715a73f88_74881242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featuredImage" style="background: url(<?php echo $_smarty_tpl->tpl_vars['featuredImage']->value;?>
)"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h4>
</section>

<section class="interiorPageContent">

  <?php echo $_smarty_tpl->tpl_vars['pageContent']->value;?>


</section>

<section class="services FlexContainer">
  <section class="row">

    <section class="column sidebar">
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service', false, NULL, 'service', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_service']->value['iteration']++;
?>
          <li class="ajaxbutton <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_service']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_service']->value['iteration'] : null) == 1) {?>active<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['service']->value['serviceID'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['serviceListTitle'];?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
    </section>

    <section class="column content">
      <section class="inner">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service', false, NULL, 'service', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_service']->value['iteration']++;
?>
          <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_service']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_service']->value['iteration'] : null) == 1) {?>
            <section class="serviceTitle"><?php echo $_smarty_tpl->tpl_vars['service']->value['serviceTitle'];?>
</section>
            <section class="service">
              <?php echo $_smarty_tpl->tpl_vars['service']->value['serviceContent'];?>

            </section>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </section>
    </section>

  </section>
</section>

<section class="services ajaxcontent">
  <section class="services ajaxloader">
    <?php echo $_smarty_tpl->tpl_vars['SiteLogo']->value;?>

  </section>
</section>
<?php }
}
