{foreach $pageportal as $data name=pageportal}

  {* page portal content *}
  {assign "label" {$data[0][0]['label']}}
  {assign "header" {$data[0][0]['header']}}
  {assign "content" {$data[0][0]['content']}}
  {assign "pagelink" {$data[0][0]['page_link']}}
  {assign "class" {$data[0][0]['html_class']}}
  {assign "image" {$data[0][0]['image']['url']}}

  <section class="FlexContainer pageportal {$label|lower|replace: ' ' : ''} {$class|lower} {if $smarty.foreach.pageportal.iteration == 1}active{/if}">

    <section class="row">

      <section class="column">

        <section class="FlexContainer textmodule image">

          <section class="row">

            <section class="column content">

              <section class="box">
                <h2 class="label transparent">
                  <span class="hr"></span>
                {$header}
                </h2>
                <a class="btn {if !empty($class)} {$class|lower} {else} white {/if}" href="{$pagelink}">
                  <p>{$label}</p>
                  <span></span>
                </a>
              </section>

            </section>
            <!--/content-->

            <section class="column image" style="background: url({$image})">
              <h4 class="label transform">
                <span class="hr"></span>
                {$label}
              </h4>
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
