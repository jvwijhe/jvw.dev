<script lang="ts">
  import { StoryblokComponent } from '@storyblok/svelte';
  import type { InformationItemsStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';

  export let blok: InformationItemsStoryblok;
</script>

<Storyblok.Layout {blok} class="">
  <svelte:element
    this={blok.headlineTag || 'h2'}
    data-aos="fade-right"
    class="max-w-2xl text-balance font-semibold"
  >
    {blok.headline}
  </svelte:element>

  <div class="mt-8 grid grid-cols-1 gap-4 sm:mt-16 sm:gap-8 lg:grid-cols-3 xl:grid-cols-2">
    <div
      class="divide-y divide-black/15 border-b border-black/15 lg:col-start-2 lg:col-end-4 xl:col-end-3"
    >
      {#each blok.content as content}
        <StoryblokComponent blok={content} />
      {/each}
    </div>
  </div>
</Storyblok.Layout>
