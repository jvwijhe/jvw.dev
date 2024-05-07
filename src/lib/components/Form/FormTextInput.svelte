<script lang="ts" context="module">
  type T = Record<string, unknown>;
</script>

<script lang="ts" generics="T extends Record<string, unknown>">
  import { formFieldProxy, type SuperForm, type FormPathLeaves } from 'sveltekit-superforms';

  export let form: SuperForm<T>;
  export let field: FormPathLeaves<T>;

  const { value, errors, constraints, tainted } = formFieldProxy(form, field);
</script>

<input
  class="mt-1 block w-full rounded-sm border-black border-opacity-25 px-4 py-2.5 shadow-sm focus:border-black focus:ring-1 focus:ring-black"
  class:border-opacity-100={$tainted}
  name={field}
  id={field}
  aria-invalid={$errors ? 'true' : undefined}
  bind:value={$value}
  {...$constraints}
  {...$$restProps}
/>

{#if $errors}<span class="mt-1 text-brand-error">{$errors}</span>{/if}
