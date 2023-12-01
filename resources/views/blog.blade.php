@extends('layout.master')

@section('judul')
Halaman Utama


<header>
<h1>Selamat datang di Blog MAKN Ende</h1>
<nav>
    <p>Ini adalah halaman beranda blog sederhana.</p>
<a href="/blog">Beranda</a> 
<a href="/blog/tentang">Tentang</a>
<a href="https://makn-ende.sch.id/">Kontak</a>
</nav>
</header>

<h3>@yield('title')</h3>
<br>
<main>
@yield('content')
</main>
<footer>
<p>&copy; <a href="https://makn-ende.sch.id/">www.maknende.sch.id</a> </p>
</footer>
</body>

</html>