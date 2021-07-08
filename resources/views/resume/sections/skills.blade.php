{{-- Skills to be included in resume --}}

{{-- item wrap --}}
<section class="item">
    {{-- title --}}
    <h2 class="item-tile">Skills</h2>
    <small class="text-muted d-print-none">*Bars indicate confidence level for a given skill.</small>          

    {{-- Programming Languages --}}
    <div class="skillset">
        {{-- main --}}
        <div class="skillset-container" style="display: block;">
            @include('inc/progressbar', ['title' => 'C# Microsoft ASP.NET', 'val' => '90'])
            @include('inc/progressbar', ['title' => '.Net Core', 'val' => '90'])
            @include('inc/progressbar', ['title' => 'Angular', 'val' => '80'])
            @include('inc/progressbar', ['title' => 'Microservice Architecture', 'val' => '40'])
            @include('inc/progressbar', ['title' => 'Docker & Kubernetes', 'val' => '40'])
            @include('inc/progressbar', ['title' => 'MySQL and NoSql Databases', 'val' => '60'])
            @include('inc/progressbar', ['title' => 'Scrum Master', 'val' => '60'])
        </div>
    </div>
</section>