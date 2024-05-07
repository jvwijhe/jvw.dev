<script lang="ts">
  import { StoryblokComponent } from '@storyblok/svelte';
  import type { DefaultPageStoryblok } from '$lib/storyblok/types';
  import Header from './Header.svelte';
  import Footer from './Footer.svelte';
  import { page } from '$app/stores';
  import { resizeImage } from '$lib/storyblok';
  import ErrorPage404 from './ErrorPage404.svelte';

  export let blok: DefaultPageStoryblok;

  $: seoTitle = blok?.seoTitle || $page.data.config.seoTitle;
  $: seoDesc = blok?.seoDescription || $page.data.config.seoDescription;
  $: seoImg = blok?.seoImage || $page.data.config.seoImage;
</script>

<svelte:head>
  <title>{seoTitle}</title>
  <meta property="og:title" content={seoTitle} />
  <meta name="apple-mobile-web-app-title" content={seoTitle} />

  <meta name="description" content={seoDesc} />
  <meta property="og:description" content={seoDesc} />

  {#if seoImg?.filename}
    <meta
      property="og:image"
      content={resizeImage(seoImg.filename, '1200x630', 'filters:format(png)')}
    />
  {/if}
</svelte:head>

<Header />

<main>
  {#key blok}
    <!-- <StoryblokSEO seo={blok?.seo} /> -->

    {#if blok.body}
      {#each blok.body as bloks}
        <StoryblokComponent blok={bloks} />
      {:else}
        <ErrorPage404 />
      {/each}
    {/if}
  {/key}
</main>

<Footer />
