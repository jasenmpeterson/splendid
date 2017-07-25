<?php
/* Smarty version 3.1.30, created on 2017-07-24 22:56:36
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59767b24d96239_10724314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5adbe65df4e0d1a95bd0045ad75a41ed93f41ba' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/about.tpl',
      1 => 1500936640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59767b24d96239_10724314 (Smarty_Internal_Template $_smarty_tpl) {
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
      <h2>The Dentist of Splendid</h2>
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

<section class="map FlexContainer">

  <section class="row">

    <section class="column contentcolumn">

      <section class="backgroundImage" style="background: url(<?php echo $_smarty_tpl->tpl_vars['mapBackground']->value;?>
)">
        <span class="tint"></span>
        <section class="content">

          <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


          <section class="steps FlexContainer">

            <section class="row">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps']->value, 'step', false, NULL, 'state', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_state']->value['iteration']++;
?>
                <section class="column">
                  <section class="stepCount"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_state']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_state']->value['iteration'] : null);?>
</section>
                  <section class="icon">
                    <?php echo $_smarty_tpl->tpl_vars['step']->value['icon'];?>

                  </section>
                  <section class="stepcontent">
                    <?php echo $_smarty_tpl->tpl_vars['step']->value['content'];?>

                  </section>
                </section>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </section>

          </section>

        </section>
      </section>

      <section class="gmap">
        <section class="mapCanvas acf-map">
          <div class="marker" data-lat="<?php echo $_smarty_tpl->tpl_vars['map']->value['lat'];?>
" data-lng="<?php echo $_smarty_tpl->tpl_vars['map']->value['lng'];?>
"></div>
        </section>
      </section>

    </section>

  </section>

</section>

<section class="dentists ajaxcontent">
  <section class="dentists ajaxloader">
    <?php echo $_smarty_tpl->tpl_vars['SiteLogo']->value;?>

  </section>
</section>
<?php }
}