<script lang="ts">
  import type { TextImageComboStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import { imgDimensions3x4 } from '$lib/storyblok';
  import { StoryblokComponent } from '@storyblok/svelte';

  export let blok: TextImageComboStoryblok;
</script>

<Storyblok.Layout {blok}>
  <h2 data-aos="fade-right" class="max-w-2xl font-semibold">{blok.headline}</h2>

  <div class="mt-24 lg:mt-32 lg:grid lg:grid-cols-2 lg:gap-24 xl:gap-40">
    <div class="space-y-16 lg:pt-16" class:order-1={blok.reversed}>
      {#each blok.content as content}
        <StoryblokComponent blok={content} />
      {/each}
    </div>

    <div class="mt-12 pb-5 lg:mt-0 lg:pb-8">
      <div data-aos="fade-up" data-aos-delay="100">
        <Storyblok.Image
          sizes="(min-width: 1024px) 50vw, 100vw"
          image={blok.image}
          dimensions={imgDimensions3x4}
        />
      </div>
    </div>
  </div>
</Storyblok.Layout>
