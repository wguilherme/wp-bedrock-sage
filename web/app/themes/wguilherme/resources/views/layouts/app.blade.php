<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<div  >




@include('sections.header')

  <main id="main" class="main" style="background-color:green">
    @yield('content')
  </main>

  <!-- @hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
  @endif -->

  @include('sections.footer')
</div>
