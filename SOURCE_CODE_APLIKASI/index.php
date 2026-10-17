<?php
// FokusKonten PHP 8.2 Compatibility Shield
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
ini_set('display_errors', '0');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AbsensiKu - Aplikasi Presensi Siswa Online & Rekap Kehadiran Sekolah</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: radial-gradient(circle at 50% 10%, #1e1b4b 0%, #0f172a 60%, #030712 100%);
      color: #f8fafc;
      min-height: 100vh;
      font-family: system-ui, -apple-system, sans-serif;
    }
  </style>
</head>
<body class="flex flex-col justify-between items-center p-6 md:p-12">
  <div class="w-full max-w-4xl mx-auto flex flex-col items-center text-center my-auto">
    <!-- Header Badge -->
    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-300 text-xs font-semibold uppercase tracking-wider mb-6">
      <i class="fa-solid fa-school"></i> Sistem Presensi & Rekap Kehadiran Sekolah
    </div>

    <!-- Title & Subtitle -->
    <h1 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight mb-4">
      Absensi<span class="text-indigo-400">Ku</span> Pro
    </h1>
    <p class="text-gray-300 text-base md:text-lg max-w-2xl mb-10 leading-relaxed">
      Platform pencatatan absensi siswa digital, permohonan izin/sakit dengan lampiran foto, approval wali kelas/admin, dan rekap kehadiran otomatis siap cetak.
    </p>

    <!-- Portal Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-2xl mb-10">
      <!-- Admin Portal -->
      <a href="admin/" class="group flex flex-col items-center p-8 bg-slate-900/80 hover:bg-slate-800/90 border border-slate-700/60 hover:border-indigo-500/60 rounded-2xl transition duration-300 shadow-xl hover:shadow-indigo-500/10">
        <div class="w-16 h-16 rounded-2xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition duration-300">
          <i class="fa-solid fa-user-shield"></i>
        </div>
        <h2 class="text-xl font-bold text-white mb-2">Portal Administrator</h2>
        <p class="text-xs text-gray-400 mb-6">Kelola data siswa, konfirmasi kehadiran, rekap laporan bulanan, dan ekspor data PDF/Excel.</p>
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-400 group-hover:text-indigo-300">
          Masuk Administrator <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
        </span>
      </a>

      <!-- Siswa Portal -->
      <a href="siswa/" class="group flex flex-col items-center p-8 bg-slate-900/80 hover:bg-slate-800/90 border border-slate-700/60 hover:border-sky-500/60 rounded-2xl transition duration-300 shadow-xl hover:shadow-sky-500/10">
        <div class="w-16 h-16 rounded-2xl bg-sky-600/20 text-sky-400 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition duration-300">
          <i class="fa-solid fa-user-graduate"></i>
        </div>
        <h2 class="text-xl font-bold text-white mb-2">Portal Siswa</h2>
        <p class="text-xs text-gray-400 mb-6">Presensi harian, ajukan izin atau sakit dengan upload foto surat keterangan, dan pantau riwayat absensi.</p>
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-sky-400 group-hover:text-sky-300">
          Masuk Siswa <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
        </span>
      </a>
    </div>

    <!-- Quick Info Credentials -->
    <div class="w-full max-w-xl bg-slate-900/60 border border-slate-800 rounded-xl p-4 text-xs text-gray-400 flex flex-col sm:flex-row justify-around gap-3">
      <div><span class="text-indigo-400 font-semibold">Admin:</span> admin / admin (atau admin123)</div>
      <div><span class="text-sky-400 font-semibold">Siswa:</span> NIS 2024002 / admin</div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-8 text-center text-xs text-gray-500 border-t border-slate-800/60 pt-4 w-full max-w-4xl">
    <p>&copy; <?= date('Y') ?> AbsensiKu — Official Digital Software. Power by <a href="https://fokuskonten.my.id" target="_blank" class="text-indigo-400 hover:underline">FokusKonten</a></p>
  </footer>
</body>
</html>
