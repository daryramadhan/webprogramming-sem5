@extends('layout.master')

@section('nav-title', 'Dashboard Keuangan')
@section('content')
<div class="container h-100 align-items-center justfiy-content-center text-center mt-3 pt-3 bg-white">
    {{-- name --}}
    <h2 class="px-3 py-1 text-black">
        {{ $nama }}
    </h2>
    {{-- actual score --}}
    <h2 class="alert alert-info d-inline-block">
        Saldo kamu : {{ $saldo }}
    </h2>
    {{-- result --}}
    <h4 class="mt-4 px-3 py-4 text-black">
        Result
    </h4>
    <h1 class="px-3 py-1 text-white">

        @if ($saldo <= 500000)
        <div class="alert alert-danger d-inline-block">
            Wah, uang kamu udah mulai menipis nih!
        </div>

        @elseif ($saldo > 500000)
        <div class="alert alert-succes d-inline-block">
            Uang masih adaa, lanjut party!
        </div>

        @endif
    </h1>

    {{-- details --}}
    <h4 class="mt-4 py-4 px-3 text-black">
        Klik detail pengeluaranmu,
    </h4>
    <div class="container text-center mt-3 pt-3 bg-white">
        <?php $i=1; ?>
        @while ($i <= 5)
            <div class="alert alert-info d-inline-block">
                <p> Hari ke {{ $i }}</p>
            </div>
            <?php $i++ ?>
        @endwhile

    </div>
</div>
@endsection

@section('footer-title', 'Dashboard Keuangan')
