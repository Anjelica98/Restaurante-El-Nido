@extends('nav')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTAURANT MENU</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      /* Add some basic tab styles */
      .tabs {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
      }
      .tab-btn {
        padding: 8px 20px;
        border: none;
        background: #eee;
        cursor: pointer;
        border-radius: 5px 5px 0 0;
        font-weight: bold;
      }
      .tab-btn.active {
        background: #d4af37;
        color: #fff;
      }
      .tab-section {
        display: none;
      }
      .tab-section.active {
        display: block;
      }
    </style>
</head>
<body>
  @section('content')
    <section class="wrap">
      <!-- Tabs -->
      <div class="tabs">
        <button class="tab-btn active" onclick="showTab('hamburguesas')">Hamburguesas</button>
        <button class="tab-btn" onclick="showTab('pizzas')">Pizzas</button>
        <button class="tab-btn" onclick="showTab('pastas')">Pastas</button>
      </div>

      <!-- Hamburguesas Section -->
      <div class="tab-section active" id="hamburguesas">
        <div class="wrap-title-section">
          <h2>Hamburguesas</h2>
        </div>
        <div class="wrap column-2 carta">
          <!-- ...existing hamburguesas platos... -->
          <div class="plato-carta">
            <div class="img-plato-carta">
              <img src="img/bocadillo-carta.png" alt="">
            </div>
            <div class="title-plato-carta">
              <h4>Lorem, ipsum dolor.</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="precio-plato-carta">
              <span>9€</span>
            </div>
          </div>
          <!-- ...repeat for other hamburguesas... -->
        </div>
      </div>

      <!-- Pizzas Section -->
      <div class="tab-section" id="pizzas">
        <div class="wrap-title-section">
          <h2>Pizzas</h2>
        </div>
        <div class="wrap column-2 carta">
          <!-- ...existing pizzas platos... -->
          <div class="plato-carta">
            <div class="img-plato-carta">
              <img src="img/pizza.png" alt="">
            </div>
            <div class="title-plato-carta">
              <h4>Lorem, ipsum dolor.</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="precio-plato-carta">
              <span>9€</span>
            </div>
          </div>
          <!-- ...repeat for other pizzas... -->
        </div>
      </div>

      <!-- Pastas Section -->
      <div class="tab-section" id="pastas">
        <div class="wrap-title-section">
          <h2>Pastas</h2>
        </div>
        <div class="wrap column-2 carta">
          <!-- ...existing pastas platos... -->
          <div class="plato-carta">
            <div class="img-plato-carta">
              <img src="img/pasta-fresca-carta.png" alt="">
            </div>
            <div class="title-plato-carta">
              <h4>Lorem, ipsum dolor.</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="precio-plato-carta">
              <span>9€</span>
            </div>
          </div>
          <!-- ...repeat for other pastas... -->
        </div>
      </div>
    </section>
    @endsection
    <script>
      function showTab(tabId) {
        // Hide all sections
        document.querySelectorAll('.tab-section').forEach(sec => sec.classList.remove('active'));
        // Remove active from all buttons
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        // Show selected section
        document.getElementById(tabId).classList.add('active');
        // Set active button
        const btns = document.querySelectorAll('.tab-btn');
        if(tabId === 'hamburguesas') btns[0].classList.add('active');
        if(tabId === 'pizzas') btns[1].classList.add('active');
        if(tabId === 'pastas') btns[2].classList.add('active');
      }
    </script>
</body>
</html>