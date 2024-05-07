<script lang="ts">
    import { page } from '$app/stores';
    import ErrorPage404 from '$lib/components/ErrorPage404.svelte';
    import Footer from '$lib/components/Footer.svelte';
    import Header from '$lib/components/Header.svelte';
  </script>
  
  <Header />
  
  {#if $page.status === 404}
    <ErrorPage404 />
  {:else}
    <div class="grid min-h-96 place-items-center">
      <div class="container max-w-4xl text-center">
        <h1 class="font-filson text-2xl font-medium leading-[125%]">Fout</h1>
  
        <p class="mt-2.5">
          <a href="/" class="underline">Klik hier om terug te gaan naar de homepage</a>
        </p>
      </div>
    </div>
  {/if}
  
  <Footer />