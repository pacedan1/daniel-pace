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
        Constantly growing my knowledge in both technical and soft skills. \n 
        At the moment I am focusing on more softskills and Scrum, just finished the PSM and now interested in taking the PSPO. 
        Also attending an intensive leadership coaching program provided by the Agile coaches at GiG that focuses.
    </p>
    {{-- <p>Find more information with links to my github on <a class="text-info" href="//www.daniel-pace.com">my website</a>. --}}
@endcomponent

{{-- PSM --}}
@component('resume/inc/item')
    {{-- title --}}
    @slot('title', 'Professional Scrum Master (PSM)')  
    
    {{-- subtext --}}
    @slot('subtext')
        <span>scrum.org</span>
        <span class="text-muted">May 2021</span>
    @endslot
    
    {{-- main item content --}}
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
@endcomponent

{{-- Degree --}}
@component('resume/inc/item')
    {{-- title --}}
    @slot('title', 'Bachelor of Engineering (Honors) in Electronics Engineering')  
    
    {{-- subtext --}}
    @slot('subtext')
        <span>MCAST Malta</span>
        <span class="text-muted">Sep 2010 – Jul 2014</span>
    @endslot
    
    {{-- main item content --}}
    <p>Awarded a 2<sup>nd</sup> Upper Class Honors certification.</p>
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
