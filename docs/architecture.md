# Motif Architecture

Motif uses three layers.

1. WooCommerce Core
2. Motif Translation Layer
3. Experience Layer

## WooCommerce Core

WooCommerce remains responsible for product storage, metadata, categories, tags, attributes, variations, images, reviews, status, visibility, and API behavior.

## Motif Translation Layer

Motif translates labels and meanings.

Examples:

- Product becomes Idea
- SKU becomes Idea Reference ID
- Category becomes Idea Category
- Review becomes Feedback

This layer should rely on WordPress and WooCommerce hooks, filters, and configuration.

## Experience Layer

The experience layer is what users and administrators see. It includes admin menu labels, product edit screen labels, front-end labels, button text, cart wording, related-item headings, and documentation language.

## Design Rule

Motif should be reversible. Turning Motif off should leave WooCommerce data intact.
