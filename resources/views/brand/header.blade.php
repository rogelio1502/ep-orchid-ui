@push('head')
    <link
        href="/favicon.ico"
        id="favicon"
        rel="icon"
    >
@endpush


<div class="h4 fw-light d-flex align-items-center justify-content-center">
    <x-orchid-icon path="orchid" width="1.3em" height="1.3em"/>

    <p class="my-0" style="margin-left: 10px">
        <span class="d-sm-block">
            {{env('APP_NAME')}}
        </span>
    </p>

</div>
