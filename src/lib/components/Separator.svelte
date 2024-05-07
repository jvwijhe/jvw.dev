<script lang="ts">
  import type { SeparatorStoryblok } from '$lib/storyblok/types';
  import Storyblok from '$lib/components/Storyblok';

  export let blok: SeparatorStoryblok;
</script>

<Storyblok.Layout {blok}>
  <hr class:hr-dark={blok.style === 'dark'} class:hr-light={blok.style === 'light'} />
</Storyblok.Layout>
