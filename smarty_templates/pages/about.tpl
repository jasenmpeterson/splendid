<section class="featuredImage" style="background: url({$featuredImage})"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span>{$pageTitle}</h4>
</section>

<section class="interiorPageContent">

  {$pageContent}

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
