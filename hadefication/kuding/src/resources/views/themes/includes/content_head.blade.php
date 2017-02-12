<div class="content-head">
    <div class="container">
        <h3>{{ $title ?? 'Title here' }}</h3>

        <ul class="nav nav-tabs">
            @foreach ($menus as $key => $menu)
                <li class="{{ (isset($menu['active']) && $menu['active']) ? 'active' : '' }}">
                    <a href="{{ $menu['url'] ?? $menu->url ?? '#' }}">{{ $menu['text'] ?? $menu->text ?? 'Menu Item' }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
