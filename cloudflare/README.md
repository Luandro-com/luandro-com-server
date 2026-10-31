# Cloudflare deployments

Static sites run as Workers with static assets (Pages is now Workers).
Account: `luandro@gmail.com` (`0889ddcf4cccbccedcb5721ad4c3f992`).
Zone `luandro.com` is on Cloudflare DNS; registrar is Namecheap.

| Dir | Worker | Hosts |
|---|---|---|
| `luandro.com/` | `luandro-com-luandro` | `luandro.com`, `www.luandro.com` |
| `resume.luandro.com/` | `luandro-com-resume` | `resume.luandro.com` |
| `catchall/` | `luandro-com-catchall` | `*.luandro.com/*` (302 to `luandro.com`; `www`/`resume` pass through via service bindings) |

Deploy (from the site dir; use the `luandro` cf profile for `cf`, wrangler login is the same account):

```bash
export CLOUDFLARE_ACCOUNT_ID=0889ddcf4cccbccedcb5721ad4c3f992
cd cloudflare/luandro.com && npx wrangler deploy
```

Deploy `luandro.com/` and `resume.luandro.com/` before `catchall/` (service bindings).

DNS notes: wildcard `*.luandro.com` is a proxied `AAAA 100::`. `coder`, `*.coder`, `fotos`, `bluesky`
(Contabo `84.247.182.109`), `casaos`, `status`, `store` are DNS-only. A custom domain cannot attach while
a conflicting A/CNAME exists for that exact name; delete it first.

Backups: R2 bucket `luandro-com-wp-backups` (private). `2026-10-31/` = old WordPress sites;
`droplet-final-2026-10-31/` = final archive of the decommissioned DigitalOcean droplet.
