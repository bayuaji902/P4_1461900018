<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\tugaskegiatan4Controller@tugaskegiatan4')->name('tugaskegiatan4');
Route::get('export-excel', '\App\Http\Controllers\tugaskegiatan4Controller@export_excel')->name('tugas.export_excel');
