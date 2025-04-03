
Built by https://www.blackbox.ai

---

```markdown
# Conversor de PDF a Word y viceversa

Este proyecto es una aplicación web que permite a los usuarios convertir archivos entre los formatos PDF y Word (.doc y .docx) de manera sencilla y efectiva. Utiliza tecnologías front-end modernas como Bootstrap, Font Awesome y Tailwind CSS para proporcionar una interfaz de usuario amigable.

## Project Overview

La aplicación soporta dos funciones principales de conversión:
1. **PDF a Word**: Convierte archivos PDF a documentos de Word.
2. **Word a PDF**: Convierte documentos de Word a archivos PDF.

Nota: La funcionalidad de conversión está simulada en este proyecto. Para una conversión real, es necesario tener LibreOffice instalado en el servidor.

## Installation

Para instalar y ejecutar este proyecto localmente, sigue estos pasos:

1. Clona el repositorio:
   ```bash
   git clone <URL_DEL_REPOSITORIO>
   cd <NOMBRE_DEL_DIRECTORIO>
   ```

2. Asegúrate de tener PHP instalado en tu sistema para ejecutar scripts PHP.

3. Crea los directorios `uploads` y `downloads` en la raíz del proyecto para almacenar archivos subidos y convertidos.
   ```bash
   mkdir uploads downloads
   ```

4. Abre el archivo `index.html` en un navegador web para acceder a la aplicación.

## Usage

1. Abre la aplicación en tu navegador.
2. Selecciona el tipo de conversión (PDF a Word o Word a PDF).
3. Selecciona el archivo correspondiente usando el botón de selección de archivo.
4. Haz clic en el botón de conversión. 
5. La aplicación simulará la conversión y mostrará un mensaje de éxito (en una implementación real, el archivo convertido sería descargado).

## Features

- Interfaz de usuario intuitiva y atractivo.
- Soporta la selección de archivos para las conversiones.
- Mensajes claros de estado y de errores durante las operaciones.
- Diseño responsivo que se adapta a diferentes tamaños de pantalla.

## Dependencies

Si bien este proyecto no tiene dependencias de Node.js definidas dentro de un `package.json`, depende de las siguientes bibliotecas externas para su funcionamiento:

- [Bootstrap 5](https://getbootstrap.com): Para el diseño y la estructura de la interfaz.
- [Font Awesome](https://fontawesome.com): Para los iconos dentro de la interfaz.
- [Tailwind CSS](https://tailwindcss.com): Para la personalización de estilos.

## Project Structure

```plaintext
.
├── index.html                  # Archivo principal donde se carga la aplicación
├── convert_pdf_to_word.php     # Script PHP para manejar la conversión de PDF a Word
└── convert_word_to_pdf.php      # Script PHP para manejar la conversión de Word a PDF
```

## Contribución

Las contribuciones son bienvenidas. Si deseas contribuir, por favor abre un _issue_ o un _pull request_ en el repositorio.

## Licencia

Este proyecto está licenciado bajo la licencia MIT. Para más detalles, consulta el archivo LICENSE en el repositorio.
```