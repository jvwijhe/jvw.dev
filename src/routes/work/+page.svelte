<script lang="ts">
	let links = [
		{
			name: 'Beter Bekend',
			desciption: 'Founder of Beter Bekend. Digital e-commerce agency',
			url: 'https://www.beterbekend.nl'
		},
		{
			name: 'Bergfanaten',
			desciption: 'Outdoorplatform',
			url: 'https://bergfanaten.nl'
		},
		{
			name: 'Houtenspeelhuizen.nl',
			desciption: 'Houtenspeelhuizen.nl',
			url: 'https://www.houtenspeelhuizen.nl'
		},
		{
			name: 'Uniekebomen.nl',
			desciption: 'uniekebomen.nl - Online tree and shrub webshop',
			url: 'https://www.uniekebomen.nl'
		},
		{
			name: 'Kindernamen - iOs app',
			desciption: 'iOs app for finding the perfect name for your child',
			url: 'https://apps.apple.com/nl/app/kindernamen/id6474193585'
		}
	];
</script>

<section class="py-24">
	<div class="container max-w-4xl mx-auto space-y-7">
		<h1 class="text-3xl text-project-green-900 font-pf" data-aos="fade-in" data-aos-delay={100}>
			My work
		</h1>
		<div class="prose">
			<p class="text-project-green-600 font-light prose" data-aos="fade-in" data-aos-delay={100}>
				Some recent projects I enjoyed working on.
			</p>
		</div>
	</div>
</section>

<section class="py-24">
	<div class="container">
		<ul class="flex flex-col">
			{#each links as link, l}
				<a
					href={link.url}
					rel="nofollow noopener"
					class="border-t border-project-white-200 py-5 trans"
				>
					<span class="trans hover:text-project-green-800 text-project-green-900 font-pf text-lg"
						>{link.name}</span
					>
					<p class="text-project-green-600 font-light">{link.desciption}</p>
				</a>
			{/each}
		</ul>
	</div>
</section>
