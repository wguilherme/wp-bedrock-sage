<aside class=" h-screen flex flex-col will-change-transform transform transition-transform -translate-x-full absolute top-0 left-0 md:relative md:translate-x-0 w-3/4 md:w-60 h-full min-h-screen p-3 bg-slate-50 dark:bg-slate-800 border-r border-slate-200 dark:border-slate-700 flex flex-col gap-2.5 z-20 sidebar">
  <p class="font-bold mb-5 flex items-center gap-2">
    <button
      aria-label="Close sidebar"
      class="md:hidden menu-trigger-close p-1 rounded text-slate-800 dark:text-slate-50 hover:bg-slate-200 dark:hover:bg-slate-700">
      {{-- partial "icon/closeIcon.html" . --}}
    </button>
    <a href="#" class="px-2">
      <span>{{ '.Site.Title' }}</span>
    </a>
    <button
      aria-label="Toggle dark mode"
      class="dark-mode-toggle p-2 rounded border dark:border-slate-700 hover:bg-slate-200 dark:hover:bg-slate-700">

    </button>
  </p>


  <ul class="list-none flex flex-col gap-1">

    <li>
      <a class="px-2 py-1.5 rounded-md text-sm flex items-center justify-between  bg-slate-800 text-white dark:bg-slate-50 dark:text-slate-800 dark:selection:bg-slate-400  hover:bg-slate-200 dark:hover:bg-slate-700"
        href="#"  target="_blank" rel="noopener" >
        <span>Name</span>
  dasda
        <span>
          external icon
        </span>

      </a>
    </li>

  </ul>

  <div class="flex-1"></div>



  <ul class="list-none flex flex-wrap justify-center gap-1 pt-2 border-t border-slate-200 dark:border-slate-600">

    <li>
      <a class="px-2 py-1.5 rounded-md text-sm block text-slate-800 dark:text-slate-50 bg-slate-800 text-white
      dark:hover:bg-slate-200 dark:hover:bg-slate-700"
        >
        <span class="sr-only">Name</span>
        Twitter
        <span>partial "icon/twitterIcon.html</span>
Github
        <span>Icon github</span>


      </a>
    </li>

  </ul>
</aside>

<div
  class="fixed bg-slate-700 bg-opacity-5 transition duration-200 ease-in-out inset-0 z-10 pointer-events-auto md:hidden left-0 top-0 w-full h-full hidden menu-overlay">
</div>

<button
  aria-label="Toggle Sidebar"
  class="md:hidden absolute top-3 left-3 z-10 menu-trigger p-1 rounded text-slate-800 dark:text-slate-50 hover:bg-slate-100">
menu icon
</button>
