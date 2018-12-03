{{-- Skills to be included in resume --}}

{{-- item wrap --}}
<section class="item">
    {{-- title --}}
    <h2 class="item-tile">Skills</h2>
    <small class="text-muted d-print-none">*Bars indicate confidence level for a given skill.</small>          

    {{-- Programming Languages --}}
    <div class="skillset">
        {{-- title --}}
        <h3 class="skillset-title">Programming Languages</h3>
        {{-- main --}}
        <div class="skillset-container" style="display: block;">
            @include('inc/progressbar', ['title' => 'PHP', 'val' => '90'])
            @include('inc/progressbar', ['title' => 'HTML5', 'val' => '80'])
            @include('inc/progressbar', ['title' => 'CSS & SASS', 'val' => '65'])
            @include('inc/progressbar', ['title' => 'MySQL', 'val' => '60'])
            @include('inc/progressbar', ['title' => 'Python', 'val' => '60'])
            @include('inc/progressbar', ['title' => 'JavaScript', 'val' => '40'])
        </div>
    </div>

    {{-- Frameworks --}}
    <div class="skillset">
        {{-- title --}}
        <h3 class="skillset-title">Frameworks</h3>
        {{-- main --}}
        <div class="skillset-container" style="display: block;">
            @include('inc/progressbar', ['title' => 'Laravel', 'val' => '80'])
            @include('inc/progressbar', ['title' => 'Bootstrap', 'val' => '75'])
            @include('inc/progressbar', ['title' => 'Vue.js', 'val' => '40'])
        </div>          
    </div>          

    {{-- OS & Servers --}}
    <div class="skillset">
        {{-- title --}}
        <h3 class="skillset-title">OS & Servers</h3>
        {{-- main --}}
        <div class="skillset-container" style="display: block;">
            @include('inc/progressbar', ['title' => 'Windows', 'val' => '80'])
            @include('inc/progressbar', ['title' => 'Linux', 'val' => '50'])
            @include('inc/progressbar', ['title' => 'Bash', 'val' => '50'])
        </div>
    </div>
</section>