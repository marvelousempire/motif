---
type: explainer
status: active
project: Motif
combo_type: PurposeGain
related:
  - Keyword Combos
  - Intent Pipeline
---

# PurposeGain Explainer

## What It Means

PurposeGain connects the reason something exists to what someone gets from it.

Purpose is the reason.

Gain is the benefit, value, lesson, improvement, or result someone receives.

## Format

```text
#PurposeGain
```

## Examples

```text
#LearnSkill
#GainTrust
#AcquireKnowledge
#SaveTime
#ReduceWaste
#IncreaseClarity
```

## Real-Life Meaning

If someone says `#SaveTime`, you know the purpose is connected to getting time back.

If someone says `#IncreaseClarity`, you know the purpose is to make something easier to understand.

## When To Use It

Use PurposeGain when the value received matters most.

Good cases:

- A feature is meant to help someone learn
- A tool is meant to save time
- A process is meant to reduce waste
- A system is meant to increase clarity
- A workflow is meant to build trust

## Why It Works In Motif

Motif does not only ask, "What are we building?"

Motif also asks, "What value should this create?"

PurposeGain helps keep that value visible.

## Example Motif Record

```yaml
type: idea
name: Guided Skill Builder
valid_intent: Help users learn a new skill with clear steps.
pipeline_stage: Idea
keyword_combos:
  - LearnSkill
  - IncreaseClarity
status: draft
```

## Related Notes

- [[Keyword Combos Explainer]]
- [[Keyword Combos]]
- [[Intent Pipeline]]
