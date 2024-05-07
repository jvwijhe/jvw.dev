<script lang="ts">
  import type { HighlightStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import { StoryblokComponent } from '@storyblok/svelte';
  import { cva, type VariantProps } from 'class-variance-authority';

  export let blok: HighlightStoryblok;

  const backgroundClass = cva('highlight-content', {
    variants: {
      background: {
        green: 'bg-brand-primary text-white',
        yellow: 'bg-brand-secondary text-black',
        'light-green': 'bg-brand-tertiary text-black',
      },
    },
  });

  interface bgClass extends VariantProps<typeof backgroundClass> {}

  $: background = blok.bgColor as bgClass['background'];
</script>

<Storyblok.Layout {blok} class=" max-sm:px-0 2xl:max-w-[1536px]">
  <div class="relative">
    <Storyblok.Image
      sizes="100vw"
      class="relative z-10 h-full w-full max-lg:pr-4 lg:max-w-2xl 2xl:max-w-6xl"
      image={blok.image}
    />

    <div class={backgroundClass({ background })}>
      <h2
        class="whitespace-pre-line text-2xl font-semibold md:text-3xl 2xl:text-[2.5rem] 2xl:leading-[120%]"
      >
        {blok.headline}
      </h2>

      {#if blok.buttons && blok.buttons.length > 0}
        <div class="mt-8">
          {#each blok.buttons as content}
            <StoryblokComponent blok={content} />
          {/each}
        </div>
      {/if}
    </div>
  </div>
</Storyblok.Layout>

<style lang="postcss">
  .highlight-content {
    @apply relative z-20 -mt-6 ml-4 p-8;
    @apply sm:-mt-12 sm:ml-auto sm:max-w-[32rem] sm:p-12;
    @apply md:-mt-24;
    @apply lg:-mt-[30%] lg:p-16;
    @apply xl:-mt-[25%] xl:max-w-[42rem] xl:p-24;
    @apply 2xl:-mt-[35%] 2xl:px-32 2xl:py-24;
  }
</style>
