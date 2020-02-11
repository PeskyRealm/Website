<?php 
/* 
 * Template Name: Home Page
 * Template Post Type: page
 */
get_header(); ?>

	<main role="main">
		<section>
            <div class="banner container-fluid">
                <img src="http://peskyrealm.site/wp-content/uploads/2020/02/still-life-composition.png">
            </div>
        </section>
        <section>
            <div class="space"></div>
        </section>
        <section>
            <div id="crumbs" class="carousel slide container-fluid carousel.vertical" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#crumbs" data-slide-to="0" class="active"></li>
                    <li data-target="#crumbs" data-slide-to="1"></li>
                    <li data-target="#crumbs" data-slide-to="2"></li>
                </ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
                        <picture>
                            <img src="http://peskyrealm.site/wp-content/uploads/2020/02/angler-fish-bottom-flat-view-scaled-e1581034651946.jpg" alt="angler fish under deck">
                        </picture>
                        <!-- <div class="carousel-caption">
                            <h1>Custom</h1>
                            <h2>You choose your own style, <br> from top to bottom.</h2>
                        </div>  -->
  					</div>
  					<div class="carousel-item" >
                        <picture>
                            <img src="http://peskyrealm.site/wp-content/uploads/2020/02/aluminum-green-frontal-side-view-scaled-e1581035062380.jpg" alt="aluminum deck">
                        </picture>
                        <!-- <div class="carousel-caption">
                            <h1>Local</h1>
                            <h2>All artwork is commissioned <br> from local talent.</h2>
                        </div>  -->
  					</div>
					<div class="carousel-item">
                        <picture>
                            <img src="http://peskyrealm.site/wp-content/uploads/2020/02/angler-fish-bottom-flat-view-scaled-e1581034651946.jpg" alt="angler fish under deck">
                        </picture>
                        <!-- <div class="carousel-caption">
                            <h1>Women</h1>
                            <h2>We are founded by women, <br> and encourage all to ride.</h2>
                        </div>  -->
  					</div>
				</div>
			</div>
        </section>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>