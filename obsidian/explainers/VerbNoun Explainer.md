---
type: explainer
status: active
project: Motif
combo_type: VerbNoun
related:
  - Keyword Combos
  - Intent Pipeline
---

# VerbNoun Explainer

## What It Means

VerbNoun is the simplest and clearest keyword combo.

It tells us:

- What action is happening
- What thing the action is aimed at

The verb is the action.

The noun is the target.

## Format

```text
#VerbNoun
```

## Examples

```text
#MakeBread
#OpenDoor
#FinishReport
#ResearchThings
#CookMeal
#BuildApp
#MapIdeas
```

## Real-Life Meaning

If someone says `#FinishReport`, you do not need a long meeting to understand the basic direction.

You know the action is finish.

You know the target is report.

That is the point.

## When To Use It

Use VerbNoun when the main thing is an action.

Good examples:

- Finish a report
- Build an app
- Open a door
- Map ideas
- Cook a meal

## Why It Works In Motif

Motif starts with intent, but intent needs movement.

VerbNoun gives the movement a clean label.

It is great for:

- Tasks
- Actions
- Features
- Workflows
- App ideas

## Example Motif Record

```yaml
type: action
name: Finish Report
valid_intent: Complete an important report without losing the main idea.
pipeline_stage: Action
keyword_combos:
  - FinishReport
status: active
```

## Related Notes

- [[Keyword Combos Explainer]]
- [[Keyword Combos]]
- [[Intent Pipeline]]
