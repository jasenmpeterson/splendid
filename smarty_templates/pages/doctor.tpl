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
      <section class="column dentist" data-id={$dentist['ID']}>

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
  <section class="dentists ajaxloader">
    {$SiteLogo}
  </section>
</section>
