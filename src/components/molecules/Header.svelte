<script lang="ts">
	import Logo from "../atoms/Logo/Logo.svelte";


    let menu = [
        {
            name: 'Work',
            url: '/work'
        },
        {
            name: 'Blog',
            url: '/blog'
        },
    ]
</script>

<header class="">
    <div class="container max-w-4xl flex justify-between items-center py-4">
        <Logo />
        <ul class="flex items-center gap-6">
           {#each  menu as item}
            <li>
                <a href="{item.url}" class="hover:underline font-pf text-project-green-900 text-base">{item.name}</a>
            </li>
           {/each}
        </ul>
    </div>
   
</header>