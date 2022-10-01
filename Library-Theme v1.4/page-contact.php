<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
 
<title>Contact</title>

<?php get_header(); ?>

</head>

<body>

<div class="top">



</div>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 medium-12 small-12">
        <div class="row column align-center text-center">
          <h1 class="contact-us-header">Contact</h1>
</div>
</div>
</div>
</div>
  
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 medium-12 small-12">
        <div class="row column align-center text-center">
          <form class="contact-us-form" action="https://sheetdb.io/api/v1/hb2qgsw3miu0n" method="post" id="sheetdb-form">
		  <div class="cell">
        <div class="card text-center align-center-middle">
		<h1>Master form</h1>
            <input type="text" placeholder="Full name" name="data[name]" required>
            <input type="email" placeholder="Email" name="data[email]" required>
            <input type="email" placeholder="Phone" name="data[phone]" required>
            <textarea name="message" id="" rows="12" placeholder="Type your message here"></textarea>
            <div class="contact-us-form-actions">
              <input type="submit" class="button" value="Send it" />
            </div>
			 </div>
  </div>
          </form>
        </div>
      </div>

    </div>
  </div>
 

  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 medium-12 small-12">
        <div class="row column align-center text-center">
          <h1 class="location">Location</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="grid-container">
    <div class="grid-x grid-padding-x">

      <ul class="contact-us-list">
        <li class=""><br><img  src="<?php echo get_template_directory_uri() ?>/assets/img/address.png" style="height:50px;"> Address: W Rincon Ave, Campbell CA
          <span>95008
          </span>
        </li><br>
        <li class=""><img  src="<?php echo get_template_directory_uri() ?>/assets/img/email.png" style="height:50px;">
          Email: hello@yeticave.com</li>
        <br>
        <li class=""><img  src="<?php echo get_template_directory_uri() ?>/assets/img/call.png" style="height:50px;">
          Phone
          1 (408) 445 9978
        </li>
      </ul>
    </div>
  </div>
  <div class="grid-container">


    <div class="responsive-embed">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13541.91521507803!2d115.86114323068846!3d-31.947904855249796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a13f7dd60dab2c8!2sNorth%20Metropolitan%20TAFE!5e0!3m2!1sen!2sau!4v1652341198961!5m2!1sen!2sau"
        width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>">
    </div>
  </div>
  </div>


  </div>
  </div>
	
	<script>
		var form = document.getElementById('sheetdb-form');
		form.addEventListener("submit", e => {
				e.preventDefault();
				fetch(form.action, {
					method : "POST",
					body: new FormData(document.getElementById("sheetdb-form")),
				}).then(
					response => response.json()
					).then((html) => {
						// you can put any JS code here
						window.open('d.html, '_blank');
						
					});
		});
		</script>
	
</body>
<?php get_footer(); ?>