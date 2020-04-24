<div class="editor-js-block">
    <div class="editor-js-image {{ $classes }}">
        <figure>
            <img src="{{ $file['url'] }}" alt="{{ $caption }}">
            @if (!empty($caption))
                <figcaption>{{ $caption }}</figcaption>
            @endif
        </figure>
    </div>
</div>
