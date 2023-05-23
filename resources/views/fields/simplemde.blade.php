@component($typeForm, get_defined_vars())
    <div class="simplemde-wrapper" data-controller="simplemde"
         data-simplemde-text-value='@json($attributes['value'])'
         data-simplemde-controls-value='@json($attributes['controls'])'>
        <textarea {{ $attributes }}></textarea>
        @if (str_contains($attributes['controls'],'upload'))
            <input class="d-none upload" type="file" data-action="simplemde#upload">
        @endif

    </div>
@endcomponent