<script lang="ts">
  import { renderRichText } from '@storyblok/svelte';
  import { twMerge } from 'tailwind-merge';
  import type { RichtextStoryblok } from '$lib/storyblok/types';

  export let content: RichtextStoryblok;
  let contentString = '';

  if (content) {
    contentString = renderRichText(content);
  }
</script>

<div
  class={twMerge(
    'w-full bg-brand-tertiary px-4 py-2.5 text-center text-opacity-75 *:text-xs *:text-black/75 sm:*:text-sm [&_a]:underline',
    $$restProps.class,
  )}
>
  {@html contentString}
</div>
