# Mid-Hudson Misfits block theme

Standalone block theme (no parent). Tokens come from the Foundations frame in the Mid-Hudson Misfits Figma file.

## Where things live
- `theme.json`: palette, type, spacing, shadows, button and link styles
- `styles/blocks/`: block style variations (Card, Scoreboard, Sticker, Tag)
- `patterns/`: hero, scoreboard, bout row (sample copy)
- `templates/`, `parts/`: index, page, single, search, 404, header, footer
- `assets/fonts/`: DM Sans (SIL OFL)

## Open items
- Houndcats PB is self-hosted (`assets/fonts/houndcats-pb.woff`, from the FontBros webfont). The license file still needs saving with the league records (#10).
- Logo, star and photo assets need exporting from Figma.
- Display text uses CSS uppercase on h1 and the site title, per the design. Revisit against the sentence-case guideline.

## Workflow
Edit on staging or locally, commit to `main`, deploy to staging first. Do not use "Deploy all changes" in HostGator without checking the database diff.

## Home page build (from Jazmin's Figma, node 492:392)

- `templates/front-page.html` stacks three patterns: `home-bout-hero`, `home-join`, `home-last-game`. Header, footer, logo and footer newsletter are template parts / patterns.
- Layout lives in `assets/css/layout.css`. Desktop (782px and up): each section is a "stage" placed from the 1440px comp, in percentages, with type sized by container query units, so the collage scales as one piece. Mobile: the same pieces stack in one column with smaller tilts. Mobile sections below the hero are not designed yet; this is a reasoned reflow, to confirm with Jazmin.
- Colours, fonts and shadows come from `theme.json`. CSS holds geometry only.
- Placeholder copy: nav items, bout date and "Doors ?pm", footer text, image alt text. Replace with real content.
- Newsletter forms post nowhere yet. Connect them to the league's mailing list tool.
- AI opt-out: `functions.php` adds `noai, noimageai` to the robots meta and an `X-Robots-Tag` header. These are requests only; Cloudflare rules (ADR-0001) do the enforcing. Images in `assets/images` are web-sized WebP with copyright metadata embedded.
- Open for Jazmin: Cabin font in nav and footer lists, footer texture asset, full-resolution photo originals, uppercase display text.
