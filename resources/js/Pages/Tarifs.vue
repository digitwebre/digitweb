<script setup lang="ts">
import Pricing from '@/Components/Customs/Pricing.vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>
  <div class="my-20">
    <h1 class="text-5xl ">Créez votre site internet n'aura jamais été aussi simple et economique.</h1>
    <p>Nos prix sont connus d'avance. Consulter ci-dessous notre liste de prestations</p>
  </div>
  <div class="space-y-5 mb-10">
    <Pricing
      titre="Site vitrine"
      description="Un site vitrine est idéal pour présenter votre activité, vos services et vos produits de manière professionnelle et accessible en ligne. Il renforce votre visibilité, inspire confiance et attire de nouveaux clients sans nécessiter de fonctionnalités complexes."
      arg1="Adapté pour les entreprises qui veulent simplement présenter leurs services"
      arg2="Pas de fonctionnalité avancée"
      arg3="Garder contact avec vos clients grâce aux formulaires de contact"
      arg4="Hébergement offert pour la première année"
    />
    <Pricing
      titre="Plateforme de vente en ligne"
      description="Présenter vos services via un site internet moderne et sur mesure. Idéale pour attirer votre première clientèle."
      arg1="Adapté pour les entreprises qui veulent simplement présenter leurs services"
      arg2="Pas de fonctionnalité avancée"
      arg3="Garder contact avec vos clients grâce aux formulaires de contact"
      arg4="Hébergement offert pour la première année"
    />
    <Pricing
      titre="Plateforme Learning Management System (Gestion de contenu de cours)"
      description="Présenter les cours de vos formateurs via un site internet moderne et sur mesure."
      arg1="Adapté pour les entreprises qui veulent simplement présenter leurs cours"
      arg2="Proposer un système de distanciel dans le milieu de la formation professionnelle"
      arg3="Différents modes d'accès : Formateur, Stagiaire, Administratif"
      arg4="Hébergement offert pour la première année"
    />
    <Pricing
      :colorClass="''"
      titre="Gestion des réseaux sociaux"
      description="Nous gérons pour vous la partie réseaux sociaux. De la création de visuel, à la publication, en passant par la rédaction de contenu."
      arg1="Les réseaux sociaux, peuvent prendre une bonne partie de votre temps ! Laissez nous gérer cela pour vous."
      arg2="De 6 à 12 posts par mois."
      arg3="Libérez vous du temps pour répondre à d'autres tâches."
      arg4="Prix compétitif "
    />
    <hr>
    <h3>
      Besoin d'une information supplémentaire ou d'une prestation qui ne figure pas ? N'hésitez pas à nous contacter via
      <Link :href="route('contact')" class="text-amber-400"> notre formulaire de contact</Link>
    </h3>
  </div>
</template>