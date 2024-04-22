<script lang="ts">
	let links = [
		{
			name: 'Beter Bekend',
			desciption: 'Founder of Beter Bekend. Digital e-commerce agency',
			url: 'https://www.beterbekend.nl'
		},

		{
			name: 'Veluwe onderneemt',
			desciption: 'Local business listing platform',
			url: 'https://www.veluweonderneemt.nl'
		},
		{
			name: 'Bergfanaten',
			desciption: 'Hiking community platform',
			url: 'https://www.instagram.com/bergfanaten'
		},
		{
			name: 'Kindernamen - iOs app',
			desciption: 'iOs app for finding the perfect name for your child',
			url: 'https://apps.apple.com/nl/app/kindernamen/id6474193585'
		},
		{
			name: 'Uniekebomen.nl',
			desciption: 'uniekebomen.nl - Online tree and shrub webshop',
			url: 'https://www.uniekebomen.nl'
		},
		{
			name: 'Houtenspeelhuizen.nl',
			desciption: 'Houtenspeelhuizen.nl',
			url: 'https://www.houtenspeelhuizen.nl'
		}
	];
</script>

<section class="py-24">
	<div class="container max-w-4xl mx-auto space-y-7">
		<h1 class="text-5xl text-project-white-900 font-pf" data-aos="fade-in" data-aos-delay={250}>
			Jens van Wijhe
		</h1>
		<div class="prose">
			<p class="text-project-white-800" data-aos="fade-in" data-aos-delay={500}>
				Entrepreneur, software developer & e-commerce specialist. Building user-friendly applications, platforms and
				webshops.
			</p>
		</div>

		<div>
			<a
				data-aos="fade-in"
				data-aos-delay={750}
				href="https://www.x.com/jensvanwijhe"
				rel="nofollow noopener"
				class="bg-project-white-900 text-project-green-900 rounded-full py-3 px-7 font-pf text-base"
				>How can I help?</a
			>
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
          data-aos="fade-in"
          data-aos-delay={l * 250}
          data-aos-once="true"

					class="border-t border-project-white-200 py-5 trans"
				>
					<span class="trans hover:text-project-white-900 text-project-white-800 font-pf text-lg"
						>{link.name}</span
					>
					<p class="text-project-white-500 font-light">{link.desciption}</p>
				</a>
			{/each}
		</ul>
	</div>
</section>