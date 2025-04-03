<?php
header('Content-Type: application/json');

// Configuración
$uploadDir = 'uploads/';
$outputDir = 'downloads/';
$allowedTypes = ['application/pdf'];

// Crear directorios si no existen
if (!file_exists($uploadDir)) mkdir($uploadDir, 0777, true);
if (!file_exists($outputDir)) mkdir($outputDir, 0777, true);

$response = ['success' => false, 'message' => '', 'filePath' => '', 'fileName' => ''];

try {
    // Verificar si se subió un archivo
    if (!isset($_FILES['pdfFile'])) {
        throw new Exception('No se recibió ningún archivo');
    }

    $file = $_FILES['pdfFile'];

    // Validar tipo de archivo
    if (!in_array($file['type'], $allowedTypes)) {
        throw new Exception('Tipo de archivo no permitido. Solo se aceptan PDF.');
    }

    // Validar tamaño (máximo 10MB)
    if ($file['size'] > 10 * 1024 * 1024) {
        throw new Exception('El archivo es demasiado grande. Máximo 10MB.');
    }

    // Generar nombre único para el archivo
    $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $uniqueName = uniqid() . '_' . preg_replace('/[^A-Za-z0-9\-]/', '', $originalName);
    $uploadPath = $uploadDir . $uniqueName . '.' . $extension;
    $outputPath = $outputDir . $uniqueName . '.docx';

    // Mover archivo subido
    if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
        throw new Exception('Error al guardar el archivo en el servidor');
    }

    // Configurar respuesta (simulada ya que no tenemos LibreOffice)
    $response['success'] = true;
    $response['message'] = 'Conversión simulada (se requiere LibreOffice para conversión real)';
    $response['filePath'] = $uploadPath; // En realidad sería $outputPath si la conversión funcionara
    $response['fileName'] = $originalName . '.docx';

    // En un entorno real con LibreOffice instalado, aquí iría el código de conversión
    // $command = "libreoffice --headless --convert-to docx --outdir $outputDir $uploadPath 2>&1";
    // exec($command, $output, $returnCode);

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>