<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

      <meta property="og:type" content="website">
      <meta property="og:url" content="https://joserodny.herokuapp.com/">
      <meta property="og:title" content="jose rodny Sibugan portfolio">
      <meta property="og:image" content="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">


      <style>
        canvas{
          display:block;
          vertical-align:bottom;
          position: absolute;
        }
        
        /* ---- particles.js container ---- */
        
        .background{
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          
        }
        
      </style>
      <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
      <script src="{{ mix('/js/app.js') }}" defer></script>
      <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
      <script>
        window.onload = function() {
          Particles.init({
            selector: '.background'
          });
        };
      </script>
    @inertiaHead
  </head>
  <body>
    <canvas class="background"></canvas>
    @inertia
  </body>
</html>

