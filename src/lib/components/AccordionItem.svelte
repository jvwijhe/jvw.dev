<script lang="ts">
  import { renderRichText } from '@storyblok/svelte';
  import type { AccordionItemStoryblok } from '$lib/storyblok/types';
  import IconPlus from '$lib/icons/mini/IconPlus.svelte';
  import IconMinus from '$lib/icons/mini/IconMinus.svelte';

  export let blok: AccordionItemStoryblok;

  let open: boolean = blok.isOpenByDefault || false;
</script>

<details class="group w-full" bind:open>
  <summary
    class="flex w-full cursor-pointer list-none items-center justify-between py-6 text-lg font-semibold hover:underline sm:py-8 sm:text-2xl [&::-webkit-details-marker]:hidden"
  >
    {blok.headline}

    <svelte:component this={open ? IconMinus : IconPlus} class="h-5 w-5 shrink-0" />
  </summary>

  <div class="prose mb-8 xl:pr-24">
    {@html renderRichText(blok.content)}
  </div>
</details>
