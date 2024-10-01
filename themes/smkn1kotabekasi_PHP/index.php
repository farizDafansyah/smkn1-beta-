<?php
$agenda = new WP_Query(array(
    'category_name' => 'agenda',
    'posts_per_page' => 6,
));
$pengumuman = new WP_Query(array(
    'category_name' => 'pengumuman',
    'posts_per_page' => 6,
));
$artikel = new WP_Query(array(
    'category_name' => 'artikel',
    'posts_per_page' => 6,
));
$prestasi = new WP_Query(array(
    'category_name' => 'prestasi',
    'posts_per_page' => 6,
));

get_header();
?>

<div class="container beranda">
    <main class="hero">
        <div class="about_smkn1">
            <div class="text">
                <h2 class="title">
                    SMK Negeri 1 Kota Bekasi <span>Cerdas</span> Mengembangkan
                    Teknologi!
                </h2>
                <p>
                    SMK Negeri 1 Kota Bekasi merupakan sekolah yang ditunjuk oleh
                    Direktorat Pembinaan SMK (PSMK) sebagai Rintisan Sekolah Bertaraf
                    Internasional untuk seluruh kompetensi keahlian sejak tahun 2008.
                </p>
                <div class="info">
                    <div>
                        <div class="number">7+</div>
                        <div class="detail">Competition Programs</div>
                    </div>
                    <div>
                        <div class="number">10+</div>
                        <div class="detail">Extraculicular Programs</div>
                    </div>
                    <div>
                        <div class="number">20+</div>
                        <div class="detail">Industry Colaborations</div>
                    </div>
                </div>
            </div>

            <!-- SLIDER VER 1 -->
            <!-- 
            <div class="company-provile">
            <img class="background" src="/wordpress/image/Blend Group 1.png" alt="" />
            <div class="carousel-container">
              <div class="carousel-item">
                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/BgaCTVAHmco?si=5leR8JAv_dAdeBPw"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                ></iframe>
                <div class="text">Our Company profile</div>
              </div>
              <div class="carousel-item">
                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/VHijz4X2Pfg?si=CrLj3W057VO-Lugj"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                ></iframe>
                <div class="text">Our Company Profile</div>
              </div>
              <div class="carousel-item">
                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/DYzRuBMb8Xo?si=owm-cE9noRtnFRxp"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                ></iframe>
                <div class="text">Our Company Profile</div>
              </div>
            </div>
            <button class="prevBtn">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="nextBtn">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div> 
          -->

            <div class="carousel">
                <div class="carousel-container">
                    <div class="carousel-item">
                        <div class="image">
                            <img src="/wordpress/image/siswa.png" alt="">
                        </div>
                        <div class="text-slider">
                            <div class="title">BERITA TERBARU</div>
                            <div class="desc">SMKN 1 Kota Bekasi meraih top 10 SMKN Jawa Barat dengan nilai ujian nasional terbaik.</div>
                            <a href="#">See details <img src="/wordpress/image/arrowmiring.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image">
                            <img src="/wordpress/image/siswa.png" alt="">
                        </div>
                        <div class="text-slider">
                            <div class="title">BERITA TERBARU</div>
                            <div class="desc">SMKN 1 Kota Bekasi meraih top 10 SMKN Jawa Barat dengan nilai ujian nasional terbaik.</div>
                            <a href="#">See details <img src="/wordpress/image/arrowmiring.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image">
                            <img src="/wordpress/image/siswa.png" alt="">
                        </div>
                        <div class="text-slider">
                            <div class="title">BERITA TERBARU</div>
                            <div class="desc">SMKN 1 Kota Bekasi meraih top 10 SMKN Jawa Barat dengan nilai ujian nasional terbaik.</div>
                            <a href="#">See details <img src="/wordpress/image/arrowmiring.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="change-carousel">
                    <div class="garis-carousel"></div>
                    <div class="btn">
                        <button class="prevBtn">
                            <img src="/wordpress/image/arrowlong.svg" alt="">
                        </button>
                        <button class="nextBtn">
                            <img src="/wordpress/image/arrowlong.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>


        </div>
        <div class="logo-company">
            <img src="/wordpress/image/acer-logo.png" alt="" />
            <img src="/wordpress/image/bank btn logo.png" alt="" />
            <img src="/wordpress/image/logo bank dki.png" alt="" />
            <img src="/wordpress/image/logo.png" alt="" />
        </div>
    </main>

    <main class="background-warna3">
        <div class="agenda category">
            <div class="title">
                <div class="text">Agenda</div>
                <a href="code/agenda-pengumuman.html#agenda" class="view">View More</a>
            </div>
            <div class="contents">

                <?php
                if ($agenda->have_posts()) :
                    while ($agenda->have_posts()) : $agenda->the_post(); ?>
                        <a href=<?= the_permalink() ?> class="content">
                            <div class="title">
                                <?= the_title() ?>
                            </div>
                            <div class="date">
                                <i class="fa-regular fa-calendar-days"></i> <?= get_the_date() ?>
                            </div>
                        </a>
                <?php endwhile;
                else :
                    echo '<p>No posts found in the agenda category.</p>';
                endif;

                // Reset query
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="pengumuman category">
            <div class="title">
                <div class="text">Pengumuman</div>
                <a href="code/agenda-pengumuman.html#pengumuman" class="view">View More</a>
            </div>
            <div class="contents">
                <?php
                if ($pengumuman->have_posts()) :
                    while ($pengumuman->have_posts()) : $pengumuman->the_post(); ?>
                        <a href=<?= the_permalink() ?> class="content">
                            <div class="image zoom">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="text">
                                <p class="title">
                                    <?= the_title() ?>
                                </p>
                                <p class="date">
                                    <i class="fa-regular fa-calendar-days"></i><?= get_the_date() ?>
                                </p>
                            </div>
                        </a>
                <?php endwhile;
                else :
                    echo '<p>No posts found in the pengumuman$pengumuman category.</p>';
                endif;

                // Reset query
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </main>

    <main>
        <div class="artikel category">
            <div class="title">
                <div class="text">Jelajahi semua <br />Artikel sekolah kami</div>
                <a href="code/article.html" class="view">view more</a>
            </div>
            <div class="contents">
                <?php
                if ($artikel->have_posts()) :
                    while ($artikel->have_posts()) : $artikel->the_post(); ?>
                        <a href=<?= the_permalink() ?> class="content">
                            <div class="image">
                                <?php the_post_thumbnail();?>
                            </div>
                            <div class="text">
                                <p class="text-category">School News</p>
                                <p class="desc"> <?= the_title() ?></p>
                                <p class="date">
                                    <i class="fa-regular fa-calendar-days"></i><?= get_the_date() ?>
                                </p>
                            </div>
                        </a>
                <?php endwhile;
                else :
                    echo '<p>No posts found in the artikel category.</p>';
                endif;

                // Reset query
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </main>

    <main class="background-warna3">
        <div class="sambutan category">
            <div class="title">
                <div class="text">sambutan <br />kepala sekolah</div>
                <a href="code/tentang-sekolah.html#sambutan" class="view">view more</a>
            </div>
            <div class="content">
                <img src="/wordpress/image/Pak-Boan-rev.png" alt="" />
                <div class="text">
                    <p class="title">Assalamualaikum wr. wb.</p>
                    <p>
                        Kita panjatkan puji syukur ke hadirat Allah SWT beserta Nabi
                        Muhammad SAW beserta sahabat-sahabatnya yang telah memberikan
                        karunia dan kenikmatan yang tak terhitung banyaknya.Bersamaan
                        dengan datangnya tahun ajaran 2022/2023, Website SMK Negeri 1
                        Kota Bekasi hadir dengan wajah yang baru.
                    </p>
                    <p>
                        Pergantian web ini dirasa sangat penting artinya bagi SMK Negeri
                        1 Kota Bekasi, karena website adalah halaman muka dan sumber
                        informasi dari sebuah institusi. Seiring perkembangan jaman dan
                        kemajuan teknologi IT yang berkembang dengan cepat maka SMK
                        Negeri 1 Kota Bekasi harus selalu mampu mengikutinya.
                    </p>
                    <p>
                        Akhir kata tak lupa saya ucapkan terima kasih kepada pengelola
                        web yang telah bekerja keras memperbaiki web sekolah, serta
                        seluruh guru, karyawan dan siswa SMK Negeri 1 Kota Bekasi
                        sehingga website sekolah menjadi lebih berguna dan bermanfaat.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <main>
        <div class="jurusan category">
            <div class="title tengah">
                <div class="text">
                    temukan perjalananmu <br />dengan program kompetensi kami.
                </div>
            </div>
            <div class="contents">
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img src="/wordpress/image/ilustrasi jurusan/akutansi.jpg" alt="" />
                    </div>
                    <div class="title">akuntansi dan keuangan lembaga</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img
                            src="/wordpress/image/ilustrasi jurusan/busana butik.jpg"
                            alt="" />
                    </div>
                    <div class="title">Desain & Produksi Busana</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img
                            src="/wordpress/image/ilustrasi jurusan/desain komunikasi visual.jpg"
                            alt="" />
                    </div>
                    <div class="title">Desain Komunikasi Visual</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img
                            src="/wordpress/image/ilustrasi jurusan/rekayasa perangkat lunak.jpg"
                            alt="" />
                    </div>
                    <div class="title">Pengembangan Perangkat Lunak & Game</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img
                            src="/wordpress/image/ilustrasi jurusan/teknik kendaraan ringan.jpg"
                            alt="" />
                    </div>
                    <div class="title">Teknik Kendaraan Ringan</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img
                            src="/wordpress/image/ilustrasi jurusan/teknik komputer jaringan.jpg"
                            alt="" />
                    </div>
                    <div class="title">Teknik Komputer & Jaringan</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img
                            src="/wordpress/image/ilustrasi jurusan//teknik pemesinan.jpg"
                            alt="" />
                    </div>
                    <div class="title">Teknik Pemesinan</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
                <a href="code/profil-jurusan.html" class="content">
                    <div class="image zoom gelap">
                        <img
                            src="/wordpress/image/ilustrasi jurusan/teknik pengelasan.jpg"
                            alt="" />
                    </div>
                    <div class="title">Teknik Pengelasan</div>
                    <div class="info">
                        <div class="desc">
                            <i class="fa-solid fa-users"></i>216 students
                        </div>
                        <div class="desc">
                            <i class="fa-solid fa-computer"></i>2 practice labs
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <main class="background-warna2">
        <div class="prestasi category">
            <div class="title">
                <div class="text">Prestasi</div>
                <a href="code/prestasi.html" class="view">view more</a>
            </div>
            <div class="contents">
                <?php
                if ($artikel->have_posts()) :
                    while ($artikel->have_posts()) : $artikel->the_post(); ?>
                        <a href=<?= the_permalink() ?> class="content carousel-item-auto">
                            <div class="text">
                                <div class="juara">juara <b>1</b></div>
                                <div class="tahun-lomba">
                                    lomba kompetensi siswa <b>2023</b>
                                </div>
                                <div class="nama-lomba">
                                    web Technology ai engineering asdf robotic
                                </div>
                                <div class="penyelenggara">by kemendikbud jabar</div>
                            </div>
                            <div class="image zoom">
                                <?= the_post_thumbnail() ?>
                                <div class="peserta-lomba">dicky asqaelany ibnul hakim</div>
                            </div>
                        </a>
                <?php endwhile;
                else :
                    echo '<p>No posts found in the artikel category.</p>';
                endif;

                // Reset query
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </main>

    <main>
        <div class="tenaga-kependidikan category">
            <div class="title">
                <div class="text">Tenaga pendidik</div>
                <a href="code/tenaga-pendidikan.html" class="view">view more</a>
            </div>
            <div class="contents">
                <a href="code/tenaga-pendidikan.html" class="content hide">
                    <div class="image shadow">
                        <img
                            src="/wordpress/image/FOTO GURU DAN STAF/Abdul Salim, S.jpg"
                            alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Abdul Salim. S.Ip, M.Pd</div>
                        <div class="profesi">PPKN Teacher.</div>
                    </div>
                </a>
                <a href="code/tenaga-pendidikan.html" class="content">
                    <div class="image shadow">
                        <img
                            src="/wordpress/image/FOTO GURU DAN STAF/Agus Wibowo, S(1).jpg"
                            alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Agus Wibowo M.Kom</div>
                        <div class="profesi">RPL Teacher.</div>
                    </div>
                </a>
                <a href="code/tenaga-pendidikan.html" class="content">
                    <div class="image shadow">
                        <img
                            src="/wordpress/image/FOTO GURU DAN STAF/Dani Alfizan, S.T, M.jpg"
                            alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Dani Alfizan, S.T, M.Pd</div>
                        <div class="profesi">Head of Kesiswaan.</div>
                    </div>
                </a>
                <a href="code/tenaga-pendidikan.html" class="content">
                    <div class="image shadow">
                        <img
                            src="/wordpress/image/FOTO GURU DAN STAF/Desiana Sari Dewi, S(1).jpg"
                            alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Desiana Sari Dewi, S.Pd</div>
                        <div class="profesi">TKJ Teacher.</div>
                    </div>
                </a>
            </div>

            <div class="title">
                <div class="text">Tenaga Kependidikan</div>
                <a href="code/tenaga-pendidikan.html" class="view">view more</a>
            </div>
            <div class="contents">
                <a href="code/tenaga-pendidikan.html" class="content hide">
                    <div class="image shadow">
                        <img
                            src="/wordpress/image/FOTO GURU DAN STAF/Abdul Rahman.jpg"
                            alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Abdul Rahman</div>
                        <div class="profesi">Head of ICT.</div>
                    </div>
                </a>
                <a href="code/tenaga-pendidikan.html" class="content">
                    <div class="image shadow">
                        <img src="/wordpress/image/FOTO GURU DAN STAF/Hendi, A.jpg" alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Hendi Santoso</div>
                        <div class="profesi">Curiculum Staff.</div>
                    </div>
                </a>
                <a href="code/tenaga-pendidikan.html" class="content">
                    <div class="image shadow">
                        <img src="/wordpress/image/FOTO GURU DAN STAF/Suwardi_.jpg" alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Suwardi</div>
                        <div class="profesi">Security.</div>
                    </div>
                </a>
                <a href="code/tenaga-pendidikan.html" class="content">
                    <div class="image shadow">
                        <img
                            src="/wordpress/image/FOTO GURU DAN STAF/Deden Deendi Shuryawan(1).jpg"
                            alt="" />
                    </div>
                    <div class="text">
                        <div class="nama">Deden Deendi Shuryawan</div>
                        <div class="profesi">Curiculum Staff.</div>
                    </div>
                </a>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>