# Northbound Roofing design system

Direction: **Clean Pro**. Tokens live in [`tokens.css`](tokens.css). The live example is [`../index.html`](../index.html), and the WordPress theme in [`../theme/`](../theme/) uses the same values in `theme.json`.

## Color

| Token | Hex | Use | Contrast |
| --- | --- | --- | --- |
| `--slate` | #1E2B36 | Top bar, process band, footer | Light text 12.1:1 |
| `--mist` | #EEF2F4 | Hero and recent-jobs background | Muted 5.3:1 |
| `--copper` | #A9581F | Buttons, header phone, prices, CTA band | White on copper 5.1:1 |
| `--copper-2` | #C26A2C | Hover and focus ring | — |
| `--ink` | #17212A | Body text | 16.3:1 on white |
| `--muted` | #566673 | Supporting text | 5.9:1 on white |
| `--line` | #D6DEE3 | Dividers, input borders use #B9C5CD | — |

Rule: copper means "act now": a button, the phone number or a price. Everything else stays slate and gray.

## Type

| Role | Font | Size token | Notes |
| --- | --- | --- | --- |
| Headlines | Archivo 800 at 78% width | `--fs-display` / `--fs-h2` | Line height 1.02; short, punchy statements |
| Phone number | Archivo 800 at 78% width | `--fs-phone` | Always a `tel:` link |
| Body, forms | Public Sans 400/600 | `--fs-body` | Labels are 600 |
| Step labels | Public Sans 600 | `--fs-small` | "Step 1" wording; real sequences only |

## Spacing and shape

- 8px base. Section padding is 96px.
- Buttons and inputs have a 6px radius. Form and table cards use 8px.
- **Signature:** the quote form, a white card with a 6px copper top edge and a soft slate shadow. Use it once per page.

## Components

| Component | Where | Anatomy |
| --- | --- | --- |
| Alert bar | Top of every page | Emergency message left, coverage note right, slate background |
| Header | Every page | Roof-mark logo and name, links, "Call or text" label over the copper phone number. Sticky. |
| Quote form | Hero | Title, promise line, name/phone/town/details, full-width button, reassurance line |
| Proof row | Hero | 3 stats: big condensed number + short label |
| Service row | Services | Name, "From $" price right-aligned, one-paragraph description, hairline dividers. No icons. |
| Process steps | Process | 4 columns with a copper top rule, "Step N", title, one sentence |
| Town list | Area | 3-column list: town + response time |
| Jobs table | Recent jobs | Town, job, time on site, owner quote in italics |
| CTA band | Bottom | Copper background, question on the left, giant phone number on the right |

## Responsive

- At 900px or narrower, the hero stacks (form below the text) and nav links hide. The phone number always stays visible.
- At 860px or narrower, process goes to 2 columns (1 at 520px), and the town list goes to 2 columns.
- At 760px or narrower, the jobs table hides the time column.
