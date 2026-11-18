# Web Development Portfolio: Jean Berrios-Marquez

Websites for small businesses, built secure.

**Live site:** https://cyberjean98.github.io/web-development-portfolio/

This repo shows the full process behind each site, not just the finished page. Every concept site follows the same pipeline:

```
Design taste → Design system → Brand book → HTML example → WordPress theme
```

Each step is the reference for the next one, so the final theme matches the design decisions exactly.

## Concept sites

| Site | Direction | Design system | Brand book | HTML example | WordPress theme |
| --- | --- | --- | --- | --- | --- |
| Brasa (restaurant) | Warm Local | [tokens + components](brasa/design-system/) | [brand book](brasa/brand-book.md) | [live](https://cyberjean98.github.io/web-development-portfolio/brasa/) | [block theme](brasa/theme/) ✅ |
| Northbound Roofing (contractor) | Clean Pro | [tokens + components](northbound/design-system/) | [brand book](northbound/brand-book.md) | [live](https://cyberjean98.github.io/web-development-portfolio/northbound/) | [block theme](northbound/theme/) ✅ |
| Lockline Security (cybersecurity) | Technical Dark | [tokens + components](lockline/design-system/) | [brand book](lockline/brand-book.md) | [live](https://cyberjean98.github.io/web-development-portfolio/lockline/) | [block theme](lockline/theme/) ✅ |

All three businesses are fictional. The HTML examples are hand-written HTML and CSS that load their design tokens from `design-system/tokens.css`. They're responsive and keyboard-accessible, and color pairings meet WCAG AA contrast.

## Repo layout

```
├── index.html              Portfolio landing page
├── playbook/               Design taste playbook (directions, discovery, checklist)
├── img/                    Screenshots used on the landing page
└── <site>/
    ├── design-system/      tokens.css + README (colors, type, spacing, components)
    ├── brand-book.md       Voice, logo, color and type rules, do's and don'ts
    ├── index.html          HTML example (the live page)
    └── theme/              WordPress block theme (folder + installable .zip)
```

## WordPress themes

The themes are full-site-editing block themes. Colors, fonts and spacing come from the design system, set in `theme.json`. Fonts are self-hosted (no Google Fonts calls). Every homepage section is an editable block pattern.

To try one: in WordPress, go to Appearance → Themes → Add New → Upload Theme and choose `<site>/theme/<site>.zip`. Or copy the theme folder into `wp-content/themes/` in Local WP.

## Open-source WordPress security work

- [JAT Site Shield](https://github.com/CptNope/JAT-Site-Shield): Spanish translation and testing
- [JAT Shell Scanner](https://github.com/CptNope/JAT-Shell-Scanner): Spanish translation and testing

Both are free on WordPress.org, by Jeremy Anderson Tech.

## Contact

jeanberrios53@gmail.com · Worcester, MA · English, Spanish, Portuguese
