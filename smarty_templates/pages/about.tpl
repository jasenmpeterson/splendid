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
      <h2>The Dentist of Splendid</h2>
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

<section class="map FlexContainer">

  <section class="row">

    <section class="column contentcolumn">

      <section class="backgroundImage" style="background: url({$mapBackground})">
        <span class="tint"></span>
        <section class="content">

          {$content}

          <section class="steps FlexContainer">

            <section class="row">
              {foreach $steps as $step name=state}
                <section class="column">
                  <section class="stepCount">{$smarty.foreach.state.iteration}</section>
                  <section class="icon">
                    {$step['icon']}
                  </section>
                  <section class="stepcontent">
                    {$step['content']}
                  </section>
                </section>
              {/foreach}
            </section>

          </section>

        </section>
      </section>

      <section class="gmap">
        <section class="mapCanvas acf-map">
          <div class="marker" data-lat="{$map['lat']}" data-lng="{$map['lng']}"></div>
        </section>
      </section>

    </section>

  </section>

</section>

<section class="dentists ajaxcontent">
  <section class="dentists ajaxloader">
    {$SiteLogo}
  </section>
</section>
