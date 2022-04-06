  <!-- <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a> -->

  <!-- div with sidebar and content -->
  <div class="flex">

    @include('partials.sidebar')




  <div class="h-screen flex flex-1 flex-col">
  <header class="flex h-10 bg-gray-200">Header</header>

  <div class="flex flex-1 bg-gray-100 overflow-auto">

content

  </div>

  <footer class="flex h-10 bg-gray-200">Footer</footer>
</div>
</div>


<!-- blade comments -->
{{--
  @hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
  @endif -->

  @include('sections.header')
@yield('content')
@include('sections.footer')
--}}

