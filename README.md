# Mid-Hudson Misfits website

Source for the Mid-Hudson Misfits Roller Derby website. Project docs and decision records live in the [wiki](../../wiki).

## Layout

- `theme/mid-hudson-misfits/`: the WordPress block theme (see its own README for build notes)
- `.github/workflows/`: automation (below)

## Automation

| Workflow | Runs when | What it does |
| --- | --- | --- |
| Build theme | Every push and pull request that touches `theme/` | Lints PHP, validates the theme JSON, builds an installable zip and attaches it to the run as a downloadable artifact |
| Release theme | You push a tag like `v0.2.0` | Publishes a GitHub Release with the zip attached |
| Deploy to staging | Push to `main` that touches `theme/`, or run by hand | Copies the theme to the staging site over FTPS. Off until configured; see the comments at the top of the workflow file |

## Working on the theme

1. Branch from `main`, change files under `theme/mid-hudson-misfits/`, open a pull request.
2. The Build workflow checks it and produces a zip you can upload under Appearance, Themes, Add Theme, Upload Theme.
3. Merge to `main` when it looks right.

Never commit passwords, API keys or database credentials. Deploy credentials go in repository secrets.
