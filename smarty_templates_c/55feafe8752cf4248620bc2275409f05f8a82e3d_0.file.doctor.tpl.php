<?php
/* Smarty version 3.1.30, created on 2017-07-25 13:05:51
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/doctor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977422f8807d0_09544384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55feafe8752cf4248620bc2275409f05f8a82e3d' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/doctor.tpl',
      1 => 1500987949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977422f8807d0_09544384 (Smarty_Internal_Template $_smarty_tpl) {
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



<section class="dentists FlexContainer">

  <section class="row">
    <section class="column">
      <h2>Meet our Dentist</h2>
    </section>
  </section>

  <section class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dentists']->value, 'dentist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dentist']->value) {
?>
      <section class="column dentist" data-id=<?php echo $_smarty_tpl->tpl_vars['dentist']->value['ID'];?>
>

        <section class="inner">

          <section class="dentistImage">
            <span class="image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['dentist']->value['dentistImage'];?>
)"></span>
            <span class="circle"></span>
          </section>

          <section class="dentistContent">
            <h5><?php echo $_smarty_tpl->tpl_vars['dentist']->value['dentistTitle'];?>
</h5>
            <?php echo $_smarty_tpl->tpl_vars['dentist']->value['dentistContent'];?>

          </section>

        </section>

      </section>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </section>

</section>

<section class="dentists ajaxcontent">
  <section class="dentists ajaxloader">
    <?php echo $_smarty_tpl->tpl_vars['SiteLogo']->value;?>

  </section>
</section>
<?php }
}
