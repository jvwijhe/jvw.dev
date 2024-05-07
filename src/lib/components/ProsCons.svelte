<script lang="ts">
  import { StoryblokComponent } from '@storyblok/svelte';
  import type { ProsConsStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';

  export let blok: ProsConsStoryblok;
</script>

<Storyblok.Layout {blok}>
  <svelte:element
    this={blok.headlineTag || 'h2'}
    data-aos="fade-right"
    class="max-w-2xl text-balance font-semibold"
  >
    {blok.headline}
  </svelte:element>

  <div class="mt-8 grid grid-cols-1 gap-4 sm:mt-16 sm:gap-8 lg:grid-cols-2">
    <div class=" bg-brand-primary/5 p-8 pb-10">
      <div class="flex items-center justify-between">
        <h3 class="font-semibold">{blok.headlineCons}</h3>

        {#if blok.subheadlineCons}
          <div class="shrink-0 whitespace-nowrap rounded-full bg-white px-4 py-2 text-black/75">
            {blok.subheadlineCons}
          </div>
        {/if}
      </div>

      <div class="mt-8 space-y-8 lg:mt-12">
        {#each blok.itemsCons as content}
          <StoryblokComponent blok={content} />
        {/each}
      </div>
    </div>

    <div class="bg-brand-tertiary p-8 pb-10">
      <div class="flex items-center justify-between">
        <h3 class="font-semibold">{blok.headlinePros}</h3>

        {#if blok.subheadlinePros}
          <div class="shrink-0 whitespace-nowrap rounded-full bg-white px-4 py-2 text-black/75">
            {blok.subheadlinePros}
          </div>
        {/if}
      </div>

      <div class="mt-8 space-y-8 lg:mt-12">
        {#each blok.itemsPros as content}
          <StoryblokComponent blok={content} />
        {/each}
      </div>
    </div>
  </div>
</Storyblok.Layout>
