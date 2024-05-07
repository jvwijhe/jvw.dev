<script lang="ts">
  import type { CallToActionStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import { StoryblokComponent } from '@storyblok/svelte';

  export let blok: CallToActionStoryblok;
</script>

<Storyblok.Layout {blok} class="max-w-4xl space-y-8">
  <svelte:element
    this={blok.headlineTag || 'h2'}
    data-aos="fade-up"
    class="text-center font-semibold"
  >
    {blok.headline}
  </svelte:element>

  {#if blok.description}
    <p data-aos="fade-up" class="text-center text-black/75">{blok.description}</p>
  {/if}

  {#if blok.avatars?.length}
    <div class="flex justify-center -space-x-2">
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

  {#if blok.buttons && blok.buttons.length > 0}
    <div class="flex flex-wrap justify-center gap-4">
      {#each blok.buttons as content, i}
        <div data-aos="fade" data-aos-delay={400 + i * 100}>
          <StoryblokComponent blok={content} />
        </div>
      {/each}
    </div>
  {/if}
</Storyblok.Layout>
