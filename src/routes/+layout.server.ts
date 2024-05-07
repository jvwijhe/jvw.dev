import { PUBLIC_STORYBLOK_TOKEN } from '$env/static/public';
import { contactFormSchema } from '$lib/schemas';
import { loadStoryblok } from '$lib/storyblok';
import type { SiteConfigStoryblok } from '$lib/storyblok/types';
import { useStoryblokApi } from '@storyblok/svelte';
import { superValidate } from 'sveltekit-superforms';
import { zod } from 'sveltekit-superforms/adapters';

export const load = async () => {
  loadStoryblok(PUBLIC_STORYBLOK_TOKEN);

  const storyblokApi = useStoryblokApi();

  return {
    config: await (async () => {
      const { data } = await storyblokApi.get('cdn/stories/site-config', {
        version: 'published',
        resolve_links: 'url',
      });

      return data?.story?.content as SiteConfigStoryblok;
    })(),
    contactForm: await superValidate(zod(contactFormSchema)),
  };
};