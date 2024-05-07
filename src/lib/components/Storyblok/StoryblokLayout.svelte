<script lang="ts">
  import { cva, cx, type VariantProps } from 'class-variance-authority';

  const layout = cva('', {
    variants: {
      marginTop: {
        0: '',
        8: 'mt-2',
        16: 'mt-4',
        32: 'mt-8',
        64: 'mt-16',
        96: 'mt-24',
      },
      marginBottom: {
        0: '',
        8: 'mb-2',
        16: 'mb-4',
        32: 'mb-8',
        64: 'mb-16',
        96: 'mb-24',
      },
      paddingTop: {
        0: '',
        8: 'pt-2',
        16: 'pt-4',
        32: 'pt-8',
        64: 'pt-16',
        96: 'pt-24',
      },
      paddingBottom: {
        0: '',
        8: 'pb-2',
        16: 'pb-4',
        32: 'pb-8',
        64: 'pb-16',
        96: 'pb-24',
      },
      width: {
        container: 'container',
        fullWidth: 'w-full',
      },
      background: {
        default: '',
        accent: '',
      },
    },
    compoundVariants: [
      {
        background: 'accent',
        class: 'py-16 lg:py-24',
      },
    ],
    defaultVariants: {
      marginTop: 96,
      marginBottom: 96,
      paddingTop: null,
      paddingBottom: null,
      width: 'container',
      background: 'default',
    },
  });

  const backgroundClass = cva('', {
    variants: {
      background: {
        default: '',
        accent: 'bg-brand-background',
      },
    },
  });

  interface Configurations extends VariantProps<typeof layout> {}

  export let blok: {
    background?: Configurations['background'];
    width?: Configurations['width'];
    marginTop?: string | number | any;
    marginBottom?: string | number | any;
    paddingTop?: string | number | any;
    paddingBottom?: string | number | any;
  };

  $: ({ marginTop, marginBottom, paddingTop, paddingBottom, width, background } = blok || {});
</script>

<div class={backgroundClass({ background })}>
  <div
    class={cx(
      layout({ marginTop, marginBottom, paddingTop, paddingBottom, width, background }),
      $$restProps.class,
    )}
  >
    <slot />
  </div>
</div>
