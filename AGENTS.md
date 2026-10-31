# Repository Guidelines

## Project Structure & Module Organization
This repository is a multi-site Docker Compose workspace.
Each top-level directory represents one deployed service or domain.
Live deployments are Cloudflare Workers under `cloudflare/`.
Legacy Docker Compose definitions remain at the top level for reference only.

### Active services (Cloudflare)
- `cloudflare/luandro.com/` — personal site (Worker static assets; `luandro.com`, `www`)
- `cloudflare/resume.luandro.com/` — resume/CV (`resume.luandro.com`)
- `cloudflare/catchall/` — wildcard Worker; redirects unknown `*.luandro.com` to `luandro.com`
- See `cloudflare/README.md` for deploy steps, DNS notes, and backup bucket.

### Decommissioned (2026-10-31)
The DigitalOcean droplet and its volume are deleted. The top-level Compose dirs
(`luandro.com/`, `resume.luandro.com/`, `diagrams.luandro.com/`, `obsidian.luandro.com/`,
`tts.luandro.com/`), `nginx-proxy.yml`, and `scripts/` are legacy reference only.
Do not deploy them. Final data archive: R2 `luandro-com-wp-backups/droplet-final-2026-10-31/`.
Contabo (`coder.luandro.com`) is managed elsewhere.

## Build, Test, and Development Commands
Run commands from the directory you are changing unless noted otherwise.

- `docker-compose -f nginx-proxy.yml up -d`: start or refresh the shared reverse proxy from the repo root.
- `docker-compose up -d`: start a site locally or on the target host from that site directory.
- `docker-compose down`: stop the current site stack.
- `docker-compose config`: validate Compose syntax and environment expansion before deploying.
- `bash scripts/update-all-images.sh`: pull newer images for already-installed services.

When a service uses `.env.example`, copy it to `.env` and fill in site-specific values before `up -d`.

## Coding Style & Naming Conventions
Keep YAML and shell changes small and readable.
Use two-space indentation in Compose files, quote only when needed,
and preserve existing key ordering where practical.
Name new service folders after the public hostname,
matching the existing pattern (`example.com/`).
Reuse established directories like `config/`, `html/`
instead of inventing new layouts.

## Testing Guidelines
There is no centralized automated test suite in this repo. Minimum validation for any change is:

- run `docker-compose config` in each modified service directory;
- start the affected stack with `docker-compose up -d`;
- verify logs or the served URL before considering the change complete.

## Commit & Pull Request Guidelines
Recent history follows Conventional Commit style:
`feat:`, `fix:`, `docs:`, `chore:`.
Keep commits scoped to one service or one infrastructure concern.
Pull requests should list affected directories, required env vars or secrets,
deployment steps, and rollback notes.
Include screenshots only for user-facing site changes; otherwise include
relevant `docker-compose config` or runtime verification details.

## Security & Configuration Tips
Do not commit filled `.env` files, credentials, or database dumps.
Treat service data directories and generated backups as runtime
state, not source code.
Prefer `.env.example` updates when documenting new configuration.
