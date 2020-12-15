<li class="{{route('menu', $menu->slug ) ? "active" : "" }}"> <a href="{{ $child_menu->slug }}" >{{ $child_menu->name }}</a> 
@if ($child_menu->menus)
    <ul class="{{ ($child_menu->menus)? 'submenu': '' }}">
        @foreach ($child_menu->childrenMenus as $childMenu)
        {{ 'hello world' }}
            @include('websites.child_menu', ['child_menu' => $childMenu])
        @endforeach
   </ul>
   @else
   {{ die() }}
@endif
</li>