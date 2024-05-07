import { z } from 'zod';

export const contactFormSchema = z.object({
  type: z
    .nativeEnum(
      { Video: 'video', Call: 'phone' },
      { errorMap: () => ({ message: 'Deze selectie is vereist' }) },
    )
    .default(''),
  name: z.string(),
  title: z.string(),
  company: z.string(),
  email: z.string().email(),
  phone: z.string().min(3),
});

export type ContactFormSchema = typeof contactFormSchema;
