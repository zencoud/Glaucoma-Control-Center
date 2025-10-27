@extends('layouts.app')

@section('title', 'Inicio | Glaucoma Control Center - Especialistas en Salud Visual')
@section('description', 'Centro de excelencia dedicado a tu visión. En Glaucoma Control Center, combinamos la más alta especialización médica con un trato humano y cercano para preservar tu salud visual.')

@section('content')
    <x-home.hero-section />

    <x-home.about-us-section />

    <x-home.services-section />

    <x-home.gallery-section />

    <x-home.cta-section />
@endsection
