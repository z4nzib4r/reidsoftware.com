# Reid Software

Marketing site for [reidsoftware.com](https://reidsoftware.com), built with [Astro](https://astro.build) as a fully static site.

## Development

```sh
npm install
npm run dev      # http://localhost:4321
npm run build    # outputs to dist/
npm run preview  # serve the built site
```

- `src/pages/` – one `.astro` file per route
- `src/components/` – shared partials (nav, footer, case studies, testimonials, …)
- `src/styles/` – SCSS, compiled by Astro
- `public/` – static files served as-is (images, video, vendor JS/CSS, `CNAME`)

## Deployment

Pushing to `main` runs `.github/workflows/deploy.yml`, which builds the site and deploys it to GitHub Pages.
