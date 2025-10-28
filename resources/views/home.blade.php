@extends('layouts.app')

@section('title', 'Inicio | Glaucoma Control Center - Especialistas en Salud Visual')
@section('description', 'Centro de excelencia dedicado a tu visión. En Glaucoma Control Center, combinamos la más alta especialización médica con un trato humano y cercano para preservar tu salud visual.')
@section('keywords', 'glaucoma, oftalmología, salud visual, diagnóstico, prevención, tratamiento, presión intraocular, nervio óptico, campimetría, OCT, láser, cirugía, centro médico, especialistas')
@section('og_title', 'Glaucoma Control Center - Especialistas en Salud Visual')
@section('og_description', 'Centro de excelencia dedicado a tu visión. Combinamos la más alta especialización médica con un trato humano y cercano para preservar tu salud visual.')
@section('og_image', url('/img/glaucoma-control-center-logo.png'))
@section('twitter_title', 'Glaucoma Control Center - Especialistas en Salud Visual')
@section('twitter_description', 'Centro de excelencia dedicado a tu visión. Combinamos la más alta especialización médica con un trato humano y cercano para preservar tu salud visual.')
@section('twitter_image', url('/img/glaucoma-control-center-logo.png'))

@section('content')
    <x-home.hero-section />

    <x-home.about-us-section />

    <x-home.services-section />

    <x-home.gallery-section />

    <x-home.cta-section />
@endsection
