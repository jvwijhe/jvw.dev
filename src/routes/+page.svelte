<script lang="ts">

  let links = [
    {
      name: "Beter Bekend",
      desciption: "Digital e-commerce agency",
      url: "https://www.beterbekend.nl",
    },

    {
      name: "Veluwe onderneemt",
      desciption: "Local business listing platform",
      url: "https://www.veluweonderneemt.nl",
    },

    {
      name: "Bergfanaten",
      desciption: "Hiking community platform",
      url: "https://www.instagram.com/bergfanaten",
    }

  ]
</script>

<section class="py-24">
	<div class="container max-w-4xl mx-auto space-y-7">
		<h1 class="text-4xl text-project-white-900 font-pf">Jens van Wijhe</h1>
		<div class="prose">
			<p class="text-project-white-800">
        Software developer & e-commerce expert.
        Building user-friendly applications, platforms and webshops.
			</p>
		</div>

		<div>
			<a
				href="/contact"
				class="bg-project-white-900 text-project-green-900 rounded-full py-3 px-7 font-pf text-base"
				>How can I help?</a
			>
		</div>
	</div>
</section>


<section class="py-24">
  <div class="container">
    <ul class="flex flex-col ">
      {#each links as link}
        <li class="border-t border-project-white-200 py-5" >
          <a href={link.url} rel="nofollow noopener" class="text-project-white-800 font-pf text-lg">{link.name}</a>
          <p class="text-project-white-500 font-light">{link.desciption}</p>
        </li>
    {/each}
    </ul>
    
  </div>
</section>