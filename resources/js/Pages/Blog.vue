<template>
  <!-- https://gist.github.com/goodreds/3579ddfffe439457b5ef9902b5336124 -->
  <section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6">
      <div class="flex flex-wrap items-center justify-between mb-8">
          <h2 class="mr-10 text-4xl font-bold leading-none md:text-5xl">
              Nos articles de blog
          </h2>
          <a href="#"
              class="block pb-1 mt-2 text-base font-black text-amber-500 uppercase border-b border-transparent hover:border-amber-400 duration-300">
              Voir tous les articles ->
          </a>
      </div>
      <template v-if='posts'>
        <template v-for="item in posts">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                    <img :src="item.pics_filename" alt="Card img" class="object-cover object-center w-full h-48" />
                    <div class="flex flex-grow">
                        <div class="triangle"></div>
                        <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                            <div>
                                <a href="#"
                                    class="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-amber-400 hover:text-amber-400">Reliable
                                    Schemas</a>
                                <a href="#"
                                    class="block mb-4 text-2xl font-black leading-tight hover:underline hover:text-amber-400">
                                    {{item.titre}}
                                </a>
                                <p class="mb-4 text-xs" v-html="item.content"/>
                            </div>
                            <p class="inline-block pb-1 mt-2 text-base font-black text-amber-400 uppercase border-b border-transparent hover:border-amber-400" v-text="item.created_at" />
                        </div>
                    </div>
                </div>
            </div>
        </template>
      </template>
      <template v-else>
        <div class="bg-amber-200 text-amber-500 p-5 rounded border border-amber-500">
            <p>Aucun article disponible pour le moment. Renevez plus tard</p>
        </div>
      </template>
  </section>
</template>

<script setup>
    defineProps({
        posts: Object
    })
</script>