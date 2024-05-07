<script lang="ts">
  import type { ContactFormStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import { StoryblokComponent } from '@storyblok/svelte';
  import type { SuperValidated, Infer } from 'sveltekit-superforms';
  import { superForm } from 'sveltekit-superforms';
  import { type ContactFormSchema } from '$lib/schemas';
  import { page } from '$app/stores';
  import Form from '$lib/components/Form';
  import IconInformationCircle from '$lib/icons/outline/IconInformationCircle.svelte';

  export let blok: ContactFormStoryblok;

  const formData: SuperValidated<Infer<ContactFormSchema>> = $page.data.contactForm;

  const form = superForm(formData);
  const { form: contactFormData, enhance, message, errors } = form;
</script>

<Storyblok.Layout {blok} class="lg:grid lg:grid-cols-2 lg:gap-8">
  <div>
    <h2 data-aos="fade-right" class="h2 mb-0 whitespace-pre-line font-semibold">{blok.headline}</h2>

    <h3
      data-aos="fade-right"
      class="h2 mt-0 whitespace-pre-line font-semibold text-black text-opacity-50"
    >
      {blok.subheadline}
    </h3>

    {#if blok.content && blok.content.length > 0}
      <div class="mt-8 space-y-16 lg:mt-16">
        {#each blok.content as content}
          <StoryblokComponent blok={content} />
        {/each}
      </div>
    {/if}

    {#if blok.avatars?.length}
      <div class="mt-8 flex -space-x-2 lg:mt-16">
        {#each blok.avatars as avatar, i}
          <div data-aos="fade-left" data-aos-delay={300 + i * 300}>
            <Storyblok.Image
              sizes="64px"
              class="h-12 w-12 overflow-hidden rounded-full object-cover sm:h-16 sm:w-16"
              image={avatar}
              dimensions={[
                { w: 64, h: 64 },
                { w: 128, h: 128 },
                { w: 256, h: 256 },
              ]}
            />
          </div>
        {/each}
      </div>
    {/if}
  </div>

  <div class="mt-12 lg:mt-0">
    <form class="bg-white shadow-xl" method="POST" action="/forms/contact" use:enhance>
      <div class="p-6 sm:p-10">
        <h3>Hoe wil je kennismaken?</h3>

        <fieldset class="checkboxes mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
          <div class="flex items-center gap-2 text-black">
            <input
              bind:group={$contactFormData.type}
              type="radio"
              name="type"
              id="video"
              value="video"
              class="hidden"
            />

            <label
              for="video"
              class="relative inline-block w-full cursor-pointer whitespace-nowrap rounded-full border border-black py-3 pl-12 align-middle ring-1"
              class:ring-transparent={$contactFormData.type !== 'video'}
              class:ring-black={$contactFormData.type === 'video'}
              class:opacity-50={$contactFormData.type && $contactFormData.type !== 'video'}
            >
              Plan een videocall
            </label>
          </div>

          <div class="flex items-center gap-2 text-black">
            <input
              bind:group={$contactFormData.type}
              type="radio"
              name="type"
              id="phone"
              value="phone"
              class="hidden"
            />

            <label
              for="phone"
              class=" relative inline-block w-full cursor-pointer whitespace-nowrap rounded-full border border-black py-3 pl-12 align-middle ring-1"
              class:ring-transparent={$contactFormData.type !== 'phone'}
              class:ring-black={$contactFormData.type === 'phone'}
              class:opacity-50={$contactFormData.type && $contactFormData.type !== 'phone'}
            >
              Bel mij z.s.m. terug
            </label>
          </div>
        </fieldset>

        {#if $errors.type}
          <div class="mt-2 text-brand-error">{$errors.type}</div>
        {/if}
      </div>

      <hr class="hr-dark" />

      <div class="p-6 sm:p-10">
        <h4>Jouw gegevens</h4>

        <div class="mt-4 space-y-4">
          <fieldset>
            <label for="name" class="sr-only">Je volledige naam*</label>
            <Form.Text placeholder="Je volledige naam*" type="text" field="name" {form} />
          </fieldset>
          <fieldset>
            <label for="title" class="sr-only">Functie*</label>
            <Form.Text placeholder="Functie*" type="text" field="title" {form} />
          </fieldset>
          <fieldset>
            <label for="company" class="sr-only">Bedrijfsnaam*</label>
            <Form.Text placeholder="Bedrijfsnaam*" type="text" field="company" {form} />
          </fieldset>
          <fieldset>
            <label for="email" class="sr-only">Zakelijk e-mailadres*</label>
            <Form.Text placeholder="Zakelijk e-mailadres*" type="email" field="email" {form} />
          </fieldset>
          <fieldset>
            <label for="phone" class="sr-only">Telefoonnummer*</label>
            <Form.Text placeholder="Telefoonnummer*" type="tel" field="phone" {form} />
          </fieldset>
        </div>

        <div class="mt-8 flex gap-2">
          <div class="pt-0.5">
            <IconInformationCircle class="h-4 w-4 text-black/50" />
          </div>
          <p class="text-sm text-black/50">
            We nemen alleen contact met je op om een afspraak te maken om jouw wensen door te nemen.
            Je gegevens worden niet gebruikt voor marketingdoeleinden.
          </p>
        </div>

        <button
          type="submit"
          class="mt-8 w-full rounded-full bg-black px-4 py-3 font-semibold text-white hover:bg-opacity-100"
        >
          Plan een kennismaking
        </button>

        {#if $message}<h3>{$message}</h3>{/if}

        <p class="mt-8 text-sm text-black/50">
          Door dit formulier te verzenden, bevestig ik dat ik het privacybeleid heb gelezen en stem
          ik in met de verwerking van mijn persoonsgegevens door LEV arbo.
        </p>
      </div>
    </form>
  </div>
</Storyblok.Layout>

<style lang="postcss">
  .checkboxes label::before {
    content: '';

    @apply absolute left-4 top-1/2 mr-2 h-5 w-5 -translate-y-1/2 rounded-full border border-black align-middle;
  }

  .checkboxes input:checked + label {
    @apply font-medium;
  }

  .checkboxes input:checked + label::before {
    @apply border-2;
  }

  .checkboxes input:checked + label {
    @apply text-black;
  }

  .checkboxes input:checked + label::after {
    content: '';

    @apply absolute left-[1.375rem] top-5 h-2 w-2 rounded-full bg-black;
  }
</style>
