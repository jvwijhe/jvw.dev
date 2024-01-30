<script lang="ts">
    import type { LayoutData } from './$types';
    import '../css/tailwind.css'
	import Header from '../components/molecules/Header.svelte';
	import Footer from '../components/molecules/Footer.svelte';
    export let data: LayoutData;
</script>

<main class="min-h-screen bg-project-green-900">
    <Header />
    <slot />
    <Footer />
</main>