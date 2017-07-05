<?php
/* Smarty version 3.1.30, created on 2017-05-23 21:43:56
  from "/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/global/carousel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5924ad1c986714_40219059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd86f70695b701b906a0c2381e88accfd4dabe9' => 
    array (
      0 => '/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/global/carousel.tpl',
      1 => 1495575832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924ad1c986714_40219059 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="Carousel <?php echo $_smarty_tpl->tpl_vars['PageSlug']->value;?>
">
    <section class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Carousel']->value, 'CarouselItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CarouselItem']->value) {
?>
            <section class="grid">
                <section class="row row-align-middle row-align-center">
                    <div class="gr-6 CarouselImage">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['CarouselItem']->value['image']['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['CarouselItem']->value['image']['alt'];?>
"/>
                    </div>
                    <!--/CaruselImage-->
                    <div class="gr-6 CarouselContent">
                        <h1><?php echo $_smarty_tpl->tpl_vars['CarouselItem']->value['title'];?>
</h1>
                        <?php echo $_smarty_tpl->tpl_vars['CarouselItem']->value['content'];?>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['CarouselItem']->value['button_link'];?>
" class="btn">Learn More</a>
                    </div>
                    <!--/CarouselContent-->
                </section>
            </section>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </section>
</section><?php }
}
