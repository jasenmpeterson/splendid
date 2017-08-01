<header class="FlexContainer">
  <section class="row">
    <section class="column logocontainer">
      <a href="{$homeURL}">{$SiteLogo}</a>
    </section>
    <section class="column navigationcontainer">
       <nav class="primaryNav">
         {nav->displayPrimaryMenu}
       </nav>
        <section class="HamburgerContainer">
            <section class="HamburgerMenuTitle">
                Menu
            </section>
            <section class="Hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </section>
        </section>
        <!--/Hamburger Menu-->
    </section>
  </section>
</header>
<section class="Navigation Mobile">
    {nav->displayPrimaryMenu}
    <section class="close">Close Menu</section>
</section>
<section class="pagewrap">