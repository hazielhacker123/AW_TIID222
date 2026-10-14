<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manual de etiquetas HTML</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
    header { background: #1f3a5f; color: white; padding: 15px 30px; }
    nav { background: #2c5282; padding: 10px 30px; }
    nav a { color: white; margin-right: 20px; text-decoration: none; }
    main { padding: 20px 30px; }
    section { background: white; padding: 15px; margin-bottom: 20px; border-radius: 6px; }
    article { border: 1px solid #ccc; padding: 10px; margin-top: 10px; }
    aside { background: #e2e8f0; padding: 10px; margin-top: 10px; }
    footer { background: #1f3a5f; color: white; text-align: center; padding: 10px; }
    .caja { background: #fefcbf; padding: 10px; border: 1px dashed #b7791f; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #999; padding: 8px; text-align: left; }
    th { background: #cbd5e0; }
    label { display: block; margin-top: 8px; }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <h1>Manual de etiquetas HTML</h1>
    <p>Practica de Desarrollo Web</p>
  </header>

  <!-- NAV + A HREF -->
  <nav>
    <a href="#section-demo">Section</a>
    <a href="#formulario">Formulario</a>
    <a href="#tabla">Tabla</a>
    <a href="https://developer.mozilla.org/es/" target="_blank">MDN Web Docs</a>
  </nav>

  <!-- MAIN -->
  <main>

    <!-- SECTION -->
    <section id="section-demo">
      <h2>Seccion de ejemplo</h2>
      <p>Esta es una seccion que agrupa contenido relacionado.</p>

      <!-- ARTICLE -->
      <article>
        <h3>Articulo de ejemplo</h3>
        <p>Este articulo es un contenido independiente, como una noticia o una entrada de blog.</p>
      </article>

      <!-- ASIDE -->
      <aside>
        <p>Dato curioso: este bloque es contenido complementario al principal.</p>
      </aside>
    </section>

    <!-- FIGURE y FIGCAPTION -->
    <section>
      <h2>Figure y figcaption</h2>
      <figure>
        <img src="' width='200' height='120'><rect width='200' height='120' fill='%232c5282'/><text x='100' y='65' font-size='20' fill='white' text-anchor='middle'>Imagen</text></svg>" alt="Imagen de ejemplo">
        <figcaption>Figura 1. Imagen de ejemplo con su descripcion.</figcaption>
      </figure>
    </section>

    <!-- DIV -->
    <section>
      <h2>Div</h2>
      <div class="caja">
        Este es un div: un contenedor generico sin significado propio, usado para agrupar y dar estilos.
      </div>
    </section>

    <!-- FORM, LABEL, INPUT, BUTTON -->
    <section id="formulario">
      <h2>Formulario</h2>
      <form action="#" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre">

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com">

        <br><br>
        <button type="submit">Enviar</button>
      </form>
    </section>

    <!-- TABLE, TR, TH, TD -->
    <section id="tabla">
      <h2>Tabla</h2>
      <table>
        <tr>
          <th>Etiqueta</th>
          <th>Funcion</th>
        </tr>
        <tr>
          <td>header</td>
          <td>Encabezado de la pagina</td>
        </tr>
        <tr>
          <td>footer</td>
          <td>Pie de pagina</td>
        </tr>
      </table>
    </section>

  </main>

  <!-- FOOTER -->
  <footer>
    <p>Haziel Joseph Cornejo Silva - UPQ</p>
  </footer>

</body>
</html>