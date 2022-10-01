

<?php get_header(); ?>
<body>
<h1>My Home Page - index.php</h1>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo get_template_directory_uri() ?>/img/lion.jpg" style="width:20%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo get_template_directory_uri() ?>/img/Book.jpg" style="width:20%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo get_template_directory_uri() ?>/img/sunrise.jpg" style="width:20%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<Orbit Slider
    <div class="row">
      <div class="columns">
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit
          data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <ul class="orbit-container">
            <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous
                Slide</span>&#9664;</button>
            <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
            <li class="is-active orbit-slide">
              <img class="orbit-image" src="<?php echo get_template_directory_uri() ?>/img/lion.jpg" alt="l" style="width:1170px;height:487.500px;">
              <figcaption class="orbit-caption"><a href="page-categories.php">Newest Art Books</a></figcaption>
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="<?php echo get_template_directory_uri() ?>/img/Landscape-picture.jpeg" alt="Space"
                style="width:1170px;height:487.500px;">
              <figcaption class="orbit-caption"><a href="page-categories.php">Modern Art Books</a></figcaption>
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="<?php echo get_template_directory_uri() ?>/img/sunrise.jpg" alt="Space"
                style="width:1170px;height:487.500px;">
              <figcaption class="orbit-caption"><a href="categories.html">Renainassance Art Books</a></figcaption>
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="<?php echo get_template_directory_uri() ?>/img/Book.jpg" alt="Space"
                style="width:1170px;height:487.500px;">
              <figcaption class="orbit-caption"><a href="categories.html">Australian Art</a></figcaption>
            </li>
          </ul> 
           <nav class ="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span
                class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
          </nav> 
        </div>
      </div>
    </div>
    
    <section>


      <div class="grid-container">
        <div class="row align-center">
          <div class="large-12 columns text-center align-center">
            <div class="timeline">
              <h2>Timeline of Art</h2>
              <p>Explore the timeline of art books</p>
            </div>
          </div>
        </div>
		 <div class="row">
        <div class="columns">
          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
            <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">14 - 16C</a></li>
            <li class="tabs-title"><a href="#panel2">20th C</a></li>
            <li class="tabs-title"><a href="#panel3">21st C</a></li>

          </ul>

          <!-- Tab 1 -->
          <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <div class="tabs-panel is-active" id="panel1">
              <div class="media-object stack-for-small">
                <div class="media-object-section">
                  <div class="tab-image">
                    <img src="<?php echo get_template_directory_uri() ?>/img/The Renaissance.jpg" style="width: 250px; height: 350px;">
                  </div>
                </div>
                <div class="media-object-section">
                  <h4>The Renaissance</h4>
                  <p>Author:
                    Letts, Rosa Maria.
                    <br>
                    Title:
                    The Renaissance
                    <br>
                    Publisher:

                    Cambridge ; New York : Cambridge University Press
                    <br>
                    Date: Published 1981
                  </p>
                  <p>Description: Cambridge introduction to the history of art;</p>
                  <p>LOCATION:
                    Perth Campus Library
                    Available, General Collection 709.024 LET
                  </p>
                  <ul style="list-style:none;">
                    <li>
                      <p><button class="button" data-toggle="exampleModal1">Book 1</button></p>
                      <div class="reveal book1" id="exampleModal1" data-reveal data-overlay="true">
                        <h4>Renaissance Art Reconsidered</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Renaissance Art Reconsidered.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map2.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Richardson, Carol M.
                            Woods, Kim.
                            Franklin, Michael W.
                            Open University.
                            <br>
                            Title:
                            Renaissance art reconsidered : an anthology of primary sources
                            <br>
                            Publisher:
                            Malden, MA : Blackwell Publishing
                            <br>
                            Date Published: 2007
                          </p>
                          <p>Description: Renaissance Art Reconsidered: An Anthology of Primary Sources offers an
                            intimate
                            glimpse
                            into the reality of making art, and the geographical,
                            material and theoretical factors that shaped artistic production between 1400 and 1530.
                            This book widens the traditional Italian focus of Renaissance art history,
                            considering texts from northern Europe and the Mediterranean alongside texts relating to
                            Italian art. </p>

                          <p>LOCATION:
                            Perth Campus Library
                            Available, General Collection 709.024 REN
                          </p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                    <li>
                      <p><button class="button" data-toggle="exampleModal2">Book 2</button></p>
                      <div class="reveal book2" id="exampleModal2" data-reveal data-overlay="true">
                        <h4>Art and society in Italy, 1350-1500</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Art and Society.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map2.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Welch, Evelyn S., 1959-
                            <br>
                            Title:
                            Art and society in Italy, 1350-1500
                            <br>
                            Publisher:
                            Oxford ; New York : Oxford University Press
                            <br>
                            Date Published: 1997
                          </p>
                          <p>Description: Evelyn Welch presents a fresh picture of Italian art between the 'Black Death'
                            in the mid-fourteenth century and the French invasions at the end of the fifteenth.
                            In it, Florence is no longer the only important centre of artistic activity
                            but takes its place alongside other equally interesting and varied cities of
                            the Italian peninsula. Oil paintings are examined alongside frescos, tapestries,
                            sculptures in bronze and marble, manuscript illuminations, objects in precious metals,
                            and a wide range of other works.. </p>
                          <p>LOCATION:
                            Perth Campus Library
                            Available , General Collection 709.024 WEL</p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                    <li>
                      <p><button class="button" data-toggle="exampleModal3">Book 3</button></p>
                      <div class="reveal book3" id="exampleModal3" data-reveal data-overlay="true">
                        <h4>The History of Art</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/the History of Art.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map2.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:Hodge, D.N.
                            <br>
                            Title:
                            History of art : painting from Giotto to the present day
                            <br>
                            Publisher: London : Capella/Arcturus
                            <br>
                            Date Published: 2007
                          </p>
                          <p>Description:The History of Art takes you on an intriguing journey from the High Renaissance
                            in Italy to the work of today's outstanding artists. Set within a clear historical
                            framework,
                            this is a beautifully illustrated summary of the major movements in western painting along
                            with the lives and times of many of the most influential painters. Great artists change the
                            way we look at the world and this book is designed to help you see the connections between
                            the
                            paintings of, say, Manet and Goya, or the emotional equivalence between a Rothko and a
                            Caravaggio. </p>

                          <p>LOCATION:
                            Perth Campus Library
                            Available , General Collection 709 HOD
                          </p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Tab 2 -->
            <div class="tabs-panel" id="panel2">
              <div class="media-object stack-for-small">
                <div class="media-object-section">
                  <div class="tab-image">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Twentieth Century.jpg" style="width: 250px; height: 350px;">
                  </div>
                </div>
                <div class="media-object-section">
                  <h4>Art of the Twentieth Century</h4>

                  <p>
                    Author:
                    Parmesani, Loredana, 1952-

                    <br>
                    Title:
                    Art of the Twentieth Century
                    <br>
                    Publisher: Milan : Skira / Gio Marconi
                    <br>
                    Date Published: 2000
                  </p>
                  <p>Description: movements, theories, schools and tendencies 1900-2000</p>
                  <p>
                    LOCATION:
                    Perth Campus Library
                    Available , General Collection 709.04 PAR
                  </p>
                  <ul style="list-style:none;">

                    <li>
                      <p><button class="button" data-toggle="exampleModal4">Book 1</button></p>


                      <div class="reveal book4" id="exampleModal4" data-reveal data-overlay="true">
                        <h4>Visual Arts in the Twentieth Century</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Visual Arts in Twentieth C.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map2.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Lucie-Smith, Edward, 1933-
                            <br>
                            Title:
                            Visual arts in the twentieth century
                            <br>
                            Publisher: London : Laurence King
                            <br>
                            Date Published: 1996
                          </p>
                          <p>Description: In this history of Modernism, Edward Lucie-Smith examines the historical,
                            social and intellectual contexts that have underlain individual creativity. The book's
                            structure is strictly chronological, rather than thematic,
                            in order that readers can find affinties between approaches to art normally regarded as
                            separate, such as Pop Art and Conceptualism. </p>


                          <p>
                            LOCATION:
                            Perth Campus Library
                            Available , General Collection 709.04 LUC
                          </p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                    <li>
                      <p><button class="button" data-toggle="exampleModal5">Book 2</button></p>

                      <div class="reveal book5" id="exampleModal5" data-reveal data-overlay="true">
                        <h4>After Modern Art</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/After Modern Art.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map2.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Hopkins, David.

                            <br>
                            Title:
                            After modern art 1945-2000
                            <br>
                            Publisher: Oxford : Oxford University Press
                            <br>
                            Date Published: 2000
                          </p>
                          <p>Description: Modern and contemporary art can be both baffling and beautiful;
                            it can also be innovative, political, and disturbing. This book sets out to provide the
                            first
                            concise interpretation of the period as a whole,
                            clarifying the artists and their works along the way. Closely informed by new critical
                            approaches,
                            it concentrates on the relationship between American and European art from the end of the
                            Second World War to the eve of the new millennium.
                          </p>


                          <p>
                            LOCATION:
                            Perth Campus Library
                            Available , General Collection 709.04 HOP</p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                    <li>
                      <p><button class="button" data-toggle="exampleModal6">Book 3</button></p>
                      <div class="reveal book6" id="exampleModal6" data-reveal data-overlay="true">
                        <h4>Modern Art</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Modern Art Book PostModern.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map2.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Britt, David.
                            <br>
                            Title:
                            Modern art : impressionism to post-modernism
                            <br>
                            Publisher: London : Thames & Hudson
                            <br>
                            Date Published: 1999
                          </p>
                          <p>Description:An introduction to modern art which covers most developments in the visual arts
                            in the last hundred years.
                            The texts written by art historians are up-to-date in approach
                            and are supplemented by chronologies and bibliographies. Includes a gallery of 20th century
                            art with an informed survey of the period. </p>

                          <p>
                            LOCATION:
                            Perth Campus Library
                            Available , General Collection 709.04 MOD
                          </p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Tab 3 -->
            <div class="tabs-panel" id="panel3">
              <div class="media-object stack-for-small">
                <div class="media-object-section">
                  <div class="tab-image">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Twenty First Century.jpg" style="width: 250px; height: 350px;">
                  </div>
                </div>
                <div class="media-object-section">
                  <h4>The Twenty First Century Art Book.</h4>
                  <p>
                    Author:
                    Griffin, Jonathan
                    <br>
                    Title:
                    The twenty first century art book
                    <br>
                    Publisher: London : Phaidon Press
                    <br>
                    Date Published: 2014
                  </p>
                  <p>Description: A complement to the landmark The Art Book, The 21st-Century Art Book is an accessible
                    guide to best contemporary art made since 2000.
                    Showcasing over 280 artists in alphabetical order, it place established figures like Jeff Wall,
                    Marlene Dumas and Maurizio Cattelan alongside the rising stars of the next generation such as
                    Camille Henrot and Haroon Mirza. </p>
                  <p>
                    LOCATION:
                    Perth Campus Library
                    Available , General Collection 709.05 GRI
                  </p>
                  <ul style="list-style:none;">
                    <li>
                      <p><button class="button" data-toggle="exampleModal7">Book 1</button></p>

                      <div class="reveal book7" id="exampleModal7" data-reveal data-overlay="true">
                        <h4>Art:21</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Art 21.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Golden, Thelma.
                            <br>
                            Title:
                            Art 21 : art in the twenty-first century
                            <br>
                            Publisher: New York : Harry N. Abrams
                            <br>
                            Date Published: 2001
                          </p>
                          <p>Description:Companion book to Art for the Twenty-First Century, the first broadcast series
                            for national television to focus exclusively on contemporary visual art and artists in the
                            United States today. </p>

                          <p>
                            LOCATION:
                            Perth Campus Library
                            Available , General Collection 709.05 ART</p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                    <li>
                      <p><button class="button" data-toggle="exampleModal8">Book 2</button></p>
                      <div class="reveal book8" id="exampleModal8" data-reveal data-overlay="true">
                        <h4>The Word is Art</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Word is Art.jpg" style="width:150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Petry, Michael, author.
                            <br>
                            Title:
                            The word is art
                            <br>
                            Publisher: London : Thames & Hudson Ltd
                            <br>
                            Date Published: 2018
                          </p>
                          <p>Description:
                            There has been much scaremongering about the 'death of the book', and how, as words find new
                            ways and means of transmission, young people might gradually begin to shun writing.
                            In the digital age, text becomes information, and information strives to become free. But
                            what
                            value can text hold in the sphere of visual art? How is such text different from poetry?
                          </p>

                          <p>
                            LOCATION ITEMS
                            Perth Campus Library
                            Available , General Collection 709.05 PET</p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                    <li>
                      <p><button class="button" data-toggle="exampleModal9">Book 3</button></p>
                      <div class="reveal book9" id="exampleModal9" data-reveal data-overlay="true">
                        <h4>Pure Pulp Contemporary Artists</h4>
                        <div class="media-object-section">
                          <div class="tab-image">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Contempery.jpg" style="width: 150px;">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Library Map.jpg" alt="" style="width: 250px;">
                          </div>
                          <p>
                            Author:
                            Bridget Donlon
                            <br>
                            Title:
                            Pure Pulp : Contemporary Artists Working in Paper at Dieu Donné
                            <br>
                            Publisher: Clinton, New York : Ruth and Elmer Wellin Museum of Art, Hamilton College ;
                            Munich
                            : DelMonico Books-Prestel
                            <br>
                            Date Published: 2016
                          </p>
                          <p>Description:A survey of works by leading contemporary artists made in residency at Dieu
                            Donné. The Dieu Donné Studio is the site of unparalleled creative exploration and
                            experimentation in
                            paper-based art,
                            where resident artists create innovative works that employ traditional materials and
                            21st-century technology. </p>

                          <p>
                            LOCATION ITEMS
                            Perth Campus Library
                            Available , General Collection 709.05 PUR</p>
                        </div>
                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>



  </section>

  <hr>


  <section class="marketing-site-three-up">
    <div class="grid-container">
      <div class="row four-up-feature-header align-center text-center">
        <div class="medium-12 columns">
          <div class="about">
            <h2>About Us</h2>
            <h5> Picanha flank cupim short loin, swine biltong kevin meatloaf filet mignon bresaola shankle
              venison.
              Leberkas jerky kevin doner pork loin ground round.</h5>
          </div>
        </div>
      </div>
      <div class="row align-spaced">
        <div class="small-10 medium-3 columns">
          <i class='fas fa-university' style='font-size:106px'></i>

          <h4>Resources</h4>
          <p class="four-up-feature-text">Bacon ipsum dolor amet biltong short ribs cupim brisket, prosciutto
            flank
            t-bone
            ball tip porchetta sirloin.</p>
        </div>
        <div class="small-10 medium-3 columns">
          <i class="fas fa-book-reader" style='font-size:106px'></i>

          <h4>Learning</h4>
          <p class="four-up-feature-text"> Leberkas jerky kevin doner pork loin ground round landjaeger chicken
            ham
            hock
            brisket bresaola shankle. </p>
        </div>

        <div class="small-10 medium-3 columns">
          <i class="fas fa-palette" style='font-size:106px'></i>

          <h4>Creative</h4>
          <p class="four-up-feature-text">Alcatra doner pastrami salami. Does your lorem ipsum text long for
            something
            a
            little meatier?</p>
        </div>
      </div>
    </div>
  </section>
  </div>

  <hr>
</body>
<!--<p>Add widget here </p>-->

<?php get_footer();
 
//if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <!--<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">-->
    <!--<?php //dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>
     
<?php //endif; ?>

<!--<p>end widget</p>-->