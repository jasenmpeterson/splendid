</section><!--/.pagewrap-->
<footer>
  <section class="FlexContainer">
    <section class="row">
      <section class="column logocontainer">
        {if !empty($FooterSiteLogo)}
          <a href="{$homeURL}">{$FooterSiteLogo}</a>
        {else}
          <a href="{$homeURL}">{$SiteLogo}</a>
        {/if}
      </section>
      <section class="column address">
        {$address}
      </section>
    </section>
  </section>
</footer>
