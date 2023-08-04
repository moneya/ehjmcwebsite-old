@if(!isset($innerLoop))
<ul class="navbar-nav ml-auto text-center">


@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $isActive = null;
        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        
        // Check if link is current
        if(url($item->link()) == url()->current()){
            $isActive = 'active';
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="nav-link dropdown-toggle {{ $isActive }}" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false"';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'nav-item dropdown active';
            }else{
                $listItemClass = 'nav-item dropdown';
            }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

    <li class="nav-item {{ $listItemClass }} ">
        <a  @if($originalItem->children->isEmpty()) class="nav-link {{ $isActive }}" @else  class="nav-link dropdown-toggle {{ $isActive }}"  @endif href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! isset($linkAttributes) ? $linkAttributes : '' !!}>
            {!! $icon !!}
           {{ $item->title }}
            {!! $caret !!}
        </a>
        @if(!$originalItem->children->isEmpty())
        @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
    </li>
@endforeach

</ul>


@else
<div class="dropdown-menu dropdown-menu-center  text-center" aria-labelledby="navbarDropdown">
@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $isActive = null;
        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        
        // Check if link is current
        if(url($item->link()) == url()->current()){
            $isActive = 'active';
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'nav-item dropdown active';
            }else{
                $listItemClass = 'nav-item dropdown';
            }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

        <a class="dropdown-item {{ $isActive }}" href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! isset($linkAttributes) ? $linkAttributes : '' !!}>
            {!! $icon !!}
           {{ $item->title }}
            {!! $caret !!}
        </a>
        @if(!$originalItem->children->isEmpty())
        @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif

@endforeach
</div>
@endif
