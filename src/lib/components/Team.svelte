<script lang="ts">
  import type { TeamStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import { StoryblokComponent } from '@storyblok/svelte';

  export let blok: TeamStoryblok;
</script>

<Storyblok.Layout {blok}>
  <h2 data-aos="fade-right" class="max-w-2xl font-semibold">{blok.headline}</h2>

  <div class="mt-8 grid gap-4 lg:grid-cols-3">
    {#each blok.content as content}
      <StoryblokComponent blok={content} />
    {/each}
  </div>
</Storyblok.Layout>
