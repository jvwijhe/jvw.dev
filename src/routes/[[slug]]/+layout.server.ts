import { dev } from '$app/environment';
import { useStoryblokApi, type ISbStoryData } from '@storyblok/svelte';
import { error, redirect } from '@sveltejs/kit';

export const load = async ({ params }) => {
  if (params.slug === 'site-config') redirect(301, '/');

  const storyblokApi = useStoryblokApi();

  return {
    story: await (async () => {
      try {
        const slug = params.slug ?? 'home';


        if (dev) console.debug('Loading story:', slug);

        const { data } = await storyblokApi.get(`cdn/stories/${slug}`, {
          version: 'published',
        });

        return data.story as ISbStoryData;
      } catch (e) {
        console.error(e);
        error(404, {
          message: 'Pagina niet gevonden',
        });
      }
    })(),
  };
};