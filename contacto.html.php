
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contacto - Río Achichilco</title>

<!-- Fuente bonita -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lobster&display=swap" rel="stylesheet" />

<style>
  * { box-sizing: border-box; margin:0; padding:0; }

  body {
    font-family: 'Poppins', sans-serif;
    color: #fff;
    line-height: 1.7;
    background: linear-gradient(135deg, #b5f5c9, #8be0b3, #6fd6a4, #b8f0cc);
    min-height: 100vh;
    overflow-x: hidden;
    background-size: 400% 400%;
    animation: gradientAnim 15s ease infinite;
  }

  @keyframes gradientAnim {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
  }

  /* Menú */
  .menu {
    position: fixed;
    top: 10px;
    right: 10px;
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    border-radius: 12px;
    padding: 12px 20px;
    z-index: 1000;
  }

  .menu ul { list-style: none; display: flex; gap: 15px; }
  .menu ul li a {
    text-decoration: none; 
    color: #fafffa; 
    font-weight: 600;
    padding: 6px 12px; 
    border-radius: 6px; 
    transition: 0.3s ease;
  }
  .menu ul li a:hover {
    background-color: rgba(255, 255, 255, 0.3);
    transform: scale(1.1);
  }

  h1 {
    text-align: center; 
    margin-top: 80px; 
    margin-bottom: 20px;
    font-family: 'Lobster', cursive; 
    font-size: 3rem;
    color: #e8fff0; 
    text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
  }

  main.content {
    max-width: 600px;
    margin: 40px auto;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 40px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
  }

  main.content h2 {
    text-align: center;
    font-size: 1.9rem;
    margin-bottom: 20px;
    color: #ebfff3;
  }

  .formulario label {
    display: block;
    margin-top: 15px;
    margin-bottom: 5px;
    font-weight: 600;
  }

  .formulario input,
  .formulario textarea {
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: none;
    outline: none;
    margin-bottom: 10px;
    font-size: 1rem;
  }

  .formulario input::placeholder,
  .formulario textarea::placeholder { color: #777; }

  .formulario input[type="submit"] {
    background: linear-gradient(45deg, #94e2b5, #6fd6a4);
    border: none;
    color: #fff;
    padding: 14px 28px;
    font-size: 1.1rem;
    font-weight: bold;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    background-size: 200% 200%;
  }

  .formulario input[type="submit"]:hover {
    background-position: right center;
    transform: scale(1.05);
    box-shadow: 0 0 15px #d9ffe6;
  }

  .contact-info {
    text-align: center;
    margin-top: 20px;
    font-size: 1rem;
    color: #fff;
  }

</style>
</head>
<body>

<!-- Menú -->
<nav class="menu">
  <ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="historia.php">Historia</a></li>
    <li><a href="ubicacion.php">Ubicación</a></li>
    <li><a href="contaminacion.php">Contaminación</a></li>
    <li><a href="contacto.php">Contacto</a></li>
    <li><a href="pagina secundaria.php">Galería</a></li>
  </ul>
</nav>

<h1>Contacto</h1>

<main class="content">
  <h2>Queremos escucharte. ¡Súmate al proyecto del río Achichilco y hagamos juntos la diferencia!</h2>

  <form class="formulario" onsubmit="redactar(event)">
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" placeholder="Tu nombre" required>

    <label for="email">Correo electrónico</label>
    <input type="email" id="email" name="email" placeholder="Tu correo" required>

    <label for="subject">Asunto</label>
    <input type="text" id="subject" name="subject" placeholder="Asunto del mensaje" required>

    <label for="comments">Comentarios</label>
    <textarea id="comments" name="comments" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>

    <input type="submit" value="Enviar">
  </form>

  
</main>

<script>
  function redactar(event) {
    event.preventDefault();

    const nombre = document.getElementById("name").value.trim();
    const asunto = document.getElementById("subject").value.trim();
    const comentarios = document.getElementById("comments").value.trim();

    if(!nombre || !asunto || !comentarios) {
      alert("Por favor, completa todos los campos requeridos.");
      return;
    }

    const url = `https://mail.google.com/mail/?view=cm&fs=1&to=rioachichilco@gmail.com&su=${encodeURIComponent(asunto)}&body=${encodeURIComponent("Nombre: " + nombre + "\n\n" + comentarios)}`;

    window.open(url, '_blank');
  }
</script>

</body>
</html>