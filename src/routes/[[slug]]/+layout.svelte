<script lang="ts">
    import { StoryblokComponent } from '@storyblok/svelte';
  
    export let data;
  </script>
  
  {#key data}
    {#if data.story}
      <StoryblokComponent blok={data.story.content} />
    {:else}
      <slot />
    {/if}
  {/key}