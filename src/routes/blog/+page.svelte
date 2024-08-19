<script lang="ts">
	let blogs = [
		
	];
</script>

<section class="py-24">
	<div class="container max-w-4xl mx-auto space-y-7">
		<h1 class="text-3xl text-project-green-900 font-pf" data-aos="fade-in" data-aos-delay={100}>
			Blog
		</h1>
		<div class="prose">
			<p class="text-project-green-600 font-light prose" data-aos="fade-in" data-aos-delay={100}>
				Articles I wrote about web development, tech and more.
			</p>
		</div>
	</div>
</section>

<section class="py-24">
	<div class="container">
		{#if blogs.length === 0}
			<p class="text-project-green-500">No blogs found</p>
		{:else}
			<ul class="flex flex-col">
				{#each blogs as blog}
					<a
						href={blog.url}
						rel="nofollow noopener"
						class="border-t border-project-white-200 py-5 trans"
					>
						<span class="trans hover:text-project-green-800 text-project-green-900 font-pf text-lg"
							>{blog.name}</span
						>
						<p class="text-project-green-600 font-light">{blog.desciption}</p>
					</a>
				{/each}
			</ul>
		{/if}
	</div>
</section>
