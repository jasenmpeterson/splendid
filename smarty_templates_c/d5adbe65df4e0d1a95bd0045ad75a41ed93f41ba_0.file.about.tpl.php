<?php
/* Smarty version 3.1.30, created on 2017-08-18 21:42:29
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59975f45ceba27_04839067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5adbe65df4e0d1a95bd0045ad75a41ed93f41ba' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/pages/about.tpl',
      1 => 1503092543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59975f45ceba27_04839067 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty/libs/plugins/modifier.replace.php';
?>
<section class="featuredImage" style="background: url(<?php echo $_smarty_tpl->tpl_vars['featuredImage']->value;?>
)"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h4>
</section>

<section class="interiorPageContent interiorPageAbout">

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
            <section class="ajax-close-button">
              <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480" class="AjaxCloseButton">
                <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
              </svg>
            </section>
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
                      <section class="faq-title <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration'] : null) == 1) {?>active<?php }?>" data-faq-name="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['question']->value['title'],' ','-');?>
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
                    <?php if ($_smarty_tpl->tpl_vars['step']->value['linkage'][0] !== 'None' && $_smarty_tpl->tpl_vars['step']->value['linkage'][0] == 'External Link') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['step']->value['external_link'];?>
" target="_blank">
                                <?php echo $_smarty_tpl->tpl_vars['step']->value['icon'];?>

                                <?php echo $_smarty_tpl->tpl_vars['step']->value['content'];?>

                            </a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['step']->value['linkage'][0] !== 'None' && $_smarty_tpl->tpl_vars['step']->value['linkage'][0] == 'Internal Link') {?>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['step']->value['page_link'];?>
" target="_blank">
                              <?php echo $_smarty_tpl->tpl_vars['step']->value['icon'];?>

                              <?php echo $_smarty_tpl->tpl_vars['step']->value['content'];?>

                          </a>
                        <?php } else { ?>

                      <section class="stepcontent">
                          <?php echo $_smarty_tpl->tpl_vars['step']->value['icon'];?>

                          <?php echo $_smarty_tpl->tpl_vars['step']->value['content'];?>

                      </section>
                    <?php }?>
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
            <section class="text">
                <h1>Splendid Dental</h1>
                <?php echo $_smarty_tpl->tpl_vars['map']->value['address'];?>

            </section>
          </div>
        </section>
      </section>

    </section>

  </section>

</section><?php }
}
