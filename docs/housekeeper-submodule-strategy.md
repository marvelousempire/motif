# Housekeeper Submodule Strategy

## Purpose

This document explains how Motif should use `agent-housekeeper` without permanently duplicating the full Housekeeper standard inside the Motif repo.

## Problem

Keeping the full Housekeeper folder in both repos creates duplication.

Duplication is hard to manage because the same rules, templates, system prompts, and firing order can drift apart.

## Solution

Use `agent-housekeeper` as the reusable master standard and connect it to Motif through a Git submodule strategy.

## Source Standard

```text
marvelousempire/agent-housekeeper
```

## Motif Submodule Path

```text
vendor/agent-housekeeper
```

## Gitmodules Entry

Motif includes:

```text
.gitmodules
```

with:

```text
[submodule "vendor/agent-housekeeper"]
	path = vendor/agent-housekeeper
	url = https://github.com/marvelousempire/agent-housekeeper.git
	branch = main
```

## Intended Layout

```text
motif/
├── vendor/
│   └── agent-housekeeper/       # external reusable standard
└── agents/
    └── housekeeper/             # Motif-specific pointer and overrides
```

## What Belongs In The Submodule

The submodule should hold the reusable standard:

- System prompt folder
- Firing order
- Persona
- Operating manual
- Validation rules
- Templates
- Repo transformation guide
- Feature ledger guide
- Example structures
- Standard docs

## What Belongs In Motif Local Folder

The local Motif folder should hold only:

- Source manifest
- External repo plan
- Motif-specific context
- Motif-specific override notes
- Motif-specific links

## Migration Plan

1. Keep the current local Housekeeper folder temporarily.
2. Add `.gitmodules` pointing to `agent-housekeeper`.
3. Confirm the submodule works in a normal Git client.
4. Move reusable standard maintenance to `agent-housekeeper`.
5. Reduce `motif/agents/housekeeper/` to a pointer and override layer.
6. Update README, repo-manifest, feature ledger, and release-ledger.

## Git Client Commands

A normal Git client can complete the submodule checkout with:

```bash
git submodule add -b main https://github.com/marvelousempire/agent-housekeeper.git vendor/agent-housekeeper
git submodule update --init --recursive
```

For clones:

```bash
git clone --recurse-submodules https://github.com/marvelousempire/motif.git
```

For existing clones:

```bash
git submodule update --init --recursive
```

## Housekeeper Rule

Do not edit reusable Housekeeper rules in Motif long-term.

Edit the reusable standard in `agent-housekeeper`.

Use Motif only for local overrides.
