<!-- Settings Menu -->
<div class="settings-menu-links">
    <ul class="nav nav-tabs menu-tabs">
        <li class="nav-item {{ Request::routeIs('settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('settings') }}">General Settings</a>
        </li>
        <li class="nav-item {{ Request::routeIs('localization') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('localization') }}">Localization</a>
        </li>
        {{-- <li class="nav-item {{ Request::is('payment-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('payment-settings') }}">Payment Settings</a>
        </li> --}}
        <li class="nav-item {{ Request::routeIs('emailsettings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('emailsettings') }}">Email Settings</a>
        </li>
        <li class="nav-item {{ Request::routeIs('academic_sessions.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('academic_sessions.index') }}">Academic Sessions</a>
        </li>
        <li class="nav-item {{ Request::routeIs('social_links') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('social_links') }}">Social Links</a>
        </li>
        <li class="nav-item {{ Request::routeIs('seo_settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('seo_settings') }}">SEO Settings</a>
        </li>
    </ul>
</div>
<!-- Settings Menu -->
