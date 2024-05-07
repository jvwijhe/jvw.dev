<script lang="ts">
  import IconCheck from '$lib/icons/outline/IconCheck.svelte';
  import IconXMark from '$lib/icons/outline/IconXMark.svelte';
  import { renderRichText } from '@storyblok/svelte';
  import type { ProsConsItemStoryblok } from '$lib/storyblok/types';

  export let blok: ProsConsItemStoryblok;

  $: content = renderRichText(blok.content);
</script>

<div class="flex gap-4">
  <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white">
    {#if blok.ProCon}
      <IconCheck class="h-6 w-6" />
    {:else}
      <IconXMark class="h-6 w-6" />
    {/if}
  </div>

  <div class="*:text-black/75">
    {@html content}
  </div>
</div>
