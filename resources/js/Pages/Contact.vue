<template>
  <!-- En tete -->

  <div class="bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 bg-clip-text p-10 space-y-3 rounded-sm">
    <h1 class="text-7xl text-transparent">Contactez-nous </h1>
    <p class=" text-transparent">
      A la moindre interrogation ou demande, n'hésiter pas à nous contacter. Nous nous ferons un réel plaisir à vous répondre.
    </p>
  </div>
  <!-- Formulaire -->

  <div class="grid grid-cols-2 gap-x-5 items-center justify-between my-20">
    <div class="">
      <form method="post" class="space-y-5" @submit.prevent="submit" novalidate>
        <div class="flex flex-col">
          <label for="nom">Nom</label>
          <input type="text" v-model="form.nom" aria-autocomplete="family-name" placeholder="Ecrivez votre nom de famille" class="border border-slate-300 rounded"/>
          <InputError :message="form.errors.nom" />
        </div>
        <div class="flex flex-col">
          <label for="prenom">Prénom</label>
          <input type="text" v-model="form.prenom" autocomplete="given-name" id="prenom" placeholder="Ecrivez votre prénom" class="border border-slate-300 rounded"/>
          <InputError :message="form.errors.prenom" />
        </div>
        <div class="flex flex-col">
          <label for="email">Adresse email</label>
          <input type="email" v-model="form.email" autocomplete="email" id="email" placeholder="Ecrivez votre adresse email" class="border border-slate-300 rounded"/>
          <InputError :message="form.errors.email" />
        </div>
        <div class="flex flex-col">
          <label for="raisonsocial">Raison social de votre entreprise</label>
          <input type="text" v-model="form.raisonsociale" autocomplete="work" id="raisonsocial" placeholder="Ecrivez votre raison social" class="border border-slate-300 rounded"/>
          <InputError :message="form.errors.raisonsociale" />
        </div>
        <div class="flex flex-col">
          <label for="objet">Objet du message</label>
          <input type="text" v-model="form.objet" id="objet" placeholder="Ecrivez l'objet du message" class="border border-slate-300 rounded"/>
          <InputError :message="form.errors.objet" />
        </div>
        <div class="flex flex-col">
          <label for="message">Le message</label>
          <textarea id="message" v-model="form.form_message" placeholder="Ecrivez le message" class="border border-slate-300 rounded" rows="5"/>
          <InputError :message="form.errors.form_message" />
        </div>
        <div class="flex gap-x-3 items-center text-sm">
          <input id="acceptance" v-model="form.acceptance" placeholder="Ecrivez le message" type="checkbox" class="border border-slate-300 rounded"/>
          <label for="acceptance">En cochant cette case, j'accepte quemes données soient traitées à des fins strictement professionnelles afin de répondre à ma demande.</label>
        </div>
        <InputError :message="form.errors.acceptance" />

        <PrimaryButton
        class="ms-4 bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 text-white p-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
        >
        Log in
      </PrimaryButton>
      <!-- <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">

      </PrimaryButton> -->

    </form>
  </div>
  <div class="h-full bg-[url('https://images.pexels.com/photos/5496464/pexels-photo-5496464.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')] bg-cover bg-center shadow-xl bg-no-repeat rounded">

  </div>
  <span class="my-10 rounded bg-emerald-200 text-emerald-500 border border-emerald-500 py-3 px-10 text-sm" v-if="success">{{ success }}</span>
</div>
</template>

<script setup>
  import InputError from '@/Components/InputError.vue';
  import PrimaryButton from '@/Components/PrimaryButton.vue';
  import { useForm, Link } from '@inertiajs/vue3';
  import axios from 'axios';
  import { ref } from 'vue';

  const errors = ref({})
  const success = ref('')

    const form = useForm({
      nom: '',
      prenom: '',
      email: '',
      raisonsociale: '',
      objet: '',
      form_message: '',
      acceptance: false,
    });
    function submit(){
      axios.post(route('contact.send'), form)
        .then(response => success.value = response.data.message)
        .catch(error => {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors
            }
        })
    }

  // const submit = () => {
  //   form.post(route('contact.send'));
  //   form.wasSuccessful(sended === !sended);
  // }

</script>

<style scoped>
  label{
    font-weight:600;
  }
</style>