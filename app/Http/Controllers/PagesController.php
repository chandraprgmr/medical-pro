<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }

    public function notFound()
    {
        return Inertia::render('NotFound');
    }

    public function pasien()
    {
        return Inertia::render('Pasien');
    }

    public function manajemenDiagnosa()
    {
        return Inertia::render('ManajemenDiagnosa');
    }

    public function manajemenObat()
    {
        return Inertia::render('ManajemenObat');
    }
}
