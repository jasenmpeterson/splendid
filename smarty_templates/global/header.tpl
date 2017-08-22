<header class="FlexContainer">
  <section class="row">
    <section class="column logocontainer">
      <a href="{$homeURL}">{$SiteLogo}</a>
    </section>
    <section class="column navigationcontainer">
       <nav class="primaryNav">
         {nav->displayPrimaryMenu}
       </nav>
    </section>
  </section>
</header>
<section class="Navigation Mobile">
    <section class="close">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480" class="AjaxCloseButton">
            <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
        </svg>
    </section>
    {nav->displayPrimaryMenu}
</section>
<section class="pagewrap">
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