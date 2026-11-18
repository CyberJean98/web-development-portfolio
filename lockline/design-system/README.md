# Lockline Security design system

Direction: **Technical Dark**. Tokens live in [`tokens.css`](tokens.css). The live example is [`../index.html`](../index.html), and the WordPress theme in [`../theme/`](../theme/) uses the same values in `theme.json`.

## Color

| Token | Hex | Use | Contrast on #0F1D2B |
| --- | --- | --- | --- |
| `--ink` | #0F1D2B | Page background | — |
| `--panel` / `--panel-2` | #162A3D / #1D3449 | Report panel and its header | — |
| `--band` | #13253A | Alternating sections | — |
| `--text` | #E6EDF2 | Primary text | 14.4:1 |
| `--soft` | #A3B6C6 | Secondary text | 8.2:1 |
| `--dim` | #8197AC | "Not included" in tables | 5.7:1 |
| `--amber` | #F5B841 | Buttons, score ring, featured plan | Dark text on amber 10.3:1 |
| `--sky` | #7FB8D6 | Links, "Later" severity | 7.9:1 |
| `--high` | #F07B5F | "Urgent" severity only | 5.4:1 on panel |

Rules:
- The background is navy, never pure black, and there's no green-on-black "hacker" styling.
- Severity colors appear only in reports, always with a word label (Urgent, Soon, Later), never color alone.

## Type

| Role | Font | Size token | Notes |
| --- | --- | --- | --- |
| Headlines | IBM Plex Sans 600 | `--fs-display` / `--fs-h2` | Tight tracking (-0.015em) |
| Body | IBM Plex Sans 400 | `--fs-body` | Plain English, no jargon |
| Severity tags, report metadata | IBM Plex Mono 500 | .78rem | The **only** place mono is used |

## Spacing and shape

- 8px base. Section padding is 96px.
- Buttons and tags have a 4px radius; the report panel uses 10px.
- **Signature:** the sample report panel, with a score ring, findings with severity tags, and a one-line fix for each. Use it in the hero.

## Components

| Component | Where | Anatomy |
| --- | --- | --- |
| Header | Every page | Padlock mark and wordmark, soft links, amber "Get a security check" button |
| Report panel | Hero | Header (title and duration), score ring + summary, 3–5 findings (tag, issue, fix) |
| Check list | What we check | Title + one paragraph, hairline dividers |
| Plan table | Plans | Feature rows × plan columns; featured column tinted amber at 6%; yes/no in words |
| Audience columns | Who we help | 3 columns, sky top rule, title and one-sentence pain point |
| Contact row | Bottom | Heading and reassurance line (with the language note), amber button |

## Responsive

- At 900px or narrower, the hero stacks with the report under the text.
- At 860px or narrower, the check list goes to one column.
- At 820px or narrower, audience goes to one column and nav links hide.
- At 760px or narrower, the plan table tightens its padding.
