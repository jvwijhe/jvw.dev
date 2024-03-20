<script>

    import '../css/tailwind.css'
	import Header from '../components/molecules/Header.svelte';
	import Footer from '../components/molecules/Footer.svelte';
    export let data;
    import AOS from 'aos';
    import 'aos/dist/aos.css'; // You can also use <link> for styles
	import { onMount } from 'svelte';

onMount(() => {
    AOS.init();
});

  </script>

<svelte:head>
<!-- seo elements for Jens van Wijhe-->
<title>Jens van Wijhe</title>
<meta name="title" content="Jens van Wijhe">
<meta name="description" content="Software developer & e-commerce specialist. Building user-friendly applications, platforms and webshops.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://jvw.dev/">
<meta property="og:title" content="Jens van Wijhe">
<meta property="og:description" content="Software developer & e-commerce specialist. Building user-friendly applications, platforms and webshops.">
<meta property="og:image" content="/jvw-dev.png">


<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://jvw.dev/">
<meta property="twitter:title" content="Jens van Wijhe">
<meta property="twitter:description" content="Software developer & e-commerce specialist. Building user-friendly applications, platforms and webshops.">
<meta property="twitter:image" content="/jvw-dev.png">

<!-- index-->
<meta name="robots" content="index, follow">

</svelte:head>
<main class="min-h-screen bg-project-green-900">
    <Header />
    <slot />
    <Footer />
</main>