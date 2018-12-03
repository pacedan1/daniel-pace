{{-- This file should be included in resume --}}
{{-- Contains work Experiences --}}

{{-- Independent Studies --}}
@component('resume/inc/item')
    {{-- title --}}
    @slot('title', 'Independent Studies')  
    
    {{-- subtext --}}
    @slot('subtext')
        <span class="text-muted">Ongoing</span>
    @endslot
    
    {{-- main item content --}}
    <p>
        With a personal interest in the field and a career change in mind, over the past year I have  focused on learning and improving my web development skills. 
        My programming language of choice would be PHP with Laravel as a framework for web development.
    </p>
    {{-- <p>Find more information with links to my github on <a class="text-info" href="//www.daniel-pace.com">my website</a>. --}}
@endcomponent

{{-- WebDev --}}
@component('resume/inc/item')
    {{-- title --}}
    @slot('title', 'Website Development')  
    
    {{-- subtext --}}
    @slot('subtext')
        <span>ICE Malta</span>
        <span class="text-muted">Mar 2017 – Jul 2017</span>
    @endslot
    
    {{-- main item content --}}
    <ul class="list-unstyled">
        <li class="list-unstyled-item">Database Development</li>
        <li class="list-unstyled-item">PHP Foundations</li>
        <li class="list-unstyled-item">PHP Advanced</li>
    </ul>
@endcomponent

{{-- CCNA --}}
@component('resume/inc/item')
    {{-- title --}}
    @slot('title', 'Cisco Certified Network Associate (CCNA)')  
    
    {{-- subtext --}}
    @slot('subtext')
        <span>ICE Malta</span>
        <span class="text-muted">Nov 2014 – May 2015</span>
    @endslot
    
    {{-- main item content --}}
    <ul class="list-unstyled">
        <li class="list-unstyled-item">Introduction to Networks</li>
        <li class="list-unstyled-item">Scaling Networks</li>
        <li class="list-unstyled-item">Routing and Switching Essentials</li>
        <li class="list-unstyled-item">Connecting Networks</li>
    </ul>
@endcomponent

{{-- Degree --}}
@component('resume/inc/item')
    {{-- title --}}
    @slot('title', 'Bachelor of Engineering (Honors) in Electronics Engineering')  
    
    {{-- subtext --}}
    @slot('subtext')
        <span>MCAST Malta</span>
        <span class="text-muted">Sep 20010 – Jul 2014</span>
    @endslot
    
    {{-- main item content --}}
    <p>Awarded a 2<sup>nd</sup> Upper Class Honors certification.</p>
    <p>
        Wrote and implemented a thesis names "E-Tutor for Circuits Containing Voltage & Current Sources".
        The scope of the thesis was to design and code an e-Tutor that will facilitate how the Malta
        Qualifications Framework (MQF) levels 5 and 6 engineering students learn to analyse electronic
        circuits.
    </p>
@endcomponent

{{-- Degree --}}
@component('resume/inc/item')
    {{-- title --}}
    @slot('title', 'Advanced and Intermediate Level Certificates')  
    
    {{-- subtext --}}
    @slot('subtext')
        <span>G.F. Abela Junior College, Malta</span>
        <span class="text-muted">Sep 2008 – Jul 2010</span>
    @endslot
    
    {{-- main item content --}}
    <p>A-levels: Physics, Pure Mathematics<br>
    Intermediates: English, Computing, Systems of Knowledge</p>
@endcomponent
