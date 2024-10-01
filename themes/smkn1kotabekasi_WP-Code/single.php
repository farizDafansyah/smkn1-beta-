<?php
get_header();

// Ambil kategori utama dari post
$categories = get_the_category();
$category_slug = !empty($categories) ? $categories[0]->name : '';

// Daftar kategori yang akan memicu template part khusus
$customDetailPostingan = array('artikel'); // masukan nama yang ada di folder detail-postingan/

// Tampilkan layout berdasarkan kategori

if (in_array($category_slug, $customDetailPostingan)) {
  get_template_part('detail-postingan/' . $category_slug);
} else {
  // Jika kategori tidak valid, tampilkan template default
  get_template_part('detail-postingan/' . 'default');
}

get_footer();
?>