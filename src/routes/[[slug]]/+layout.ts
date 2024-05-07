import { PUBLIC_STORYBLOK_TOKEN } from '$env/static/public';
import { loadStoryblok } from '$lib/storyblok/index.js';

export const load = async ({ data }) => {
  loadStoryblok(PUBLIC_STORYBLOK_TOKEN);
  return data;
};