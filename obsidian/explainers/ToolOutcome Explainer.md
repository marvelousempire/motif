---
type: explainer
status: active
project: Motif
combo_type: ToolOutcome
related:
  - Keyword Combos
  - Intent Pipeline
---

# ToolOutcome Explainer

## What It Means

ToolOutcome shows the tool being used and what that tool helps create.

The tool is the method, app, system, device, or technology.

The outcome is what the tool makes possible.

## Format

```text
#ToolOutcome
```

## Examples

```text
#PythonAutomate
#WordPressPublish
#ScannerDigitize
#HammerBuild
#ObsidianOrganize
#WooCommerceMap
```

## Real-Life Meaning

If someone says `#PythonAutomate`, you know Python is the tool and automation is the outcome.

If someone says `#ObsidianOrganize`, you know Obsidian is the tool and organization is the outcome.

## When To Use It

Use ToolOutcome when the tool matters.

Good cases:

- You are choosing between tools
- You are building a feature around a tool
- You want to track what a tool is helping you accomplish
- You want AI to understand the method being used

## Why It Works In Motif

Motif does not just track ideas.

It tracks how ideas become features, actions, applications, and validated execution.

ToolOutcome helps show which tool moves the work forward.

## Example Motif Record

```yaml
type: feature
name: Python Automation Runner
valid_intent: Help the user automate repeated tasks safely.
pipeline_stage: Feature
keyword_combos:
  - PythonAutomate
  - SaveTime
status: draft
```

## Related Notes

- [[Keyword Combos Explainer]]
- [[Keyword Combos]]
- [[Intent Pipeline]]
