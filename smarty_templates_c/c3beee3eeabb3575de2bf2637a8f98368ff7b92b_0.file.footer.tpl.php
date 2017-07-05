<?php
/* Smarty version 3.1.30, created on 2017-05-23 19:32:32
  from "/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/global/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59248e50a0b213_39914099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3beee3eeabb3575de2bf2637a8f98368ff7b92b' => 
    array (
      0 => '/Users/jasenpeterson/Sites/haven/wp-content/themes/haven/smarty_templates/global/footer.tpl',
      1 => 1495567949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59248e50a0b213_39914099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
    <section class="container">
        <section class="grid">
            <section class="row">
                <div class="gr-3">
                    <section class="box Navigation Footer">
                        <div class="inner"><?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displayFooterMenu(array(),$_smarty_tpl);?>
</div>                        
                    </section>
                </div>
                <!--./grid-->
                <div class="gr-6">
                    <section class="box AddressAndPhone">
                        <div class="inner">
                            <p><?php echo $_smarty_tpl->tpl_vars['FooterData']->value['Address'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['FooterData']->value['BusinessPhone'];?>
</p>
                        </div>
                    </section>  
                </div>
                <!--./grid-->
                <div class="gr-3">
                    <section class="box OfficeHours">
                        <div class="inner">
                            <p><span>M-F</span><?php echo $_smarty_tpl->tpl_vars['FooterData']->value['MonThruFriday'];?>
</p>
                            <p><span>Saturday</span><?php echo $_smarty_tpl->tpl_vars['FooterData']->value['Saturday'];?>
</p>
                            <p><span>Sunday</span><?php echo $_smarty_tpl->tpl_vars['FooterData']->value['Sunday'];?>
</p>
                            <section class="ButtonContainer">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['FooterData']->value['AppointmentURL'];?>
" class="AppointmentButton">Make An Appointment</a>
                            </section>                           
                        </div>
                    </section>  
                </div>
                <!--./grid-->
            </section> 
        </section>
    </section>
</footer><?php }
}
