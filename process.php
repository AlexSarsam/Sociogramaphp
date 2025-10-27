<?php
require __DIR__ . '/includes/functions.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$input = [
    'nombre'              => trim($_POST['nombre'] ?? ''),
    'edad'                => trim($_POST['edad'] ?? ''),
    'correo'              => trim($_POST['correo'] ?? ''),
    'grupo'               => trim($_POST['grupo'] ?? ''),
    'genero'              => trim($_POST['genero'] ?? ''),
    'positivo'            => trim($_POST['positivo'] ?? ''),
    'negativo'            => trim($_POST['negativo'] ?? ''),
    'motivo'              => trim($_POST['motivo'] ?? ''),
    'amigos'              => $_POST['amigos'] ?? [],
    'intereses'           => trim($_POST['intereses'] ?? ''),
    'rol'                 => trim($_POST['rol'] ?? ''),
    'experiencia'         => trim($_POST['experiencia'] ?? ''),
    'lenguaje_favorito'   => trim($_POST['lenguaje_favorito'] ?? ''),
    'comunicacion'        => trim($_POST['comunicacion'] ?? ''),
    'herramientas'        => $_POST['herramientas'] ?? [],
    'hora_inicio'         => trim($_POST['hora_inicio'] ?? ''),
    'hora_fin'            => trim($_POST['hora_fin'] ?? ''),
    'gestion_tiempo'      => trim($_POST['gestion_tiempo'] ?? ''),
    'estres_proyecto'     => trim($_POST['estres_proyecto'] ?? ''),
    'preferencia_espacio' => trim($_POST['preferencia_espacio'] ?? ''),
    'dispositivo'         => trim($_POST['dispositivo'] ?? ''),
    'SistemaOperativo'    => trim($_POST['SistemaOperativo'] ?? ''),
    'color_equipo'        => trim($_POST['color_equipo'] ?? ''),
    'comentarios'         => trim($_POST['comentarios'] ?? ''),
    'fecha_respuesta'     => trim($_POST['fecha_respuesta'] ?? ''),
];


$errors = [];


if (strlen($input['nombre']) < 3) {
    $errors['nombre'] = 'El nombre debe tener al menos 3 caracteres.';
}

if ($input['edad'] === '' || !is_numeric($input['edad']) || $input['edad'] <= 0) {
    $errors['edad'] = 'Introduce una edad válida.';
}

if (!filter_var($input['correo'], FILTER_VALIDATE_EMAIL)) {
    $errors['correo'] = 'Introduce un correo electrónico válido.';
}

if ($input['grupo'] === '') {
    $errors['grupo'] = 'Selecciona tu grupo.';
}

if ($input['genero'] === '') {
    $errors['genero'] = 'Selecciona tu género.';
}


if ($input['positivo'] === '') {
    $errors['positivo'] = 'Indica con quién te gusta trabajar.';
}

if ($input['negativo'] === '') {
    $errors['negativo'] = 'Indica con quién prefieres no trabajar.';
}


if ($input['rol'] === '') {
    $errors['rol'] = 'Selecciona tu rol habitual en proyectos.';
}

if ($input['lenguaje_favorito'] === '') {
    $errors['lenguaje_favorito'] = 'Selecciona tu lenguaje favorito.';
}

if ($input['comunicacion'] === '') {
    $errors['comunicacion'] = 'Selecciona un tipo de comunicación.';
}


if ($input['gestion_tiempo'] === '') {
    $errors['gestion_tiempo'] = 'Selecciona tu nivel de gestión del tiempo.';
}

if ($input['preferencia_espacio'] === '') {
    $errors['preferencia_espacio'] = 'Selecciona tu preferencia de espacio.';
}

if ($input['dispositivo'] === '') {
    $errors['dispositivo'] = 'Selecciona tu dispositivo preferido.';
}
if ($input['SistemaOperativo'] === '') {
    $errors['SistemaOperativo'] = 'Selecciona tu sistema operativo preferido.';
}

if ($input['fecha_respuesta'] === '') {
    $errors['fecha_respuesta'] = 'Indica la fecha de respuesta.';
}



if ($errors) {
    echo "<h2>Se han encontrado errores en el formulario:</h2>";
    echo "<ul style='color:red;'>";
    foreach ($errors as $campo => $mensaje) {
        echo "<li><strong>$campo:</strong> $mensaje</li>";
    }
    echo "</ul>";
    echo "<p><a href='index.php'>Volver al formulario</a></p>";
    exit;
}

$file = __DIR__ . '/data/sociograma.json';





$file = __DIR__ . '/data/sociograma.json';
$todo = load_json($file);     
$todo[] = $input;            
save_json($file, $todo);      


echo "<h2>Formulario enviado correctamente</h2>";
echo "<p>Gracias, <strong>{$input['nombre']}</strong>, por completar el sociograma.</p>";
echo "<p><a href='index.php'>Volver al formulario</a></p>";