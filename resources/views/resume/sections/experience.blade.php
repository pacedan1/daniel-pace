{{-- This file should be included in resume --}}
{{-- Contains work Experiences --}}

{{-- Vodafone Malta --}}
@component('resume/inc/item')
  {{-- Title --}}
  @slot('title', 'Backpacking Trip')  
  
  {{-- Subtext --}}
  @slot('subtext')
    <span class="text-muted">Aug 2015 – May 2018</span>
  @endslot
  
  {{-- Main item Content --}}
  <p>
    Resigned from the position at Vodafone Malta to fulfill a long time goal of solo traveling around Europe and Morocco.
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
    As part of the IP & Transport Networks team we are responsible of four areas; IP core, Packet core,
    Access and Transport. My main focus was to manage and maintain the national and international
    transport network while also continually designing and performing improvements to keep the
    infrastructure up to date.
  </p>
  <p>
    Apart from the day to day operational tasks, I was also involved in the design and implementation of a
    new international optical transport network to replace the previous network.
  </p>
  <p>Key Responsibilities:</p>
  <ul>
    <li>Maintain an SDH network</li>
    <li>Maintain a DWDM & OTN networks</li>
    <li>Upkeep of submarine cable and equipment between Malta and Sicily</li>
    <li>Provision and sustain voice and IPLC clients</li>
    <li>Testing and measurements</li>
    <li>Network Monitoring</li>
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