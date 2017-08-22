<section class="featuredImage" style="background: url({$featuredImage})"></section>

<section class="pageTitle">
  <h4 class="label interior transform"><span class="hr"></span>{$pageTitle}</h4>
</section>

{if !empty($pageContent)}
    <section class="interiorPageContent interiorPageAbout">

        {$pageContent}

    </section>
{/if}

<section class="map FlexContainer">

  <section class="row">

    <section class="column contentcolumn">

      <section class="backgroundImage" style="background: url({$mapBackground});">
        <span class="tint"></span>
        <section class="content">
          {$content}
          <section class="about-pop-up faq-pop-up">
            <section class="ajax-close-button">
              <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480" class="AjaxCloseButton">
                <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
              </svg>
            </section>
            <section class="faq FlexContainer">
              <section class="row">
                  {foreach $faq as $question name=question}
                    <section class="column">
                      <section class="faq-title {if $smarty.foreach.question.iteration == 1}active{/if}" data-faq-name="{$question['title']|replace:' ':'-'}">
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
                    {if $step['linkage'][0] !== 'None' && $step['linkage'][0] == 'External Link' }
                            <a href="{$step['external_link']}" target="_blank">
                                {$step['icon']}
                                {$step['content']}
                            </a>
                        {elseif $step['linkage'][0] !== 'None' && $step['linkage'][0] == 'Internal Link'}
                          <a href="{$step['page_link']}" target="_blank">
                              {$step['icon']}
                              {$step['content']}
                          </a>
                        {else}

                      <section class="stepcontent">
                          {$step['icon']}
                          {$step['content']}
                      </section>
                    {/if}
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
            <section class="text">
                <h1>Splendid Dental</h1>
                {$map['address']}
            </section>
          </div>
        </section>
      </section>

    </section>

  </section>

</section>