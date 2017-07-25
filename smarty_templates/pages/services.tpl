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

      <section class="services ajaxcontent">
        <section class="services ajaxloader">

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44">
              <g>
                  <circle cx="22" cy="22" r="19.8371">
                      <animate attributeName="r" begin="0s" dur="1.8s" values="1; 20" calcMode="spline" keyTimes="0; 1" keySplines="0.165, 0.84, 0.44, 1" repeatCount="indefinite"/>
                      <animate attributeName="stroke-opacity" begin="0s" dur="1.8s" values="1; 0" calcMode="spline" keyTimes="0; 1" keySplines="0.3, 0.61, 0.355, 1" repeatCount="indefinite"/>
                  </circle>
                  <circle cx="22" cy="22" r="15.5341">
                      <animate attributeName="r" begin="-0.9s" dur="1.8s" values="1; 20" calcMode="spline" keyTimes="0; 1" keySplines="0.165, 0.84, 0.44, 1" repeatCount="indefinite"/>
                      <animate attributeName="stroke-opacity" begin="-0.9s" dur="1.8s" values="1; 0" calcMode="spline" keyTimes="0; 1" keySplines="0.3, 0.61, 0.355, 1" repeatCount="indefinite"/>
                  </circle>
              </g>
          </svg>

        </section>
      </section>

      <section class="inner">
        {foreach $services as $service name=service}
          {if $smarty.foreach.service.iteration == 1}
            <section class="serviceTitle"><h1>{$service['serviceTitle']}</h1></section>
            <section class="service">
              {$service['serviceContent']}
            </section>
          {/if}
        {/foreach}
      </section>
    </section>

  </section>
</section>
