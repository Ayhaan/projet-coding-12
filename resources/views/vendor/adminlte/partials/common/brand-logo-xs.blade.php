@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

<a href="{{ $dashboard_url }}"
    @if(config('adminlte.layout_topnav') || View::getSection('layout_topnav'))
        class="navbar-brand {{ config('adminlte.classes_brand') }}"
    @else
        class="brand-link {{ config('adminlte.classes_brand') }}"
    @endif>

    {{-- Small brand logo --}}
    {{-- <img src="public/assets/img/logo.png"
         alt="{{ config('adminlte.logo_img_alt', 'AdminLTE') }}"
         class="{{ config('adminlte.logo_img_class', 'brand-image img-circle elevation-3') }}"
         style="opacity:.8"> --}}
    <img src="assets/ico/apple-touch-icon-57-precomposed.png" 
        class=""
        style="opacity:.8"> 

    {{-- Brand text --}}
    <span class=" ml-2 brand-text font-weight-light {{ config('adminlte.classes_brand_text') }}">
        {{-- {!! config('adminlte.logo', '<b>Admin</b>LTE') !!} --}}
        <strong>{{ Auth::user()->name}}</strong> Connected
    </span>

</a>
