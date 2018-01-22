<?php
/**
 * Template Name: contact
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
get_header(); ?>

  <section id="fh5co-home" class ="company_back" data-section="home">
    <div class="container">
<!--      <div class="text-wrap">
        <div class="text-inner">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 to-animate">
              <h1>Contact</h1>
              <h2>100% Free HTML5 Template. Licensed under <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0.</a> <br> Crafted with love by <a href="http://freehtml5.co/" target="_blank" title="Free HTML5 Bootstrap Templates" class="fh5co-link">FREEHTML5.co</a></h2>
              <div class="call-to-action">
                <a href="#" class="download">Need a legal advice?</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>

  

  <section id="fh5co-footer" data-section="contact" role="contentinfo">
    <div class="container">
      <div class="row">



        <div class="col-md-12">
          <h3 class="section-title">Contact</h3>
          <p style="color: #fff;">個性的だといわれますが、それはお互いさまですw。お気軽にお問合せください。(田中)</p>

			
                                    <?php
                                        $page = get_page_by_path( 'contact_form' );
                                        if( isset( $page ) ) {
                                            echo apply_filters( 'the_content', $page->post_content );
                                        }
                                    ?>			
<!-- 			
			<form class="contact-form">
            <div class="form-group">
              <label for="name" class="sr-only">お名前</label>
              <input type="name" class="form-control" id="name" placeholder="お名前">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">ふりがな</label>
              <input type="email" class="form-control" id="email" placeholder="ふりがな">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">都道府県</label>
              <input type="email" class="form-control" id="email" placeholder="都道府県">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">メールアドレス</label>
              <input type="email" class="form-control" id="email" placeholder="メールアドレス">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">メールアドレス（確認用）</label>
              <input type="email" class="form-control" id="email" placeholder="メールアドレス（確認用）">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">電話番号</label>
              <input type="email" class="form-control" id="email" placeholder="電話番号">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">お問合せ内容</label>
              <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="送信する">
            </div>
          </form> -->
        </div>
      </div>
    </div>
  </section>

