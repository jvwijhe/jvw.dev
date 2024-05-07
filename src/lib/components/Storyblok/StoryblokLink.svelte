<script lang="ts">
  import type { MultilinkStoryblok } from '$lib/storyblok/types';

  export let link: MultilinkStoryblok;

  let href: string;

  if (link?.linktype === 'story') {
    href = link?.cached_url ? `/${link.cached_url}` : '/';
  } else if (link?.linktype === 'email') {
    href = link?.url ? `mailto:${link.url}` : '/';
  } else {
    href = link?.url || '/';
  }

  let target: string;
  let rel: string;

  if (link.target === '_blank') {
    target = '_blank';
    rel = 'noopener noreferrer';
  }
</script>

<a {href} {target} {rel} {...$$restProps}>
  <slot />
</a>
