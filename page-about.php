<?php
/**
 * The template for the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: About
 * @package pixely4
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<section class="hero">
		<div class="cover"></div>
		<div class="container">
			<h2><?php the_title()?></h2>
		</div>
	</section>

	<article class="about">

		<section class="biography">

			<div class="container">
				<h3>Biography</h3>
				<p>I’m Graham Martin, a graduate website designer and developer based in Surrey, England. The continual evolution of the internet, and therefore my job, keeps me challenged and engaged every single day with finding the best solutions to digital problems.</p>

				<p>Since graduating from the University of the West of England with a degree in Multimedia Computing I’ve worked both as a freelance website designer and developer and, most recently, within a busy marketing agency.</p>

				<p>I’m currently looking for new full-time work opportunities. Read my <a href="http://pixely.co.uk/wp-content/uploads/2015/03/Graham-Martin-–-CV.pdf">curriculum vitae</a>, connect on <a href="http://uk.linkedin.com/in/grahammartin1988/">LinkedIn</a> or <a href="mailto:graham@pixely.co.uk">get in touch</a> with me with more information.</p>
			</div>

			<div class="timeline">

				<div class="line"></div>

				<ul>
					<li>
						<span class="content"><p><strong>Hello world!</strong></p></span>
						<span class="marker"></span>
						<label>1988</label>
					</li>

					<li>
						<span class="content"><p><strong>My first website</strong>Self-taught the basics of HTML and web design</p></span>
						<span class="marker"></span>
						<label>2004</label>
					</li>

					<li>
						<span class="content"><p><strong>Attended university</strong>Studied at the University of the West of England in Bristol</p></span>
						<span class="marker"></span>
						<label>2007</label>
					</li>

					<li>
						<span class="content"><p><strong>Founded Pixely</strong>Started accepting freelance web development projects</p></span>
						<span class="marker"></span>
						<label>2010</label>
					</li>

					<li>
						<span class="content"><p><strong>Graduated university</strong>First class honours in Multimedia Computing</p></span>
						<span class="marker"></span>
						<label>2011</label>
					</li>

					<li>
						<span class="content"><p><strong>Joined Clockwork</strong>Become website designer &amp; developer at Reigate agency</p></span>
						<span class="marker"></span>
						<label>2013</label>
					</li>

					<li>
						<span class="content"><p><strong>Today</strong></p></span>
						<span class="marker"></span>
						<label><?php echo date('Y')?></label>
					</li>



				</ul>

			</div>

		</section>

		<section class="skills">

			<div class="container">
				<h3>Skills</h3>
				<p>I’m skilled right through the stack of modern web technologies from current design practises through to front-end development with HTML, CSS and JavaScript and finishing up with server-side programming in PHP to create anything from small brochure sites to complex web applications.</p>

				<p>The challenges I desire the most, that I thrive on, require me to wear multiple hats and require an elegant solution to a complex data problem.</p>
			</div>

			<div class="grid">

				<div class="grid__col grid__col--1-of-2 grid__col--m-1-of-1 grid__col--s-1-of-1">

					<div class="frames">

						<div class="frame design">

							<div class="controls">

								<div class="mock-button"></div>
								<div class="mock-button"></div>
								<div class="mock-button"></div>
								<div class="mock-input">pixely.co.uk</div>

							</div>

							<div class="screen"></div>

						</div>

						<div class="frame frontend">
		<pre><code>&#x3C;!DOCTYPE html&#x3E;
&#x3C;html lang=&#x22;en&#x22;&#x3E;
  &#x3C;head&#x3E;
    &#x3C;meta charset=&#x22;utf-8&#x22;&#x3E;
    &#x3C;meta http-equiv=&#x22;X-UA-Compatible&#x22; content=&#x22;IE=edge&#x22;&#x3E;
    &#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1&#x22;&#x3E;
    &#x3C;link href=&#x22;css/pixely.css&#x22; rel=&#x22;stylesheet&#x22;&#x3E;
    &#x3C;script type=&#x22;text/javascript&#x22; src=&#x22;//use.typekit.net/ztz1kdu.js&#x22;&#x3E;&#x3C;/script&#x3E;
    &#x3C;script type=&#x22;text/javascript&#x22;&#x3E;try{Typekit.load();}catch(e){}&#x3C;/script&#x3E;
    &#x3C;title&#x3E;pixely &#x26;ndash; website design and development by Graham Martin&#x3C;/title&#x3E;
  &#x3C;/head&#x3E;

  &#x3C;body class=&#x22;home&#x22;&#x3E;
    &#x3C;header&#x3E;
      &#x3C;div class=&#x22;container&#x22;&#x3E;
        &#x3C;h1&#x3E;&#x3C;a href=&#x22;index.html&#x22;&#x3E;pixely&#x3C;/a&#x3E;&#x3C;/h1&#x3E;
          &#x3C;nav&#x3E;
            &#x3C;ul&#x3E;
              &#x3C;li class=&#x22;active&#x22;&#x3E;&#x3C;a href=&#x22;index.html&#x22;&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
              &#x3C;li&#x3E;&#x3C;a href=&#x22;about.html&#x22;&#x3E;About&#x3C;/a&#x3E;&#x3C;/li&#x3E;
              &#x3C;li&#x3E;&#x3C;a href=&#x22;portfolio.html&#x22;&#x3E;Portfolio&#x3C;/a&#x3E;&#x3C;/li&#x3E;
              &#x3C;li&#x3E;&#x3C;a href=&#x22;blog.html&#x22;&#x3E;Blog&#x3C;/a&#x3E;&#x3C;/li&#x3E;
              &#x3C;li&#x3E;&#x3C;a href=&#x22;contact.html&#x22;&#x3E;Contact&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
          &#x3C;/nav&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/header&#x3E;
</code></pre>

						</div>

						<div class="frame backend">
		<pre><code>0101010001110111011001010110111001110100011110010010000001111001011001010110000101110010011100110010000001100110011100100110111101101101001000000110111001101111011101110010000001111001011011110111010100100000011101110110100101101100011011000010000001100010011001010010000001101101011011110111001001100101001000000110010001101001011100110110000101110000011100000110111101101001011011100111010001100101011001000010000001100010011110010010000001110100011010000110010100100000011101000110100001101001011011100110011101110011001000000111100101101111011101010010000001100100011010010110010001101110001001110111010000100000011001000110111100100000011101000110100001100001011011100010000001100010011110010010000001110100011010000110010100100000011011110110111001100101011100110010000001111001011011110111010100100000011001000110100101100100001011100010000001010011011011110010000001110100011010000111001001101111011101110010000001101111011001100110011000100000011101000110100001100101001000000110001001101111011101110110110001101001011011100110010101110011001011000010000001010011011000010110100101101100001000000110000101110111011000010111100100100000011001100111001001101111011011010010000001110100011010000110010100100000011100110110000101100110011001010010000001101000011000010111001001100010011011110111001000101110001000000100001101100001011101000110001101101000001000000111010001101000011001010010000001110100011100100110000101100100011001010010000001110111011010010110111001100100011100110010000001101001011011100010000001111001011011110111010101110010001000000111001101100001011010010110110001110011001011100010000001000101011110000111000001101100011011110111001001100101001011100010000001000100011100100110010101100001011011010010111000100000010001000110100101110011011000110110111101110110011001010111001000101110</code></pre>

						</div>

					</div>

				</div>

				<div class="grid__col grid__col--1-of-2 grid__col--m-1-of-1 grid__col--s-1-of-1">

					<aside class="skill design" data-frame="design">
						<div class="marker"></div>
						<h4>Website design</h4>
						<p>Whilst the design is the layer of the website everyone sees, it has to be far more than a pretty face. From paper sketches to full visual mockups I work to craft elegant design solutions. </p>
					</aside>

					<aside class="skill frontend" data-frame="frontend">
						<div class="marker"></div>
						<h4>Front-end website development</h4>
						<p>I write great HTML, CSS and JavaScript incorporating the latest developments in responsive design, CSS3 and JavaScript frameworks to create beautiful websites, intuitive interfaces and bespoke interactivity.</p>
					</aside>

					<aside class="skill backend" data-frame="backend">
						<div class="marker"></div>
						<h4>Back-end website development</h4>
						<p>Working mainly in PHP, I’ve developed complicated websites and web applications for a variety of companies with features ranging from content management and e-commerce solutions through to web applications drawing in data from multiple API’s and social networks. I’m also experienced with a range of frameworks and content management systems.</p>
					</aside>

				</div>

			</div>

		</section>

		<section class="biography">

			<div class="container">
				<h3>Contact me</h3>
				<p>I’m currently looking for new full-time work opportunities at a busy digital design agency or a challenging start-up company.</p>

				<p>Read my <a href="http://pixely.co.uk/wp-content/uploads/2015/03/Graham-Martin-–-CV.pdf">curriculum vitae</a>, connect on <a href="http://uk.linkedin.com/in/grahammartin1988/">LinkedIn</a> or <a href="mailto:graham@pixely.co.uk">get in touch</a> with me with more information.</p>


			</div>

		</section>

		<section class="beyond">

			<div class="container">
				<h3>Beyond pixels&hellip;</h3>

			</div>

			<div class="grid">

				<div class="grid__col grid__col--1-of-2 grid__col--m-1-of-1 grid__col--s-1-of-1">

					<div class="snapshots">
						<div class="snapshot"><img src="<?php echo get_template_directory_uri()?>/images/about/photos/franz-joseph.jpg" /></div>
						<div class="snapshot">
							<img src="<?php echo get_template_directory_uri()?>/images/about/photos/sucre.jpg" />
						</div>
						<div class="snapshot">
							<img src="<?php echo get_template_directory_uri()?>/images/about/photos/oslo.jpg" />
						</div>
						<div class="snapshot">
							<img src="<?php echo get_template_directory_uri()?>/images/about/photos/bungy1.jpg" />
						</div>
						<div class="snapshot">
							<img src="<?php echo get_template_directory_uri()?>/images/about/photos/queenstown.jpg" />
						</div>
						<div class="snapshot">
							<img src="<?php echo get_template_directory_uri()?>/images/about/photos/sahara.jpg" />
						</div>

					</div>

				</div>

				<div class="grid__col grid__col--1-of-2 grid__col--m-1-of-1 grid__col--s-1-of-1">
					<div class="beyond_text">
						<p>When I’m not crafting websites I like to spend my time travelling around this beautiful planet we live on and indulging in my passions of photography, hiking, music, movies and cycling.</p>

						<p>I (occassionally) blog about my travels at <a href="http://www.pixelytravels.co.uk">pixelytravels.co.uk</a>.</p>
					</div>
				</div>

			</div>

		</section>

	</article>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
