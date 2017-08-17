<?php
/* Smarty version 3.1.30, created on 2017-08-17 20:09:48
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5995f80c25ead3_05326894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5adbe65df4e0d1a95bd0045ad75a41ed93f41ba' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/about.tpl',
      1 => 1503000584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5995f80c25ead3_05326894 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty/libs/plugins/modifier.replace.php';
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

<section class="map FlexContainer">

  <section class="row">

    <section class="column contentcolumn">

      <section class="backgroundImage" style="background: url(<?php echo $_smarty_tpl->tpl_vars['mapBackground']->value;?>
);">
        <span class="tint"></span>
        <section class="content">
          <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

          <section class="about-pop-up faq-pop-up">

            <section class="faq FlexContainer">
              <section class="row">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq']->value, 'question', false, NULL, 'question', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']++;
?>
                    <section class="column">
                      <section class="faq-title" data-faq-name="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['question']->value['title'],' ','-');?>
">
                          <?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>

                      </section>
                      <section class="faq-content <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration'] : null) == 1) {?>active<?php }?>" data-faq-name="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['question']->value['title'],' ','-');?>
">
                        <section class="inner">
                            <?php echo $_smarty_tpl->tpl_vars['question']->value['content'];?>

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

          </section>
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
                  <section class="icon" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_state']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_state']->value['iteration'] : null);?>
">
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
">
              <h1>Splendid Dental</h1>
              <?php echo $_smarty_tpl->tpl_vars['map']->value['address'];?>

          </div>
        </section>
      </section>

    </section>

  </section>

</section><?php }
}
