<script lang="ts">
  import type { TeamMemberCardStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';
  import { imgDimensions3x4 } from '$lib/storyblok';
  import IconArrowUpRight from '$lib/icons/mini/IconArrowUpRight.svelte';

  export let blok: TeamMemberCardStoryblok;
</script>

<div class="relative flex aspect-[3/4] items-end p-4">
  <Storyblok.Image
    sizes="(min-width: 1024px) 50vw, 100vw"
    image={blok.image}
    alt={blok.name}
    dimensions={imgDimensions3x4}
    class="absolute inset-0 object-cover"
  />

  {#if blok.link && (blok.link.cached_url || blok.link?.url)}
    <Storyblok.Link link={blok.link} class="group relative z-10 w-full bg-brand-secondary p-6">
      <h3 class="text-2xl leading-none">{blok.name}</h3>
      <div class="mt-1 text-xl text-black/75">{blok.title}</div>

      <IconArrowUpRight
        class="mt-4 h-5 w-5 transition-transform group-hover:-translate-y-1 group-hover:translate-x-1"
      />
    </Storyblok.Link>
  {:else}
    <div class="relative z-10 w-full bg-brand-secondary p-6">
      <h3 class="text-2xl leading-none">{blok.name}</h3>
      <div class="mt-1 text-xl text-black/75">{blok.title}</div>
    </div>
  {/if}
</div>
