@php
    $nama = "Budi";
    $nama = 60;
@endphp

{{--  jika nilai lebih dari sama dengan 60 maka siswa lulus
    jika nilai lebih dari sama dengan 60 maka siswa lulus --}}

    @if($nilai >= 60)
        @php
            $ket = "lulus";
        @endphp
    @else
        @php
            $ket = "Tidak Lulus";
        @endphp
    @endif

siswa yang bernama {{$nama}}
<br> dengan nilai {{$nilai}}
<br> Dinyatakan {{$ket}}
