---
type: feature-ticket
status: draft
feature_id: FEAT-0007
project: Motif
---

# FEAT-0007 - System Prompt Firing Order

## Valid Intent

Give the Housekeeper Agent a clear first-read instruction folder and ordered rule stack.

## Pipeline Stage

Feature

## Keyword Combos

```text
#OrderRules
#LoadPrompt
#GuideAgent
```

## User Value

The founder can point another agent to the repo and the agent can know where to start and what order to follow.

## Description

Create a system prompt folder for the Housekeeper Agent.

The folder defines the core system prompt, firing order, load sequence, rule stack, context stack, output contract, and a future drag-and-drop interface concept.

## Acceptance Criteria

```text
[ ] system-prompt folder exists.
[ ] Core system prompt exists.
[ ] Firing order exists.
[ ] Machine-readable JSON order exists.
[ ] Load sequence exists.
[ ] Rule stack exists.
[ ] Drag-and-drop order interface concept exists.
```

## Validation Method

Check that the Housekeeper Agent has a numbered instruction sequence and that README links to it.

## Related Files

- agents/housekeeper/system-prompt/README.md
- agents/housekeeper/system-prompt/00-core-system-prompt.md
- agents/housekeeper/system-prompt/01-firing-order.md
- agents/housekeeper/system-prompt/firing-order.json
