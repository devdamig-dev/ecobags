<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'ventas@ecobagssrl.com';
  $subject = 'Nuevo presupuesto desde Ecobags SRL';
  $fields = ['nombre','empresa','telefono','email','tipo_producto','material','medidas','micronaje','cantidad','impresion','mensaje'];
  $body = "Consulta web:\n\n";
  foreach ($fields as $f) {
    $val = isset($_POST[$f]) ? strip_tags($_POST[$f]) : '';
    $body .= strtoupper($f) . ": " . $val . "\n";
  }
  $headers = "From: no-reply@ecobagssrl.com\r\nReply-To: " . ($_POST['email'] ?? '');
  mail($to, $subject, $body, $headers);
  header('Location: contacto.html?ok=1');
  exit;
}
header('Location: contacto.html');
