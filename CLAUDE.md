# CLAUDE.md

Repo-specific guidance for Claude Code. Cross-service rules live in the root `CLAUDE.md`
of the `rz-workspace` umbrella checkout.

## Never break the frontend

This package's DTOs and Enums are serialized into the API responses of **every** Laravel
service, so the blast radius of a change here is the whole system — `rz-frontend`
included.

Before renaming or removing an Enum case, changing an Enum's backing value, or changing a
DTO's property names or types → grep `rz-frontend/src` for the value. Any hit means the
change is frontend-affecting: **STOP and get an owner decision** before shipping.
Additive-only changes (a new Enum case, a new optional DTO property) are fine.

Dependent services still need `composer update rz-common` after any change here.

Full rule: root `CLAUDE.md` → "Never break the frontend".
