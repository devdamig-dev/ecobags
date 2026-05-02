# Ecobags SRL - Sitio estático premium

## Estructura
- `index.html`, `productos.html`, `certificaciones.html`, `contacto.html`
- `contact.php` para envío de formulario por email
- `assets/` imágenes y recursos
- `css/styles.css`
- `js/main.js`

## Publicación en hosting cPanel
1. Subir todos los archivos a `public_html/`.
2. Verificar que `contact.php` esté habilitado en el hosting con función `mail()`.
3. Probar envío de formulario desde `contacto.html`.

## Reemplazo de imágenes y logos
- Hero: reemplazar `assets/hero-industrial.svg` por imagen real optimizada.
- Logos de clientes y certificados: reemplazar placeholders en `index.html` y `certificaciones.html`.

## Integraciones posibles
- Si no se usa `contact.php`, puede conectarse el formulario a Formspree, EmailJS o endpoint propio.
