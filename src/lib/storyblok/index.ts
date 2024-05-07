import { apiPlugin, storyblokInit } from '@storyblok/svelte';

import DefaultPage from '$lib/components/DefaultPage.svelte';

import CallToAction from '$lib/components/CallToAction.svelte';
import ContactForm from '$lib/components/ContactForm.svelte';
import Hero from '$lib/components/Hero.svelte';
import Highlight from '$lib/components/Highlight.svelte';
import InformationItems from '$lib/components/InformationItems.svelte';
import LogosBar from '$lib/components/LogosBar.svelte';
import ProsCons from '$lib/components/ProsCons.svelte';
import RichTextBlock from '$lib/components/RichTextBlock.svelte';
import Separator from '$lib/components/Separator.svelte';
import Team from '$lib/components/Team.svelte';
import Testimonials from '$lib/components/Testimonials.svelte';
import TextImageCombo from '$lib/components/TextImageCombo.svelte';

import AccordionItem from '$lib/components/AccordionItem.svelte';
import Button from '$lib/components/Button.svelte';
import FancyListItem from '$lib/components/FancyListItem.svelte';
import LinkItem from '$lib/components/LinkItem.svelte';
import ProsConsItem from '$lib/components/ProsConsItem.svelte';
import RichText from '$lib/components/RichText.svelte';
import TeamMemberCard from '$lib/components/TeamMemberCard.svelte';
import Testimonial from '$lib/components/Testimonial.svelte';

export const loadStoryblok = async (accessToken: string) => {
  storyblokInit({
    accessToken,
    use: [apiPlugin],
    apiOptions: {
      https: true,
    },
    components: () => ({
      DefaultPage,

      Hero,
      CallToAction,
      Highlight,
      LogosBar,
      TextImageCombo,
      Testimonials,
      ContactForm,
      Team,
      ProsCons,
      InformationItems,
      RichTextBlock,
      Separator,

      Button,
      FancyListItem,
      RichText,
      Testimonial,
      TeamMemberCard,
      ProsConsItem,
      AccordionItem,
      LinkItem,
    }),
  });
};

/**
 * Smart resize Storyblok images.
 *
 * @see https://www.storyblok.com/docs/image-service
 *
 * @returns New filename.
 */
export const resizeImage = (filename: string, size: string, filters: string) =>
  `${filename}/m/${size}/smart/${filters}`;

export const getFileType = (filename: string) => filename?.split('.').pop();

/**
 * @see https://www.storyblok.com/faq/image-dimensions-assets-js
 * @param url Stroyblok image full url.
 * @returns The width and height of the image.
 */
export const getImageDimensions = (url: string) => ({
  width: Number(url?.split('/')[5].split('x')[0]),
  height: Number(url?.split('/')[5].split('x')[1]),
});

/**
 * @see https://github.com/sveltejs/kit/blob/f80ba75dfd967fb9d28d705d6891933bab603dc9/packages/enhanced-img/src/index.js#L113C18-L113C76
 */
export const imgDimensions1x1 = [
  { w: 540, h: 540 },
  { w: 768, h: 768 },
  { w: 1080, h: 1080 },
  { w: 1366, h: 1366 },
  { w: 1536, h: 1536 },
  { w: 1920, h: 1920 },
  { w: 2560, h: 2560 },
  { w: 3000, h: 3000 },
  { w: 4096, h: 4096 },
  { w: 5120, h: 5120 },
];

/**
 * @see https://github.com/sveltejs/kit/blob/f80ba75dfd967fb9d28d705d6891933bab603dc9/packages/enhanced-img/src/index.js#L113C18-L113C76
 */
export const imgDimensions16x9 = [
  { w: 540, h: 304 },
  { w: 768, h: 432 },
  { w: 1080, h: 608 },
  { w: 1366, h: 768 },
  { w: 1536, h: 864 },
  { w: 1920, h: 1080 },
  { w: 2560, h: 1440 },
  { w: 3000, h: 1688 },
  { w: 4096, h: 2304 },
  { w: 5120, h: 2880 },
];

/**
 * @see https://github.com/sveltejs/kit/blob/f80ba75dfd967fb9d28d705d6891933bab603dc9/packages/enhanced-img/src/index.js#L113C18-L113C76
 */
export const imgDimensions3x4 = [
  { w: 540, h: 720 },
  { w: 768, h: 1024 },
  { w: 1080, h: 1440 },
  { w: 1366, h: 1821 },
  { w: 1536, h: 2048 },
  { w: 1920, h: 2560 },
  { w: 2560, h: 3413 },
  { w: 3000, h: 4000 },
  { w: 4096, h: 5461 },
  { w: 5120, h: 6827 },
];
