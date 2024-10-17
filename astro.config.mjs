import { defineConfig } from 'astro/config';
import tailwind from "@astrojs/tailwind";
import metaTags from "astro-meta-tags";

import icon from "astro-icon";

// https://astro.build/config
export default defineConfig({
  site: 'https://denisd3d.fr',
  integrations: [tailwind(), metaTags(), icon()]
});