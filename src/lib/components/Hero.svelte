<script lang="ts">
  import { StoryblokComponent, renderRichText } from '@storyblok/svelte';
  import type { HeroStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import { imgDimensions1x1 } from '$lib/storyblok';

  export let blok: HeroStoryblok;

  $: description = renderRichText(blok.description);
</script>

<Storyblok.Layout {blok} class="lg:grid lg:grid-cols-2 lg:place-items-center lg:gap-40">
  <div>
    <svelte:element this={blok.headlineTag || 'h2'} data-aos="fade-right" class="font-semibold">
      {blok.headline}
    </svelte:element>

    {#if blok.subheadline}
      <p data-aos="fade" data-aos-delay="500" class="mt-8">{blok.subheadline}</p>
    {/if}

    {#if blok.buttons && blok.buttons.length > 0}
      <div class="mt-8" data-aos="fade" data-aos-delay="700">
        {#each blok.buttons as content}
          <StoryblokComponent blok={content} />
        {/each}
      </div>
    {/if}

    {#if blok.description}
      <div
        class="mt-8 *:text-sm *:text-black *:text-opacity-50 sm:*:text-base [&_a]:font-medium [&_a]:underline"
        data-aos="fade"
        data-aos-delay="900"
      >
        {@html description}
      </div>
    {/if}
  </div>

  <div class="mt-12 pb-5 max-lg:pl-5 lg:mt-0 lg:pb-8">
    <div class="relative flex items-center" data-aos="fade-up" data-aos-delay="100">
      <div class="relative z-20">
        <Storyblok.Image
          loading="eager"
          sizes="(min-width: 1024px) 50vw, 100vw"
          image={blok.image}
          dimensions={imgDimensions1x1}
        />
      </div>
      <div
        class="absolute inset-0 z-10 -translate-x-5 translate-y-5 bg-brand-secondary lg:-translate-x-8 lg:translate-y-8"
      ></div>
    </div>
  </div>
</Storyblok.Layout>
