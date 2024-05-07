<script lang="ts">
  import { renderRichText } from '@storyblok/svelte';
  import type { RichTextStoryblok } from '$lib/storyblok/types';

  export let blok: RichTextStoryblok;

  $: content = renderRichText(blok.content);
</script>

<div class="prose">
  {@html content}
</div>
