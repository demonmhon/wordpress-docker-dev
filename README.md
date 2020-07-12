# WordPress Docker Dev

The Stater WordPress development with Docker.

## Getting started

Create new env file, update all variables with correct values

```bash
cp .env.sample .env
```

Start Docker Compose:

```bash
docker-compose up -d
```

Stop Docker Compose:

```bash
docker-compose stop
```

Remove Stop Container:

```bash
docker-compose down
```

## File structure

Contain the mount volumes for Docker.

```
/
├── .db
├── plugins
├── theme-src
├── theme
│   ├── acf
│   ├── assets
│   ├── fonts
│   ├── img
│   ├── inc
│   ├── template-parts
│   └── templates
│       index.php
│       style.css
└── uploads
```

## WordPress Installation

After start Docker compose. Then, Open the web browser and follow the installation instruction.

When the WordPress successfully installed. The database will be created and stored locally on `/.db/data`.

## Required Plugins

The theme might not displayed properly without follow plugins:

- [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/)

## WordPress configurations

1. Login to the WordPress adminstration area.
2. Open Themes setting from the menu `Appearance > Themes`
3. Set the active theme
4. Open Plugins setting from the menu `Plugins > Installed Plugins`
5. Activate plugins

## Theme development

Open the `/theme` and `/theme-src`. Then modify the files as needed.

The `/theme-src` designed for source of assets which doesn't required on production. So, they separated from theme.

Following the [WordPress Developer Handbook](https://developer.wordpress.org/themes/basics/) for theme development. For the the theme's asset files (CSS, JavaScript), [Node.js 10.x+](https://nodejs.org/) is required.

### Plugins

Plugins should be ignored as it should be installed on installation site.

### Uploads

Uploads are also ignored by default.

### Prerequisites

- [Node.js 10.x+](https://nodejs.org/)

### Start the development

Install the required packages with npm:

```bash
npm install
```

Start the script to compile the assets and watch for the file changes:

```bash
npm start
```

Gulp will watch the file on `/theme-src` to compile to JS and CSS.


## Bundle

* [FontAwesome 5](https://fontawesome.com/)
* [Bootstrap 4](https://getbootstrap.com/)
* [Hamburgers ](https://jonsuh.com/hamburgers/)
