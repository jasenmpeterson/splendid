<?php
/* Smarty version 3.1.30, created on 2017-07-25 13:34:03
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597748cb8dea12_45315525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '931870f06934d5db2cbfd0ae5aae55b5c8ca33b8' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/contact.tpl',
      1 => 1500989640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597748cb8dea12_45315525 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featuredImage" style="background: url(<?php echo $_smarty_tpl->tpl_vars['featuredImage']->value;?>
)"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h4>
</section>

<section class="map FlexContainer">

  <section class="row">

    <section class="column">

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

<section class="interiorPageContent">

  <?php echo $_smarty_tpl->tpl_vars['pageContent']->value;?>


  <section class="officehours">
    <?php echo $_smarty_tpl->tpl_vars['office_hours']->value;?>

  </section>

  <?php echo $_smarty_tpl->tpl_vars['ContactForm']->value;?>


</section>
<?php }
}
