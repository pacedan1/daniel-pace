{{-- Item Container --}}
<div class="item">
    {{-- Item Title --}}
    <h3 class="item-title">{{$title}}</h3>
    {{-- If subtext available include --}}
    <?= isset($subtext)?"<p class='item-sub'>$subtext<p>":''; ?>
    {{-- Item Content --}}
    {{$slot}}    
</div>
