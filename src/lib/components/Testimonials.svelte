<script lang="ts">
  import { StoryblokComponent } from '@storyblok/svelte';
  import type { HeroStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';

  export let blok: HeroStoryblok;
</script>

<Storyblok.Layout {blok}>
  <h2 data-aos="fade-right" class="max-w-2xl">{blok.headline}</h2>

  <div class="mt-16 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-8">
    {#each blok.testimonials as testimonial}
      <div>
        <StoryblokComponent blok={testimonial} />
      </div>
    {/each}
  </div>
</Storyblok.Layout>
