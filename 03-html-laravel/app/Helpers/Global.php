<?php
use App\Models\Pengguna;
use App\Models\Inventaris;

function totalPengguna()
{
    return Pengguna::count();
}

function totalInventaris()
{
    return Inventaris::count();
}