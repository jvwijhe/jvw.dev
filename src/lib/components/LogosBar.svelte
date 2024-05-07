<script lang="ts">
  import type { LogosBarStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';

  export let blok: LogosBarStoryblok;
</script>

<Storyblok.Layout {blok} class="flex justify-evenly max-sm:w-full max-sm:px-0 sm:justify-between">
  {#each blok.logos as logo, i}
    <div
      data-aos="fade-up"
      data-aos-delay={200 + i * 100}
      class="hidden md:!block"
      class:!block={i < 3}
      class:sm:!block={i < 4}
    >
      <Storyblok.Image sizes="" class="h-16 w-24 lg:h-24 lg:w-32" image={logo} dimensions={[]} />
    </div>
  {/each}
</Storyblok.Layout>
