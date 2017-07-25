<section class="featuredImage" style="background: url({$featuredImage})"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span>{$pageTitle}</h4>
</section>

<section class="interiorPageContent">

  {$pageContent}

</section>

<section class="services FlexContainer">
  <section class="row">

    <section class="column sidebar">
      <ul>
        {foreach $services as $service name=service}
          <li class="ajaxbutton {if $smarty.foreach.service.iteration == 1}active{/if}" data-id="{$service['serviceID']}">{$service['serviceListTitle']}</li>
        {/foreach}
      </ul>
    </section>

    <section class="column content">
      <section class="inner">
        {foreach $services as $service name=service}
          {if $smarty.foreach.service.iteration == 1}
            <section class="serviceTitle">{$service['serviceTitle']}</section>
            <section class="service">
              {$service['serviceContent']}
            </section>
          {/if}
        {/foreach}
      </section>
    </section>

  </section>
</section>

<section class="services ajaxcontent">
  <section class="services ajaxloader">
    {$SiteLogo}
  </section>
</section>
