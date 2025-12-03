@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <img src="{{ asset('frontend/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">
    <div class="container">
      <h2 data-aos="fade-up" data-aos-delay="100">Learning Today,<br>Leading Tomorrow</h2>
      <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
      <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
        <a href="{{ url('/courses') }}" class="btn-get-started">Get Started</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about section">
    <!-- about content -->
  </section>

  <!-- Counts Section -->
  <section id="counts" class="section counts light-background">
    <!-- counts content -->
  </section>

  <!-- Courses Section -->
  <section id="courses" class="courses section">
    <!-- courses content -->
  </section>

  <!-- Trainers Section -->
  <section id="trainers-index" class="section trainers-index">
    <!-- trainers content -->
  </section>
@endsection
