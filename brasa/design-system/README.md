# Brasa design system

Direction: **Warm Local**. Tokens live in [`tokens.css`](tokens.css). The live example is [`../index.html`](../index.html), and the WordPress theme in [`../theme/`](../theme/) uses the same values in `theme.json`.

## Color

| Token | Hex | Use | Contrast |
| --- | --- | --- | --- |
| `--basil` | #24402C | Hero and main brand surface | Paper text 10.0:1 |
| `--basil-deep` | #1A3021 | Header, footer, map | — |
| `--saffron` | #F2A93B | Buttons and the oven ember only | Dark text 8.3:1 |
| `--sage` | #EEF0E7 | Page background | Ink 12.9:1, muted 5.0:1 |
| `--wood` | #3A2A1F | Private-events band (once per page) | Light text 11.8:1 |
| `--ink` | #1F2A22 | Body text | — |
| `--muted` | #5B6A5F | Descriptions, captions | 5.0:1 on sage |
| `--line` | #D5DACB | Dividers | — |

Rule: saffron marks things you can click (plus the ember). Never use it for headings or backgrounds.

## Type

| Role | Font | Size token | Notes |
| --- | --- | --- | --- |
| Brand name (hero) | Young Serif 400 | `--fs-display` | Line height .95 |
| Section headings | Young Serif 400 | `--fs-h2` | Sentence case |
| Sub-headings, prices | Young Serif 400 | `--fs-h3` / 1.15rem | Prices are plain numbers, no $ |
| Body | Work Sans 400 | `--fs-body` | Max ~60 characters per line |
| Labels, dish names, buttons | Work Sans 600 | `--fs-body` | No all caps |

## Spacing and shape

- 8px base: 8, 16, 24, 32, 48, 64. Section padding is 104px.
- Buttons and the map pin are pills (`--radius-pill`). Cards use 18px.
- **Signature shape:** the oven arch (`--radius-arch`: 220px top corners, 18px bottom). Use it once per page.

## Components

| Component | Where | Anatomy |
| --- | --- | --- |
| Header | Every page | Wordmark, 3 links, saffron "Reserve a table" button. Basil-deep background. |
| Button | Everywhere | Saffron pill, dark text, weight 600. Ghost variant: transparent with a 2px outline, used on green only. |
| Oven card | Hero | Arch top, ember glow, title, one-line note, 4 dishes with dotted price leaders |
| Fact row | Story | 3 facts: serif number + small label |
| Menu column | Menu | Serif heading with 2px basil underline; each item has name, price and description, divided by hairlines |
| Hours table | Visit | Day and time per row; times use tabular figures; closed days in muted |
| Map block | Visit | Drawn street grid on basil-deep, saffron street line, pill pin |
| Band CTA | Events | Full-width wood background, heading and line on the left, button on the right |
| Footer | Every page | Address and phone, plus the concept credit |

## Responsive

- At 900px or narrower, the hero stacks and the oven card caps at 460px.
- At 820px or narrower, story, menu and visit go to one column.
- At 760px or narrower, nav links hide and only the reserve button stays.
