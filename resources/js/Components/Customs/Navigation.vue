<template>
  <!-- <div class="grid grid-cols-2 justify-between items-center px-20 py-5 shadow-xl sticky top-0 bg-white">
    <div>
      <Logo :largeur="100+'px'"/>
    </div>
    <div class="flex items-center justify-between">
      <Link :href="''">Accueil</Link>
      <Link :href="''">Qui sommes-nous</Link>
      <Link :href="''">Pourquoi nous choisir</Link>
      <Link :href="''">Tarifs</Link>
      <Link :href="''">Notre portfolio</Link>
      <Link :href="route('contact')">Contact</Link>
      <Link :href="route('blog.index')">Blog</Link>
    </div>
  </div> -->

  <header class="lg:px-16 px-4 flex flex-wrap items-center py-5 shadow-xl sticky top-0 bg-white z-50">
      <div class="flex-1 flex justify-between items-center">
          <Link :href="route('index')" class="text-xl w-[100px]">
            <Logo :largeur="100+'px'" class="hover:w-20 duration-300"/>
          </Link>
      </div>

      <label for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-gray-900"
          xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
          <title>menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </label>
      <input class="hidden" type="checkbox" id="menu-toggle" />

      <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
          <nav>
              <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                  <li class="space-x-5 font-bold">
                    <Link :href="route('index')" class="text-slate-800 hover:text-amber-400 duration-300 hover:text-sm text-lg">Accueil</Link>
                    <Link :href="route('presentation')" class="text-slate-800 hover:text-amber-400 duration-300 hover:text-sm text-lg">Qui sommes-nous</Link>
                    <Link :href="route('whyUs')" class="text-slate-800 hover:text-amber-400 duration-300 hover:text-sm text-lg">Pourquoi nous choisir</Link>
                    <Link :href="route('tarifs')" class="text-slate-800 hover:text-amber-400 duration-300 hover:text-sm text-lg">Tarifs</Link>
                    <Link :href="route('portfolio')" class="text-slate-800 hover:text-amber-400 duration-300 hover:text-sm text-lg">Notre portfolio</Link>
                    <Link :href="route('contact')" class="text-slate-800 hover:text-amber-400 duration-300 hover:text-sm text-lg">Contact</Link>
                    <Link :href="route('blog.index')" class="text-slate-800 hover:text-amber-400 duration-300 hover:text-sm text-lg">Blog</Link>
                  </li>
              </ul>
          </nav>
      </div>
  </header>
</template>

<script setup>
  import Logo from './Logo.vue';
  import { Link } from '@inertiajs/vue3';
</script>