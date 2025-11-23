
@extends('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/guest.css') }}" rel="stylesheet" />  
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
                            <h2>Preguntas más frecuentes</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-sm-6 mb-4">
                          <h4><span></span>¿Es necesario hacer reserva?</h4>
                        <p>Recomendamos reservar especialmente los fines de semana y festivos para asegurar disponibilidad. Aun así, aceptamos clientes sin reserva según el aforo del momento.</p>
                    </div>

                    <div class="col-sm-6 mb-4">
                        <h4>¿Qué opciones tienen para personas con alergias o intolerancias?</h4>
                        <p>Nuestro personal puede informarte de los alérgenos de cada plato. También ofrecemos alternativas sin gluten, sin lactosa y sin frutos secos.</p>
                    </div>

                    <div class="col-sm-6 mb-4">
                        <h4>¿Aceptan mascotas?</h4>
                        <p>En la terraza sí permitimos mascotas. En el interior, depende de la normativa vigente o de si el restaurante dispone de zona pet-friendly.</p>
                    </div>

                    <div class="col-sm-6 mb-4">
                      <h4>¿Se puede modificar un plato?</h4>
                        <p>En la mayoría de los casos sí, siempre que la receta lo permita. Consulta al camarero para adaptaciones o cambios.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 La Bella Cucina. All rights reserved.</p>
    <p><a href="#about">About</a> | <a href="{{route('menu')}}">Menu</a> | <a href="{{route('contact.create')}}">Contact</a></p>
    <p>Número de teléfono xxxxxxxxx</p>
    <p>Dirección c/Asturias San Roque</p>
    <p>Horario</p>
  </footer>
@endsection

</body>
</html>