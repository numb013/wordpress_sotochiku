<?php
/**
 * Template Name: material
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
get_header(); ?>

	<section id="fh5co-testimony" class="testimony_top" data-section="testimony">
		<div class="container">
			<div class="row">
				<div class="animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h1>MATERIAL</h1>
						<p>あつめられたSOTOCHIKU素材</p>
						<br><br>
						<p>
							SOTOCHIKUの素材には外部にあった古びた素材を内装に持ち込む”探索”と、 海や土、
							気候や生き物の習性を利用する”創作”の２つの方法があります。過去に私たちが扱った
							ものはとても面白い表情をしています。創作の場合は世界にひとつしかない表情をもちま
							す。一般の方々からの提供も多くございます。アーカイヴとしてまとめたのでご覧ください。
						</p>
					</div>
				</div>

<div style="margin-bottom: 15px;">

				<div class="animate-box">
					<div class="col-md-12 text-center fh5co-heading" style="text-align: left;">
						<h3>1.探 索</h3>
						<p>時の記憶を刻んだ素材を探す</p>
					</div>
				</div>

<div class='mate'>
	<?php
	$page = get_page_by_path( 'mate1' );
	if( isset( $page ) ) {
		echo apply_filters( 'the_content', $page->post_content );
	}
	?>		
</div>
	
</div>



				<div class="animate-box"  style="display: inline-block;">
					<div class="col-md-12 text-center fh5co-heading" style="text-align: left; margin-top:25px;">
						<h3>2.創作</h3>
						<p>時の記憶を刻む素材をつくる。</p>
					</div>
				</div>
<div class='mate'>
	<?php
	$page = get_page_by_path( 'mate2' );
	if( isset( $page ) ) {
		echo apply_filters( 'the_content', $page->post_content );
	}
	?>		
</div>


			</div>
		</div>
	</section>
