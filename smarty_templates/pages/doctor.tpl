<section class="featuredImage" style="background: url({$featuredImage})"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span>{$pageTitle}</h4>
</section>

<section class="interiorPageContent">

  {$pageContent}

</section>



<section class="dentists FlexContainer">

  <section class="row">
    <section class="column">
      <h2>Meet our Dentist</h2>
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
</section>
