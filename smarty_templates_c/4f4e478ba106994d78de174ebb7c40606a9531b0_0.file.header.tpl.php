<?php
/* Smarty version 3.1.30, created on 2017-05-23 20:53:58
  from "/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/global/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5924a1664939f9_46169547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4e478ba106994d78de174ebb7c40606a9531b0' => 
    array (
      0 => '/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/global/header.tpl',
      1 => 1495572836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924a1664939f9_46169547 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <section class="container SecondaryHeader">
        <section class="grid">
            <section class="row row-align-right">
                <div class="gr-2 BusinessPhone">
                    <?php echo $_smarty_tpl->tpl_vars['BusinessPhone']->value;?>

                </div>
                <!--/BusinessPhone-->
                <section class="Navigation Secondary">
                    <?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displaySecondaryMenu(array(),$_smarty_tpl);?>

                </section>
            </section>
        </section>
    </section>
    <section class="box">
        <section class="container">
            <section class="grid">
                <section class="row row-align-middle">
                    <div class="gr-2 SiteLogo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['homeURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SiteLogo']->value;?>
</>
                    </div>
                    <!--/logo-->
                    <div class="gr-10 Navigation Primary">
                        <?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displayPrimaryMenu(array(),$_smarty_tpl);?>

                    </div>
                    <!--/navigation-->
                </section>
            </section>
        </section>    
    </section>
</header><?php }
}
