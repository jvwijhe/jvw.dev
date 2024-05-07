<script lang="ts">
  import type { TestimonialStoryblok } from '$lib/storyblok/types';
  import Storyblok from './Storyblok';

  export let blok: TestimonialStoryblok;
</script>

<div class="border border-black border-opacity-25 p-10">
  <div>
    <p class="whitespace-pre-line font-medium">{blok.testimonial}</p>
  </div>

  <div class="mt-12 flex items-center gap-4">
    {#if blok.image && blok.image.filename}
      <Storyblok.Image
        sizes="64px"
        class="h-16 w-16 overflow-hidden rounded-full object-cover"
        image={blok.image}
        dimensions={[
          { w: 64, h: 64 },
          { w: 128, h: 128 },
          { w: 256, h: 256 },
        ]}
      />
    {/if}

    <div>
      {#if blok.personName}
        <div class="text-black">{blok.personName}</div>
      {/if}
      {#if blok.personSubtitle}
        <div class="text-black text-opacity-50">{blok.personSubtitle}</div>
      {/if}
    </div>
  </div>
</div>
