@extends('templates.resume')

{{-- Header --}}
@section('header')    
    <header class="header pt-4 p-md-4">

      {{-- Header tile --}}
      <section class="header-title">
        <h1>DANIEL PACE</h1>
        {{-- <p>Electronics Engineer</p> --}}
      </section>

      {{-- Header content --}}
      <section class="header-main row">
        @include('resume/sections/header')
      </section>
    </header>
@endsection

<!-- main -->
@section('main')
  {{-- Experience --}}
  <h2>Experience</h2>
  @include('resume/sections/experience')
  

  <!--   Education   -->
  <h2>Education</h2>
  @include('resume/sections/education')

@endsection

{{-- Side bar --}}
@section('side')
  {{-- Include Description --}}
  @include('resume/sections/description')
  
  {{-- Include Skills --}}
  @include('resume/sections/skills')

  {{-- Include Languages --}}
  @include('resume/sections/languages')

  {{-- Include Personal Interests --}}
  @include('resume/sections/interests')
  
@endsection