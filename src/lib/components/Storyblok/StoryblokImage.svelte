<script lang="ts">
  import { getFileType, getImageDimensions, imgDimensions16x9, resizeImage } from '$lib/storyblok';
  import type { AssetStoryblok } from '$lib/storyblok/types';

  export let image: AssetStoryblok;
  export let sizes: string;
  export let dimensions: {
    w: number;
    h: number;
  }[] = imgDimensions16x9;

  const originalDimensions = getImageDimensions(image?.filename);
  const suitableDimensions = dimensions.filter(
    ({ w, h }) => w <= originalDimensions.width || h <= originalDimensions.height,
  );

  $: srcset = suitableDimensions
    .map(({ w, h }) => resizeImage(image?.filename, `${w}x${h}`, '') + ` ${w}w`)
    .join(', ');

  $: srcsetAvif = suitableDimensions
    .map(({ w, h }) => resizeImage(image?.filename, `${w}x${h}`, 'filters:format(avif)') + ` ${w}w`)
    .join(', ');

  $: srcsetWebp = suitableDimensions
    .map(({ w, h }) => resizeImage(image?.filename, `${w}x${h}`, 'filters:format(webp)') + ` ${w}w`)
    .join(', ');

  $: srcsetPng = suitableDimensions
    .map(({ w, h }) => resizeImage(image?.filename, `${w}x${h}`, 'filters:format(png)') + ` ${w}w`)
    .join(', ');

  $: fileType = getFileType(image?.filename);
  $: biggestDimension = suitableDimensions.at(-1);
</script>

{#if fileType === 'svg'}
  <img
    class={$$restProps.class}
    loading={$$restProps.loading || 'lazy'}
    src={image?.filename}
    alt={image?.alt}
    width={biggestDimension?.w}
    height={biggestDimension?.h}
    {sizes}
  />
{:else}
  <picture>
    <source srcset={srcsetAvif} {sizes} type="image/avif" />
    <source srcset={srcsetWebp} {sizes} type="image/webp" />
    <source srcset={srcsetPng} {sizes} type="image/png" />

    <img
      class={$$restProps.class}
      loading={$$restProps.loading || 'lazy'}
      src={image?.filename}
      alt={image?.alt}
      width={biggestDimension?.w}
      height={biggestDimension?.h}
      {sizes}
      {srcset}
    />
  </picture>
{/if}
