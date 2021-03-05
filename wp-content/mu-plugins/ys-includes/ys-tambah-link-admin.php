<?php
/*
 * Menambah menu baru di dashboard admin WordPress
 */

// Hubungkan action hook 'admin_menu', jalankan function bernama 'pp_Tambah_Link_Admin()'
add_action( 'admin_menu', 'ys_tambah_link_admin' );
 
// Menambahkan link menu di dashboard admin WordPress
function ys_tambah_link_admin()
{
    add_menu_page(
        'Halaman Pertama', // Judul dari halaman
        'yellowsweet', // Tulisan yang ditampilkan pada menu
        'manage_options', // Persyaratan untuk dapat melihat link
        'my-plugin-page', // slug dari file untuk menampilkan halaman ketika menu link diklik.
        'tampil'
       );
}

function tampil()
{
 require_once 'mfp-first-acp-page.php';
}