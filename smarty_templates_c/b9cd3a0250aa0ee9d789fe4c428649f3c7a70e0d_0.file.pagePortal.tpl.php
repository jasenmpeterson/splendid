<?php
/* Smarty version 3.1.30, created on 2017-07-19 22:15:58
  from "/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/pagePortal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596fda1e2ab841_76599221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9cd3a0250aa0ee9d789fe4c428649f3c7a70e0d' => 
    array (
      0 => '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty_templates/global/pagePortal.tpl',
      1 => 1500502554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596fda1e2ab841_76599221 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/Users/jasenpeterson/Sites/splendid/wp-content/themes/splendid/smarty/libs/plugins/modifier.replace.php';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageportal']->value, 'data', false, NULL, 'pageportal', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>

  
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0][0]['label'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('label', $_prefixVariable1);
?>
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0][0]['header'];
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('header', $_prefixVariable2);
?>
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0][0]['content'];
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('content', $_prefixVariable3);
?>
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0][0]['page_link'];
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('pagelink', $_prefixVariable4);
?>
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0][0]['image']['url'];
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('image', $_prefixVariable5);
?>

  <section class="FlexContainer pageportal <?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['label']->value, 'UTF-8'),' ','');?>
">

    <section class="row">

      <section class="column pageportalcontent <?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['label']->value, 'UTF-8'),' ','');?>
">

        <section class="box">
          <?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

          <?php }?>
        </section>

      </section>
      <!--/.column-->

      <section class="column">

        <section class="FlexContainer textmodule image <?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['label']->value, 'UTF-8'),' ','');?>
">

          <section class="row">

            <section class="column content">

              <section class="box">
                <h2><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h2>
                <a class="btn white" href="<?php echo $_smarty_tpl->tpl_vars['pagelink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>
              </section>

            </section>
            <!--/content-->

            <section class="column image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
)">
              <h4 class="label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</h4>
            </section>
            <!--/image-->

          </section>
          <!--/.row-->

        </section>

      </section>
      <!--/.column-->

    </section>
    <!--/.row-->

  </section>
  <!--/.textmodule-->

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
