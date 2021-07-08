{{-- This file should be included in resume --}}
{{-- Contains work Experiences --}}

{{-- Vodafone Malta --}}
@component('resume/inc/item')
  {{-- Title --}}
  @slot('title', 'Software Developer')  
  
  {{-- Subtext --}}
  @slot('subtext')
    <span>Gaming Innovation Group (GiG)</span>
    <span class="text-muted">Feb 2019 – Present</span>
  @endslot
  
  {{-- Main item Content --}}
  <p>
  Joined GiG to work on the early stages of GiG Logic, 
        I had to opportunity to advance my software development skills while the product grew and evolved. 
        <br/>
        Being part of a small team enabled me to work on all aspects of the product; 
        working on backend and frontend development, the architecture of the product, DevOps. 
        Also got the opportunity to be part in product discussions and decisions and work with clients to support and educate them on how to use Logic.
  </p>
  <p>Key Responsibilities:</p>
  <ul>
    <li>Backend and Frontend Development</li>
    <li>QA and testing of the product</li>
    <li>Build and Release pipelines (CI/CD)</li>
    <li>Design and build a microservice architecture</li>
    <li>Maintain and improve the product by cautiously removing technical debt</li>
    <li>Scrum Master - all members of the team play the role of a scrum master</li>
    <li>Know the product as a user to be able to help and educate users of the product</li>
  </ul>

@endcomponent

{{-- Backpacking Trip --}}
@component('resume/inc/item')
  {{-- Title --}}
  @slot('title', 'Backpacking Trip')  
  
  {{-- Subtext --}}
  @slot('subtext')
    <span class="text-muted">Apr 2018 – Oct 2018</span>
  @endslot
  
  {{-- Main item Content --}}
  <p>
  Took the opportunity to solo travel between jobs
  </p>
@endcomponent

{{-- Vodafone Malta --}}
@component('resume/inc/item')
  {{-- Title --}}
  @slot('title', 'IP & Transport Network Engineer')  
  
  {{-- Subtext --}}
  @slot('subtext')
    <span>Vodafone Malta</span>
    <span class="text-muted">Aug 2015 – May 2018</span>
  @endslot
  
  {{-- Main item Content --}}
  <p>
    Forming part of the Transport subteam in the IP & Transport Networks, my main focus was to 
    manage and maintain the national and international transport network while also continually 
    designing and performing improvements to keep the infrastructure up to date.
  </p>
  <p>Key Responsibilities:</p>
  <ul>
    <li>Maintain an SDH, DWDM & OTN networks</li>
    <li>Upkeep of submarine cable and equipment between Malta and Sicily</li>
    <li>Provision and sustain voice and IPLC clients</li>
    <li>Testing and measurements</li>
    <li>Aid in other areas of the team where necessary</li>
  </ul>

@endcomponent

{{-- ST MicroElectronics --}}
@component('resume/inc/item')
  {{-- title --}}
  @slot('title', 'Process Engineer')  

  {{-- subtext --}}
  @slot('subtext')
    <span>ST Microelectronics</span>
    <span class="text-muted">July 2014 – Aug 2015</span>
  @endslot

  {{-- main item content --}}
  <p>
    Forming part of the front-end production line, my main responsability was the 
    wire bonding process. As the first full-time job after graduating, this position 
    was the first opportunity to apply my skills as an engineer and it helped me learn 
    and grow in the professional world. 
  </p>
@endcomponent