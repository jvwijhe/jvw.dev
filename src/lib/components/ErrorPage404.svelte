<script>
  import Button from './Button.svelte';
</script>

<div class="my-24 grid min-h-96 place-items-center">
  <div class="container max-w-4xl space-y-8 text-center">
    <h1 class="h2">
      🫠<br />Oh no... Deze pagina bestaat niet (meer).<br />Excuses voor het ongemak.
    </h1>

    <p>
      Fusce gravida ante vel interdum placerat. Vestibulum vulputate pulvinar vulputate. Integer sem
      purus, tincidunt vel egestas ut.
    </p>

    <div class="flex flex-wrap items-center justify-center gap-4">
      <Button
        blok={{
          _uid: 'header-button',
          component: 'Button',
          label: 'Plan een kennismaking',
          intent: 'primary',
          size: 'small',
          link: { linktype: 'url', url: '/kennismaken' },
        }}
      />
      <Button
        blok={{
          _uid: 'header-button',
          component: 'Button',
          label: 'Naar de homepage',
          intent: 'secondary',
          size: 'small',
          link: { linktype: 'url', url: '/kennismaken' },
        }}
      />
    </div>
  </div>
</div>
