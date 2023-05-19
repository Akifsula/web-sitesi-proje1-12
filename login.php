<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $kullaniciAdi = $_POST['kullanici_adi'];
  $sifre = $_POST['sifre'];

  if ($kullaniciAdi === 'b211210030@sakarya.edu.tr' && $sifre === 'b211210030') {
    // Kullanıcı adı ve şifre doğru ise başarılı giriş mesajını görüntüle
    echo '<div id="giris-basarili" style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; border-radius: 5px;">Giriş başarılı!</div>';
    echo '<script>setTimeout(function(){ document.getElementById("giris-basarili").style.display = "none"; window.location.href = "index.html"; }, 1200);</script>';
    exit();
  } else {
    // Kullanıcı adı ve şifre yanlış ise hata mesajını görüntüle
    echo '<div id="giris-hatali" style="background-color: red; color: white; padding: 10px; text-align: center; border-radius: 5px;">Kullanıcı bilgileri hatalı!</div>';
    echo '<script>setTimeout(function(){ document.getElementById("giris-hatali").style.display = "none"; }, 1500);</script>';
  }
}
?>

<body>
  <div class="giris-formu">
    <h2>Giriş Yap</h2>
    <?php if (isset($_GET['hata']) && $_GET['hata'] === 'true') : ?>
      <div style="background-color: red; color: white; padding: 10px; text-align: center; border-radius: 5px;">Kullanıcı bilgileri hatalı!</div>
    <?php endif; ?>
    <form action="login.php" method="post">
      <label for="kullanici_adi">Kullanıcı Adı:</label>
      <input type="text" id="kullanici_adi" name="kullanici_adi" required><br><br>
      <label for="sifre">Şifre:</label>
      <input type="password" id="sifre" name="sifre" required><br><br>
      <button type="submit">Giriş Yap</button>
    </form>
  </div>
</body>
