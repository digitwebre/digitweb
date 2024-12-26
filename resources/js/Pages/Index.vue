<script setup>
  import { Head } from '@inertiajs/vue3';
  defineProps({
      title: String,
  });
</script>

<template>
  <Head :title="'Développeur web à La Réunion'" />
  <h1 class="text-7xl">Hello world</h1>
</template>