<script lang="ts">
  import { cva } from 'class-variance-authority';
  import type { ButtonStoryblok } from '$lib/storyblok/types';
  import Storyblok from './Storyblok';

  const styles = cva(
    'grid w-min place-items-center whitespace-nowrap text-base rounded-full border border-black leading-[150%] font-medium',
    {
      variants: {
        intent: {
          primary: 'bg-black text-white shadow-none transition-shadow hover:shadow-lg',
          secondary: 'bg-white text-black',
          secondaryInverted: 'bg-transparent text-white border-white',
        },
        size: {
          small: 'px-4 py-2',
          normal: 'px-6 py-3',
        },
      },
    },
  );

  export let blok: ButtonStoryblok;
</script>

<Storyblok.Link
  link={blok.link}
  class={styles({ intent: blok.intent, size: blok.size })}
  {...$$props}
>
  <slot>{blok.label}</slot>
</Storyblok.Link>
