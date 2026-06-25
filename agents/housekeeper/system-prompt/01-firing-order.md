---
type: firing-order
status: active
project: Motif
agent: Housekeeper Agent
firing_order: 01
---

# 01 - Firing Order

## Purpose

The Firing Order defines the exact order the Housekeeper Agent should load and apply its instructions.

The order matters.

The first rules shape how later rules are understood.

## Firing Order Format

Use a two-digit number followed by a clear file name.

Example:

```text
00-core-system-prompt.md
01-firing-order.md
02-load-sequence.md
```

## Current Firing Order

| Order | File | Purpose |
| --- | --- | --- |
| 00 | 00-core-system-prompt.md | Establish identity, role, and primary duty. |
| 01 | 01-firing-order.md | Define the order instructions are loaded. |
| 02 | 02-load-sequence.md | Explain how to read project files after the system prompt. |
| 03 | 03-rule-stack.md | Define the main rules that govern behavior. |
| 04 | 04-context-stack.md | Define the project context the agent should remember. |
| 05 | 05-output-contract.md | Define how the agent should report work. |
| 06 | 06-drag-drop-order-interface.md | Describe future UI for reordering rules. |

## Repo-Level Instruction Order

After the system prompt folder is loaded, the agent should inspect these project files in this order:

| Order | File Or Folder | Purpose |
| --- | --- | --- |
| A01 | README.md | Understand the public repo front door. |
| A02 | ABOUT.md | Understand project identity. |
| A03 | PRD.md | Understand product requirements. |
| A04 | repo-manifest.md | Understand required repo areas. |
| A05 | release-ledger.md | Understand version and milestone state. |
| A06 | agents/housekeeper/knowledge-sources.md | Understand knowledge source rules. |
| A07 | features/ledger.md | Understand feature state. |
| A08 | obsidian/ | Understand wiki and graph notes. |
| A09 | obsidian/journal/ | Understand decision history. |
| A10 | docs/ | Understand product and engineering docs. |
| A11 | plugin/ | Understand implementation state. |
| A12 | tests/ | Understand validation state. |

## Rule

If a future UI changes the firing order, the UI should update:

```text
firing-order.json
01-firing-order.md
```

## Related Files

- firing-order.json
- 06-drag-drop-order-interface.md
