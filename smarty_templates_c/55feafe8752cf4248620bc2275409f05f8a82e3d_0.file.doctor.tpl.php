<?php
/* Smarty version 3.1.30, created on 2017-07-31 18:19:09
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/doctor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f749d32bbe8_11890311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55feafe8752cf4248620bc2275409f05f8a82e3d' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/doctor.tpl',
      1 => 1501525142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f749d32bbe8_11890311 (Smarty_Internal_Template $_smarty_tpl) {
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
      <section class="column dentist ajaxbutton" data-id=<?php echo $_smarty_tpl->tpl_vars['dentist']->value['ID'];?>
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
  <section class="dentist ajaxloader">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44">
      <g>
        <circle cx="22" cy="22" r="19.8371">
          <animate attributeName="r" begin="0s" dur="1.8s" values="1; 20" calcMode="spline" keyTimes="0; 1" keySplines="0.165, 0.84, 0.44, 1" repeatCount="indefinite"/>
          <animate attributeName="stroke-opacity" begin="0s" dur="1.8s" values="1; 0" calcMode="spline" keyTimes="0; 1" keySplines="0.3, 0.61, 0.355, 1" repeatCount="indefinite"/>
        </circle>
        <circle cx="22" cy="22" r="15.5341">
          <animate attributeName="r" begin="-0.9s" dur="1.8s" values="1; 20" calcMode="spline" keyTimes="0; 1" keySplines="0.165, 0.84, 0.44, 1" repeatCount="indefinite"/>
          <animate attributeName="stroke-opacity" begin="-0.9s" dur="1.8s" values="1; 0" calcMode="spline" keyTimes="0; 1" keySplines="0.3, 0.61, 0.355, 1" repeatCount="indefinite"/>
        </circle>
      </g>
    </svg>

  </section>
</section>
<?php }
}
