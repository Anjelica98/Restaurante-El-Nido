
@extends('nav')<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>HOME GUEST | LANDING PAGE FOR CLIENTS</title>
    <style>
    /* === Global Styles === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      line-height: 1.6;
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    img {
      width: 100%;
      display: block;
      border-radius: 10px;
    }

    /* === Hero Section === */
    .hero {
      height: 100vh;
      background: url('https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
    }
    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 700px;
      padding: 20px;
    }
    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      letter-spacing: 1px;
    }
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }
    .hero a {
      background: #c0392b;
      padding: 12px 28px;
      border-radius: 30px;
      color: white;
      font-weight: 500;
      transition: background 0.3s ease;
    }
    .hero a:hover {
      background: #a93226;
    }

    /* === About Section === */
    .about {
      background: #f9f9f9;
      padding: 80px 20px;
    }
    .about-container {
      max-width: 1100px;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 40px;
    }
    .about-text {
      flex: 1;
      min-width: 300px;
    }
    .about-text h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
    }
    .about-text p {
      margin-bottom: 15px;
      color: #555;
    }
    .about-img {
      flex: 1;
      min-width: 300px;
    }

    /* === Menu Section === */
    .menu {
      padding: 80px 20px;
      text-align: center;
    }
    .menu h2 {
      font-size: 2.2rem;
      margin-bottom: 40px;
    }
    .menu-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }
    .menu-item {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 280px;
      text-align: left;
    }
    .menu-item img {
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .menu-item h3 {
      margin-bottom: 8px;
      font-size: 1.2rem;
    }
    .menu-item p {
      color: #666;
      font-size: 0.95rem;
    }

    /* === Footer === */
    footer {
      background: #222;
      color: #ddd;
      text-align: center;
      padding: 40px 20px;
    }
    footer p {
      margin-bottom: 8px;
      font-size: 0.9rem;
    }
    footer a {
      color: #c0392b;
      transition: color 0.3s;
    }
    footer a:hover {
      color: #e74c3c;
    }

    /* === Responsive === */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.2rem;
      }
      .about-container {
        flex-direction: column;
      }
      .menu-items {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

 @section('content')
 <br>
 <br>
 <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>El Nido</h1>
      <p>Comida cásera , nutre tu alma</p>
      <a href="#menu">Haz una reserva</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="https://images.unsplash.com/photo-1600891963931-96053a2d2e48?auto=format&fit=crop&w=800&q=80" alt="About our restaurant">
      </div>
      <div class="about-text">
        <h2>Sobre Nosotros</h2>
        <p>
          En <strong>El Nido</strong>, traemos la calidez y delicias
          auténticas con productos locales , creados por nuestros chefs
         con un giro y fusión únicos
        </p>
        <p>
          Our chefs blend tradition with innovation to deliver a dining
          experience that delights every sense.
        </p>
      </div>
    </div>
  </section>

  <!-- Menu Section -->
  <section class="menu" id="menu">
    <h2>Our Signature Dishes</h2>
    <div class="menu-items">
      <div class="menu-item">
        <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?auto=format&fit=crop&w=600&q=80" alt="Pasta">
        <h3>Truffle Tagliatelle</h3>
        <p>Handmade pasta tossed in a creamy truffle sauce.</p>
      </div>
      <div class="menu-item">
        <img src="https://images.unsplash.com/photo-1625944227283-bd4669a6d18d?auto=format&fit=crop&w=600&q=80" alt="Pizza">
        <h3>Margherita Pizza</h3>
        <p>Classic Neapolitan pizza with fresh mozzarella and basil.</p>
      </div>
      <div class="menu-item">
        <img src="https://images.unsplash.com/photo-1604909053272-6dfb8b7a0b5f?auto=format&fit=crop&w=600&q=80" alt="Dessert">
        <h3>Tiramisu</h3>
        <p>A perfect finish: espresso-soaked ladyfingers with mascarpone cream.</p>
      </div>
    </div>
  </section>
      <!--  section 6 FAQ -->
    <section id="faq">
        <div class="faq wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center pb-4">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Question 1?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae, aspernatur unde ex harum totam minima quas consectetur. Tempora earum laborum dolor maxime perferendis sint rerum fugiat dolorem cupiditate numquam.</p>
                    </div>

                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Question 2?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae, aspernatur unde ex harum totam minima quas consectetur. Tempora earum laborum dolor maxime perferendis sint rerum fugiat dolorem cupiditate numquam.</p>
                    </div>

                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Question 3?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae, aspernatur unde ex harum totam minima quas consectetur. Tempora earum laborum dolor maxime perferendis sint rerum fugiat dolorem cupiditate numquam.</p>
                    </div>

                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Question 4?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae, aspernatur unde ex harum totam minima quas consectetur. Tempora earum laborum dolor maxime perferendis sint rerum fugiat dolorem cupiditate numquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 La Bella Cucina. All rights reserved.</p>
    <p><a href="#about">About</a> | <a href="#menu">Menu</a> | <a href="#contact">Contact</a></p>
  </footer>
  @endsection
</body>
</html>