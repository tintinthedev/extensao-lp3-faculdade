# Portal da Transparência Municipal

## Entry points

- `transparencia/index.php` — main SPA entry (renders sidebar, header, dashboard container)
- `transparencia/js/dashboard.js` — dynamic card/menu generation
- `transparencia/mapa/mapa.php` — site map page
- `transparencia/competencias/competencias.php` — competencias page

## Architecture

- Vanilla PHP + HTML + JS + CSS. No framework, no build step, no tests.
- Frontend is static HTML with JS-driven dynamic content.
- Data is likely mocked/fetched client-side (see `dashboard.js`).

## Menus / sub-menus

All menus and their respective sub-menus are mapped into the `menuItems` array, that resides inside the `transparencia/js/dashboard.js` file.

### Menu Structure (menuItems array)

Each menu item object needs:

| Property | Type | Required | Description |
|----------|------|----------|-------------|
| `id` | number | yes | Unique identifier |
| `title` | string | yes | Display name in sidebar and cards |
| `icon` | string | yes | FontAwesome class (e.g., `fas fa-star`) |
| `submenus` | string[] | yes | Array of submenu names |
| `module` | string | no | Module identifier for special menus |

Example:
```javascript
{
    id: 9,
    title: "Contratos",
    icon: "fas fa-file-contract",
    submenus: ["Relação de contratos", "Fiscais de contratos", "Ordem cronológica"],
    module: "contratos"
}
```

### Creating a New Menu

1. **Add to `menuItems` array** in `transparencia/js/dashboard.js`

2. **If the menu needs custom content** (not the generic "Módulo em Desenvolvimento"):
   - Create a PHP file in the appropriate subfolder under `transparencia/`
   - Add a `case` in the `loadModule()` switch statement (line ~167)
   - Create a dedicated `load*Module()` function (e.g., `loadContratosModule`)
   - The function loads the content via iframe pointing to the PHP file:
     ```javascript
     function loadMyModule(moduleName, submenu) {
         const workspace = document.getElementById('workspace');
         workspace.innerHTML = `
             ${getBreadcrumbsHTML(moduleName, submenu)}
             <div class="module-header">
                 <h2><i class="fas fa-..."></i> Title</h2>
                 <p>Description</p>
             </div>
             <div class="module-content">
                 <iframe src="folder/file.php" style="..."></iframe>
             </div>
         `;
     }
     ```

3. **If the menu has multiple submenus with different content:**
   - Add `if` conditions inside the case in `loadModule()` to call different functions based on `submenu`

### Updating Routing (URL-based navigation)

For deep-link support, add a case in `handleRouting()` function (line ~539):

```javascript
} else if (path === 'my-page') {
    loadModule('moduleName', 'Submenu Name', false);
    setActiveMenuItemByTitle('Menu Title');
}
```

### Icon Reference

Use FontAwesome 5 free icons: https://fontawesome.com/icons
Prefix: `fas` (solid) or `far` (regular), e.g., `fas fa-handshake`

### Deleting or Modifying a Menu

- **To delete:** Remove the item from `menuItems` array
- **To modify:** Update the properties in the `menuItems` array
- **To rename submenus:** Update the `submenus` array; if it affects routing, update `handleRouting()` as well
