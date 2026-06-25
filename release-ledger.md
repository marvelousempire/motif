---
type: release-ledger
status: active
project: Motif
---

# Release Ledger

## Purpose

The Release Ledger tracks versions, milestones, and important project states.

It can track code releases, documentation releases, agent releases, structure releases, and knowledge-system releases.

## Current Version

```text
v0.1.1-housekeeper-submodule
```

## Release Types

| Type | Meaning |
| --- | --- |
| concept | New idea or product definition |
| docs | Documentation update |
| agent | Agent behavior or structure update |
| feature | Feature ticket or buildable capability update |
| plugin | WordPress plugin implementation update |
| schema | Data or object schema update |
| runtime | Architecture or runtime mode update |
| structure | Repo structure or submodule update |

## Ledger

| Version | Type | Summary | Status |
| --- | --- | --- | --- |
| v0.1.0-concept | concept | Initial Motif concept and knowledge structure. | active |
| v0.1.1-housekeeper-submodule | structure | Added `agent-housekeeper` as a submodule standard and pruned duplicated local Housekeeper files. | active |

## Housekeeper Duty

Update this file when a major version, milestone, feature, structure, or agent change happens.

## Related Files

- README.md
- ABOUT.md
- repo-manifest.md
- features/ledger.md
- .gitmodules
- docs/housekeeper-submodule-strategy.md
- agents/housekeeper/README.md
- agents/housekeeper/housekeeper-source-manifest.md
