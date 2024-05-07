<script lang="ts">
    import { onMount } from 'svelte';
    import AOS from 'aos';
    import 'aos/dist/aos.css';
    import '../app.css';
    import '../fonts.css';
    import Topbar from '$lib/components/Topbar.svelte';
  
    onMount(() => {
      AOS.init({
        once: true,
        easing: 'ease-out',
        disable:
          /bot|crawler|spider|crawling/i.test(navigator.userAgent) ||
          window.matchMedia('(prefers-reduced-motion: reduce)').matches,
      });
    });
  
    export let data;
  </script>
  
  {#if data.config.topbarVisible && data.config.topbarContent}
    <Topbar content={data.config.topbarContent} />
  {/if}
  
  <slot />