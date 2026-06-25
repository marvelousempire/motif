---
type: source-manifest
status: active
project: Motif
agent: Housekeeper Agent
source_standard: agent-housekeeper
---

# Housekeeper Source Manifest

## Purpose

This file tells Motif where its Housekeeper Agent standard comes from.

Motif should not maintain a fully duplicated Housekeeper standard forever.

The reusable standard lives in:

```text
marvelousempire/agent-housekeeper
```

## Current Source Strategy

Motif now uses a submodule-style source strategy.

The external standard is configured in:

```text
.gitmodules
```

Submodule path:

```text
vendor/agent-housekeeper
```

Submodule URL:

```text
https://github.com/marvelousempire/agent-housekeeper.git
```

## Local Mirror

Motif still has a local folder:

```text
agents/housekeeper/
```

This local folder should become a lightweight Motif-specific pointer and override layer, not a full duplicate of the standard.

## Intended Relationship

```text
agent-housekeeper = reusable master standard
vendor/agent-housekeeper = submodule copy of master standard
agents/housekeeper = Motif-specific notes, overrides, and pointers
```

## Local Folder Should Keep

The local Motif folder should keep only:

- Source manifest
- External repo plan
- Motif-specific context
- Motif-specific links
- Motif-specific overrides when needed

## Local Folder Should Not Keep Long-Term

The local Motif folder should not permanently duplicate the full Housekeeper standard once the submodule is fully active.

## Migration Rule

Do not delete the local folder until the submodule is fully active and Motif README, repo-manifest, and feature ledger are updated.

## Housekeeper Duty

The Housekeeper Agent should check this source manifest when:

- Updating Housekeeper instructions
- Creating a new project repo
- Transforming another repo
- Updating repo-manifest
- Updating release-ledger
- Reviewing duplicated files

## Status

Submodule configuration has been started in `.gitmodules`.

The next cleanup step is to convert the local Motif Housekeeper folder into a lightweight pointer layer after confirming the submodule checkout works in a normal Git client.
