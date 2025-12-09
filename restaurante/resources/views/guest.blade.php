
@extends('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/g.css') }}" rel="stylesheet" />  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>HOME GUEST | LANDING PAGE FOR CLIENTS</title>
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
      <a  class="text-decoration-none"   href="{{ route('reservation') }}">Haz una reserva</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <!--<img src="https://images.unsplash.com/photo-1600891963931-96053a2d2e48?auto=format&fit=crop&w=800&q=80" alt="About our restaurant">--->
        <img src="https://images.unsplash.com/photo-1622115837997-90c89ae689f9?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"></image>
      </div>
      <div class="about-text">
        <h2>Sobre Nosotros</h2>
        <p>
          En <strong>El Nido</strong>, traemos la calidez y delicias
          auténticas con productos locales , creados por nuestros chefs
         con un giro y fusión únicos
        </p>
        <p>
        
          Nuestros chefs combinan tradición con innovación para ofrecer una experiencia culinaria que deleita todos los sentidos.
          
        </p>
      </div>
    </div>
  </section>

  <!-- Menu Section -->
  <section class="menu" id="menu">
    <h2>Nuestros Platos Populares</h2>
    <div class="menu-items">
      <div class="menu-item">
        <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?auto=format&fit=crop&w=600&q=80" alt="Pasta">
        <h3> Tagliatelle de Trufa</h3>
        <p>Pasta hecha a mano en salsa de trufas y trozos de setas.</p>
      </div>
      <div class="menu-item">
        <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Pizza">
        <h3>Pizza Margarita </h3>
        <p>Pizza napolitana elaborada con tomate, mozzarella</p>
      </div>
      <div class="menu-item">
        <img src="https://images.unsplash.com/photo-1707269388230-60ceceac3e6b?q=80&w=464&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dessert">
        <h3>Tiramisú</h3>
        <p>Un acabado perfecto.Tiramisú clásico con una fusión para amantes de oreo crujiente</p>
      </div>
    </div>
  </section>

  <!--  section 6 FAQ -->
      <section id="faq">
        <div class="faq wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-4">
                        <h2>Preguntas más frecuentes</h2>
                    </div>
                </div>

                <div class="row pt-5 g-4">
                    <div class="col-sm-6 col-lg-3">
                        <div class="faq-item p-4">
                            <h5 class="faq-question">¿Es necesario hacer reserva?</h5>
                            <p class="faq-answer mb-0">Recomendamos reservar especialmente los fines de semana y festivos para asegurar disponibilidad. Aun así, aceptamos clientes sin reserva según el aforo del momento.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="faq-item p-4">
                            <h5 class="faq-question">¿Qué opciones para alergias o intolerancias?</h5>
                            <p class="faq-answer mb-0">Nuestro personal puede informarte de los alérgenos de cada plato. También ofrecemos alternativas sin gluten, sin lactosa y sin frutos secos cuando es posible.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="faq-item p-4">
                            <h5 class="faq-question">¿Aceptan mascotas?</h5>
                            <p class="faq-answer mb-0">En la terraza sí permitimos mascotas. En el interior depende de la normativa vigente y de la disponibilidad de zonas pet‑friendly.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="faq-item p-4">
                            <h5 class="faq-question">¿Se puede modificar un plato?</h5>
                            <p class="faq-answer mb-0">En la mayoría de los casos sí, siempre que la receta lo permita. Consulta al camarero para adaptar ingredientes o alérgenos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

  <!-- Footer -->
  <footer>
    <p>&copy; ❤2025 El Nido  -- Barranco Anjela</p>
    <p>Número de teléfono xxxxxxxxx</p>
    <p>Dirección c/Asturias San Roque</p>
    <p>Horario A partir de las 12:00 hasta las 00:00 -- Miercóles cerrado</p>
    <div class="footer-social pt--4 text-center">
                        <a href="https://www.facebook.com/?locale=es_ES"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/?lang=es"><i class="fab fa-twitter"></i></a>  
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>
@endsection

    <script src="https://kit.fontawesome.com/04111552cb.js" crossorigin="anonymous"></script> 
</body>
</html>