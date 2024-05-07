<script lang="ts">
  import { page } from '$app/stores';
  import LogoTypeBoxed from '$lib/icons/LogoTypeBoxed.svelte';
  import IconArrowUpRight from '$lib/icons/mini/IconArrowUpRight.svelte';
  import IconBars2 from '$lib/icons/outline/IconBars2.svelte';
  import IconXMark from '$lib/icons/outline/IconXMark.svelte';
  import Button from './Button.svelte';
  import Topbar from './Topbar.svelte';

  const mainNav = {
    'wat-we-doen': 'Wat we doen',
    'voor-wie': 'Voor wie',
    'over-ons': 'Over ons',
    'werken-bij-lev': 'Werken bij LEV',
  };

  const mobileNav = {
    'wat-we-doen': 'Wat we doen',
    'voor-wie': 'Voor wie',
    'over-ons': 'Over ons',
    'werken-bij-lev': 'Werken bij LEV',
    contact: 'Contact',
  };

  let menuOpen = false;
</script>

<div class="container flex items-center justify-between py-4 sm:py-5">
  <div class="flex items-center gap-16">
    <a href="/" aria-label="LEV-logo - Terug naar de startpagina">
      <LogoTypeBoxed class="h-12 w-auto sm:h-16" />
    </a>

    <ul class="flex items-center gap-8 max-lg:hidden">
      {#each Object.entries(mainNav) as navItem}
        <li>
          <a class="font-medium hover:underline" href={`/${navItem[0]}`}>{navItem[1]}</a>
        </li>
      {/each}
    </ul>
  </div>

  <div class="flex items-center gap-8">
    <div class="flex items-center gap-8 max-sm:hidden">
      <a class="font-medium hover:underline" href="/contact">Contact</a>
      <Button
        blok={{
          _uid: 'header-button',
          component: 'Button',
          label: 'Kennismaken',
          intent: 'secondary',
          size: 'small',
          link: { linktype: 'url', url: '/kennismaken' },
        }}
      />
    </div>

    <div class="lg:hidden">
      <button class="p-2" title="Mobiel menu openen" on:click={() => (menuOpen = true)}>
        <IconBars2 class="h-6 w-6" />
      </button>
    </div>
  </div>
</div>

{#if menuOpen}
  <div class="fixed inset-0 z-50 bg-white">
    {#if $page.data.config.topbarVisible && $page.data.config.topbarContent}
      <Topbar content={$page.data.config.topbarContent} />
    {/if}

    <div class="container relative flex items-center justify-between py-4 sm:py-5">
      <div>
        <a href="/">
          <LogoTypeBoxed class="h-12 w-auto sm:h-16" />
        </a>
      </div>

      <div>
        <button class="p-2" on:click={() => (menuOpen = false)}>
          <IconXMark class="h-6 w-6" />
        </button>
      </div>
    </div>

    <div class="container mt-12">
      <ul class="space-y-2">
        {#each Object.entries(mobileNav) as item}
          <li>
            <a class="text-3xl font-semibold hover:underline" href={`/${item[0]}`}>{item[1]}</a>
          </li>
        {/each}
      </ul>
    </div>

    <div class="container mt-8">
      <a class="flex items-center gap-1 text-2xl" href="/kennismaking">
        Plan een kennismaking <IconArrowUpRight class="h-6 w-6" />
      </a>
    </div>
  </div>
{/if}
