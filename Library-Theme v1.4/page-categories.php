<!DOCTYPE html>
<html lang="en">
<head>

<title>Categories</title>
<div class="row column text-center">
    <div class="newbooks">
<?php get_header(); ?>
</div>
</div>
</head>

<body>

<div class="top">







</div>

<!-- To top function -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-circle-up'
      style='font-size:26px;color:green'></i></button>


  <div class="row column text-center">
    <div class="newbooks">
      <h2>Newest Art Books</h2>
    </div>
    
  </div>


  <!-- Grid Card 1  -->

  <div class="grid-container">
    <div class="grid-x grid-margin-x small-up-1 medium-up-3">

      <div class="cell">
        <div class="card text-center align-center-middle" style="height:450px;">
      
            <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/WordisArt.jpg" alt="image"  style="height:200px;">
          
          <div class="card-section">


          </div>
          <br>
          <h4>The Word is Art</h4>
          <p><button class="button" data-toggle="exampModal">Book</button></p>
          <div class="reveal book1" id="exampModal" data-reveal data-overlay="true">
            <h4>The Word is Art</h4>
            <div class="media-object-section">

              
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/WordisArt.jpg" alt="image"   style="height:200px;">

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
        </div>
      </div>


      <div class="cell">
        <div class="card text-center align-center-middle" style="height:450px;">
     
            <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Contemporary Painting.jpg"  alt="image" style="height:200px;">
        
          <div class="card-section">


          </div>
          <br>
          <h4>World of Art</h4>
          <p></p>
          <p><button class="button" data-toggle="exampModal1">Book</button></p>
          <div class="reveal book1" id="exampModal1" data-reveal data-overlay="true">
            <h4>World of Art</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/Contemporary Painting.jpg"  alt="image" style="width: 150px;">
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

            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      <div class="cell">
        <div class="card text-center align-center-middle" style="height:450px;">
        
            <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Twenty First Century.jpg"  alt="image" style="height:200px;">
          
          <div class="card-section">

          </div>
          <br>
          <h4>The Twenty First Century Art Book</h4>
          <p></p>
          <p><button class="button" data-toggle="exampModal2">Book</button></p>
          <div class="reveal book1" id="exampModal2" data-reveal data-overlay="true">
            <h4>The Twenty First Century Art Book</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/Twenty First Century.jpg"  alt="image" style="width: 150px;">
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

            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row column text-center">
    <div class="modernbooks">
      <h2>Modern Art Books</h2>
    </div>
    
  </div>

  <div class="grid-container">
    <div class="grid-x grid-margin-x small-up-1 medium-up-3">
      <div class="cell">
        <div class="card text-center align-center-middle">

          <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Modern Art.jpg"  alt="image" style="height:250px;">

          <div class="card-section">

          </div>
          <br>
          <h4>This is Modern Art</h4>
          <p></p>
          <p><button class="button" data-toggle="exampModal4">Book</button></p>
          <div class="reveal book1" id="exampModal4" data-reveal data-overlay="true">
            <h4>This is Modern Art</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/Modern Art.jpg"  alt="image" style="width: 150px;">
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

            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      <div class="cell">
        <div class="card text-center align-center-middle">

          <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Modern Art Book PostModern.jpg"  alt="image" style="height:250px;">

          <div class="card-section">
          </div>
          <h4>Modern Art</h4>
          <p></p>
          <p><button class="button" data-toggle="exampModal5">Book</button></p>
          <div class="reveal book1" id="exampModal5" data-reveal data-overlay="true">
            <h4>Modern Art</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/Modern Art Book PostModern.jpg"  alt="image" style="width: 150px;">
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

            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      <div class="cell">
        <div class="card text-center align-center-middle">

          <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Australian Modern Art.jpg"  alt="image" style="height:250px;">

          <div class="card-section">
          </div>
          <h4>Australian Modern Art</h4>
          <p></p>
          <p><button class="button" data-toggle="exampModal6">Book</button></p>
          <div class="reveal book1" id="exampModal6" data-reveal data-overlay="true">
            <h4>Encounters with Australian Modern Art</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/Australian Modern Art.jpg"  alt="image" style="width: 150px;">
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

            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Grid Card 2 -->
  <div class="row column text-center">
    <div class="renainassance">
      <h2>Renainassance Art Books</h2>
    </div>
    
  </div>

  <div class="grid-container">
    <div class="grid-x grid-margin-x small-up-1 medium-up-3">
      <div class="cell">
        <div class="card text-center align-center-middle">

          <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/The Renaissance.jpg"  alt="image" style="height:250px;">

          <div class="card-section">

          </div>
          <h4>The Renainassance</h4>
          <p><button class="button" data-toggle="exampModal7">Book</button></p>
          <div class="reveal book1" id="exampModal7" data-reveal data-overlay="true">
            <h4>The Renainassance</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/The Renaissance.jpg"  alt="image" style="width: 150px;">
            </div>
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
            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        </div>

      </div>

      <div class="cell">
        <div class="card text-center align-center-middle">

          <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Renaissance Art Reconsidered.jpg" alt="image" style="height:250px;">

          <div class="card-section">

          </div>
          <h4>Renainassance Art Reconsidered</h4>
          <p><button class="button" data-toggle="exampModal8">Book</button></p>
          <div class="reveal book1" id="exampModal8" data-reveal data-overlay="true">
            <h4>Renaissance Art Reconsidered</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/Renaissance Art Reconsidered.jpg"  alt="image" style="width: 150px;">
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
            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        </div>

      </div>


      <div class="cell">
        <div class="card text-center align-center-middle">

          <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Art and Society.jpg"  alt="image" style="height:250px;">
          <div class="card-section">
          </div>
          <h4>Art and society</h4>
          <p></p>
          <p><button class="button" data-toggle="exampModal9">Book</button></p>
          <div class="reveal book1" id="exampModal9" data-reveal data-overlay="true">
            <h4>Art and society in Italy, 1350-1500</h4>
            <div class="media-object-section">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/Art and Society.jpg"  alt="image" style="width: 150px;">
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
            <button class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>

  

    <div class="row column text-center">
      <div class="australian">
        <h2> Australian Art Books</h2>
      </div>
      
    </div>

    <div class="grid-container">
      <div class="grid-x grid-margin-x small-up-1 medium-up-3">
        <div class="cell">
          <div class="card text-center align-center-middle">

            <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Art of Australia.jpg"  alt="image" style="height:250px;">

            <div class="card-section">
            </div>
            <h4>Art of Australia</h4>
            <p></p>
            <p><button class="button" data-toggle="exampModal10">Book</button></p>
            <div class="reveal book1" id="exampModal10" data-reveal data-overlay="true">
              <h4>Art of Australia</h4>
              <div class="media-object-section">

                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Art of Australia.jpg"  alt="image" style="width: 150px;">
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
              <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
        <div class="cell">
          <div class="card text-center align-center-middle">

            <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Australian Art History.jpg"  alt="image" style="height:250px;">

            <div class="card-section">
            </div>
            <h4>Australian Art History</h4>
            <p></p>
            <p><button class="button" data-toggle="exampModal11">Book</button></p>
            <div class="reveal book1" id="exampModal11" data-reveal data-overlay="true">
              <h4>Australian Art History</h4>
              <div class="media-object-section">

                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Australian Art History.jpg"  alt="image" style="width: 150px;">
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
              <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
        <div class="cell">
          <div class="card text-center align-center-middle">

            <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Australian Art National Gallery.jpg"  alt="image" style="height:250px;">

            <div class="card-section">
            </div>
            <h4>Australian Art</h4>
            <p></p>
            <p><button class="button" data-toggle="exampModal12">Book</button></p>
            <div class="reveal book1" id="exampModal12" data-reveal data-overlay="true">
              <h4>Australian Art</h4>
              <div class="media-object-section">

                <img src="<?php echo get_template_directory_uri() ?>/assets//img/Australian Art National Gallery.jpg"  alt="image" style="width: 150px;">
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
              <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="row column text-center">
      <div class="topbooks">
        <div class="medium-4 columns">
          <h2>Top 3 Books</h2>
        </div>
      </div>
      

      <div class="grid-container">
        <div class="grid-x grid-margin-x small-up-1 medium-up-3">
          <div class="cell">
            <div class="card text-center align-center-middle">

              <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Post Modern Art.jpg"  alt="image" style="height:250px;">
              <div class="card-section">


              </div>

              <h4>Postmodernism</h4>
              <p></p>

              <p><button class="button" data-toggle="exampModal13">Book</button></p>
              <div class="reveal book1" id="exampModal13" data-reveal data-overlay="true">
                <h4>Postmodernism</h4>
                <div class="media-object-section">

                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/Post Modern Art.jpg"  alt="image" style="width: 150px;">
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
                <button class="close-button" data-close aria-label="Close reveal" type="button">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
          <div class="cell">
            <div class="card text-center align-center-middle">

              <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/Romanesque.jpg"  alt="image" style="height:250px;">
              <div class="card-section">

              </div>

              <h4>Romanesque</h4>
              <p></p>
              <p><button class="button" data-toggle="exampModal14">Book</button></p>
              <div class="reveal book1" id="exampModal14" data-reveal data-overlay="true">
                <h4>Romanesque</h4>
                <div class="media-object-section">

                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/Romanesque.jpg"  alt="image" style="width: 150px;">
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
                <button class="close-button" data-close aria-label="Close reveal" type="button">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
          <div class="cell">
            <div class="card text-center align-center-middle">

              <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/White on Black Art Book.jpg"  alt="image" style="height:250px;">
              <div class="card-section">


              </div>
              <h4>White on Black</h4>
              <p></p>
              <p><button class="button" data-toggle="exampModal15">Book</button></p>
              <div class="reveal book1" id="exampModal15" data-reveal data-overlay="true">
                <h4>White on Black</h4>
                <div class="media-object-section">

                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/White on Black Art Book.jpg"  alt="image"style="width: 150px;">
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
                <button class="close-button" data-close aria-label="Close reveal" type="button">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>
<?php get_footer(); ?>