<?php include "app/app.php"; $page = 1; head($page); ?>
<body>

<div class="wrapper">
  
    <?php navbar($page); ?>

  <section id="home" class="sec-main">
    <h1 class="main-heading">Sit dolores dolor erat.</h1>
  </section>

  <section id="about" class="sec-about">
    <div class="container">
      <h1>About me</h1>

      <hr />

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <p>Tincidunt eu duo commodo ipsum esse duis magna. Sanctus diam lorem duo justo blandit. Sit in ut sed magna diam esse ex.
             Accumsan et sea et sit. Iriure kasd et duis aliquyam dolore takimata voluptua in vero.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="sec-services">
    <div class="container">
      <h1>Services</h1>

      <hr />

      <div class="row">
        <div class="col-sm-4">
          <i class="fa fa-4x fa-paint-brush"></i>

          <h2 class="h3">Sit dolores </h2>

          <p>Lorem blandit vulputate elitr sit vero velit ut sed labore no erat hendrerit velit duis iriure labore sed eirmod</p>
        </div>

        <div class="col-sm-4">
          <i class="fa fa-4x fa-code"></i>

          <h2 class="h3">Sit dolores </h2>

          <p>Lorem blandit vulputate elitr sit vero velit ut sed labore no erat hendrerit velit duis iriure labore sed eirmod</p>
        </div>

        <div class="col-sm-4">
          <i class="fa fa-4x fa-tablet"></i>

          <h2 class="h3">Sit dolores </h2>

          <p>Lorem blandit vulputate elitr sit vero velit ut sed labore no erat hendrerit velit duis iriure labore sed eirmod</p>
        </div>
      </div>
    </div>
  </section>

  <section id="folio" class="sec-folio">
    <div class="container">
      <h1>Sit dolores </h1>

      <hr />

      <div class="row">
        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/Oog0wehKxYs/450x450" alt="By Håkon Sataøen" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/EfpOiZvPbT4/450x450" alt="By Samuel Zeller" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/2aoVQXwLf3g/450x450" alt="By Scott Webb" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/o2KD7JtqTlk/450x450" alt="By Has Bonk" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/TV2ET43jK0w/450x450" alt="By Scott Webb" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/lZ2LB1s_z7s/450x450" alt="By Daniel Lozano Valdés" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/o4qL4FuwN6I/450x450" alt="By Anthony DELANOIX" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/ej7RYC0ED_c/450x450" alt="By Patrick Pilz" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="https://source.unsplash.com/0G1r-Cg0zS8/450x450" alt="By Vita Vilcina" />
        </div>
      </div>
    </div>
  </section>

  <section id="testimonials" class="sec-testimonials">
    <div class="container">
      <h1>Partenaire said</h1>

      <hr />

      <div class="row">
        <div class="col-sm-4">
          <p class="text-center">"Alex did great job when designing our website. It was pleasure to work with him and I'm sure we will hire him again."</p>

          <p class="text-right">&mdash; Marc Andressen</p>
        </div>

        <div class="col-sm-4">
          <p class="text-center">"Alex proved to be truly creative designer who is able to create just stunning design I immediately fell in love with!"</p>

          <p class="text-right">&mdash; Emily Cooper</p>
        </div>

        <div class="col-sm-4">
          <p class="text-center">"I have worked with several different people and it always seemed like a pain—luckily I found Alex Devero. Thank you Alex!"</p>

          <p class="text-right">&mdash; Scott Grubber</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="sec-contact">
    <div class="container">
      <h1>Hire me</h1>

      <hr />

      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <form class="center-block" action="#" method="post">
            <div class="form-group">
              <label class="sr-only" for="inputName">Full name</label>

              <input id="inputName" class="form-control" type="text" placeholder="Adam Smith" required />
            </div>

            <div class="form-group">
              <label for="inputMail" class="sr-only">Email Address</label>

              <input id="inputMail" class="form-control" type="email" placeholder="adam.smith@mail.com" required />
            </div>

            <div class="form-group">
              <label for="inputMessage" class="sr-only">Your Message</label>

              <textarea id="inputMessage" class="form-control" name="message" cols="30" rows="8" required></textarea>
            </div>

            <div class="form-group">
              <button class="btn btn-default center-block" type="submit" value="Hire me">Hire me</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <ul class="soc-media-ul">
        <li>
          <a href="https://twitter.com/AlexDevero" class="fa fa-twitter" target="_blank"></a>
        </li>

        <li>
          <a href="https://plus.google.com/u/0/+AlexDevero" class="fa fa-google-plus" target="_blank"></a>
        </li>

        <li>
          <a href="https://cz.linkedin.com/pub/alex-devero/38/262/70/" class="fa fa-linkedin" target="_blank"></a>
        </li>

        <li>
          <a href="https://www.behance.net/d3v3r0" class="fa fa-behance" target="_blank"></a>
        </li>

        <li>
          <a href="mailto:example@mail.com" class="fa fa-envelope"></a>
        </li>
      </ul>
    </div>
  </footer>
</div>


</body> </html>