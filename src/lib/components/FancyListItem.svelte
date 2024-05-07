<script lang="ts">
  import { renderRichText } from '@storyblok/svelte';
  import type { FancyListItemStoryblok } from '$lib/storyblok/types';

  export let blok: FancyListItemStoryblok;

  $: content = renderRichText(blok.content);
</script>

<div class="flex">
  <h3 class="w-12 flex-shrink-0 sm:w-16 md:w-32">{blok.marker}</h3>

  <div class="flex-grow space-y-2">
    {@html content}
  </div>
</div>
