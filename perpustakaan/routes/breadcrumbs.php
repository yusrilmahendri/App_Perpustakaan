<?php

  // Home dashboard
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// authors
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
});

Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Daftarkan Penulis', route('admin.author.create'));
});

Breadcrumbs::for('admin.author.edit', function ($trail, $author) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Edit Data Penulis', route('admin.author.edit', $author));
});

//books
Breadcrumbs::for('admin.book.index', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
});

Breadcrumbs::for('admin.book.create', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Daftarkan Buku', route('admin.author.create'));
});

Breadcrumbs::for('admin.book.edit', function ($trail, $buku) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Edit Data Buku', route('admin.book.edit', $buku));
});

//penulis
Breadcrumbs::for('admin.pengguna.index', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Pengguna', route('admin.pengguna.index'));
});

Breadcrumbs::for('admin.pengguna.edit', function ($trail, $pengguna) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Pengguna', route('admin.pengguna.index'));
    $trail->push('Edit Data Pengguna', route('admin.pengguna.edit', $pengguna));
});
