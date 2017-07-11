{foreach $pageportal as $data name=pageportal}

  {* page portal content *}
  {assign "label" {$data[0][0]['label']}}
  {assign "header" {$data[0][0]['header']}}
  {assign "content" {$data[0][0]['content']}}
  {assign "pagelink" {$data[0][0]['page_link']}}
  {assign "image" {$data[0][0]['image']['url']}}

  <section class="FlexContainer pageportal {$label|lower|replace: ' ' : ''} {if $smarty.foreach.pageportal.iteration == 1}active{else}inactive{/if}">

    <section class="row">

      <section class="column">

        <section class="box">
          {if !empty($content)}
            {$content}
          {/if}
        </section>

      </section>
      <!--/.column-->

      <section class="column">

        <section class="FlexContainer textmodule image">

          <section class="row">

            <section class="column content">

              <section class="box">
                <h2>{$header}</h2>
                <a class="btn white" href="{$pagelink}">{$label}</a>
              </section>

            </section>
            <!--/content-->

            <section class="column image" style="background: url({$image})">
              <h4 class="label">{$label}</h4>
            </section>
            <!--/image-->

          </section>
          <!--/.row-->

        </section>

      </section>
      <!--/.column-->

    </section>
    <!--/.row-->

  </section>
  <!--/.textmodule-->

{/foreach}
