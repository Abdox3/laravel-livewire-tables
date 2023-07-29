@aware(['component'])

<div @class([
        'flex-col' => $component->isTailwind(),
        'd-flex flex-column ' => ($component->isBootstrap()),
    ])
>
&nbsp
    {{ $slot }}
</div>
