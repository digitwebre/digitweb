<script setup>
import { computed } from 'vue';

  defineProps({
    titre: String,
    description: String,
    arg1: String,
    arg2: String,
    arg3: String,
    arg4: String,
  });
//   const amber = 'bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500';
//   const emerald = 'bg-gradient-to-r from-emerald-300 via-emerald-400 to-emerald-500'
</script>

<template>
  <div class="z-0" >
      <div class="relative mx-auto">
          <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500" >
              <div class="flex-1 px-6 py-8 lg:p-12 ">
                  <h3 class="text-2xl font-extrabold text-white sm:text-3xl">{{titre}}</h3>
                  <p class="mt-6 text-base text-gray-50 sm:text-lg">{{ description }}</p>
                  <div class="mt-8">
                      <div class="flex items-center">
                          <div class="flex-1 border-t-2 border-gray-200"></div>
                      </div>
                      <ul role="list" class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                          <li class="flex items-start lg:col-span-1">
                              <div class="flex-shrink-0"><svg class="h-5 w-5 text-white"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                      aria-hidden="true">
                                      <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                  </svg></div>
                              <p class="ml-3 text-white">{{arg1}}</p>
                          </li>
                          <li class="flex items-start lg:col-span-1">
                              <div class="flex-shrink-0"><svg class="h-5 w-5 text-white"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                      aria-hidden="true">
                                      <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                  </svg></div>
                              <p class="ml-3 text-white">{{arg2}}</p>
                          </li>
                          <li class="flex items-start lg:col-span-1">
                              <div class="flex-shrink-0"><svg class="h-5 w-5 text-white"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                      aria-hidden="true">
                                      <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                  </svg></div>
                              <p class="ml-3 text-white">{{arg3}}</p>
                          </li>
                          <li class="flex items-start lg:col-span-1">
                              <div class="flex-shrink-0"><svg class="h-5 w-5 text-white"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                      aria-hidden="true">
                                      <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                  </svg></div>
                              <p class="ml-3 text-white">{{arg4}}</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div
                  class="py-8 px-6 text-center lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12 bg-gradient-to-r from-amber-500 to-amber-600">
                  <p class="text-lg leading-6 font-medium text-white">Pay once, own it forever</p>
                  <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-white">
                      <span>$19.99</span><span class="ml-3 text-xl font-medium text-gray-50">USD</span>
                  </div>
                  <!-- <div class="mt-6">
                      <div class="rounded-md shadow">
                          <a href="#"
                              class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-amber-500 hover:bg-indigo-600">Buy
                              now</a>
                      </div>
                      <p class="text-gray-300 text-sm mt-3">100% money back guarantee</p>
                  </div> -->
              </div>
          </div>
      </div>
  </div>
</template>
