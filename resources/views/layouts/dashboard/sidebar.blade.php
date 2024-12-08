<li class="sidebar-header">
    Pages
</li>

<li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.index') }}">
        <i class="align-middle" data-feather="sliders"></i> <span
            class="align-middle">Dashboard</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('alasan.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Alasan</span>
    </a>
</li>

