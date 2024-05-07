<script lang="ts">
  import type { LinkItemStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import IconArrowUpRight from '$lib/icons/mini/IconArrowUpRight.svelte';

  export let blok: LinkItemStoryblok;
</script>

<Storyblok.Link
  link={blok.link}
  class="group flex w-full items-center justify-between py-6 text-lg font-semibold hover:underline sm:py-8 sm:text-2xl"
>
  {blok.headline}

  <IconArrowUpRight
    class="h-5 w-5 shrink-0 transition-transform group-hover:-translate-y-1 group-hover:translate-x-1"
  />
</Storyblok.Link>
