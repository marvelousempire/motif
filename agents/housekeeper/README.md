---
type: agent-readme
status: local-mirror
project: Motif
agent: Housekeeper Agent
source_standard: agent-housekeeper
related:
  - agents/housekeeper/housekeeper-source-manifest.md
  - agents/housekeeper/external-repo-plan.md
---

# Housekeeper Agent - Motif Local Mirror

## Purpose

This folder is the Motif-specific local mirror of the reusable Housekeeper standard.

The reusable standard lives in:

```text
agent-housekeeper
```

Motif keeps this local folder so the project can preserve Motif-specific context, rules, and links while still following the external Housekeeper pattern.

## What This Folder Should Follow

This local Motif Housekeeper should follow the rules, prompt order, templates, and repo-maintenance pattern from `agent-housekeeper`.

Start with:

```text
agents/housekeeper/housekeeper-source-manifest.md
agents/housekeeper/external-repo-plan.md
```

Then follow the local system prompt folder only when Motif-specific instructions are needed.

## Local First Read

```text
agents/housekeeper/system-prompt/00-core-system-prompt.md
agents/housekeeper/system-prompt/01-firing-order.md
agents/housekeeper/system-prompt/firing-order.json
```

## Local Duty

Inside Motif, the Housekeeper must track:

- README.md
- ABOUT.md
- PRD.md
- LICENSE
- repo-manifest.md
- release-ledger.md
- features/ledger.md
- features/tickets/
- obsidian/
- obsidian/journal/
- docs/
- plugin/
- tests/

## Clean-Up Rule

Do not let the Motif local mirror become the master standard.

The master standard is `agent-housekeeper`.

The Motif folder should only keep what Motif needs locally:

- Source manifest
- External repo plan
- Motif-specific context
- Motif-specific firing order overrides if needed
- Motif-specific feature and journal links

## Related Files

- agents/housekeeper/housekeeper-source-manifest.md
- agents/housekeeper/external-repo-plan.md
- README.md
- repo-manifest.md
- release-ledger.md
