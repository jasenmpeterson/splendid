<section class="featuredImage" style="background: url({$featuredImage})"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span>{$pageTitle}</h4>
</section>

<section class="map FlexContainer">

  <section class="row">

    <section class="column">

      <section class="gmap">
        <section class="mapCanvas acf-map">
          <div class="marker" data-lat="{$map['lat']}" data-lng="{$map['lng']}"></div>
        </section>
      </section>

    </section>

  </section>

</section>

<section class="interiorPageContent">

  {$pageContent}

  <section class="officehours">
    {$office_hours}
  </section>

  {$ContactForm}

</section>
