<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import Navigation from '@/Components/Customs/Navigation.vue';
import Footer from '@/Components/Customs/Footer.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>
        <Head :title="title" />

        <Banner />
        <Navigation />
        <div class="min-h-screen bg-white mx-5 sm:mx-20">
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
        <Footer />
    </div>
</template>
