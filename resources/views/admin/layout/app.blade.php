@include('admin.layout.top')
{{-- include untuk memanggil dan menggunakan code dari
    file lain --}}
@include('admin.layout.menu')
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
    {{-- ini buat isi content halaman --}}
</div>
</main>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            {{-- nama --}}
            @yield('content')
</div>
</div>

@include('admin.layout.bottom')