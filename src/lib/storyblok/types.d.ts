import { StoryblokStory } from 'storyblok-generate-ts';

export interface RichtextStoryblok {
  type: string;
  content?: RichtextStoryblok[];
  marks?: RichtextStoryblok[];
  attrs?: any;
  text?: string;
  [k: string]: any;
}

export interface AccordionItemStoryblok {
  headline: string;
  content: RichtextStoryblok;
  isOpenByDefault?: boolean;
  _uid: string;
  component: 'AccordionItem';
  [k: string]: any;
}

export type MultilinkStoryblok =
  | {
      id?: string;
      cached_url?: string;
      anchor?: string;
      linktype?: 'story';
      target?: '_self' | '_blank';
      [k: string]: any;
    }
  | {
      url?: string;
      cached_url?: string;
      anchor?: string;
      linktype?: 'asset' | 'url';
      target?: '_self' | '_blank';
      [k: string]: any;
    }
  | {
      email?: string;
      linktype?: 'email';
      target?: '_self' | '_blank';
      [k: string]: any;
    };

export interface ButtonStoryblok {
  link: Exclude<MultilinkStoryblok, { linktype?: 'asset' }>;
  intent?: 'primary' | 'secondary' | 'secondaryInverted';
  size?: 'normal' | 'small';
  label: string;
  _uid: string;
  component: 'Button';
  [k: string]: any;
}

export type MultiassetStoryblok = {
  alt?: string;
  copyright?: string;
  id: number;
  filename: string;
  name: string;
  title?: string;
  [k: string]: any;
}[];

export interface CallToActionStoryblok {
  headline: string;
  headlineTag: 'h1' | 'h2' | 'h3';
  description?: string;
  avatars?: MultiassetStoryblok;
  buttons?: ButtonStoryblok[];
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'CallToAction';
  [k: string]: any;
}

export interface ContactFormStoryblok {
  headline?: string;
  subheadline?: string;
  content?: (FancyListItemStoryblok | RichTextStoryblok | ButtonStoryblok)[];
  avatars?: MultiassetStoryblok;
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'ContactForm';
  [k: string]: any;
}

export interface AssetStoryblok {
  _uid?: string;
  id: number;
  alt?: string;
  name: string;
  focus?: string;
  source?: string;
  title?: string;
  filename: string;
  copyright?: string;
  fieldtype?: string;
  meta_data?: null | {
    [k: string]: any;
  };
  is_external_url?: boolean;
  [k: string]: any;
}

export interface DefaultPageStoryblok {
  seoTitle?: string;
  seoDescription?: string;
  seoImage?: AssetStoryblok;
  body?: (
    | CallToActionStoryblok
    | ContactFormStoryblok
    | HeroStoryblok
    | HighlightStoryblok
    | InformationItemsStoryblok
    | LogosBarStoryblok
    | ProsConsStoryblok
    | RichTextBlockStoryblok
    | SeparatorStoryblok
    | TeamStoryblok
    | TestimonialsStoryblok
    | TextImageComboStoryblok
  )[];
  _uid: string;
  component: 'DefaultPage';
  [k: string]: any;
}

export interface FancyListItemStoryblok {
  marker: string;
  content: RichtextStoryblok;
  _uid: string;
  component: 'FancyListItem';
  [k: string]: any;
}

export interface HeroStoryblok {
  headline: string;
  headlineTag: 'h1' | 'h2' | 'h3';
  subheadline?: string;
  buttons?: ButtonStoryblok[];
  description?: RichtextStoryblok;
  image: AssetStoryblok;
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'Hero';
  [k: string]: any;
}

export interface HighlightStoryblok {
  headline: string;
  image: AssetStoryblok;
  buttons?: ButtonStoryblok[];
  bgColor: number | string;
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'Highlight';
  [k: string]: any;
}

export interface ImageAssetStoryblok {
  _uid: string;
  component: 'ImageAsset';
  [k: string]: any;
}

export interface InformationItemsStoryblok {
  headline: string;
  headlineTag: '' | 'h1' | 'h2' | 'h3';
  content: (AccordionItemStoryblok | LinkItemStoryblok)[];
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'InformationItems';
  [k: string]: any;
}

export interface LinkItemStoryblok {
  headline: string;
  link: MultilinkStoryblok;
  _uid: string;
  component: 'LinkItem';
  [k: string]: any;
}

export interface LogosBarStoryblok {
  logos: MultiassetStoryblok;
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'LogosBar';
  [k: string]: any;
}

export interface ProsConsStoryblok {
  headlinePros: string;
  subheadlinePros?: string;
  itemsPros: ProsConsItemStoryblok[];
  headline: string;
  headlineTag: 'h1' | 'h2' | 'h3';
  headlineCons: string;
  subheadlineCons?: string;
  itemsCons: ProsConsItemStoryblok[];
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'ProsCons';
  [k: string]: any;
}

export interface ProsConsItemStoryblok {
  ProCon?: boolean;
  content: RichtextStoryblok;
  _uid: string;
  component: 'ProsConsItem';
  [k: string]: any;
}

export interface RichTextStoryblok {
  content: RichtextStoryblok;
  _uid: string;
  component: 'RichText';
  [k: string]: any;
}

export interface RichTextBlockStoryblok {
  headline?: string;
  headlineTag: 'h1' | 'h2' | 'h3';
  content: RichTextStoryblok[];
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'RichTextBlock';
  [k: string]: any;
}

export interface SeparatorStoryblok {
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  style: 'light' | 'dark';
  _uid: string;
  component: 'Separator';
  [k: string]: any;
}

export interface SiteConfigStoryblok {
  topbarVisible?: boolean;
  topbarContent?: RichtextStoryblok;
  seoTitle: string;
  seoDescription: string;
  seoImage: AssetStoryblok;
  _uid: string;
  component: 'SiteConfig';
  [k: string]: any;
}

export interface TeamStoryblok {
  headline: string;
  content: TeamMemberCardStoryblok[];
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  _uid: string;
  component: 'Team';
  [k: string]: any;
}

export interface TeamMemberCardStoryblok {
  image: AssetStoryblok;
  name: string;
  title?: string;
  link?: Exclude<MultilinkStoryblok, { linktype?: 'asset' }>;
  _uid: string;
  component: 'TeamMemberCard';
  [k: string]: any;
}

export interface TestimonialStoryblok {
  testimonial: string;
  image?: AssetStoryblok;
  personName?: string;
  personSubtitle?: string;
  _uid: string;
  component: 'Testimonial';
  [k: string]: any;
}

export interface TestimonialsStoryblok {
  headline: string;
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  testimonials: TestimonialStoryblok[];
  _uid: string;
  component: 'Testimonials';
  [k: string]: any;
}

export interface TextImageComboStoryblok {
  headline: string;
  image: AssetStoryblok;
  content: (ButtonStoryblok | FancyListItemStoryblok | RichTextStoryblok)[];
  background?: 'default' | 'accent';
  width?: 'container' | 'fullWidth';
  paddingTop?: number | string;
  paddingBottom?: number | string;
  marginTop?: number | string;
  marginBottom?: number | string;
  reversed?: boolean;
  _uid: string;
  component: 'TextImageCombo';
  [k: string]: any;
}
