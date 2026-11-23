# Design Taste Playbook

The taste layer that comes before every build. Taste decides what a site should feel like. [Impeccable](https://impeccable.style) decides how to build it well. Choose the direction here first, then let Impeccable carry it out.

## Pipeline (per client)

| Step | Output | Where it lives |
| --- | --- | --- |
| 1. Discovery and taste | One-line brief + style direction | This playbook (and the design-taste Claude skill) |
| 2. Design system | Tokens and components | `design-system/` in the site's repo |
| 3. Brand book | Voice, logo, color and type rules | `brand-book.md` |
| 4. Design panels (optional) | Key-screen mockups | — |
| 5. HTML example | A working reference page | `index.html` |
| 6. Theme | WordPress block theme | `theme/` |
| 7. Compliance | Privacy policy, terms, accessibility statement | `privacy/`, `terms/`, `accessibility/` |

Each step is the reference for the next one. With all of them in the repo, generating the theme becomes much more accurate. Each client site gets its own repo.

## Tools in the workflow

- **Design taste (this playbook):** decides what the site should feel like and why.
- **[Taste Skill](https://www.tasteskill.dev):** art direction from a library of curated sites, plus a checker that opens the page in a real browser and flags generic layouts, weak headings, missing visuals and copy clichés. Install per project with `npx skills add https://github.com/Leonxlnx/taste-skill --skill "design-taste-frontend"` (Node 22+ and Chrome). Review it first: it adds a Stop hook that runs its checker every time the agent finishes.
- **[Impeccable](https://impeccable.style):** build quality: type, spacing, motion, anti-patterns.
- **axe-core:** accessibility testing. Every page must pass WCAG 2.1 AA with 0 violations before launch.

## Compliance checklist (every client site)

Modeled on [jeremyanderson.tech](https://jeremyanderson.tech).

- [ ] **Privacy policy** written for how the site actually works: what's collected, why, who processes it, retention, and rights (GDPR for EU/UK visitors, CCPA for California, deletion requests answered within 30 days)
- [ ] **No data leaks by default:** self-host fonts, no analytics without a privacy-friendly choice and a policy update, no embedded maps or videos that track visitors. If cookies are ever needed, add consent first.
- [ ] **Forms** say how the data will be used and link to the privacy policy
- [ ] **Terms of service:** Massachusetts governing law, consumer rights under Chapter 93A preserved, quotes and prices clearly non-binding until written
- [ ] **Accessibility statement:** WCAG 2.1 AA target, what was done, known limitations, how to report a barrier (reply within 5 business days)
- [ ] **Accessibility build:** skip link, landmarks, visible focus, labeled fields, 4.5:1 contrast, reduced motion, 200% zoom
- [ ] Footer links to Privacy, Terms and Accessibility on every page
- [ ] Have the client review legal pages; templates aren't legal advice

## Core taste principles

1. **One idea per site.** Each brand gets a single feeling. Cut any choice that doesn't support it.
2. **Contrast is the design.** A headline-to-body size jump of about 3:1 looks intentional. 1.3:1 looks timid.
3. **Limit the palette.** One neutral family, one accent, at most one supporting color. The accent marks clickable things only.
4. **Type does most of the work.** At most 2 typefaces and 3–4 sizes.
5. **Whitespace signals confidence.** When unsure, double the space between sections.
6. **Real content beats decoration.** Real photos, numbers and addresses.
7. **Specific beats generic.** Use a city, a year, a name, a number.
8. **Consistency over cleverness.** Break a rule once, on purpose, in the hero.
9. **Every page needs a job.** Each page has one main action.
10. **Steal structure, not style.**

## Style directions

| Direction | Feels like | Type | Color | Avoid |
| --- | --- | --- | --- | --- |
| Warm Local | Friendly, rooted | Serif headlines, plain sans body | Light base, one earthy accent | Glossy gradients |
| Editorial | Premium, story-led | Large serif display | Near-black on white | Rounded cards, emoji |
| Clean Pro | Trustworthy, competent | One neutral sans, 3–4 sizes | White/gray, one confident accent | Decoration that explains nothing |
| Bold Brutal | Loud, memorable | Heavy grotesk, very large | Black, white, one saturated accent | Pastels, timid sizing |
| Technical Dark | Precise, secure | Sans headlines, mono for data only | Navy/charcoal, one bright accent | Neon, hacker clichés |
| Soft Modern | Calm, approachable | Rounded geometric sans | Light tints, one hue | Low-contrast text |

The examples are [Brasa](https://github.com/CyberJean98/brasa-restaurant) (Warm Local), [Northbound Roofing](https://github.com/CyberJean98/northbound-roofing) (Clean Pro) and [Lockline Security](https://github.com/CyberJean98/lockline-security) (Technical Dark).

## Client discovery questions

1. Who is your best customer? Describe one real person.
2. What must they do on the site in under 10 seconds?
3. Three words customers use about you, and one word you never want to hear.
4. Top two competitors, and what you like or dislike about their sites.
5. One website you love, from any industry, and why.
6. Do you have real photos of the place, team or work?
7. Existing logo, colors or fonts to keep?
8. The single action that makes you money: call, book, buy, or visit?
9. Who updates the site after launch?
10. Budget and launch date?

Brief: *"This site should feel **[direction]** to **[customer]**, unlike **[competitor]**."*

## Taste review checklist

- [ ] **Squint test:** blurred, the headline and main button still stand out
- [ ] **5-second test:** a stranger can say what the business does and where
- [ ] **Logo swap test:** with a competitor's logo, it should *not* still work
- [ ] One direction throughout
- [ ] At most 2 typefaces and 4 text sizes per page
- [ ] Accent color only on clickable things plus one highlight
- [ ] Real or clearly on-brand photos
- [ ] One obvious main action per page
- [ ] Phone number and main button reachable by thumb on the first mobile screen
- [ ] Copy has specifics
- [ ] Consistent section spacing
- [ ] Contact details match the Google Business Profile

## Reference library

[Godly](https://godly.website), [Land-book](https://land-book.com), [SiteInspire](https://www.siteinspire.com), [Awwwards](https://www.awwwards.com), [Mobbin](https://mobbin.com), [Typewolf](https://www.typewolf.com), [Fonts In Use](https://fontsinuse.com), [Refactoring UI](https://www.refactoringui.com).
