<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="/wordpress/assets/fontawesome/css/fontawesome.css" />
  <link rel="stylesheet" href="/wordpress/assets/fontawesome/css/brands.css" />
  <link rel="stylesheet" href="/wordpress/assets/fontawesome/css/solid.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav>
    <div class="nav">
      <div class="hamburger-menu-container">
        <div class="hamburger-menu">
          <div></div>
        </div>
      </div>

      <div class="logo-container">
        <a href="/smkn1kotabekasi" class="logo">
          <img src="/wordpress/image/smkn1-logo-transparant.png" alt="" /> smkn negeri 1<br />kota
          bekasi
        </a>
      </div>

      <div class="nav-btn">
        <div class="nav-links">
          <ul>
            <li class="nav-link">
              <a href="index.html">Beranda</a>
            </li>
            <li class="nav-link">
              <a href="#">Profil</a>
              <div class="dropdown">
                <ul>
                  <li class="dropdown-link">
                    <a href="#">Tentang Sekolah</a>
                    <div class="dropdown second">
                      <ul>
                        <li class="dropdown-link">
                          <a href="code/tentang-sekolah.html">Tentang Sekolah</a>
                        </li>
                        <li class="dropdown-link">
                          <a
                            href="code/tentang-sekolah.html#riwayat-kepala-sekolah">Riwayat Kepala Sekolah</a>
                        </li>
                        <li class="dropdown-link">
                          <a
                            href="code/tentang-sekolah.html#struktur-organisasi-sekolah">Struktur Organisasi</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Kompetensi Keahlian</a>
                    <div class="dropdown second">
                      <ul>
                        <li class="dropdown-link">
                          <a
                            href="code/jurusan-page/teknik-komputer-dan-jaringan.html">Teknik Komputer Dan Jaringan</a>
                        </li>
                        <li class="dropdown-link">
                          <a
                            href="code/jurusan-page/desain-komunikasi-visual.html">Desain Komunikasi Visual</a>
                        </li>
                        <li class="dropdown-link">
                          <a
                            href="code/jurusan-page/pengembangan-perangkat-lunak-dan-game.html">Rekayasa Perangkat Lunak</a>
                        </li>
                        <li class="dropdown-link">
                          <a
                            href="code/jurusan-page/akuntansi-dan-keuangan-lembaga.html">Akuntansi Dan Keuangan</a>
                        </li>
                        <li class="dropdown-link">
                          <a
                            href="code/jurusan-page/desain-dan-produksi-busana.html">Busana Butik</a>
                        </li>
                        <li class="dropdown-link">
                          <a
                            href="code/jurusan-page/teknik-kendaraan-ringan.html">Teknik Kendaraan Ringan</a>
                        </li>
                        <li class="dropdown-link">
                          <a href="code/jurusan-page/teknik-pemesinan.html">Teknik Permesinan</a>
                        </li>
                        <li class="dropdown-link">
                          <a href="code/jurusan-page/teknik-pengelasan.html">Teknik Pengelasan</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Fasilitas Sekolah</a>
                    <div class="dropdown second">
                      <ul>
                        <li class="dropdown-link">
                          <a href="#">Fasilitas Kompetensi Keahlian</a>
                          <div class="dropdown second">
                            <ul>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Teknik Komputer Dan Jaringan</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Desain Komunikasi Visual</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Rekayasa Perangkat Lunak</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Akuntansi Dan Keuangan</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Busana Butik</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Teknik Kendaraan Ringan</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Teknik Permesinan</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="code/fasilitas-sekolah.html">Fasilitas Teknik Pengelasan</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="dropdown-link">
                          <a href="#">Daerah Ruangan</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Informasi Sekolah</a>
                    <div class="dropdown second">
                      <ul>
                        <li class="dropdown-link">
                          <a href="code/agenda-pengumuman.html">Pengumuman & Agenda</a>
                        </li>
                        <li class="dropdown-link">
                          <a href="code/article.html">Berita Sekolah</a>
                        </li>
                        <li class="dropdown-link">
                          <a href="code/prestasi.html">Prestasi</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <div class="arrow"></div>
                </ul>
              </div>
            </li>
            <li class="nav-link">
              <a href="#">Progam Sekolah</a>
              <div class="dropdown">
                <ul>
                  <li class="dropdown-link">
                    <a href="code/program-sekolah.html">Program Indonesia Pintar</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="code/program-sekolah.html#kerjasama hubin">Kerjasama Hubungan Industri</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="code/eskul.html">Ekstrakulikuler</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Bursa Kerja Khusus</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-link">
              <a href="#">Manajemen Sekolah</a>
              <div class="dropdown">
                <ul>
                  <li class="dropdown-link">
                    <a href="code/tenaga-pendidikan.html">Tenaga Pendidik</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="code/tenaga-pendidikan.html">Tenaga Kependidikan</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-link">
              <a href="#">Akademik</a>
              <div class="dropdown">
                <ul>
                  <li class="dropdown-link">
                    <a href="#">Statistik Peserta Didik</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Rombongan Belajar</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-link">
              <a href="code/galery.html">Galery</a>
            </li>
            <li class="nav-link">
              <a href="#">PPDB 2024</a>
              <div class="dropdown">
                <ul>
                  <li class="dropdown-link">
                    <a href="https://ppdb.smkn1kotabekasi.sch.id/">Portal Informasi PPDB</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="https://ppdb.disdik.jabarprov.go.id/">PPDB Disdik Jabar</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-link">
              <a href="code/blud.html">Blud</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>