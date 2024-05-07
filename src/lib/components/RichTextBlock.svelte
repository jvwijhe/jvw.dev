<script lang="ts">
  import { StoryblokComponent } from '@storyblok/svelte';
  import type { RichTextBlockStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';

  export let blok: RichTextBlockStoryblok;
</script>

<Storyblok.Layout {blok} class="prose mx-auto">
  <svelte:element this={blok.headlineTag || 'h2'} class="font-semibold">
    {blok.headline}
  </svelte:element>

  {#each blok.content as content}
    <StoryblokComponent blok={content} />
  {/each}
</Storyblok.Layout>
