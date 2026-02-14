# RiceJobs Design System - OKLCH Implementation

## Color Palette (OKLCH System)

All colors are implemented using the OKLCH color space for perceptually uniform color rendering.

### Primary Colors

| Token | OKLCH Value | Usage |
|-------|-------------|-------|
| **Primary** | `oklch(0.5417 0.1790 288.0332)` | Main action buttons, active states, brand accents |
| **Primary Foreground** | `oklch(1.0000 0 0)` | Text on primary background (white) |

### Secondary Colors

| Token | OKLCH Value | Usage |
|-------|-------------|-------|
| **Secondary** | `oklch(0.9174 0.0435 292.6901)` | Section headers, borders, subtle highlights |
| **Secondary Foreground** | `oklch(0.4143 0.1039 288.1742)` | Main text color, headings |

### Background & Surface Colors

| Token | OKLCH Value | Usage |
|-------|-------------|-------|
| **Background** | `oklch(0.9730 0.0133 286.1503)` | Page background with subtle pattern |
| **Card** | `oklch(1.0000 0 0)` | Pure white for form container |
| **Muted** | `oklch(0.9580 0.0133 286.1454)` | Subtle backgrounds, helper text areas |
| **Muted Foreground** | `oklch(0.4143 0.1039 288.1742)` | Helper text, secondary information |

### Input & Border Colors

| Token | OKLCH Value | Usage |
|-------|-------------|-------|
| **Border** | `oklch(0.9115 0.0216 285.9625)` | Standard borders |
| **Input** | `oklch(0.9115 0.0216 285.9625)` | Input field borders (default state) |

### Feedback Colors

| Token | OKLCH Value | Usage |
|-------|-------------|-------|
| **Destructive** | `oklch(0.6861 0.2061 14.9941)` | Error states, required field markers |
| **Destructive Foreground** | `oklch(1.0000 0 0)` | Text on destructive background |
| **Success Background** | `oklch(0.95 0.05 150)` | Success message background |
| **Success Border** | `oklch(0.65 0.15 150)` | Success message border |
| **Success Text** | `oklch(0.35 0.12 150)` | Success message text |

### Sidebar Colors (for future use)

| Token | OKLCH Value | Usage |
|-------|-------------|-------|
| **Sidebar** | `oklch(0.9580 0.0133 286.1454)` | Sidebar background |
| **Sidebar Primary** | `oklch(0.5417 0.1790 288.0332)` | Sidebar active/selected items |
| **Sidebar Border** | `oklch(0.9115 0.0216 285.9625)` | Sidebar borders |

---

## Typography

### Font Families

- **Sans/Mono**: `Geist Mono` - Used for labels, inputs, body text, and technical content
- **Serif**: `Source Serif 4` - Used for headings (h1-h6) and emphasis

### Font Loading

```html
<link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@300;400;500;600;700&family=Source+Serif+4:wght@300;400;500;600;700&display=swap" rel="stylesheet">
```

---

## Effects & Shape

### Border Radius

| Token | Value | Usage |
|-------|-------|-------|
| **Default** | `0.875rem` (14px) | Standard rounded corners for inputs, buttons |
| **Small** | `0.625rem` (10px) | Smaller elements |
| **Large** | `1rem` (16px) | Larger containers |
| **XL** | `1.25rem` (20px) | Cards |
| **2XL** | `1.5rem` (24px) | Major containers |

### Shadows

| Token | Value | Usage |
|-------|-------|-------|
| **Default** | `0px 1px 5px #0000000d` | Standard shadow (5% opacity) |
| **Small** | `0px 1px 3px #0000000a` | Subtle elements |
| **Medium** | `0px 1px 5px #0000000d` | Default (same as standard) |
| **Large** | `0px 1px 8px #00000012` | Elevated elements |
| **XL** | `0px 2px 12px #00000015` | Prominent elements |

---

## Implementation Notes

### Tailwind Configuration

The design system is implemented via Tailwind's `config` object:

```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: 'oklch(0.5417 0.1790 288.0332)',
                    foreground: 'oklch(1.0000 0 0)',
                },
                // ... additional colors
            },
            fontFamily: {
                sans: ['Geist Mono', 'monospace'],
                mono: ['Geist Mono', 'monospace'],
                serif: ['Source Serif 4', 'serif'],
            },
            borderRadius: {
                DEFAULT: '0.875rem',
            },
            boxShadow: {
                DEFAULT: '0px 1px 5px #0000000d',
            }
        }
    }
}
```

### CSS Custom Properties

For maximum flexibility, colors are also available as CSS custom properties:

```css
:root {
    --primary: oklch(0.5417 0.1790 288.0332);
    --primary-foreground: oklch(1.0000 0 0);
    --secondary: oklch(0.9174 0.0435 292.6901);
    --secondary-foreground: oklch(0.4143 0.1039 288.1742);
    --background: oklch(0.9730 0.0133 286.1503);
    --card: oklch(1.0000 0 0);
    --muted: oklch(0.9580 0.0133 286.1454);
    --border: oklch(0.9115 0.0216 285.9625);
    --destructive: oklch(0.6861 0.2061 14.9941);
    
    --radius: 0.875rem;
    --shadow: 0px 1px 5px #0000000d;
}
```

### Usage Examples

#### Buttons
```html
<button class="bg-primary text-primary-foreground rounded-xl shadow">
    Submit
</button>
```

#### Input Fields
```html
<input class="border border-input rounded-lg focus:border-primary">
```

#### Error States
```html
<input class="border-destructive bg-[oklch(0.96_0.05_15)]">
<p class="text-destructive">Error message</p>
```

---

## Accessibility

The OKLCH color space provides:
- **Perceptual uniformity**: Colors appear equally bright across the spectrum
- **Better contrast control**: L (lightness) directly correlates to perceived brightness
- **Predictable color adjustments**: Modifying L, C, or H produces consistent results

All text-background combinations meet WCAG AA standards for contrast ratio.
