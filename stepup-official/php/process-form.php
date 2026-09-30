<?php
// StepUp - Form Handler dengan Ukuran
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: ../index.php");
  exit;
}

function clean($data) {
  return htmlspecialchars(trim($data ?? ''), ENT_QUOTES, 'UTF-8');
}

$nama   = clean($_POST['nama']);
$wa     = clean($_POST['whatsapp']);
$produk = clean($_POST['produk']);
$ukuran = clean($_POST['ukuran']);

$errors = [];
if (empty($nama)) $errors[] = "Name is required";
if (empty($wa)) $errors[] = "WhatsApp is required";
if (empty($produk)) $errors[] = "Product not detected";
if (empty($ukuran)) $errors[] = "Size is required";

if (!empty($errors)) {
  header("Location: ../index.php?error=" . urlencode(implode(", ", $errors)));
  exit;
}

// Format nomor WA
$wa_clean = preg_replace('/\D/', '', $wa);
if (substr($wa_clean, 0, 1) === '0') $wa_clean = '62' . substr($wa_clean, 1);
if (substr($wa_clean, 0, 2) !== '62') $wa_clean = '62' . $wa_clean;

// WhatsApp Message
$pesan = "Hello StepUp!%0A%0A";
$pesan .= "I would like to order:%0A%0A";
$pesan .= "👟 *Product*: {$produk}%0A";
$pesan .= "📏 *Size*: {$ukuran}%0A";
$pesan .= "👤 *Name*: {$nama}%0A";
$pesan .= "📱 *WA*: {$wa_clean}%0A%0A";
$pesan .= "Please confirm availability & payment instructions. Thank you! 🙏";

$admin_wa = preg_replace('/\\D/', '', getenv('STEPUP_WHATSAPP_NUMBER') ?: '');
if (empty($admin_wa)) {
  header("Location: ../index.php?error=" . urlencode("WhatsApp checkout is unavailable"));
  exit;
}

header("Location: https://wa.me/{$admin_wa}?text={$pesan}");
exit;
?>