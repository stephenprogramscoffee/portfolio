@extends('layouts.app')

@section('styles')
  <style>
    .wrapper { 
      height: 100vh;
      overflow-y: scroll;
      scroll-snap-type: y mandatory;
    }
    section {
      height: 100vh;
      width: 100vw;

      scroll-snap-align: start;
    }

    .hero-section {
      background-color: #121316;
    }

    .content {
      height: 100vh;
    }

    .hero-section h1, h2, p {
      font-family: 'SFUIText';
    }

    .hero-section h1 {
      font-size: 50px;
      font-weight: 700;
      color: #5cfe7f;
    }

    .picture-container {
      margin-right: 10em;
      z-index: 1;
      width: 28em;
      height: 24.67em;
      position: relative;
      border: 0.115rem solid #ffffff;
    }

    .picture {
      width: inherit;
      height: inherit;
      margin-top: -2.435em;
      margin-left: -2.2em;
    }

    .social-medias {
      position: absolute;
      top: 75%;
      right: 4em;
      z-index: 4;
      list-style-type: none;
    }

    .about-section {
      padding-top: 10em;
      background-color: #ffffff;
    }

    .about-section h1 {
      font-size: 50px;
      font-weight: 700;
      color: #121316;
    }

    .about-section p {
      font-size: 20px;
      font-weight: 400;
      color: #121316;
    }

    .about-icon img {
      width: 70%;
      height: auto;
    }

    .skills-section {
      padding-top: 10em;
      background-color: #121316;
    }

    .skills-section h1 {
      font-size: 50px;
      font-weight: 700;
      color: #5cfe7f;
    }

    .skills-section h3 {
      font-size: 25px;
      font-weight: 600;
      color: #ffffff;
    }

    .skills-section .front-end-skills span {
      background-color: #5cfe7f;
      border-radius: .5rem;
      margin-right: 12px;
      padding: 20px;
      font-size: 15px;
      font-weight: 600;
      color: #121316;
    }

    .skills {
      border-width: 0 0.15rem 0 0;
      border-color: #5cfe7f;
      border-style: solid;
    }

    .portfolio {
      padding-left: 5em !important;
    }

    .portfolio .image {
      text-decoration: none;
      position: relative;
      width: 70%;
      height: auto;
    }

    .portfolio .image img {
      display: block;
      border-radius: 2rem;
      width: inherit;
      height: inherit;
    }

    .portfolio .image-overlay {
      width: inherit;
      height: 100%;
      border-radius: 2rem;
      position: absolute;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.25s;
    }

    .portfolio .image-overlay > *{
      transform: translateY(20px);
      transition: transform 0.25s;
    }

    .portfolio .image-overlay:hover {
      opacity: 1;
    }

    .portfolio .image-overlay:hover > *{
      transform: translateY(0);
    }

    .portfolio .image-overlay p {
      font-size: 25px;
      font-weight: 600;
      color: #ffffff;
    }

    .contact-section {
      padding-top: 10em;
    }

    .contact-section h1 {
      font-size: 50px;
      font-weight: 700;
      color: #121316;
    }

    .contact-section p {
      font-size: 23px;
      font-weight: 400;
      color: #121316;
    }

    .contact-form input, .contact-form textarea {
      border-width: 0 0 1px 0;
      border-style: solid;
      border-color: #121316;
      border-radius: 0;
    }

    .contact-form input:focus, .contact-form textarea:focus{
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      outline: none !important;
      border-width: 0 0 1px 0;
      border-style: solid;
      border-color: #121316
    }

    .contact-form {
      margin-top: 5em !important;
      padding: 0 15em 0 15em !important;
    }

    .contact-submit-btn {
      background: transparent;
      padding: 15px;
      font-family: 'SFUIText';
      font-weight: 500;
      font-size: 20px;
    }
  </style>
@endsection

@section('content') 
  <div class="wrapper">
    <section class="hero-section">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between content">
          <article>
            <h1 class="pb-2">Software<br>Developer</h1>
            <p class="text-white">I like to explore new technologies that pique my curiosity<br>and conceptualize business models and convert them into applications.<br></p>
          </article>
          <div class="right-content">
            <figure class="picture-container">
              <img class="picture" src="{{ asset('images/picture.png') }}">
            </figure>
          </div>
        </div>
  
        <ul class="social-medias d-grid gap-4">
          <li>
            <a href="https://www.facebook.com/ifasthands">
              <i class="fab fa-facebook-f fa-xl text-white"></i>
            </a>
          </li>
          <li>
            <a href="http://m.me/ifasthands">
              <i class="fab fa-facebook-messenger fa-xl text-white"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/stephen-suniega/">
              <i class="fab fa-linkedin-in fa-xl text-white"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/stephenprogramscoffee">
              <i class="fab fa-github fa-xl text-white"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="about-section">
      <div class="container">
        <div class="row">
          <div class="about col-sm-12 col-md-5">
            <article>
              <h1>About</h1>
              <p class="mt-4">
                I've been a software developer since 2020.
                Over the years, I've built and maintained websites and
                mobile applications with focus on optimization, implementing
                elegant and user-friendly interface; structured and robust backend,
                and security enhancement.
                <br><br>
                Currently, I work at XChanged, Inc as a Software Developer 
                building and maintaining cross-platform applications for clients
                internationally and conduct research and study about new technologies
                to implement them into our projects and to enhance the quality of our
                product.
                <br><br>
                Before being a software developer, I was an intern in Philippine
                Commission on Women as a Web Developer, where I worked to develop a
                Ticketing System for employees.
              </p>
            </article>
          </div>
          <div class="about-icon col-sm-12 col-md-7 d-flex justify-content-end">
            <img src="{{ asset('icons/program.svg') }}">
          </div>
        </div>
      </div>
    </section>
    <section class="skills-section">
      <div class="container">
        <div class="row">
          <div class="skills col-sm-12 col-md-6">
            <h1>Skills</h1>
            <article>
              <h3>Front-end</h3>
              <div class="front-end-skills pt-4">
                <span>CSS3</span>
                <span>HTML5</span>
                <span>jQuery</span>
                <span>Vue.js</span>
                <span>Livewire</span>
                <div class="my-5"></div>
                <span>Wordpress</span>
                <span>Bootstrap</span>
                <span>Javascript</span>
              </div>
            </article>
            <article class="pt-5">
              <h3>Back-end</h3>
              <div class="front-end-skills pt-4">
                <span>PHP</span>
                <span>SQL</span>
                <span>Docker</span>
                <span>Laravel</span>
                <div class="my-5"></div>
                <span>MongoDB</span>
                <span>REST API</span>
              </div>
            </article>
            <article class="pt-5">
              <h3>Mobile</h3>
              <div class="front-end-skills pt-4">
                <span>SwiftUI</span>
                <span>React Native</span>
              </div>
            </article>
          </div>
          <div class="portfolio col-sm-12 col-md-6">
            <h1>Portfolio</h1>
            <a class="image" href="https://www.aspirefootballph.com/" target="_blank">
              <img src="{{ asset('images/portfolio1.jpeg') }}">
              <div class="image-overlay">
                <p>Aspire Football PH</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <article class="text-center">
              <h1>Send me a message!</h1>
              <p>Hit me up for business proposals or we can<br>just say hello to each other. ;)</p>
            </article>
          </div>
          <div class="contact-form row">
            <div class="col-md-6">
              <div class="form-floating mb-3 me-4">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Your name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3 ms-4">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Your email address</label>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Your message</label>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mt-5">
              <button class="contact-submit-btn" type="button">
                <i class="fa-solid fa-paper-plane"></i> Send
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('scripts')
  <script type="module">
  </script>
@endsection