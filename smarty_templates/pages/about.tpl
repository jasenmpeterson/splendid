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

      <section class="backgroundImage" style="background: url({$mapBackground});">
        <span class="tint"></span>
        <section class="content">
          {$content}
          <section class="about-pop-up faq-pop-up">

            <section class="faq FlexContainer">
              <section class="row">
                  {foreach $faq as $question name=question}
                    <section class="column">
                      <section class="faq-title" data-faq-name="{$question['title']|replace:' ':'-'}">
                          {$question['title']}
                      </section>
                      <section class="faq-content {if $smarty.foreach.question.iteration == 1}active{/if}" data-faq-name="{$question['title']|replace:' ':'-'}">
                        <section class="inner">
                            {$question['content']}
                        </section>
                      </section>
                    </section>
                  {/foreach}
              </section>
            </section>

          </section>
          <section class="steps FlexContainer">
            <section class="row">
              {foreach $steps as $step name=state}
                <section class="column">
                  <section class="stepCount">{$smarty.foreach.state.iteration}</section>
                  <section class="icon" data-id="{$smarty.foreach.state.iteration}">
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
          <div class="marker" data-lat="{$map['lat']}" data-lng="{$map['lng']}">
              <h1>Splendid Dental</h1>
              {$map['address']}
          </div>
        </section>
      </section>

    </section>

  </section>

</section>