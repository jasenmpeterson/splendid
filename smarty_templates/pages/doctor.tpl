<section class="featuredImage" style="background: url({$featuredImage})"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span>{$pageTitle}</h4>
</section>
{if !empty($pageContent)}
<section class="interiorPageContent">

  {$pageContent}

</section>
{/if}


<section class="dentists FlexContainer">

  <section class="row">
    <section class="column">
      <h2>Meet our Dentists</h2>
    </section>
  </section>

  <section class="row">
    {foreach $dentists as $dentist}
      <section class="column dentist ajaxbutton" data-id={$dentist['ID']}>

        <section class="inner">

          <section class="dentistImage">
            <span class="image" style="background: url({$dentist['dentistImage']})"></span>
            <span class="circle"></span>
          </section>

          <section class="dentistContent">
            <h5>{$dentist['dentistTitle']}</h5>
            {$dentist['dentistContent']}
          </section>

        </section>

      </section>
    {/foreach}
  </section>

</section>

<section class="dentists ajaxcontent">
    <section class="ajax-close-button">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480" class="AjaxCloseButton">
            <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
        </svg>
    </section>
    <section class="dentist ajaxloader">

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

    <section class="inner-content">
        <h1 class="dentist-name"></h1>
    <section class="description">

    </section>
    </section>
</section>
