# Instructions
This project was setup using WL Base
Following these steps will result in a functioning WordPress installation. If this is an existing project, for theme setup please refer to the theme readme.

## Requirements
* [NodeJS](https://nodejs.org)
* [Composer](https://getcomposer.org)

## Setup
* In a working WordPress installation (we suggest using [Local by Flywheel](https://localwp.com/)), replace the contents of the contents of the wp-content for the repo.
* Remove everything inside wp-content
* In the terminal, navigate to the wp-content folder
* Clone the repo directly inside the current folder by typing `git clone https://gitlab.com/escola-mobile/mobile-wp.git .`
* Navigate into your theme folder.
* Run `npm install` to install npm packages.
* Run `composer install` to install composer dependencies.
* Update the BrowserSyncPlugin configuration in `webpack.config.js` to the domain of your local installation.
  * Note that this local domain will be used by everyone contributing in the project
* Run `npm start` to begin development server.

**Your project is now ready! :)**

## Development

### The repo
* Local domain used for BrowserSync proxy is `theme.local`. Do not change this. It is used throughout the team.
* New features should be done in separated branches.
* `dev` is the branch for general development testing that runs on staging environment. **Do not merge `dev` into any other branch**.
* Note that `dev` is an unstable version.
* Merges directly to `master` **are not allowed**.
  * The process for merges is to have a branch with specific prefixes and then create a pull request for code review.
  * The used prefixes are:
    * `feature/` - for feature development
    * `fix/` - for bug fixes
    * `hotfix/` - for urgent fixes that can be merged without approves, but still need a PR for later code review
    * `plugin/` - for individual plugin installation. these don't usually need approves, but PRs are mandatory
* By default all themes and plugins are ignored in `.gitignore`. If there isn't one already, you need to add an exception for the project or theme or plugin you are adding. Ex: `!/content/themes/example-theme`

### Webpack

The theme uses Webpack as its bundler with ES6 modules for JavaScript files. It also compresses images found in src automatically, and maps images to the appropriate destination through the `@images` alias. For example, `@images/example.jpg` would be compiled to `../images/example.jpg`.

### Deployment

```bash
npm run build
```

This will run both a production and development set of webpack tasks. The enqueue hook will load the correct version of the JS file, based on whether your development/staging server's `SCRIPT_DEBUG` constant is set to `true`.

### Tailwind

Using the `tailwind.js` file, you can customize Tailwind's default styles before things get compiled. For more information on configuration, [see detailed documentation on Tailwind](https://tailwindcss.com/).

### PurgeCSS

_WP Tailwind_ uses PurgeCSS to remove unused styles from the production build. It scans your project directory for strings that match SCSS declarations. You can modify the directories to search for in the `webpack.config.js` file. **Always check your production build to make sure styles you were developing with compiled correctly.**
