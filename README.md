# Deodar Examples

Entry point projects for [Deodar](https://deodar.io) Projects. Blocks coming eventually.

## Starters

Starting points of Deodar Projects

### Theme

```bash
npx degit https://github.com/brockcataldi/deodar-examples/tree/main/starters/deodar-base-theme your-theme-name
```

#### Usage

After cloning the theme starter, follow these steps:

1. **Update WordPress theme header** in `style.css`:
   - Update `Theme Name`, `Theme URI`, `Text Domain`, `Author`, and `Author URI` to match your project

2. **Rename function prefix** in `functions.php`:
   - Replace all instances of `dbt` (Deodar Base Theme) with your own prefix (e.g., `my_theme_` or `abc_`)
   - This affects the function name `dbt_deodar` and should be unique to avoid conflicts

3. **Customize the configuration**:
   - Update menu names, styles, scripts, and theme supports in the `dbt_deodar` function (or your renamed function)
   - Set `production` to `true` when deploying to production

### Plugin

```bash
npx degit https://github.com/brockcataldi/deodar-examples/tree/main/starters/deodar-base-plugin your-plugin-name
```

#### Usage

After cloning the plugin starter, follow these steps:

1. **Rename the entry point file**:
   - Rename `deodar-base-plugin.php` to match your parent directory name (e.g., if your directory is `my-plugin`, rename to `my-plugin.php`)
   - This file serves as the main plugin entry point

2. **Update WordPress plugin header** in the entry point file:
   - Update `Plugin Name`, `Plugin URI`, `Description`, `Author`, `Author URI`, and `Text Domain` to match your project

3. **Rename function prefix** in the entry point file:
   - Replace all instances of `dbp` (Deodar Base Plugin) with your own prefix (e.g., `my_plugin_` or `xyz_`)
   - This affects the function name `dbp_deodar` and should be unique to avoid conflicts

4. **Customize the configuration**:
   - Update menu names, styles, scripts, and supports in the `dbp_deodar` function (or your renamed function)
   - Set `production` to `true` when deploying to production


## Learn more at [https://deodar.io](https://deodar.io)