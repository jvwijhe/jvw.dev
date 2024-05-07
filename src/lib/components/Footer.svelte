<script lang="ts">
  import LogoTypeBoxed from '$lib/icons/LogoTypeBoxed.svelte';

  const footerNav = {
    'stories': 'Stories',
    contact: 'Contact',
  };
</script>

<footer class="bg-brand-primary text-white">
  <div class="container">
    <div class="grid gap-8 gap-y-12 py-12 sm:grid-cols-2 sm:py-24 lg:grid-cols-4">
      <div>
        <a href="/" aria-label="LEV-logo - Terug naar de startpagina">
          <LogoTypeBoxed style="inverted" class="h-12 w-auto sm:h-16" />
        </a>
      </div>

      <div>
        <ul class="space-y-1">
          {#each Object.entries(footerNav) as navItem}
            <li>
              <a class="leading-relaxed hover:underline" href={`/${navItem[0]}`}>{navItem[1]}</a>
            </li>
          {/each}
        </ul>
      </div>

      <div class="sm:col-span-2">
        <h2 class="text-xl font-medium">Jens van Wijhe</h2>
        <p class="text-xl">
          Bel <a class="font-medium underline" href="tel:0525234466">0525 23 44 66</a> of stuur
          een e-mail naar
          <a class="font-medium underline" href="mailto:werkenmet@levarbo.nl"
            >hi@jvw.dev</a
          >
        </p>
      </div>
    </div>

    <hr class="hr-light" />

    <div
      class="flex flex-col items-center gap-1 pb-12 pt-8 text-sm sm:flex-row sm:justify-between sm:pb-24"
    >
      <div class="text-white text-opacity-75">
        &copy; {new Date().getFullYear()}
        <a href="/" class="text-white text-opacity-75 hover:text-opacity-100">LEV arbo</a>
      </div>
      <a href="/privacyverklaring" class="text-white text-opacity-75 hover:text-opacity-100"
        >Algemene voorwaarden & Privacy</a
      >
    </div>
  </div>
</footer>
