<?php
/* Cargar un archivo JSON y devolverlo como array */
function load_json(string $path): array
{
    if (!file_exists($path)) {
        return []; // Si no existe, devolvemos un array vacío
    }
    $raw = file_get_contents($path);
    $data = json_decode($raw, true);
    return is_array($data) ? $data : [];
}

/* Guardar un array en un archivo JSON */
function save_json(string $path, array $data): bool
{
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return file_put_contents($path, $json) !== false;
}

/* Valor anterior de un campo (rehidratación del formulario) */
function old_field(string $name, array $source = []): string
{
    return isset($source[$name]) ? $source[$name] : "";
}

/* Error de un campo  */

function field_error($name, $errors = [])
{
return isset($errors[$name]) ? "<p style='color:red'>" . $errors[$name] . 
"</p>" : "";
}