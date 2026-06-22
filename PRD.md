# Motif Product Requirements Document

## Product Name

Motif

## Product Type

WordPress plugin and WooCommerce semantic translation layer.

## Vision

Motif lets a WooCommerce site change its conceptual lens without changing the WooCommerce engine underneath.

The first target motif is Ideas. In this mode, WooCommerce products become ideas, product categories become idea categories, attributes become idea traits, and reviews become feedback.

## Problem

WooCommerce is mature, stable, extensible, and widely supported. It already solves many structured-object needs: metadata, categories, attributes, relationships, status, visibility, images, APIs, and admin workflows.

However, WooCommerce is presented as a product-commerce system. Many projects need the structure of WooCommerce without the product language.

## Solution

Create a semantic remapping layer that changes visible terminology and field meaning while preserving WooCommerce's database, APIs, post types, plugin ecosystem, and upgrade path.

## Core Principle

Change the motif without changing the engine.

## Main User Story

As a WordPress and WooCommerce site owner, I want to remap WooCommerce product language into another domain, such as Ideas, so users interact with a purpose-shaped system while WooCommerce continues to power the structure underneath.

## Initial Motif: Ideas

| WooCommerce Concept | Idea Motif Concept |
| --- | --- |
| Product | Idea |
| Product Name | Idea Title |
| Description | Full Idea Explanation |
| Short Description | Idea Summary |
| SKU | Idea Reference ID |
| Price | Contribution or Value |
| Inventory | Capacity or Availability |
| Category | Idea Category |
| Tag | Idea Theme |
| Attribute | Idea Trait |
| Variation | Idea Version |
| Review | Feedback |
| Cart | Collection |
| Checkout | Support, Submit, or Reserve |

## Functional Requirements

### FR-1: Admin Label Translation

Motif must support changing WooCommerce admin labels without modifying WooCommerce core.

### FR-2: Front-End Label Translation

Motif must support translating front-end WooCommerce language including buttons, product wording, cart labels, checkout labels, and related-item headings.

### FR-3: Field Mapping Registry

Motif must define a registry where each WooCommerce field can be mapped to a new semantic label.

### FR-4: Motif Profiles

Motif should support reusable profiles such as Idea, Project, Case, Initiative, Opportunity, Research, or Knowledge Record.

### FR-5: Import and Export

Motif should allow motif definitions to be exported and imported as reusable configuration files.

### FR-6: Compatibility First

Motif must avoid direct WooCommerce core edits. It should rely on WordPress hooks, filters, settings, translation overrides, and view-layer remapping.

### FR-7: Reversibility

A site owner should be able to disable Motif and return to standard WooCommerce wording without data loss.

## Non-Functional Requirements

- No direct WooCommerce core modification.
- Remain compatible with normal WooCommerce updates.
- Keep product data stored in WooCommerce-native structures.
- Avoid destructive database migrations for v0.1.
- Keep performance overhead low.
- Document every mapping clearly.

## MVP Scope

The v0.1 concept MVP should include documentation, an initial plugin stub, admin label remapping plan, front-end label remapping plan, and the Idea motif field map.

## Risks

### Third-Party Plugin Language Leakage

Some plugins may still display product-commerce terminology.

Mitigation: provide compatibility hooks and future adapter layers.

### Overloading WooCommerce Concepts

Some WooCommerce fields may not perfectly match non-commerce concepts.

Mitigation: document recommended mappings and allow flexible custom labels.

## Success Criteria

A user can install Motif, activate an Idea profile, and experience WooCommerce as an idea-management system while WooCommerce continues to operate normally underneath.

## Version

v0.1.0-concept
