<?php include 'includes/header.php'; ?>
<?php include 'includes/functions.php'; ?>

<?php
$old_field = isset($old_field) ? $old_field : [];
$errors = isset($errors) ? $errors : [];

?>

<main class="container">
  <h1>Sociograma DAW</h1>

  <form method="POST" action="process.php">

    <fieldset>
      <legend>Datos personales</legend>

      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ejemplo: Alex Sarsam "><br><br>

      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad" min="0" max="120" required><br><br>

      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" placeholder="tuemail@gmail.com" required><br><br>

      <label for="grupo">Grupo:</label>
      <select id="grupo" name="grupo" required>
        <option value="">Selecciona tu curso:</option>
        <option value="DAW1">DAW1</option>
        <option value="DAW2">DAW2</option>
      </select><br><br>

      <label for="genero">Género:</label>
      <select id="genero" name="genero" required>
        <option value="">Selecciona tu género</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>

      </select><br><br>
    </fieldset>


    <fieldset>
      <legend>Preferencias de colaboración</legend>

      <label for="positivo">¿Con quién te gusta trabajar?</label>
      <input type="text" id="positivo" name="positivo" required><br><br>

      <label for="negativo">¿Con quién prefieres no trabajar?</label>
      <input type="text" id="negativo" name="negativo" required><br><br>

      <label for="motivo">Motivo:</label>
      <textarea id="motivo" name="motivo" placeholder="Explica brevemente el motivo..."></textarea><br><br>

      <p>¿Tienes amigos cercanos en clase?</p>
      <label><input type="checkbox" name="amigos[]" value="pocos"> Pocos</label>
      <label><input type="checkbox" name="amigos[]" value="varios"> Varios</label>
      <label><input type="checkbox" name="amigos[]" value="muchos"> Muchos</label><br><br>

      <label for="intereses">Intereses personales:</label>
      <textarea id="intereses" name="intereses" placeholder="Ejemplo: programación, videojuegos, música..."></textarea>
    </fieldset>


    <fieldset>
      <legend>Rol y experiencia</legend>

      <label for="rol">Rol habitual en proyectos:</label>
      <select id="rol" name="rol" required>
        <option value="">Selecciona tu rol</option>
        <option value="frontend">Frontend</option>
        <option value="backend">Backend</option>
        <option value="fullstack">Fullstack</option>
        <option value="diseño">Diseño</option>
        <option value="otro">Otro</option>
      </select><br><br>

      <label for="experiencia">Años de experiencia programando:</label>
      <input type="number" id="experiencia" name="experiencia" min="0" max="50" value="0"><br><br>

      <label for="lenguaje_favorito">Lenguaje que más dominas:</label>
      <select id="lenguaje_favorito" name="lenguaje_favorito">
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
        <option value="Otro">Otro</option>
      </select>
    </fieldset>


    <fieldset>
      <legend>Comunicación y dinámica de trabajo</legend>

      <label for="comunicacion">Tipo de comunicación preferida:</label>
      <select id="comunicacion" name="comunicacion" required>
        <option value="">Selecciona una opción</option>
        <option value="sincrona">Síncrona </option>
        <option value="asincrona">Asíncrona</option>
        <option value="mixta">Mixta</option>
      </select><br><br>

      <p>Herramientas que sueles usar:</p>
      <label><input type="checkbox" name="herramientas[]" value="GitHub"> GitHub</label>
      <label><input type="checkbox" name="herramientas[]" value="Discord"> Discord</label>
      <label><input type="checkbox" name="herramientas[]" value="Slack"> Slack</label>
      <label><input type="checkbox" name="herramientas[]" value="Trello"> Trello</label>
      <label><input type="checkbox" name="herramientas[]" value="Google Drive"> Google Drive</label><br><br>

      <label for="hora_inicio">Hora disponible (inicio):</label>
      <input type="time" id="hora_inicio" name="hora_inicio"><br><br>

      <label for="hora_fin">Hora disponible (fin):</label>
      <input type="time" id="hora_fin" name="hora_fin">
    </fieldset>

    <legend>Organización y bienestar</legend>

    <label for="gestion_tiempo">Gestión del tiempo:</label>
    <select id="gestion_tiempo" name="gestion_tiempo" required>
      <option value="">Selecciona una opción</option>
      <option value="baja">Baja</option>
      <option value="media">Media</option>
      <option value="alta">Alta</option>
    </select><br><br>

    <label for="estres_proyecto">Nivel de estrés en los proyectos (1 a 5):</label>
    <input type="range" id="estres_proyecto" name="estres_proyecto" min="1" max="5" step="1" value="3">
    <span>1 = Bajo / 5 = Alto</span><br><br>

    <p>Preferencia de espacio de trabajo:</p>
    <label><input type="radio" name="preferencia_espacio" value="silencio" required> Silencio</label>
    <label><input type="radio" name="preferencia_espacio" value="ruido_blanco"> Ruido blanco</label>
    <label><input type="radio" name="preferencia_espacio" value="musica"> Música</label>
    </fieldset>


    <fieldset>
      <legend>Datos técnicos y observaciones</legend>

      <label for="dispositivo">Tipo de dispositivo que usas:</label>
      <select id="dispositivo" name="dispositivo">
        <option value="portatil">Portátil</option>
        <option value="sobremesa">Sobremesa</option>
      </select><br><br>

      <label for="SistemaOperativo">Sistema operativo preferido:</label>
      <select id="SistemaOperativo" name="SistemaOperativo" required>
        <option value="">Selecciona el Sistema Operativo que uses:</option>
        <option value="Windows">Windows</option>
        <option value="macOS">macOS</option>
        <option value="Linux">Linux</option>
      </select><br><br>


      <fieldset>

        <label for="color_equipo">Color representativo de tu equipo:</label>
        <input type="color" id="color_equipo" name="color_equipo" value="#0000ff"><br><br>

        <label for="comentarios">Comentarios adicionales:</label>
        <textarea id="comentarios" name="comentarios" placeholder="Cualquier detalle adicional..."></textarea><br><br>

        <label for="fecha_respuesta">Fecha de respuesta:</label>
        <input type="date" id="fecha_respuesta" name="fecha_respuesta" required>
      </fieldset>

      <button type="submit">Enviar</button>
  </form>
</main>

<?php include 'includes/footer.php'; ?>